<?php
require_once 'config/dbConnect.php';
require_once 'scripts/check_session_state.php';
require_once 'scripts/check_new_entry.php';
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
    <link rel="icon" href="images/irion-logo1.png">
    <script src="js/script.js"></script>
    <!-- BOOTSTRAP MIN CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- LOGO  -->
    <!-- <link rel="stylesheet" href="css/userTrans.css"> -->
    <link rel="stylesheet" href="css/dashboard.css">
    <title>My Dashboard</title>
</head>

<body>
    <div class="dashboard-wrappers">
        <!-- wrapper row  -->
        <?php
        if(!empty($_SESSION['you_are_blocked'])){
            echo '<div class="alert '.$alert_class.'">';
                echo $_SESSION['you_are_blocked'];
            echo '</div>';
        }
        
        ?>
        <div class="row wrapper-row">
            <!-- left row with small boxes -->
            <div class="col-md-8">
                <!-- inner row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <?php
require_once "config/dbConnect.php";
$uname = $_SESSION['username'];
$trans_confirmed = true;
$trans_partner = '';
$trans_amount = '';
$trans_date = '';
$trans_type = 'credit';
$query = "SELECT Max(trans_date) as latest, amount, made_trans_with FROM transactions_info_all WHERE trans_confirmed=? AND trans_type=? AND user=?";
// -- (SELECT MAX(trans_date) FROM transactions_info_all WHERE trans_confirmed=? AND trans_type=?)
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("sss", $trans_confirmed, $trans_type, $uname);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_array();
        $trans_amount = $user['amount'];
        $trans_date = $user['latest'];
        $trans_partner = $user['made_trans_with'];
    }
}
// echo $me;
echo "<h6>Last Received <span class='fa fa-arrow-down'></span> </h6>";
echo "<p><span>&#8358;</span>$trans_amount:00</p>";
echo "<h5>Payed by : <span class=''>$trans_partner</span></h5>";
echo "<h5>Date Received : <span class=''>$trans_date</span></h5>";
?>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <?php
require_once "config/dbConnect.php";
$uname = $_SESSION['username'];
$trans_confirmed = true;
$trans_partner = '';
$trans_amount = '';
$trans_date = '';
$trans_type = 'debit';
$query = "SELECT Max(trans_date) as latest, amount, made_trans_with FROM transactions_info_all WHERE trans_confirmed=? AND trans_type=? AND user=?";
// -- (SELECT MAX(trans_date) FROM transactions_info_all WHERE trans_confirmed=? AND trans_type=?)
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("sss", $trans_confirmed, $trans_type, $uname);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_array();
        $trans_amount = $user['amount'];
        $trans_date = $user['latest'];
        $trans_partner = $user['made_trans_with'];
    }
}
echo '<div class="card">';
echo '<h6>Last Payed <span class="fa fa-arrow-up"></h6>';
echo '<p><span>&#8358;</span>' . $trans_amount . ':00</p>';
echo '<h5>Payed to : <span class="">'.$trans_partner.'</span></h5>';
echo '<h5>Date Sent : <span class="">'.$trans_date.'</span></h5>';
echo '</div>';
echo '</div>';
?>
                </div>
                <!-- inner row  -->
                <div class="row inner-row">
                    <?php
require_once "config/dbConnect.php";
$uname = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username=?";
$level = '';
$gained = '';
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $uname);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_array();
        $level = $user['user_level'];
        $gained = $user['total_gained'];
    }
}
echo '<div class="col-md-6">';
echo '<div class="card">';
echo '<h6>Total Gained ( <span>&#8358;</span> )</h6>';
echo '<p><span>&#8358;</span>' . $gained . ':00</p>';
echo '</div>';
echo '</div>';

echo '<div class="col-md-6">';
echo '<div class="card animated slideInLeft">';
echo '<h6 id="reg-level">Level ' . $level . '</h6>';
echo '</div>';
echo '</div>';
?>
            </div>
        </div>
        <!-- inner row end  -->
        <div class="col-md-4">
            <div class="dash-downline dash-upline">
                <h6>UPLINE DETAILS</h6>
                <?php
require_once "config/dbConnect.php";
$fname = $lname = $phone = $acctname = $acctnum = $bank = $name = '';
$uname = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username IN (SELECT upline FROM irion_uplines WHERE user='$uname')";
if ($stmt = $conn->prepare($query)) {
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_array();
        $fname = $user['user_firstname'];
        $lname = $user['user_lastname'];
        $name = $fname . ' ' . $lname;
        $phone = $user['user_phone'];
        $acctnum = $user['user_acctnum'];
        $acctname = $user['user_acctname'];
        $bank = $user['user_bank'];
    }
}
echo '<table class="user-downline trans-container">';
echo '<tr>';
echo '<td>';
echo '<h3>Name :</h3>';
echo '</td>';
echo '<td>';
echo '<p>' . $name . '</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<h3>Phone Number :</h3>';
echo '</td>';
echo '<td>';
echo '<p>' . $phone . '</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<h3>Account Name :</h3>';
echo '</td>';
echo '<td>';
echo '<p>' . $acctname . '</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<h3>Account Number :</h3>';
echo '</td>';
echo '<td>';
echo '<p>' . $acctnum . '</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<h3>Bank Name :</h3>';
echo '</td>';
echo '<td>';
echo '<p>' . $bank . '</p>';
echo '</td>';
echo '</tr>';
echo '</table>';
?>
            </div>
        </div>
    </div>

    <div class="col-md-9 m-4">
        <div class="central-table mt-5">
            <?php
echo '<div class="alert alert-success">';
echo '<h4>DOWNLINES</h4>';
echo '</div>';
echo '<table class="table table-bordered table-sm table-hover trans-container">';
echo '<thead>';
echo '<tr>';
echo '<th>S/N</th>';
echo '<th>Name</th>';
echo '<th>Tel No</th>';
echo '<th>Account Name</th>';
echo '<th>Account Number</th>';
echo '<th>Bank Name</th>';
echo '</tr>';
echo '</thead>';
require_once 'config/dbConnect.php';
$user = $_SESSION['username'];
$history = "SELECT * FROM users WHERE username IN (SELECT downline FROM irion_downlines WHERE user='$user')";
$serialnumber = 1;
$history_result = "";
if ($history_result = mysqli_query($conn, $history)) {
    if (mysqli_num_rows($history_result) == 0) {

        $error["no-data-found"] = "NO DOWNLINE FOUND";
        echo '<div class="alert alert-info">';
        echo $error["no-data-found"];
        echo '</div>';

    } else {
        echo '<tbody>';
        while ($row = mysqli_fetch_array($history_result)) {
            echo '<tr>';
            echo '<td>' . $serialnumber . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['user_phone'] . '</td>';
            echo '<td>' . $row['user_acctnum'] . '</td>';
            echo '<td>' . $row['user_acctname'] . '</td>';
            echo '<td>' . $row['user_bank'] . '</td>';
            echo '</tr>';
            $serialnumber++;
        }
        echo '</tbody>';
        echo '</table>';
    }
}
?>
        </div>
    </div>
    <!-- second large row wrapper  -->
    <!-- <div class="row downline-row pb-3">
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
                                    <h3>Bank Name :</h3>
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
                                    <h3>Bank Name :</h3>
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
                                    <h3>Bank Name :</h3>
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
                                    <h3>Bank Name :</h3>
                                </td>
                                <td>
                                    <p>Bank Name </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> -->

    </div>
</body>

</html>