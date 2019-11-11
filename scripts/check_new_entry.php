<?php

$_SESSION['notactivemsg'] = '';

$email = $_SESSION['email'];
$checkActiveUser = "SELECT * FROM users WHERE user_email=?";
$stmt = $conn->prepare($checkActiveUser);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt ->close();

$status = $user['user_acctstatus'];
if ($status === "not-active") {
    header('location: userProfile.php');
    $_SESSION['notactivemsg'] = 'Hey We noticed you are a first-timer here. It is compulsory to complete your profile first. Thanks';
}else {
    $_SESSION['notactivemsg'] = '';
}


?>