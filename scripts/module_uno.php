<?php
$conn = '';

function checkUplineIncreaseTotalGained($upline, $amount)
{
    global $conn;
    require_once 'config/dbConnect.php';
    $pre_checks = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($pre_checks);
    $stmt->bind_param('s', $user);
    $stmt->execute();
    $user_result = $stmt->get_result();
    $user_row = $user_result->fetch_assoc();
    $user_level = $user_row['user_level'];
    $user_gained = $user_row['total_gained'];
    $acct = $user_row['acct_type '];
    $new_level = 0;
    $total = $amount;
    // $updateLevel = "UPDATE users SET user_level=2, total_gained=total_gained+5";
    if($acct == 'common'){

        if($user_level == 1 and $user_gained == 0 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            
        }else if($user_level == 1 and $user_gained == 5000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            
        }else if($user_level == 1 and $user_gained == 10000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            
        }else if($user_level == 1 and $user_gained == 15000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 1 payment from your downlines. Please pay your upline to upgrade to level 2";
        }
        if($user_level == 2 and $user_gained == 10000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
        if ($update_trans_status) {
            $increase = "Total Gained increased by ".$total;
        }
        }else if($user_level == 2 and $user_gained == 20000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 2 and $user_gained == 30000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 2 and $user_gained == 40000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 2 payment from your downlines. Please pay your upline to upgrade to level 3";
        }
        if($user_level == 3 and $user_gained == 35000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 3 and $user_gained == 50000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 3 and $user_gained == 65000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 3 and $user_gained == 80000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 3 payment from your downlines. Please pay your upline to upgrade to level 4";
        }
        if($user_level == 4 and $user_gained == 75000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 4 and $user_gained == 95000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 4 and $user_gained == 115000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 4 and $user_gained == 135000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 4 payment from your downlines. Please pay your upline to upgrade to level 5";
        }
        if($user_level == 5 and $user_gained == 125000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 5 and $user_gained == 155000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 5 and $user_gained == 185000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 5 and $user_gained == 215000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 5 payment from your downlines. Please pay your upline to upgrade to level 6";
        }
        if($user_level == 6 and $user_gained == 205000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 6 and $user_gained == 245000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 6 and $user_gained == 285000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 6 and $user_gained == 325000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 6 payment from your downlines. Please pay your upline to upgrade to level 7";
        }
        if($user_level == 7 and $user_gained == 315000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 7 and $user_gained == 365000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 7 and $user_gained == 415000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 7 and $user_gained == 465000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 7 payment from your downlines. Please pay your upline to upgrade to level 8";
        }
        if($user_level == 8 and $user_gained == 455000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 8 and $user_gained == 515000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 8 and $user_gained == 575000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 8 and $user_gained == 635000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 8 payment from your downlines. Please pay your upline to upgrade to level 9";
        }
        if($user_level == 9 and $user_gained == 625000 ){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 9 and $user_gained == 695000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 9 and $user_gained == 765000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
        }else if($user_level == 9 and $user_gained == 835000){
            $total = $amount;
            $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
            $update_gained_status = mysqli_query($conn, $update_amount);
            if ($update_trans_status) {
                $increase = "Total Gained increased by ".$total;
            }
            $msg = "You've received all level 9 payment from your downlines. Restart Irion Cycle By paying Reset Fee to new upline.";
        }
    }else{
        $total = $amount;
        $update_amount = "UPDATE users SET total_gained=total_gained+'$total' WHERE username='$upline";
        $update_gained_status = mysqli_query($conn, $update_amount);
        if ($update_trans_status) {
            $increase = "Total Gained increased by ".$total;
        }
    }
}

function checkUserLevelAndDecreaseAmount($downline, $amount)
{

require_once 'config/dbConnect.php';
    $pre_checks = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($pre_checks);
    $stmt->bind_param('s', $downline);
    $stmt->execute();
    $user_result = $stmt->get_result();
    $user_row = $user_result->fetch_assoc();
    $user_level['user_level'];
    $user_gained['total_gained'];
    $new_level = 0;
    $total = $amount;

    if($user_level == 0 and $total == 5000){
        $new_level = 1;
        $update_amount = "UPDATE users SET user_level='$new_level' WHERE username='$downline'";
        $update_gained_status = mysqli_query($conn, $update_amount);
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 1 and $total == 10000){
        $new_level = 2;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 2 and $total == 15000){
        $new_level = 3;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 3 and $total == 20000){
        $new_level = 4;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 4 and $total == 30000){
        $new_level = 5;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 5 and $total == 40000){
        $new_level = 6;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 6 and $total == 50000){
        $new_level = 7;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 7 and $total == 60000){
        $new_level = 8;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 8 and $total == 70000){
        $new_level = 9;
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "You are now level".$new_level;
        }
    }else if($user_level == 9 and $total == 70000){
        $update_amount = "UPDATE users SET user_level='$new_level', total_gained=total_gained-$total WHERE username='$downline'";
        if ($update_trans_status) {
            $plusup = "Please send us a message to reset your account to restart the cycle";
        }
        
    }
}





?>