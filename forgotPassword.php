<?php require_once "scripts/account/_send_reset_mail.php" ?>

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
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
    <body class="body">

   <!-- navbar links -->
      <?php include 'navbar.php'; ?> 

    <!-- recover password page/form  -->
    <div class="row recover-card">
      <div class="col-md-4 a">
        <!-- ad -->
      </div>
      <div class="col-md-4 retrieve-acc-form">
        <form action="forgotPassword.php" method="post" id="retrieve-acc-form">
          <div class="login-icon  d-flex justify-content-center">
            <a href="index.html"><img src="images/Irion-login.png" alt="irion's logo"></a>
          </div>
          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>
          <?php endif;?>
          <!-- <p class="recover-notice d-flex justify-content-center">
            We will send a new password to your mail and it will be used to recover your account on the next page
          </p> -->
          <div class="form-group d-flex justify-content-center">
            <input type="text" id="recover-email" placeholder="TallySmith@gmail.com" name="email">
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="submit"  id="recover-btn" class="recoverbtn" value="Recover Account" name="fp-btn">
          </div>
        </form>
      </div>
      <div class="col-md-4 b">
        <!-- ad -->
      </div>
    </body>
</html>