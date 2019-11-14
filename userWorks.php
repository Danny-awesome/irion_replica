<?php
require_once 'config/dbConnect.php';
require_once 'scripts/check_session_state.php';
require_once 'scripts/transaction_due.php';
  include 'userDashHeader.php';
  // sidebar page
include 'userDashSideNav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="This content provides you the ability to grow your money safely online by referal">
    <meta name="keywords" content="online,money,finance,growth">
    <meta name="author" content="Irion global">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>How it works</title>
</head>

    <body>
        <div class="dashboard-wrappers">
            <!-- HOW IT WORKS FOR A CERTAIN LEVEL  -->
            <div class="row">
              <div class="col-md-12">
                  <h5 class="text-center pt-4">HOW IT WORKS: <span style="color:red">LEVEL ONE </span></h5>     
                  <ul class="pl-4">
                    <li>Regiter with a valid email.</li>
                    <li>Pay a sum of <span>&#8358;</span>5,000 to your upline to buy a slot on the site.</li>
                    <li>Refer 4 people to register and set up their account and recieve <span>&#8358;</span>20,000.</li>
                  </ul>         
                  <h6 class="text-center">If you love to acquire a higher slot, <button class="btn btn-primary mt-2">
                  <a class="text-white"href="userMainTrans.php">Click Here</a></button></h6>
              </div>
            </div>
            <!-- INSTRUCTIONS  -->
            <div class="row">
              <div class="col-md-12 pl-5 pr-5">
                <h5 class="text-center pt-4">RULES</h5>
                  <ul class="">
                    <li> USER SHOULD NOT SEND VERIFICATION REQUEST ON HALF PAYMENT.</li>
                    <li> USER SHOULD NOT CONFIRM HALF PAYMENT (because if you confirm half payment,
                    the system is not affiliated with bank transactions and so will take it that you were Paid in full).</li>
                    <li> USER WILL BE BLOCKED AND WILL LOOSE HIS DOWNLINES IF HE FAILS TO MAKE PAYMENT ON REQUIRED DURATION.</li>
                
                </ul>
              </div>
            </div>
        </div>
    </body>
</html>