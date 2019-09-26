<?php

$email = "";

if (isset($_POST['fp-btn'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
}

if(count($errors) == 0){
    $query = "SELECT * FROM users WHERE user_email = ?"
}


?>