<?php

$_SESSION['you_are_blocked'] = '';
$user = $_SESSION['username'];

$checkDueDate = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($checkDueDate);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

$block_status = true;
$level=0;
$total_gained=0;
$block_count = 1;
$downline = 0;
$tt1 = 'debit';
$tt2 = 'credit';
$currentDateTime = date('Y-m-d H:i:s');
$currentLevel = $user['user_level'];

$due_date = $user['payment_due_date'];
$alert_class = '';

if ($due_date == $currentDateTime) {
    $alert_class = 'alert-danger';
    $_SESSION['you_are_blocked'] = "Level '.$currentLevel.' Upgrade Payment Date Is Due. Your Account Will Now Be Blocked.";
    sleep(5);
    $block_user = "UPDATE users SET block_status='$block_status', user_level='$level', total_gained='$total_gained', count_block_times=count_block_times+'$block_count', user_downline='$downline' WHERE username='$user'";
    $setStatus = mysqli_query($conn, $block_user);
    if ($setStatus) {
        $PLATFORM = 'Kevin_';
        
        $routeDownlines = "UPDATE irion_downlines SET user='$PLATFORM' WHERE user='$upline' ";
        $route_ = mysqli_query($conn, $routeDownlines);
        if ($route_) {
            $routeUpline = "UPDATE irion_uplines SET upline ='$PLATFORM' WHERE upline='$upline' ";
            $route_ = mysqli_query($conn, $routeUpline);
            if ($route_) {
                $deleteTransactions = "DELETE FROM transactions_info_all WHERE user='$user' AND trans_type IN('$tt1','$tt2')";
                
                session_destroy();
                unset($_SESSION['id']);
                unset($_SESSION['username']);
                unset($_SESSION['email']);
                unset($_SESSION['verified']);
                header('location: login.php');
                exit();
            }
        }      
    }
}

// TEST STATEMENT

// $currentDateTime = date('Y-m-d H');
// $dateNow = date('Y-m-d H');
// if($currentDateTime == $dateNow){
//     $alert_class = 'alert-danger';
//     $_SESSION['you_are_blocked'] = 'Hello';
// }
