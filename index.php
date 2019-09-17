<html>
    <head>
        <!-- icon log on task bar -->
        <link rel="icon" type="images/icon" href="images/irion-logo.png" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Irion</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/script.js"></script>
    </head>
  <body>
    <header class="container-fluid">
      <ul class="cb-slideshow">
        <!-- slideshow captions -->
        <li><span>Image 01</span><div><h3>WELCOME TO IRION</h3></div></li>
        <li><span>Image 02</span><div><h3>CYCLIC GROWTH SYSTEM</h3></div></li>
        <li><span>Image 03</span><div><h3>GREAT PLANS COMING YOUR WAY!</h3></div></li>
        <li><span>Image 04</span><div><h3>GROWTH IS BY REFERAL</h3></div></li>
        <li><span>Image 05</span><div><h3>TELL SOMEONE TODAY</h3></div></li>
        <li><span>Image 06</span><div><h3>REFER TO EARN</h3></div></li>
    </ul>

  <!-- navbar links -->
    <nav class="navbar navbar-expand-md irionNavBar fixed-top">
        <a class="navbar-brand" href="#"><img class="irion-logo" src="images/irion-logo.png" alt="irion logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
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
              <a class="nav-link" href="faq.php">Faq</a>
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
     <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-3 message-us">
              <h4>Leave us a message</h4>
              <form id="send-message">
                  <div class="form-group">
                  <input type="text" class="form-control" id="msg-email" placeholder="EMAIL"  >
                  </div>
                  <div class="form-group">
                  <input type="password" class="form-control" id="msg-pwd" placeholder="PASSWORD">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" rows="5" id="comment" placeholder="LEAVE US A MESSAGE"></textarea>
                  </div>
                  <input type="button" class="btn btn-primary submit-message" value="send message">
                </form>
          </div>
          <div class="col-md-1"></div>
          </div>
      </header>
    </body>
</html>