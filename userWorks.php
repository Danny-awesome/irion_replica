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
        <?php
        if(!empty($_SESSION['you_are_blocked'])){
            echo '<div class="alert '.$alert_class.'">';
                echo $_SESSION['you_are_blocked'];
            echo '</div>';
        }
        
        ?>
        <div class="col-md-12 works-title">
        <h2 class="text-center">How Does Irion Work?</h2>
    
        <!-- LEVEL ZERO HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 0</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>5,000 Upgrade/Reg Fee</h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>0 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>0 Gained</h6></div>
      </div>
      <!-- LEVEL ZERO BODY  -->
      <div class="row">
          <div class="col-md-12 pl-5">
              <ol>
                <li><span class="a">-</span> Welcome to Irion.</li>
                <li><span class="b">-</span> This is the registration money.</li>
                <li><span class="c">-</span> You pay <span>&#8358;</span>5,000 to your upliner to activate level 1.</li>
                <li><span class="d">-</span>  You gain the right to earn.</li>
              </ol>
          </div>
      </div>

        <!-- LEVEL ONE HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 1</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>10,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>20,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>10,000 Gained</h6></div>
      </div>
          <!-- LEVEL ONE BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Four users will be given to you as your downlines.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>10,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>5,000 which amounts to the <span>&#8358;</span>20,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>10,000 to your upliner, you gain <span>&#8358;</span>10,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL TWO HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 2</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>15,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>40,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>25,000 Gained</h6></div>
      </div>
          <!-- LEVEL TWO BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 2.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>15,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>10,000 which amounts to the <span>&#8358;</span>40,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>15,000 to your upliner, you gain <span>&#8358;</span>25,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL THREE HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 3</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>20,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>60,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>40,000 Gained</h6></div>
      </div>
          <!-- LEVEL THREE BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 3   .</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>20,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>15,000 which amounts to the <span>&#8358;</span>60,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>20,000 to your upliner, you gain <span>&#8358;</span>40,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL FOUR HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 4</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>30,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>80,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>50,000 Gained</h6></div>
      </div>
          <!-- LEVEL FOUR BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 4.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>30,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>20,000 which amounts to the <span>&#8358;</span>80,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>30,000 to your upliner, you gain <span>&#8358;</span>50,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL FIVE HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 5</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>40,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>120,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>80,000 Gained</h6></div>
      </div>
          <!-- LEVEL FIVE BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 5.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>40,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>30,000 which amounts to the <span>&#8358;</span>120,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>40,000 to your upliner, you gain <span>&#8358;</span>80,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL SIX HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 6</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>50,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>160,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>110,000 Gained</h6></div>
      </div>
          <!-- LEVEL SIX BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 6.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>50,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>40,000 which amounts to the <span>&#8358;</span>160,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>50,000 to your upliner, you gain <span>&#8358;</span>110,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL SEVEN HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 7</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>60,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>200,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>140,000 Gained</h6></div>
      </div>
          <!-- LEVEL SEVEN BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 7.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>60,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>50,000 which amounts to the <span>&#8358;</span>200,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>60,000 to your upliner, you gain <span>&#8358;</span>140,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL EIGHT HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 8</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>70,000 Upgrade Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>240,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>170,000 Gained</h6></div>
      </div>
          <!-- LEVEL SEVEN BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 8.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>70,000 to your upliner to activate next level.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>60,000 which amounts to the <span>&#8358;</span>240,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>70,000 to your upliner, you gain <span>&#8358;</span>170,000.</li>
            </ol>
        </div>
    </div>

    <!-- LEVEL NINE HEADERS  -->
      <div class="row pt-4">
        <div class="col-md-2 text-center a"><h5>Level 9</h5></div>
        <div class="col-md-3 text-center b"><h6><span>&#8358;</span>70,000 Upgrade/Renewal Fee  </h6></div>
        <div class="col-md-3 text-center c"><h6><span>&#8358;</span>280,000 Recieved</h6></div>
        <div class="col-md-3 text-center d"><h6><span>&#8358;</span>210,000 Gained</h6></div>
      </div>
          <!-- LEVEL NINE BODY  -->
      <div class="row">
        <div class="col-md-12 pl-5">
            <ol>
              <li><span class="a">-</span> Welcome to level 9.</li>
              <li><span class="b">-</span> After all your downlines have paid you, you pay <span>&#8358;</span>70,000 to your upliner to RENEW your account.</li>
              <li><span class="c">-</span> Each user under you pays <span>&#8358;</span>70,000 which amounts to the <span>&#8358;</span>280,000.</li>
              <li><span class="d">-</span> After paying <span>&#8358;</span>70,000 to your upliner, you gain <span>&#8358;</span>170,000.</li>
              <li><span class="d">-</span> After renewal, you are to restart the cycle to earn again as you did till this level.</li>
            </ol>
        </div>
    </div>
          
        </div>
    </body>
</html>