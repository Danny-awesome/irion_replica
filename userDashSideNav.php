<?php require_once 'scripts/check_session_state.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="css/sideNav.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
    <link rel="icon" href="images/irion-logo1.png">
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="nav-left-sidebar sidebar-dark">
        <nav class="navbar-white bg-transparent">
            <ul class="navbar-nav flex-column pt-2" id="navbar-nav">
                <?php
                    require_once 'config/dbConnect.php';
                    $user_type = $_SESSION['acct-type'];
                    if($user_type == 'common'){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="userDashboard.php"><i class="fas fa-paste"></i><span>DASHBOARD</span></a>
                </li>
                <?php }else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="centralDash.php"><i class="fas fa-paste"></i><span>DASHBOARD</span></a>
                    </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="userProfile.php"><i class="fas fa-user"></i><span>PROFILE</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="accountsecurity.php"><i class="fas fa-lock"></i><span>SECURITY</span></a>
                </li>
                <?php
                    require_once 'config/dbConnect.php';
                    $user_type = $_SESSION['acct-type'];
                    if($user_type == 'common'){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="userMainTrans.php"><i class="fa fa-hands-helping"></i><span>TRANSACTIONS</span></a>
                </li>
                <?php }else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="centralTrans.php"><i class="fas fa-paste"></i><span>TRANSACTIONS</span></a>
                    </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="userHistory.php"><i class="fa fa-history"></i><span>HISTORY</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userWorks.php"><i class="fas fa-info-circle"></i><span>HOW IT WORKS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="modal" data-target="#myLogout" href="#"><i class="fas fa-sign-out-alt"></i><span>LOGOUT</span></a>
                </li>
              </ul>
        </nav>
    </div>
  
    <div class="modal" id="myLogout">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h5 class="modal-title">DO YOU WANT TO LOGOUT?</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"> 
        <a class="btn btn-primary float-right" href="scripts/logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>
    </div>
  </div>
  
    
</body>

</html>