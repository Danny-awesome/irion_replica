<? require 'config/dbConnect.php';
    require_once 'scripts/check_session_state.php';
  // header page
  include 'userDashHeader.php';
    // sidebar page
  include 'userDashSideNav.php'; ?>
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
</head>

<body>
    <div class="dashboard-wrappers">
        <div class="row p-5">
            <div class="col-md-8 pt-5">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                        <?php 
                            echo"<h6>Last Recieved <span class='fa fa-arrow-down'></span> </h6>";
                            echo"<p><span>&#8358;</span>0:00</p>";
                            echo"<h5>Payed by : <span class=''></span></h5>";
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <h6>Last Payed <span class="fa fa-arrow-up"></h6>
                            <p><span>&#8358;</span>0:00</p>
                            <h5>Payed to : <span class=""></span></h5>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <h6>Total Gained <span><img src="images/money-bag.png" alt="icon"></span></h6>
                            <p><span>&#8358;</span>0:00</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <h6>Current Level</h6>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-5">
                <div class="dash-downline">
                    <h6 class="pt-5">UPLINE DETAILS</h6>
                    <table class="user-upline ">
                        <tr>
                            <td>
                                <h3>Name :</h3>
                            </td>
                            <td>
                                <p>upliner name </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Phone Number :</h3>
                            </td>
                            <td>
                                <p>upliner digits </p>
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

        <div class="row downline-row p-5">
            <div class="col-md-3 pt-5">
                <div class="dash-downline">
                    <h6 class="pt-5">DOWNLINE DETAILS</h6>
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

            <div class="col-md-3 pt-5">
                <div class="dash-downline">
                    <h6 class="pt-5">DOWNLINE DETAILS</h6>
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
            <div class="col-md-3 pt-5">
                <div class="dash-downline">
                    <h6 class="pt-5">DOWNLINE DETAILS</h6>
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
            <div class="col-md-3 pt-5">
                <div class="dash-downline">
                    <h6 class="pt-5">DOWNLINE DETAILS</h6>
                    <table class="user-downline">
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