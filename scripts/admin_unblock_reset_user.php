<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

$user = '';
$done = '';

// UNBLOCK USER'S ACCOUNT
if(isset($_POST['unblock'])){
    $user = $_POST['subscriber'];
    $unblock_user = "UPDATE users SET block_status=0 WHERE username='$user'";
    if(mysqli_query($conn, $unblock_user)){
        $done = 'User has been unblocked.';
    }
}

// RESET USER AT LEVEL 9
$tt1 = 'debit';
$tt2 = 'credit';
$block_status = false;
$level=1;
$total_gained=0;
$block_count = 0;
$downline = 0;  
$due = '0000-00-00 00:00:00';
if(isset($_POST['reset'])){
    $user = $_POST['subscriber'];
    $delete_user_transactions = "DELETE FROM transactions_info_all WHERE user='$user' AND trans_type IN('$tt1','$tt2')";
    if(mysqli_query($conn, $delete_user_transactions)){
        $reset_user_details = "UPDATE users SET block_status='$block_status', user_level='$level', total_gained='$total_gained', count_block_times='$block_count', user_downline='$downline', payment_due_date='$due' WHERE username='$user'";
        if(mysqli_query($conn, $reset_user_details)){
            $done = 'User account has been reset back to level 1';
        }
    }
}

?>