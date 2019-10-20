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
    // $pword = $_POST['pword'];
    // $npword = $_POST['npword'];
    // $cnpword = $_POST['cnpword'];
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
        $numero_tres = "username can't be empty";
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
        $numero_seis = "account name can't be empty";
    }
    if (empty($acctnum)) {
        $numero_siete = "account number can't be empty";
    }
    if (empty($bank)) {
        $numero_ocho = "please select a bank";
    }

    $emailCheckQuery = "SELECT * FROM users WHERE user_id=? AND not(user_email=? OR username=? OR user_acctnum=?)LIMIT 1";
    $uid = $_SESSION['id'];
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param('isss', $uid, $email, $username, $acctnum);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_count = $result->num_rows;
    if ($username == $user['username']) {
        $numero_tres = "username already taken";
    }elseif ($email == $user['user_email']) {
        $numero_cuatro = "email already taken";
    }elseif ($acctnum == $user['user_acctnum']) {
        $numero_siete = "account number already in use";
    }
    $errors = array($numero_uno, $numero_dos, $numero_tres, $numero_cuatro, $numero_cinco, $numero_seis, $numero_siete, $numero_ocho);
    if (empty($numero_uno) && empty($numero_dos) && empty($numero_tres) && empty($numero_cuatro) && empty($numero_cinco) 
        && empty($numero_seis) && empty($numero_siete) && empty($numero_ocho)) {
        $updateCompleteProfile = "UPDATE users SET user_lastname='$lastname', user_firstname='$firstname', username='$username', 
                user_email='$email', user_phone='$phone', user_acctname='$acctname', user_acctnum='$acctnum', user_bank='$bank', 
                user_level=0, user_acctstatus='active', user_downline=0 WHERE user_id='$uid' ";
        $result = mysqli_query($conn, $updateCompleteProfile);
        if ($result){    
            $profileUpdated = 'Profile was successfully updated';
            // header('location: userProfile.php');
            // exit(0);
        }
    }
}

?>