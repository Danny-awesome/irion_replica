<?php
// session_start();
require_once "config/dbConnect.php";
require_once "scripts/registerUser.php";

$pword="";
$cpword="";
$errors = array();

if(isset($_POST['rp-btn'])){
    $pword = $_POST['new-pword'];
    $cpword = $_POST['cpword'];

    if (empty($pword)) {
        $errors['pword'] = "Password is required";
    }
    if ($pword !== $cpword) {
        $errors['pword'] = "Passwords do not match";
    }
    $pword = password_hash($pword, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    if(count($errors) == 0){
        $reset_query = "UPDATE users SET user_password='$pword' WHERE user_email='$email' ";
        $result = mysqli_query($conn, $reset_query);
        if ($result) {
            header('location: login.php');
            exit(0);
        }
    }
}
function resetPassword($TOKEN)
{
    global $conn;
    $query = "SELECT * FROM users WHERE token=? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $TOKEN);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $_SESSION['email'] = $user['user_email'];
    $stmt ->close();
    header('location: reset_account_pass.php');
    exit(0);
}
?>