<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'config/dbConnect.php';

$errors = array();
$name = "";
$pword = "";

if (isset($_POST['login-submit-btn'])) {
    $name = $_POST['name'];
    $pword = $_POST['pword'];

    if (empty($name)) {
        $errors['name'] = "name is required";
    }
    if (empty($pword)) {
        $errors['pword'] = "Password is required";
    }

    $nameCheckQuery = "SELECT * FROM super_user WHERE admin=? LIMIT 1";
    $stmt = $conn->prepare($nameCheckQuery);
    $stmt->bind_param('s', $name);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();
    $user_count = $result->num_rows;
    if ($user_count === 0) {
        $errors['login-error'] = "Incorrect Login Details";
    }
    if (password_verify($pword, $admin['admin_password'])) {
        $_SESSION["loggedin"] = true;
        $_SESSION['admin_id'] = $admin['admin_id'];
        $_SESSION['admin_name'] = $admin['admin'];
        header('location: adminDashboard.php');     
        exit();
    } else {
        $errors['login-error'] = "Incorrect Login Details!";
    }
}
