<?php
require_once "scripts/registerUser.php";
require_once "scripts/logoutUser.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($token);
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
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <?php if (isset($_SESSION['message'])) : ?>
                    <div class="alert <?php echo $_SESSION['alert-class'] ?>">
                        <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            unset($_SESSION['alert-class']);
                            ?>
                    </div>
                <?php endif; ?>

                <h3> Welcome, <?php echo $_SESSION['username']; ?> </h3>

                <?php if (!$_SESSION['verified']) : ?>
                    <div class="alert alert-warning">
                        You're Here Because Your Account
                        Is Not Yet Verified.
                        Click The Link Sent To
                        <strong> <?php echo $_SESSION['email']; ?> </strong>
                    </div>
                <?php endif; ?>

                <?php if ($_SESSION['verified']) : ?>
                    <a href="profileB.php"><button class="btn btn-block btn-lg btn-primary">You Are Verified. Continue to Dashboard</button></a>
                <?php endif; ?>
                <a href="checkVerified.php?logout=1"><button class="btn btn-block btn-lg btn-primary">Logout</button></a>

            </div>
        </div>
    </div>
</body>

</html>