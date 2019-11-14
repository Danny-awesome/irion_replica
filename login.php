
<?php 
require_once 'scripts/loginUser.php'; 
?>
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
       <!-- BOOTSTRAP MIN CSS  -->
       <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <!-- JQUERY 3.4.1  -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- BOOTSTRAP MIN JS  -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
     <!-- LOGO  -->
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
  
    <link rel="icon" href="images/irion-logo1.png">
    <title>Login</title>
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
            <li class="nav-item">
              <a class="nav-link"  href="howItWorks.php">How It Works</a>
            </li>    
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


    <div class="row login-card">
        <div class="col-md-4 a">
            <!-- ad -->
        </div>
        <div class="col-md-4 p-4">
           <div class="login-form">
           <form action="login.php" method="post" id="loginform">
                <div class="login-icon  d-flex justify-content-center">
                    <a href="index.html"><img src="images/irion-logo.png" alt="irion's logo"></a>
                </div>
                <?php if (count($errors) > 0) : ?>
                    <div class="alert alert-danger text-center">
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="form-group d-flex justify-content-center">
                    <input type="text" id="login-email" placeholder="TallySmith@gmail.com" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group d-flex justify-content-center ">
                    <input type="password" id="login-pwd" placeholder="Password" name="pword">
                </div>
                <div class="form-group d-flex justify-content-center ">
                    <input type="submit" id="login-btn" class="loginbtn" value="login" name="login-submit-btn" required>
                </div>
                <p class="d-flex justify-content-center">
                    <a href="forgotPassword.php" class="fg-pwd">forgot password?</a>
                </p>
            </form>
        
           </div>
           </div>
        <div class="col-md-4 b">
            <!-- ad -->
        </div>
                              
        <script src="js/script.js"></script>
</body>

</html>