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
    <link rel="stylesheet" href="css/profile.css">
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
<h6 class="mt-2 ">sdjdkhkdhdkhdkhkdhkdhkdhkdh jshdlhdjdjhdhkddkkdhkd sdhkjjdhakdkdaskdhkdhksahdkdhksdhfofouofooffofklfljlfljfljlsdjflsjfkljldslkfjlffjjjlsjkjfsffkjhkjk.</h6>
  <div class="mt-5 ml-3 p row">
      <div class="col-md-3"></div>
      <div class="col-md-6 pt-5 pd-container">
        <form id="personal-details">
            <h6 class="">Profile Details</h6>
             
    <div class="form-group">
      <label for="LName">Last Name :</label>
      <input type="text" class="form-control" id="LName" placeholder="Enter Last Name">
    </div>  
    <div class="form-group">
      <label for="FName">First Name :</label>
      <input type="text" class="form-control" id="FName" placeholder="Enter First Name">
    </div>
    <label class="radio-inline">
      <input type="radio" name="optradio">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Female
    </label>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="telno">Telephone No :</label>
      <input type="number" class="form-control" id="telno" placeholder="Enter Telephone Number">
    </div>
    <div class="form-group">
      <label for="o-pwd">Old Password :</label>
      <input type="password" class="form-control" id="o-pwd" placeholder="Old Password">
    </div>
    <div class="form-group">
      <label for="c-pwd">Change Password :</label>
      <input type="password" class="form-control" id="c-pwd" placeholder="Enter New Password">
    </div>
    <div class="form-group">
      <label for="n-pwd">New Password :</label>
      <input type="password" class="form-control" id="n-pwd" placeholder="Retype New Password">
    </div>
    
    <div class="form-group">
      <label for="AName">Account Name :</label>
      <input type="text" class="form-control" id="AName" placeholder="Enter Account Name">
    </div>
    <div class="form-group">
      <label for="telno">Account No :</label>
      <input type="number" class="form-control" id="telno" placeholder="Enter Account Number">
    </div>
    <div class="form-group">
    <label for="sel1">Bank Name :</label>
    <select class="form-control" id="sel1">
        <option>Access Bank Plc</option>
        <option>Fidelity Bank Plc</option>
        <option>First City Monument Bank Plc</option>
        <option>First Bank of Nigeria Limited</option>
        <option>Guaranty Trust Bank Plc</option>
        <option>Union Bank of Nigeria Plc</option>
        <option>United Bank for Africa Plc</option>
        <option>Zenith Bank Plc</option>
        <option>Citibank Nigeria Limited</option>
        <option>Heritage Banking Company Limited</option>
        <option>Keystone Bank Limited</option>
        <option>Polaris Bank Limited. </option>
        <option>Stanbic IBTC Bank Plc</option>
        <option>Standard Chartered</option>
        <option>Sterling Bank Plc</option>
        <option>Unity Bank Plc</option>
        <option>Wema Bank Plc</option>
        <option></option>
        <option></option>
        <option></option>
    </select>
    <button type="reset" class="btn btn-primary mt-2">CANCEL</button>
    <button type="submit" class="btn btn-primary mt-2">SAVE</button>
 
    </div>
        </form> 
      </div>
      <div class="col-md-3"></div>
  </div>
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