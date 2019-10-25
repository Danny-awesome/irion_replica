<?php
require_once 'config/dbConnect.php';
require_once 'scripts/check_session_state.php';
require_once 'scripts/check_new_entry.php';

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
    <script src="js/script.js"></script>
   <!-- BOOTSTRAP MIN CSS  -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div class="dashboard-wrappers">
      <!-- wrapper row  -->
      <div class="row wrapper-row">
        <!-- left row with small boxes -->
          <div class="col-md-8">
          <!-- inner row  -->
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <?php
                        // define ('DATE_RFC2822', "D, d M Y H:i:s O");
                    $uname = $_SESSION['username'];
                    $trans_confirmed = true;
                    $trans_partner = '';
                    $trans_amount = '';
                    $trans_date = '';
                    $trans_type = 'debit';
                    // $query = "SELECT MAX(trans_date), made_trans_with,amount FROM transactions_info_all WHERE user=? AND trans_confirmed=?";
                    // $query = "SELECT  MAX(trans_date) AS 'payday', amount, made_trans_with FROM transactions_info_all WHERE user=? AND trans_type=? AND trans_confirmed=1";
                    $query = "SELECT * FROM transactions_info_all WHERE trans_date = (SELECT MAX(trans_date) FROM transactions_info_all WHERE user=? AND trans_type=?";
                    if ($stmt = $conn ->prepare($query)) {
                        $stmt ->bind_param("ss",$uname, $trans_type);
                        if ($stmt ->execute()) {
                            $result = $stmt ->get_result();
                            $trans_ = $result ->fetch_array();
                            $trans_date = $trans_['payday'];
                            // $_date = date_create($trans_date);
                            // $trans_date = date_format($_date,DATE_RFC2822);
                            // $trans_date = date_format($_date,'l d, M Y');
                            $trans_partner = $trans_['made_trans_with'];
                            $trans_amount = $trans_['amount'];  
                        }
                    }
                    echo "<h6>Last Received <span class='fa fa-arrow-down'></span> </h6>";
                    echo "<p><span>&#8358;</span>$trans_amount:00</p>";
                    echo "<h5>Payed by : <span class=''>$trans_partner</span></h5>";
                    echo "<h5>Date Received : <span class=''>$trans_date</span></h5>";
                    

                  ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                    <h6>Last Payed <span class="fa fa-arrow-up"></h6>
                    <p><span>&#8358;</span>0:00</p>
                    <h5>Payed to : <span class=""></span></h5>
                    <h5>Date Sent : <span class=""></span></h5>
                </div>
              </div>
            </div>
          <!-- inner row  -->
            <div class="row inner-row">
              <div class="col-md-6">
                <div class="card">
                    <h6>Total Gained ( <span>&#8358;</span> )</h6>
                    <p><span>&#8358;</span>0:00</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card animated slideInLeft">
                  <h6 id="reg-level">Level 0</h6>
                </div>
              </div>
            </div>
          </div>
          <!-- inner row end  -->
          <div class="col-md-4">
              <div class="dash-downline dash-upline">
              <h6>UPLINE DETAILS</h6>
                        <table class="user-downline ">
                            <tr>
                                <td>
                                    <h3>Name :</h3>
                                </td>
                                <td>
                                    <p>downline name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Phone Number :</h3>
                                </td>
                                <td>
                                    <p>uplineline digits </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Name :</h3>
                                </td>
                                <td>
                                    <p>Account Name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Account Number </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>

              </div>
          </div>
      </div>

      <!-- second large row wrapper  -->
      <div class="row downline-row pb-3">
                <div class="col-md-3">
                    <div class="dash-downline">
                        <h6>DOWNLINE DETAILS</h6>
                        <table class="user-downline ">
                            <tr>
                                <td>
                                    <h3>Name :</h3>
                                </td>
                                <td>
                                    <p>downline name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Phone Number :</h3>
                                </td>
                                <td>
                                    <p>downline digits </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Name :</h3>
                                </td>
                                <td>
                                    <p>Account Name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Account Number </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dash-downline dash-downline2">
                        <h6>DOWNLINE DETAILS</h6>
                        <table class="user-downline ">
                            <tr>
                                <td>
                                    <h3>Name :</h3>
                                </td>
                                <td>
                                    <p>downline name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Phone Number :</h3>
                                </td>
                                <td>
                                    <p>downline digits </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Name :</h3>
                                </td>
                                <td>
                                    <p>Account Name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Account Number </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dash-downline dash-downline2">
                        <h6>DOWNLINE DETAILS</h6>
                        <table class="user-downline ">
                            <tr>
                                <td>
                                    <h3>Name :</h3>
                                </td>
                                <td>
                                    <p>downline name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Phone Number :</h3>
                                </td>
                                <td>
                                    <p>downline digits </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Name :</h3>
                                </td>
                                <td>
                                    <p>Account Name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Account Number </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dash-downline dash-downline2">
                        <h6>DOWNLINE DETAILS</h6>
                        <table class="user-downline ">
                            <tr>
                                <td>
                                    <h3>Name :</h3>
                                </td>
                                <td>
                                    <p>downline name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Phone Number :</h3>
                                </td>
                                <td>
                                    <p>downline digits </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Name :</h3>
                                </td>
                                <td>
                                    <p>Account Name </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Account Number </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Account Number :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
  
    </div>     
</body>

</html>