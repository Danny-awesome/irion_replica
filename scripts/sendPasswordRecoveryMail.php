<?php

require_once 'config/dbConnect.php';
require_once 'scripts/emailController.php';
$email = "";
$errors = array();

if (isset($_POST['fp-btn'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
    
    $emailCheckQuery = "SELECT * FROM users WHERE user_email=? LIMIT 1";
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_count = $result->num_rows;
    $stmt->close();
    
    if ($user_count == 0) {
        $errors['email'] = "We noticed this email isn't registered with us.";
    }
    
    if(count($errors) == 0){
        $query = "SELECT * FROM users WHERE user_email=? LIMIT 1";
        $stmt = $conn->prepare($emailCheckQuery);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $TOKEN  = $user['token'];
        sendPasswordResetLink($email, $TOKEN);
        header('location: passwordResetMessage.php');
        exit();
    }
}
function resetPassword($TOKEN){
    global $conn;
    $query = "SELECT * FROM users WHERE token=? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $TOKEN);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $_SESSION['email'] = $user['email'];
    header('location: resetPassword.php');
    exit(0);
}
    
?>