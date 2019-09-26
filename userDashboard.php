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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body  class="wrapper">
   	<nav id="sidebar" class="mt-5">
   		<div class="sidebar-header mt-4">
   			<a id="profile-link" href="index.php"><img class="irion-logo pr-2" src="images/irion-logo.png" alt="profile image">slogan</a>
		
   		</div>
   		
   		<ul class="list-unstyled components">
   			
   		  <li>
   			    <a class="text-center" href="userDashboard.php">DASHBOARD</a>
   			</li>
         <li>
            <a class="text-center" href="profileSettings.php">Profile</a>
          </li>
   			<li>
            <a class="text-center" href="downlines.php">Downlines</a>
   			</li>
   			<li>
   			    <a class="text-center" href="history.php">History</a>
   			</li>
   			<li>
   			  <a class="text-center" href="#"><img class="logout-icon-light mr-2" src="images/logoutr.png" alt="logout icon">Logout</a>
   			</li>
   		</ul>
   	</nav>
   	
   	<div class="content">
   		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
   		  <!-- toggle button with divs -->
        <span  id="sidebarCollapse">
          <div class="d-container">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div></div>
        </span>
        <div class="pl-2 dash">
            <h4 class="pl-5 pt-3"><img class="home-icon mr-2" src="images/home.png" alt="home icon">DASHBOARD</h4>
          </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <table class="mt-3 ml-4">
          <tr>
            <td><h6 id="day"></h6></td>
            <td><h6 id="month"></h6></td>
            <td><h6 id="year"></h6></td>
          </tr>
        </table>      
        </li>
       <li class="nav-item">
        <div class="dropdown">
                <a class="dropbtn"><img id="acc-profile-image" class="mr-1" src="images/user-male.png" alt="profile image">My Account
                </a>
                <div class="dropdown-content  float-left dash-dropdown-content">
                  <p class="pt-2 pl-2 irion-acc">Irion Account</p>
                  <p id="user-name" class="pl-2">Default username</p>
                  <p id="current-level" class="pl-2">current level</p>
                  <p id="user-email" class="pl-2">tally@gmail.com</p>
              </div>
            </div>
        </li>
      </ul> 
  </div>
  </nav>

  <h6 class="mt-5">.</h6>
  <h6 class="text-center mt-5 notice-head">Notice!!</h6>
     <p class="ml-3 mr-3 dash-notice">Please do not share your personal details with anyone.
     Do not verify a downlines payment if you haven't received full proof of payment .
      For faster gain,we encourage you to keep upgrading to a higher level and if you are 
     in the final level,feel free to renew your account.For more info visit our
    <a href="aboutus.php"> About Us Page</a>, we got you!</p>
     
      <div class="row ml-5 mr-5">
        <div class="col-md-6 cards">
          <div class="b_choose_us_card pt-3 ">
            <h4 class="text-center">Last Amount Recieved (₦)</h4>
            <div class="d-line"></div>
            <table class="dash-table p-2">
              <tr>
                <td><h6 class="mt-5 ml-3">Amount (₦):</h6></td>
                <td><h6 class="mt-5 ml-3">0:001 </h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Senders Name : </h6></td>
                <td><h6 class="ml-3">Sn </h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Date Recieved : </h6></td>
                <td><h6 class="ml-3">Date</h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Date Verified : <h6></td>
                <td><h6 class="ml-3">Date Verified  <h6></td>
              </tr>
            </table>
         </div>
      </div>

      <div class="col-md-6 cards">
          <div class="b_choose_us_card pt-3">
            <h4 class="text-center">Last Amount Payed (₦)</h4>
            <div class="d-line"></div>
         <table class="dash-table p-2">
              <tr>
                <td><h6 class="mt-5 ml-3">Amount (₦):</h6></td>
                <td><h6 class="mt-5 ml-3">0:001 </h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Recievers Name : </h6></td>
                <td><h6 class="ml-3">Sn </h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Date Recieved : </h6></td>
                <td><h6 class="ml-3">Date</h6></td>
              </tr>
              <tr>
                <td><h6 class="ml-3">Date Verified : <h6></td>
                <td><h6 class="ml-3">Date Verified  <h6></td>
              </tr>
            </table>
          </div>
        </div>
    </div>
    
    <div class="row ml-5 mr-5">
        <div class="col-md-6 cards">
          <div class="b_choose_us_card pt-3 ">
          <h4 class="text-center">Total Amount Gained (₦)</h4>
          <div class="d-line">
          <table class="dash-table p-2">
            <tr>
              <td><h6 class="mt-5 ml-3">Amount (₦):</h6></td>
              <td><h6 class="mt-5 ml-3">0:001 </h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">My Name : </h6></td>
              <td><h6 class="ml-3">Sn </h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">Current Level : </h6></td>
              <td><h6 class="ml-3">level</h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">Account Details : <h6></td>
              <td><h6 class="ml-3">Details <h6></td>
            </tr>
          </table>
        </div>
      </div>  
    </div>
  
    <div class="col-md-6 cards">
        <div class="b_choose_us_card pt-3">
          <h4 class="text-center">Downlines & Upline Summary</h4>
          <div class="d-line">
          <table class="dash-table p-2">
            <tr>
              <td><h6 class="mt-5 ml-3"><b>Upliner name :</b></h6></td>
              <td><h6 class="mt-5 ml-3"><b>Account Details</b></h6></td>
            </tr>
            <tr>
              <td><h6 class="mt-2 ml-3">Name :</h6></td>
              <td><h6 class="mt-2 ml-3">Account Details</h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">Name : </h6></td>
              <td><h6 class="ml-3">Account Details </h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">Name : </h6></td>
              <td><h6 class="ml-3">Account Details </h6></td>
            </tr>
            <tr>
              <td><h6 class="ml-3">Name : </h6></td>
              <td><h6 class="ml-3">Account Details </h6></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- <i class="fa fa-users" aria-hidden="true"> -->

<!-- footer  -->
<!-- <div class="row footer">
     <div class="col-md-12 text-center m-1">
        <a class="text-center" href="terms.php">Terms & Conditions</a>
      </div>
    </div> -->

    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
        
			});
    });
      var d = new Date();
    
    document.getElementById("day").innerHTML = d.getDate() + " / ";
    document.getElementById("month").innerHTML = d.getMonth()+1  + " / ";
    var year = document.getElementById("year").innerHTML = d.getFullYear();
	</script>
    
    
    
    
    
  </body>
</html>