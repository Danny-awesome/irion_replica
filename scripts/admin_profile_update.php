<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

$errors = array();
$profileUpdated='';

$admin_name = "";

//error variable
$numero_uno = "";

$admin_id = $_SESSION['admin_id'];

if (isset($_POST['update_profile_btn'])) {
    $admin_name = $_POST['admin_name'];
    if(empty($admin_name)){
        $numero_uno = "name can't be empty";
    }
    
    $adminCheckQuery = "SELECT * FROM super_user WHERE admin_id=? LIMIT 1";  
    $stmt = $conn->prepare($adminCheckQuery);
    $stmt->bind_param('i', $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();
    $admin_count = $result->num_rows;
    $stmt ->close();
    if ($admin_name == $admin['admin']) {
        $numero_uno = "name already taken";
    }
    
    if (empty($numero_uno)) {
        $updateCompleteProfile = "UPDATE super_user SET admin='$admin_name' WHERE admin_id='$admin_id' ";
        $profile_check_update = mysqli_query($conn, $updateCompleteProfile);
        
        if ($profile_check_update){    
            $profileUpdated = 'Profile was successfully updated';
        }
    }
}

$numero_nueve = $numero_diez = $numero_once = "";
$pword = $npword = $cnpword = "";
if(isset($_POST['security_reset_btn'])){
    $pword = $_POST['pword'];
    $npword = $_POST['npword'];
    $cnpword = $_POST['cnpword'];

    if(empty($pword)){
        $numero_nueve = "please fill out this field";
    }
    if (empty($npword)) {
        $numero_diez = "please fill out this field";
    }
    if (empty($cnpword)) {
        $numero_once = "please fill out this field";
    }
    if($cnpword != $npword){
        $numero_once = "passwords do not match";
    }

    $security_check = "SELECT * FROM super_user WHERE admin_id=?";
    $stmt = $conn->prepare($security_check);
    $stmt->bind_param('i', $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_count = $result->num_rows;
    $stmt ->close();
    $pass = $user['admin_password'];

    if(!password_verify($pword, $pass)){
        $numero_nueve = "old password isn't valid";
    }
    if (empty($numero_nueve) && empty($numero_diez) && empty($numero_once) ){
        $npword = password_hash($npword, PASSWORD_DEFAULT); 
        $passwordupdate = "UPDATE super_user SET admin_password='$npword' WHERE admin_id='$admin_id' ";
        $security_check_result = mysqli_query($conn, $passwordupdate);
        
        if ($security_check_result){    
            $update_confirmed = 'Password reset successfull';
        }
    }
}

?>