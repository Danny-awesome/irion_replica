<?php
require_once "config/dbConnect.php";
require_once 'scripts/check_session_state.php';
require_once 'scripts/check_new_entry.php';
require_once 'scripts/transaction_due.php';
require_once 'scripts/proof_upload.php';
require_once 'scripts/verify_payment.php';
?>

<?php
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
         <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <!-- JQUERY 3.4.1  -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- BOOTSTRAP MIN JS  -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
     <!-- LOGO  -->
     <link rel="icon" href="images/irion-logo1.png">

    <link rel="stylesheet" href="css/userTrans.css">
    <title>Transactions Page</title>
</head>

<body>
    <div class="dashboard-wrappers">
    <?php
        if(empty($_SESSION['you_are_blocked'])){
            echo '<div class="alert '.$alert_class.'">';
                echo $_SESSION['you_are_blocked'];
            echo '</div>';
        }
        
        ?>
        <div class="row pl-5 pr-5">

            <div class="col-md-7 pl-5">
                <P><span class="warning-note">PLEASE READ!! </span>When all your downlines have payed you,
                    you are expected to pay your upgrade fee to your upline before 48 hours runs out. If you do not
                    abide by that, your account will be temporarily blocked until you pay unblocking fee of
                    <span>&#8358;</span>5000 and then your account will be unblocked after 24hours.
                    If your account is blocked more than 3 times then you will be permanently blocked from using this
                    platform. Once you are blocked, you will lose your level progress and start all over from the
                    beginning.</P>
            </div>
            <div class="col-md-5 pr-5">
               <!-- important note to users  -->
               <button type="button" class="btn btn-info btn-lg ml-4" 
               data-toggle="modal" data-target="#myModal">Please Read</button>

               
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">How does irion work ?</h4>
      </div>
      <div class="modal-body ml-5">
        <h6 class="text-center">Detailed Explanation</h6>
        
        <p class="ml-5"><b>Your downlines will be with you through out the journey so you do not need to find extra four downlines again.</b>
        Register with <span>&#8358;</span>5000 to your upline, call your upline to verify your payment.
        After verification,you are taken to level 1. Once level 1 is activated,you give your username to 4 of your
        desired downlines to register under you,you then recieve payment of <span>&#8358;</span>5000 from each of 
        them which amounts <span>&#8358;</span>20,000. After all your downlines have been verified You are
         expected to pay <span>&#8358;</span>10,000 to
        your upline before 48hours runs out else you will blocked from using the platform and will have to pay an unblocing fee
        to unblock your account and also, you lose your level progress. check out the remaining on our <a href="https://theirioncycle.com.ng/userWorks.php" target="_blank">how it works page</a></p>
        <h6 class="text-center">RULES!!</h6>
        <ul>
            <li>1. USER SHOULD NOT SEND VERIFICATION REQUEST ON HALF PAYMENT</li>
            <li>2. USER SHOULD NOT CONFIRM HALF PAYMENT (because if you confirm half payment,
             the system is not affiliated with bank transactions and so will take it that you were Paid in full)</li>
            <li>3. USER WILL BE BLOCKED AND WILL LOOSE HIS DOWNLINES IF HE FAILS TO MAKE PAYMENT ON REQUIRED DURATION</li>
            <li>4. USER WILL BE DELETED FROM THE PLATFORM IF HE'S BLOCKED THE THIRD TIME.</li>
            
        </ul>
        <p>



      </div>
      <div class="modal-footer pb-5">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            </div>
        </div>


         <div class="vk-room-list-content">
            <div class="container">
                <div class="row pl-5 pr-5">
                    <div class="item pb-4">
                    <?php
require_once "config/dbConnect.php";

$fname = $lname = $phone = $acctname = $acctnum = $bank = $name = $uname = '';
$uname = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username IN (SELECT upline FROM irion_uplines WHERE user='$uname')";
if ($stmt = $conn->prepare($query)) {
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_array();
        $fname = $user['user_firstname'];
        $upline = $user['username'];
        $lname = $user['user_lastname'];
        $receive_mail = $user['user_email'];
        $name = $fname . ' ' . $lname;
        $phone = $user['user_phone'];
        $acctnum = $user['user_acctnum'];
        $acctname = $user['user_acctname'];
        $bank = $user['user_bank'];
    }
}
echo '<form method="post" action="userMainTrans.php" enctype="multipart/form-data">';
echo '<input type="text" name="upline" value="' . $upline . '" hidden>'; //important. DO NOT DELETE
echo '<input type="text" name="receive_name" value="' . $name . '" hidden>'; //important. DO NOT DELETE
echo '<input type="text" name="receive_mail" value="' . $receive_mail . '" hidden>'; //important. DO NOT DELETE

if (!empty($image_upload_msg)) {
    echo '<div class="alert ' . $alert_class . ' alert-dismissible">';
    echo $image_upload_msg;
    echo '</div>';
}
if (!empty($proof_upload_msg)) {
    echo '<div class="alert ' . $alert_class . ' alert-dismissible">';
    echo $proof_upload_msg;
    echo '</div>';
    echo '<div class="alert ' . $alert_info_class . ' alert-dismissible">';
    echo $call_upline;
    echo '</div>';
}

echo '<div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">';
echo '<div class="vk-dark-our-room-item-img">';
echo '<img src="images/default.png" onclick="triggerClick()" alt="no payment proof yet" class="img-responsive" id="proofDisplay">';
echo '</div>';
echo '</div>';
echo '<div class="col-md-6 vk-dark-our-room-item-right" >';
echo '<div class="vk-dark-our-room-item-content">';
echo '<h3 class="text-center"><a href="#">~ UPLINE ~</a></h3>';
echo '<table>';
echo '<tr>';
echo '<td>- Name</span></td>';
echo '<td><h6 class="pt-1 pl-2">' . $name . ' </h6></td>';
echo '</tr>';
echo '<tr>';
echo '<td>- Tel No</span></td>';
echo '<td><h6 class="pt-1 pl-2">' . $phone . '</h6></td>';
echo '</tr>';
echo '<tr>';
echo '<td>- Account Name</span></td>';
echo '<td><h6 class="pt-1 pl-2">' . $acctname . '</h6></td>';
echo '</tr>';
echo '<tr>';
echo '<td>- Account No</span></td>';
echo '<td><h6 class="pt-1 pl-2">' . $acctnum . '</h6></td>';
echo '</tr>';
echo '<tr>';
echo '<td>- Bank Name</span></td>';
echo '<td><h6 class="pt-1 pl-2">' . $bank . '</h6></td>';
echo '</tr>';
echo '</table>';

$user_gain_validity = true;
$user_gain_inform = '';
if ($user['user_level'] == 0) {
    $user_gain_validity = false;
    $user_gain_inform = 'User is still at level 0 and cannot receive payment';
}
if ($user['user_acctstatus'] == 'not-active') {
    $user_gain_validity = false;
    $user_gain_inform = 'User is yet to complete his/her profile';
}
if ($user['verified'] == false) {
    $user_gain_validity = false;
    $user_gain_inform = 'User is yet to verify his account';
}

if ($user_gain_validity == false) {
    echo '<div class="alert alert-info">';
    echo $user_gain_inform.'</br>';
    echo '</div>';
    echo '<input type="file" name="load_proof" onchange="displayImage(this)" class="btn load-proof" disabled value="LOAD PROOF"  id="load_proof">';
    echo '<input type="submit" class="btn check-proof" disabled value="UPLOAD PROOF" name="upload_proof">';
} else {
    echo '<input type="file" name="load_proof" onchange="displayImage(this)" class="btn load-proof" value="LOAD PROOF"  id="load_proof">';
    echo '<input type="submit" class="btn check-proof" value="UPLOAD PROOF" name="upload_proof">';
}
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>

   <?php
echo '<div class="trans-container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if (!empty($updateStatus)) {
    echo '<div class="alert ' . $alert_class . '">';
    echo $updateStatus;
    echo '</div>';
}
if (!empty($increase)) {
    echo '<div class="alert alert-info">';
    echo $increase;
    echo '</div>';
}
if (!empty($msg)) {
    echo '<div class="alert alert-info">';
    echo $msg;
    echo '</div>';
}
if (!empty($due_msg)) {
    echo '<div class="alert alert-info">';
    echo $due_msg;
    echo '</div>';
}
require_once 'config/dbConnect.php';
$user = $_SESSION['username'];
$history = "SELECT * FROM users WHERE username IN (SELECT downline FROM irion_downlines WHERE user='$user')";
$serialnumber = 1;
$history_result = "";
$trans_status = "";
$name = "";
$fname = "";
$lname = "";
$trans_type = 'credit';
$trans_proof = '';
$trans_date = '';
$status = 0;
echo '<form method="post" action="userMainTrans.php">';
echo '<table class="table table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Tel No</th>';
echo '<th>Account Name </th>';
echo '<th>Account Number</th>';
echo '<th>Bank Name</th>';
echo '<th>View Payment Image</th>';
echo '<th>Verify Transaction</th>';
echo '</tr>';
echo '</thead>';
if ($history_result = mysqli_query($conn, $history)) {
    if (mysqli_num_rows($history_result) > 0) {
        while ($row = mysqli_fetch_array($history_result)) {
            echo '<tbody>';
            $downline = $row['username'];
            $fname = $row['user_firstname'];
            $lname = $row['user_lastname'];
            $name = $fname . ' ' . $lname;

            $loadImgQuery = "SELECT * FROM transactions_info_all WHERE trans_confirmed=? AND made_trans_with=?";
            // -- AND made_trans_with=? AND trans_type=?";
            $stmt = $conn->prepare($loadImgQuery);
            $stmt->bind_param('bs', $status, $downline);
            // , $downline, $trans_type);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $trans_proof = $user['proof_destination'];
            $trans_date = $user['trans_date'];
            $amount = $user['amount'];
            echo '<input type="text" name="downline" value="' . $downline . '" hidden>'; //important. DO NOT DELETE
            echo '<input type="text" name="trans_date" value="' . $trans_date . '" hidden>'; //important. DO NOT DELETE
            echo '<input type="text" name="trans_proof" value="' . $trans_proof . '" hidden>'; //important. DO NOT DELETE
            echo '<input type="text" name="amount" value="' . $amount . '" hidden>'; //important. DO NOT DELETE
            echo '<tr>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $row['user_phone'] . '</td>';
            echo '<td>' . $row['user_acctname'] . '</td>';
            echo '<td>' . $row['user_acctnum'] . '</td>';
            echo '<td>' . $row['user_bank'] . '</td>';
            echo '<td>';
            // echo '<a href="#" data-toggle="modal" data-target="#TripleBedroom-Modal"> Check Proof <i class="fa fa-caret-up" aria-hidden="true"></i></a>';
            echo '<a href="' . $trans_proof . '" Check Proof <i class="fa fa-hand-pointer" aria-hidden="true"></i></a>';
            echo '</td>';
            echo '<td>';
            echo '<input type="submit" class="btn check-proof" name="verify_payment" value="VERIFY USER">';
            echo '</td>';
            echo '</tr>';

            $serialnumber++;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    }
}
echo '</div>';
echo '</div>';
echo '</div>';
?>
        <!-- end of table -->   

</div>



</body>
<script src="scripts/preview.js"></script>

</html>