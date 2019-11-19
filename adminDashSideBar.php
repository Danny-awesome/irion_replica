<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="css/sideNav.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="images/irion-logo1.png">
</head>

<body>
    <div class="nav-left-sidebar sidebar-dark">
        <nav class="navbar-white bg-transparent">
            <ul class="navbar-nav flex-column pt-2" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="adminDashboard.php"><i class="fas fa-paste"></i><span>DASHBOARD</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="adminControls.php"><i class="fas fa-ban"></i><span>CONTROLS / BLOCKING</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="adminProfile.php"><i class="fas fa-user"></i><span>PROFILE</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminSecurity.php"><i class="fas fa-lock"></i><span>SECURITY</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminUserHistory.php"><i class="fa fa-unlock"></i><span>UNBLOCK USER </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminResetUser.php"><i class="fa fa-redo"></i><span>RESET USER</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="adminSlot1.php"><i class="fa fa-hands-helping"></i><span>CENTRAL ACCOUNT</span></a>
                </li> -->
                <!-- <li class="nav-item"> -->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#myLogout" href="scripts/admin_logout.php"><i class="fas fa-sign-out-alt"></i><span>LOGOUT</span></a>
                </li>
              </ul>
        </nav>
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
        <a class="btn btn-primary float-right" href="scripts/admin_logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>