<?php

$user = $_SESSION['username'];

$getUser = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($getUser);
$stmt->bind_param('s', $user);
$stmt->execute();
$result = $stmt->get_result();
$details = $result->fetch_assoc();
$stmt->close();

$user_level = $details['user_level'];

$levelInText = $msg_one = $msg_two = $msg_three = '';


if($user_level == 1){
    $levelInText = 'ONE';
    $msg_one = 'Register with a valid email.';
    $msg_two = 'Pay the sum of 5000 naira to buy a slot on the site. ';
    $msg_three = 'Refer 4 people to register and set up their account and receive 20000naira.';
}elseif ($user_level == 2) {
    $levelInText = 'TWO';
    $msg_one = 'Pay the sum of 10000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 40000 naira.';
    $msg_three = '';
}elseif ($user_level == 3) {
    $levelInText = 'THREE';
    $msg_one = 'Pay the sum of 15000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 60000 naira.';
    $msg_three = '';
}elseif ($user_level == 4) {
    $levelInText = 'FOUR';
    $msg_one = 'Pay the sum of 20000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 80000 naira.';
    $msg_three = '';
}elseif ($user_level == 5) {
    $levelInText = 'FIVE';
    $msg_one = 'Pay the sum of 30000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 120000 naira.';
    $msg_three = '';
}elseif ($user_level == 6) {
    $levelInText = 'SIX';
    $msg_one = 'Pay the sum of 40000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 160000 naira.';
    $msg_three = '';
}elseif ($user_level == 7) {
    $levelInText = 'SEVEN';
    $msg_one = 'Pay the sum of 60000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 200000 naira.';
    $msg_three = '';
}elseif ($user_level == 8) {
    $levelInText = 'EIGHT';
    $msg_one = 'Pay the sum of 70000 naira to buy a higher slot on the site.';
    $msg_two = 'Wait for payment and receive 280000 naira.';
    $msg_three = '';
}elseif ($user_level == 9) {
    $levelInText = 'NINE';
    $msg_one = 'Pay the sum of 70000 naira to RENEW  slot on the site.';
    $msg_two = 'Wait for payment and renewal.';
    $msg_three = '';
}












?>