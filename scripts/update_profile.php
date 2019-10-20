<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

$lastname = $firstname = $username = $email = $phone = $pword = $npword = $cnpword = $acctnum = $acctname = $bank = "";

//error variables
$numero_uno = $numero_dos = $numero_tres = $numero_cuatro = $numero_cinco = $numero_seis = "";
$numero_siete = $numero_ocho = $numero_nueve = $numero_diez= "";

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
    profileUpdate($lastname, $firstname, $username, $email, $phone, $pword, $npword, $cnpword, $acctname, $acctnum, $bank);
}

function profileUpdate($lastname, $firstname, $username, $email, $phone, $pword, $npword, $cnpword, $acctname, $acctnum, $bank)
{
    global $numero_uno;
    global $numero_dos;
    global $numero_tres;
    global $numero_cuatro;
    global $numero_cinco;
    global $numero_seis;
    global $numero_siete;
    global $numero_ocho;
    global $numero_nueve;
    global $numero_diez;

    //check if fields are empty
    //check if fields are empty


}

?>