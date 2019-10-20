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
</head>

<body>
    <div class="nav-left-sidebar sidebar-dark">
        <nav class="navbar-white bg-transparent">
            <ul class="navbar-nav flex-column pt-2" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="adminDashboard.php"><i class="fas fa-paste"></i><span>DASHBOARD</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminControls.php"><i class="fas fa-ban"></i><span>CONTROLS / BLOCKING</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminUserHistory.php"><i class="fa fa-history"></i><span>USER HISTORY</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminSlot1.php"><i class="fa fa-history"></i><span>SLOT 1</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminSlot2.php"><i class="fa fa-history"></i><span>SLOT 2</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminSlot3.php"><i class="fa fa-history"></i><span>SLOT 3</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminSlot4.php"><i class="fa fa-history"></i><span>SLOT 4</span></a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#myLogout" href="#"><i class="fas fa-sign-out-alt"></i><span>LOGOUT</span></a>
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
            <button type="button" class="btn log float-right" data-dismiss="modal">LOGOUT</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>