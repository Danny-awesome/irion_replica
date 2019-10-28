<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';


if(isset($_POST['verify_payment'])){
    $downline = $_POST['downline'];
    $user = $_SESSION['username'];
    $trans_date = $_POST['trans_date'];
    $trans_proof = $_POST['trans_proof'];
    
    $confirm_trans = 1;
    
    $query = "UPDATE transactions_info_all SET trans_confirmed='$confirm_trans' WHERE  user='$user' AND trans_date = '$trans_date' AND proof_destination='$trans_proof'";
    $update_trans_status = mysqli_query($conn, $query);
    if ($update_trans_status){  
        $query2 = "UPDATE transactions_info_all SET trans_confirmed='$confirm_trans' WHERE  user='$downline' AND trans_date = '$trans_date'  AND proof_destination='$trans_proof'";
        $update_trans_status = mysqli_query($conn, $query2);
        if ($update_trans_status) {
            $updateStatus = 'Payment verified';
            $alert_class = "alert-success";
        }else{
            $updateStatus = 'Payment verification failed';
            $alert_class = "alert-danger";
        }
        
    }
    
}









?>