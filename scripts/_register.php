<?php
require_once '../config/dbConnect.php';

$errors = array();

$lastname = "";
$firstname = "";
$username = "";
$email = "";
$phone = "";
$pword = "";
$cpword = "";

if (isset($_POST['register-btn'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pword = $_POST['pword'];
    $cpword = $_POST['cpword'];

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

    // validate for duplicates
    $emailQuery = "SELECT * FROM users WHERE user_email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $emailQuery);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_count = $result->num_rows;
    $stmt->close();
    if ($user_count > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {  //if no errors
        // register user
        $pword = password_hash($pword, PASSWORD_DEFAULT); //hash_password
        $token = bin2hex(random_bytes(50)); //generate_random_token
        $verified = false;

        $insert_query = "INSERT INTO users (username, user_firstname,user_lastname,user_password, user_email, user_phone, verified, token) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param('ssssssbs', $username, $lastname, $firstname, $pword, $email, $phone, $verified, $token);

        if ($stmt->execute()) {
            // login user
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verfied'] = $verified;

            $_SESSION['message'] = "You are logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: login.php');
            exit();
        } else {
            $errors['db_error'] = "DATABASE_ERROR: failed to register";
        }
    }
}

?>