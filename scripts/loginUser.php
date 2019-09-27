<?php
session_start();

require_once 'config/dbConnect.php';

$errors = array();
$email = "";
$pword = "";

if (isset($_POST['login-submit-btn'])) {
    $email = $_POST['email'];
    $pword = $_POST['pword'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
    if (empty($pword)) {
        $errors['pword'] = "Password is required";
    }

    $emailCheckQuery = "SELECT * FROM users WHERE user_email=? LIMIT 1";
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_count = $result->num_rows;
    if ($user_count === 0) {
        $errors['login-error'] = "Incorrect Login Details";
    }
    if(password_verify($pword , $user['user_password'])){
        $_SESSION['id'] = $user['user_id'];
        $_SESSION['username'] = $user['user_username'];
        $_SESSION['email'] = $user['user_email'];
        $_SESSION['verified'] = $user['verified'];
        if ($_SESSION['verified'] === 1) {
            header('location: userDashboard.php');
        } else {
            $_SESSION['message'] = "Success,Logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: checkVerified.php');
        }
        exit();
    }else{
        $errors['login-error'] = "Incorrect Login Details!";
    }
}
