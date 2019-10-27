<?
require_once "../../config/dbConnect.php";

if(isset($POST['load_proof_btn'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileName = $_FILES['file']['name'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strlower(end($file));

}










?>