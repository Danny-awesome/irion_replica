<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


require_once 'config/dbConnect.php';

$errors = array();
$lastname = "";
$firstname = "";
$username = "";
$email = "";
$phone = "";
$pword = "";
$npword = "";
$cnpword = "";
$acctnum = "";
$acctname = "";
$bank = "";

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
}
?>