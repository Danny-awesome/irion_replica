<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="css/header.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body onload="displayTime();">
    <div class="dashboard-main-wrapper">
      <div class="dashboard-header">
        <nav class="navbar navbar-expand fixed-top">
          <div class="header-wrapper">
           <a class="navbar-brand" href="index.php"><img class="irion-logo" src="images/irion-logo1.png" alt="irion logo"></a>
           <hr>
          </div>
          <div class=" navbar-collapse">
            <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item">
                <span class="nav-link" id="timeSpan"></span>
              </li>
              <li class="nav-item nav-user dropdown show mr-2 pr-1">
                <a class="nav-user-img" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="images/user-male.png">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="userProfile.php" style="font-family: 'Titillium Web'">ACCOUNT<i class="fas fa-user-cog ml-4"></i></a>
                </div>
              </li>
              <li class="nav-item" style="border: none;">
                <a class="btn btn-primary" data-toggle="modal" data-target="#myLogout" href="scripts/logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="modal" id="myLogout">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h5 class="modal-title">DO YOU WANT TO LOGOUT?</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <a class="btn btn-primary" href="scripts/logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
        </div>
        
      </div>
    </div>
  </div>
  </body>
  <script type="text/javascript" src="js/header.js"></script>
</html>