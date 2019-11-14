
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This content provides you the ability to grow your money safely online by referral">
    <meta name="keywords"  content="online,money,finance,growth">
    <meta name="author" content="Irion global"> 
    <script src="js/script.js"></script>
    <!-- BOOTSTRAP MIN CSS  -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <!-- JQUERY 3.4.1  -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- BOOTSTRAP MIN JS  -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <!-- LOGO  -->
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactus.css">
    <title>Contact Us</title>
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
<!-- CONTACT US FORM  -->
      <div class="row message-us-form">
        <div class="col-md-4 offset-md-4 pl-5 pr-5">
          <div class="contact-form message-us">
            <h4>Leave us a message</h4>
            <form  id="send-message">
              <div class="form-group">
                <input type="text" class="form-control" id="msg-email" placeholder="EMAIL"  >
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="msg-pwd" placeholder="PASSWORD">
              </div>
              <div class="form-group">
                  <textarea class="form-control" rows="5" id="comment" placeholder="LEAVE US A MESSAGE"></textarea>
              </div>
              <input type="button" class="btn btn-primary submit-message" value="SEND MESSAGE">
            </form>
            </div>
        </div>
    </div>
</div>
        </body>
    </html>