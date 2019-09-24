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
<!-- side nav -->
  <?php include 'sidenav.php'; ?>
<!-- header nav -->
  <?php include 'profilenav.php'; ?>
     <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
        <div class="row bod mt-5 p-3">
        <div class="col-md-4 cards p-3 animated slideInLeft">
        <div class="choose_us_card">
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
        <div class="choose_us_card">
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
       
      <div class="col-md-4 cards p-3 animated slideInRight">
        <div class="choose_us_card">
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
    <div class="row bod p-3">
      <div class="col-md-4 cards p-3 animated slideInLeft">
        <div class="choose_us_card">
          <div class="d-flex justify-content-center ">
              <img src="images/graph.png" alt="stats">
          </div>
          <div class="card_container text-center mt-2">
              <h4><b>Finance stats</b></h4> 
              <p>graph</p>
              <!-- graph -->
          </div>  
        </div>
      </div>
        
      <div class="col-md-4 cards p-3">
        <div class="choose_us_card">
          <div class="d-flex justify-content-center ">
              <img src="images/graph.png" alt="current level">
          </div>
          <div class="card_container text-center mt-2">
              <h4><b>Current Level</b></h4> 
              <p>progress bar</p>
              <!-- progress bar -->
          </div>  
        </div>
      </div>
       
      <div class="col-md-4 cards p-3 animated slideInRight">
        <div class="choose_us_card">
          <div class="d-flex justify-content-center ">
              <img src="images/graph.png" alt="account info">
          </div>
          <div class="card_container text-center mt-2">
              <h4><b>account growth</b></h4> 
              <p>progress bar</p>
              <!-- progress bar -->
          </div>  
        </div>
      </div>
       
      </div>
    </div>
   
    <script>
			/* Set the width of the side navigation to 250px */
				function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				}

				/* Set the width of the side navigation to 0 */
				function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				}
			</script>
</body>
</html>