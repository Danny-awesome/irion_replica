<?php
// HEADER
include 'userDashHeader.php';
// SIDENAV
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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/userTrans.css">
    <title>Central Transactions</title>
</head>

    <body>
    <div class="dashboard-wrappers">
   
   <?php
            echo '<div class="trans-container">';
            echo '<div class="row">';
            echo '<div class="col-md-12">';
            if(!empty($updateStatus)){
              echo '<div class="alert '.$alert_class.'">';
              // echo '<div class="alert '.$alert_class.'">';
              echo $updateStatus;
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
                $name = $fname.' '.$lname;
                
                $loadImgQuery = "SELECT * FROM transactions_info_all WHERE trans_confirmed=? AND made_trans_with=? AND trans_type=? LIMIT 1";
                $stmt = $conn->prepare($loadImgQuery);
                $stmt->bind_param('sss', $status, $downline, $trans_type);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();
                $trans_proof = $user['proof_destination'];
                $trans_date = $user['trans_date'];
                echo '<input type="text" name="downline" value="' . $downline . '" hidden>'; //important. DO NOT DELETE
                    echo '<input type="text" name="trans_date" value="' . $trans_date . '" hidden>'; //important. DO NOT DELETE
                    echo '<input type="text" name="trans_proof" value="' . $trans_proof . '" hidden>'; //important. DO NOT DELETE
                    echo '<tr>';
                echo '<td>'.$name.'</td>';
                  echo '<td>'.$row['user_phone'].'</td>';
                  echo '<td>'.$row['user_acctname'].'</td>';        
                  echo '<td>'.$row['user_acctnum'].'</td>';
                  echo '<td>'.$row['user_bank'].'</td>';
                  echo '<td>';
                  // echo '<a href="#" data-toggle="modal" data-target="#TripleBedroom-Modal"> Check Proof <i class="fa fa-caret-up" aria-hidden="true"></i></a>';
                  echo '<a href="'.$trans_proof.'" Check Proof <i class="fa fa-hand-pointer" aria-hidden="true"></i></a>';
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
           
                    
                    </div>
        
        </div>     
    </body>
    </html>