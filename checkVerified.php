<?php
require_once "scripts/registerUser.php";
require_once 'scripts/account/_reset_account_pass.php';
require_once "scripts/account/_send_reset_mail.php";
require_once "scripts/logoutUser.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Are you Verified?</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This content provides you the ability to grow your money safely online by referal">
    <meta name="keywords"  content="online,money,finance,growth">
    <meta name="author" content="Irion global"> 
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/check.css">
    <link rel="icon" href="images/irion-logo1.png">
       <!-- BOOTSTRAP MIN CSS  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  <link rel="icon" href="images/irion-logo1.png">
    <title>Are You Verified?</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2 mt-5 form-div login">
                <?php if (isset($_SESSION['message'])) : ?>
                        <div class="alert <?php echo $_SESSION['alert-class'] ?>">
                            <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                unset($_SESSION['alert-class']);
                                ?>
                        </div>
                    <?php endif; ?>
                <h3 class="mt-5"> Welcome,  <?php echo $_SESSION['username']; ?></h3>
                <?php if (!$_SESSION['verified']) : ?>
                    <div class="alert alert-warning">
                        You're Here Because Your Account
                        Is Not Yet Verified.
                        Click The Link Sent To
                        <strong> <?php echo $_SESSION['email']; ?> </strong>
                    </div>
                <?php endif; ?>

                <?php if ($_SESSION['verified']) : ?>
                    <a href="userDashboard.php"><button class="verified-btn">You Are Verified. Continue to Dashboard</button></a>
                    <a href="checkVerified.php?logout=1"><button class="v-logout">Logout</button></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>