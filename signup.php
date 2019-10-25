<?php require_once 'scripts/registerUser.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This content provides you the ability to grow your money safely online by referal">
    <meta name="keywords"  content="online,money,finance,growth">
    <meta name="author" content="Irion global"> 
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/irion-logo1.png">
  </head>
  <body>
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

    <div class="row signup-card">
      <div class="col-md-4 a">
          <!-- ad -->
      </div>
      <div class="col-md-4 p-4">
        <div class="signup-form">
        <form action="signup.php" method="post" >
          <div class="signup-icon  d-flex justify-content-center">
            <a href="index.php"><img src="images/irion-logo.png" alt="irion's logo"></a>
          </div>
          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger text-center">
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>
          <?php endif;?>
          <div class="form-group d-flex justify-content-center ">
            <input type="text"  id="signup-surname" name="lastname" value="<?php echo $lastname?>" placeholder="Surname" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="text"  id="signup-firstName" name="firstname" value="<?php echo $firstname?>" placeholder="FirstName" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="text"  id="signup-username" name="username" value="<?php echo $username?>" placeholder="Username" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="email"  id="signup-email" name="email" value="<?php echo $email?>" placeholder="email" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="text"  id="signup-email" name="referrer" value="<?php echo $referrer?>" placeholder="referrer" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="password"  id="signup-pwd" name="pword" placeholder="Password" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="password"  id="signup-re-pwd" name="cpword" placeholder="Retype password">
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="text"  id="signup-telNo" name="phone" value="<?php echo $phone?>" placeholder="Phone Number">
          </div>
          <div class="d-flex justify-content-center">
            <input type="submit" class="sign-up-btn" name="register-btn" value="sign up">
          </div>
        </form>
     
        </div>  
       </div>
      <div class="col-md-4 b">
        <!-- ad -->
      </div>
    </div>
  </div>
</body>
</html>
