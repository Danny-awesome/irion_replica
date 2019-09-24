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
    <link rel="stylesheet" href="css/profileB.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<body>
   
   <div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header">
   			<a id="profile-link" href="profilenav.php"><img id="profile-image"class="pr-2" src="images/user-male.png" alt="profile image">MY PROFILE</a>
		
   		</div>
   		
   		<ul class="list-unstyled components mt-4">
   			<p class="user-name text-center">JOHN DOEY</p>
   		  <div class="d-line"></div>
   			<li>
          <a class="text-center" href="downlines.php">Downlines</a>
   			</li>
   			<li>
   			  <a class="text-center" href="profileSettings.php">Profile Settings</a>
   			</li>
   			<li>
   			  <a class="text-center" href="history.php">History</a>
   			</li>
   			<li>
   			  <a class="text-center" href="#">Logout</a>
   			</li>
   		</ul>
   		
   	</nav>
   	
   	<div class="content">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   		
        <span  id="sidebarCollapse">
          <div class="d-container">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div></div>
        </span>
  		
  <!-- <a class="navbar-brand" href="#"><img class="irion-logo ml-5" src="images/irion-logo.png" alt="logo"></a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">

    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav nav-links ml-auto">
            <div class="dropdown">
                <a class="dropbtn">  <img id="nav-profile-image" class="mr-1" src="images/user-male.png" alt="profile image">My Account
                </a>
                <div class="dropdown-content  float-left profile-dropdown-content">
                <p class="pt-2 pl-2 irion-acc">Irion Account</p>
                <p id="user-name" class="pl-2">Default username</p>
                <p id="user-email" class="pl-2">tally@gmail.com</p>
                </div>
            </div>
            </ul>
          </div>  
    </ul>
  </div>
</nav>
  	
  	<h2 class="text-center">Collapsible Sidebar Using Bootstrap 4</h2>
  	
  	 <p class="ml-3 mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   	
        <div class="row mt-1 p-3 animated slideInRight">
        <div class="col-md-4 cards p-3">
        <div class="b_choose_us_card">
          <div class="d-flex justify-content-center">
              <img src="images/graph.png" alt="amount received">
          </div>
          <div class="card_container text-center mt-2">
              <h4><b>Last Amount Recieved</b></h4> 
              <p id="lar">0:00</p>
              <!-- progress bar -->
          </div>  
        </div>
      </div>
      <div class="col-md-4 cards p-3">
        <div class="b_choose_us_card">
          <div class="d-flex justify-content-center ">
              <img src="images/graph.png" alt="amount payed">
          </div>
          <div class="card_container text-center mt-2">
              <h4><b>Last Amount Payed</b></h4> 
              <p id="lap">0:00</p>
              <!-- progress bar -->
          </div>  
        </div>
      </div>
       
      <div class="col-md-4 cards p-3">
        <div class="b_choose_us_card">
          <div class="d-flex justify-content-center ">
              <img src="images/graph.png" alt="total gained">
          </div>
          <div class="card_container text-center mt-2 ">
              <h4><b>Total Amount Gained</b></h4> 
              <p id="tag">0:00</p>
              <!-- progress bar -->
          </div>  
        </div>
      </div>
       
      </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
    
    
    
    
  </body>
</html>