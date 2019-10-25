<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';
require_once 'emailController.php';

$errors = array();
$lastname = "";
$firstname = "";
$username = "";
$email = "";
$phone = "";
$pword = "";
$cpword = "";
$verified = "";
$referrer = '';

if (isset($_POST['register-btn'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $referrer = $_POST['referrer'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pword = $_POST['pword'];
    $cpword = $_POST['cpword'];
    $currentDateTime = date('Y-m-d H:i:s');
    // validate for empty fields
    if (empty($lastname)) {
        $errors['lastname'] = "Lastname is required";
    }
    if (empty($firstname)) {
        $errors['firstname'] = "Firstname is required";
    }
    if (empty($username)) {
        $errors['username'] = "Username is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
    if (empty($pword)) {
        $errors['pword'] = "Password is required";
    }
    if ($pword !== $cpword) {
        $errors['pword'] = "Passwords do not match";
    }
    if (empty($phone)) {
        $errors['phone'] = "Phone is required";
    }

    $emailCheckQuery = "SELECT * FROM users WHERE user_email=? LIMIT 1";
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_count = $result->num_rows;
    $stmt->close();
    if ($user_count > 0) {
        $errors['email'] = "Email already exists";
    }
    $usernameCheckQuery = "SELECT * FROM users WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameCheckQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_count = $result->num_rows;
    $stmt->close();
    if ($user_count > 0) {
        $errors['username'] = "Username already taken";
    }
    $ref_flag = 0;
    if (!empty($referrer)) {
        $referrerCheck = "SELECT * FROM users WHERE username=? LIMIT 1";
        $stmt = $conn->prepare($referrerCheck);
        $stmt->bind_param('s', $referrer);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_count = $result->num_rows;
        $stmt->close();
        if ($user_count > 0) {
            $ref_flag = 1;
        }else{
            $errors['referrer'] = "Referrer username wasn't found on our database";
        }
    }
    if (count($errors) === 0) {
        $pword = password_hash($pword, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;
        if($ref_flag == 1){
            $type = 'common';
            $count_referrer_downline_no = "SELECT * FROM users WHERE username = ? AND acct_type=?";
            $stmt = $conn->prepare($count_referrer_downline_no);
            $stmt->bind_param('ss', $referrer, $type);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $user_count = $result->num_rows;
            $stmt->close();
            if($user['user_downline'] == 4){
                $errors['downline_excess'] = "This user can't take anymore downlines";
            }else{                  
                $insert_downline = "INSERT INTO irion_downlines(user, downline, added_date) VALUES(?,?,?)";
                $stmt = $conn->prepare($insert_downline);
                $stmt->bind_param('sss', $referrer, $username, $currentDateTime);
                $stmt->execute();
                
                $insert_upline = "INSERT INTO irion_uplines(user, upline, added_date) VALUES(?,?,?)";
                $stmt = $conn->prepare($insert_upline);
                $stmt->bind_param('sss', $username, $referrer, $currentDateTime);
                $stmt->execute();
                
                $update_upline = "UPDATE users SET user_downline= user_downline+1 WHERE username = '$referrer' ";
                $confirm = mysqli_query($conn, $update_upline);
                if($confirm){
                    $insert_query = "INSERT INTO users (username, user_firstname,user_lastname,user_password, user_email, user_phone, verified, token, registered_date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($insert_query);
                    $stmt->bind_param('ssssssbss', $username, $firstname, $lastname, $pword, $email, $phone, $verified, $token, $currentDateTime);
            
                    if ($stmt->execute()) {
                        
                        $user_id = $conn->insert_id;
                        $_SESSION['id'] = $user_id;
                        $_SESSION['username'] = $username;
                        $_SESSION['email'] = $email;
                        $_SESSION['verified'] = $verified;
            
                        sendVerificationMail($email, $token);
            
                        $_SESSION['message'] = "Success. Logged in!";
                        $_SESSION['alert-class'] = "alert-success";
                        header('location: checkVerified.php');
                        exit();
                    } else {
                        $errors['db_error'] = "DATABASE_ERROR: something went wrong. failed to register";
                    }
                }
            }
        }else{
            $PLATFORM = 'Irion';
            $insert_downline = "INSERT INTO irion_downlines(user, downline, added_date) VALUES(?,?,?)";
            $stmt = $conn->prepare($insert_downline);
            $stmt->bind_param('sss', $PLATFORM, $username, $currentDateTime);
            $stmt->execute();
            
            $insert_upline = "INSERT INTO irion_uplines(user, upline, added_date) VALUES(?,?,?)";
            $stmt = $conn->prepare($insert_upline);
            $stmt->bind_param('sss', $username, $PLATFORM, $currentDateTime);
            $stmt->execute();
            
            $update_upline = "UPDATE users SET user_downline= user_downline+1 WHERE username='$PLATFORM' ";
            $confirm = mysqli_query($conn, $update_upline);
            if($confirm){
                $insert_query = "INSERT INTO users (username, user_firstname,user_lastname,user_password, user_email, user_phone, verified, token, registered_date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($insert_query);
                $stmt->bind_param('ssssssbss', $username, $firstname, $lastname, $pword, $email, $phone, $verified, $token, $currentDateTime);
        
                if ($stmt->execute()) {
                    $user_id = $conn->insert_id;
                    $_SESSION['id'] = $user_id;
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['verified'] = $verified;
                    $_SESSION["loggedin"] = true;
        
                    sendVerificationMail($email, $token);
        
                    $_SESSION['message'] = "Success. Logged in!";
                    $_SESSION['alert-class'] = "alert-success";
                    header('location: checkVerified.php');
                    exit();
                } else {
                    $errors['db_error'] = "DATABASE_ERROR: something went wrong. failed to register";
                }
            }
        }
    }
}

function verifyUser($token)
{
    global $conn;
    $query = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $update_user_verified_status = "UPDATE users SET verified=1 WHERE token='$token'";
        if (mysqli_query($conn, $update_user_verified_status)) {
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['user_email'];
            $_SESSION['verified'] = 1;

            $_SESSION['message'] = "Hey, We are happy to tell you that your email has been successfully verified!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: checkVerified.php');
            exit();
        }
    }
}
 