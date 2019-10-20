<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

$errors = array();
$profileUpdated='';

$lastname = $firstname = $username = $email = $phone = $pword = $npword = $cnpword = $acctnum = $acctname = $bank = "";

//error variables
$numero_uno = $numero_dos = $numero_tres = $numero_cuatro = $numero_cinco = $numero_seis = "";
$numero_siete = $numero_ocho = $numero_nueve = $numero_diez = $numero_once = "";

if (isset($_POST['update_profile_btn'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pword = $_POST['pword'];
    $npword = $_POST['npword'];
    $cnpword = $_POST['cnpword'];
    $acctname = $_POST['acctname'];
    $acctnum = $_POST['acctnum'];
    $bank = $_POST['bank'];
    if(empty($lastname)){
        $numero_uno = "lastname can't be empty";
    }
    if(empty($firstname)){
        $numero_dos = "firstname can't be empty";
    }
    if(empty($username)){
        $numero_tres = "firstname can't be empty";
    }
    if(empty($email)){
        $numero_cuatro = "email can't be empty";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $numero_cuatro = "email is invalid";
    }
    if(empty($phone)){
        $numero_cinco = "phone can't be empty";
    }
    if (empty($acctname)) {
        $numero_ocho = "account name can't be empty";
    }
    if (empty($acctnum)) {
        $numero_nueve = "account number can't be empty";
    }
    if (empty($bank)) {
        $numero_diez = "please select a bank";
    }

    //check if acct_no exists
    $emailCheckQuery = "SELECT * FROM users WHERE user_id=? AND not( user_email=? OR username=? OR user_acctnum=?) LIMIT 1";
    $uid = $_SESSION['id'];
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param('isss', $uid, $email, $username, $acctnum);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_count = $result->num_rows;
    if ($user_count > 0) {
        $numero_tres = "email already taken";
        $numero_once = "username already taken";
        $numero_nueve = "account number already in use";
    }
    
    $errors = array
    (
        $numero_uno, $numero_dos, $numero_tres, $numero_cuatro, $numero_cinco, $numero_seis, $numero_siete, $numero_ocho,
        $numero_nueve, $numero_diez, $numero_once
    );
    if (count($errors) == 0) {
        $updateCompleteProfile = "UPDATE users SET user_lastname='$lastname', user_firstname='$firstname', username='$username', 
                user_email='$email', user_phone='$phone', user_acctname='$acctname', user_acctnum='$acctnum', user_bank=$bank, 
                user_level=0, user_acctstatus='active' user_downline=0 WHERE user_id='$uid' ";
        $result = mysqli_query($conn, $reset_query);
        if ($result) {
            $profileUpdated = 'Profile was successfully updated';
        }
    }
}


// if (!empty($pword) && (empty($npword))) {
//     $numero_seis = "enter new password";
// }elseif (!empty($pword) && (empty($cnpword))) {
//     $numero_siete = "enter new password";
// }
// if (!empty($npword) && empty($pword)) {
//     $numero_cinco = "enter old password";   
// }elseif ($cnpword != $npword) {
//     $numero_siete = "passwords do not match";
// }
// if (password_verify($pword, $user['user_password'])) {
//     $npword = password_hash($npword, PASSWORD_DEFAULT); 
// }else{
//     $numero_cinco = "old password is incorrect";
// }

?>