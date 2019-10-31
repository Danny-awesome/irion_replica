<?
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once "config/dbConnect.php";
require_once "scripts/emailController.php";

$Image = '';
$proofImage = '';

$user = '';
$upline = '';
$trans_type = 'debit';
$trans_date = date('Y/m/d');
$amount_paid = '5000';
$target_destination = '';
$trans_confirmed = 0;

if(isset($_POST['upload_proof'])){
    $upline = $_POST['upline'];
    $user = $_SESSION['username'];
    $Image = $_FILES['load_proof']['name'];

if(!empty($upline)){
    if($Image ==''){
        $image_upload_msg = "No image selected";
        $alert_class = "alert-danger";
    }else{
        $allowTypes = array('jpg','png','jpeg');
        if(!in_array($fileType, $allowTypes)){
            $proofImage = time().'_'.$Image;
            $target_destination = 'uploads/proofimages/'.$proofImage;

            if(move_uploaded_file($_FILES['load_proof']['tmp_name'], $target_destination)){
                $image_upload_msg = "Image Uploaded";
                $alert_class = "alert-success";

                $insert_my_trans_info = "INSERT INTO transactions_info_all (user, trans_type, made_trans_with, trans_date, amount, proof_destination, trans_confirmed) VALUES ('$user', '$trans_type', '$upline', '$trans_date', '$amount_paid', '$target_destination', '$trans_confirmed')";

                if(mysqli_query($conn, $insert_my_trans_info)){
                    $trans_type = 'credit';
                    $insert_upline_trans_info = "INSERT INTO transactions_info_all (user, trans_type, made_trans_with, trans_date, amount, proof_destination, trans_confirmed) VALUES ('$upline', '$trans_type', '$user', '$trans_date', '$amount_paid', '$target_destination', '$trans_confirmed')";

                    if(mysqli_query($conn, $insert_upline_trans_info)){
                        $proof_upload_msg = "Proof of payment sent to upline";
                        $alert_class = "alert-success";
                        $call_upline = "Call your upline to verify this payment.";
                        $alert_info_class = "alert-info";
                    }else{
                        $proof_upload_msg = "Proof Failed to send";
                        $alert_class = "alert-danger";
                    }
                }
            }else{
                $image_upload_msg = "Image Failed to upload.";
                $alert_class = "alert-danger";
            }
        }else {
            $image_upload_msg = "Invalid image type.";
            $alert_class = "alert-danger";
        }
    }
}else{

}
}










?>
