<?php require_once 'scripts/loginUser.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This content provides you the ability to grow your money safely online by referal">
    <meta name="keywords" content="online,money,finance,growth">
    <meta name="author" content="Irion global">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">

    <!-- navbar links -->
    <?php include 'navbar.php';?>


    <div class="row login-card">
        <div class="col-md-4 a">
            <!-- ad -->
        </div>
        <div class="col-md-4 login-form">
            <form action="login.php" method="post" id="loginform">
                <div class="login-icon  d-flex justify-content-center">
                    <a href="index.html"><img src="images/Irion-login.png" alt="irion's logo"></a>
                </div>
                <?php if (count($errors) > 0) : ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="form-group d-flex justify-content-center">
                    <input type="text" id="login-email" placeholder="TallySmith@gmail.com" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group d-flex justify-content-center ">
                    <input type="password" id="login-pwd" placeholder="Password" name="pword" value="<?php echo $pword ?>">
                </div>
                <div class="form-group d-flex justify-content-center ">
                    <input type="submit" id="login-btn" class="loginbtn" value="login" name="login-submit-btn" required>
                </div>
                <p class="d-flex justify-content-center">
                    <a href="forgotPassword.php" class="fg-pwd">forgot password?</a>
                </p>
            </form>
        </div>
        <div class="col-md-4 b">
            <!-- ad -->
        </div>
        <script src="js/script.js"></script>
</body>

</html>