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
    <script src="js/script.js"></script>
       <!-- BOOTSTRAP MIN CSS  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Forgot Password</title>
  </head>
    <body class="body">
<!-- navbar links -->
<nav class="navbar navbar-expand-md irionNavBar fixed-top navbar-default navbar-custom">
        <a class="navbar-brand" href="index.php"><img class="irion-logo" src="images/irion-logo1.png" alt="irion logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon">
          <div class="burger-container">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          </span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
          <ul class="navbar-nav nav-links">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php"> About Irion</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link"  href="howItWorks.php">How It Works</a>
            </li>     -->
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>   
            <div class="dropdown">
              <a class="dropbtn">My Account
                <i class="fa fa-caret-down"></i>
              </a>
              <div class="dropdown-content">
                <a href="login.php">LOGIN</a>
                <a href="signup.php">SIGN UP</a>
              </div>
            </div>
          </ul>
        </div>  
      </nav>


    <!-- recover password page/form  -->
    <div class="row recover-card">
      <div class="col-md-4 a">
        <!-- ad -->
      </div>
      <div class="col-md-4 m-5">
        <div class="retrieve-acc-form">
          <form action="forgotPassword.php" method="post" id="retrieve-acc-form">
            <div class="login-icon  d-flex justify-content-center">
              <a href="index.html"><img src="images/Irion-logo1.png" alt="irion's logo"></a>
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
              <input type="text" id="recover-email" placeholder="Enter Your Mail" name="email">
            </div>
            <div class="form-group d-flex justify-content-center ">
              <input type="submit"  id="recover-btn" class="recoverbtn" value="Recover Account" name="fp-btn">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4 b">
        <!-- ad -->
      </div>
    </body>
</html>