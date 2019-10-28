<?php 
require_once "config/dbConnect.php";
require_once 'scripts/check_session_state.php'; 
require_once 'scripts/proof_upload.php';
require_once 'scripts/verify_payment.php';
require_once 'scripts/check_new_entry.php';
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
                             
        <link rel="stylesheet" href="css/userTrans.css">
        <link rel="icon" href="images/irion-logo1.png">
        <title>Transactions Page</title>
    </head>

    <body>
      <div class="dashboard-wrappers">
      <div class="row pl-5 pr-5">
        
        <div class="col-md-7 pl-5">
          <P><span class="warning-note">PLEASE READ!! </span>When all your downlines have payed you, 
          you are expected to pay your upgrade fee to your upline before 48 hours runs out. If you do not
           abide by that, your account will be temporarily blocked until you pay unblocking fee of <span>&#8358;</span>5000 and then your account will be unblocked after 24hours.
If your account is blocked more than 3 times then you will be permanently blocked from using this platform. Once you are blocked, you will lose your level progress and start all over from the beginning.</P>
        </div>    
          <div class="col-md-5 pr-5">
              <!--  -->
            </div>
          </div>
        <div class="trans-container">
        <div class="row">
            <div class="col-md-12">
            <table class="table table-hover overflow-auto">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Tel No</th>
                  <th>Account Name </th>
                  <th>Account Number</th>
                  <th>Bank Name</th>
                  <th>Check Proof</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
          
                    <a href="#" data-toggle="modal" data-target="#TripleBedroom-Modal">Check Proof <i class="fa fa-caret-up" aria-hidden="true"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
         </div>
        </div>
      </div>
      <div class="modal" id="TripleBedroom-Modal">
            <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="modal-title">proof</h4>
                    </div>
                    <div class="modal-body">
                      <div class="vk-dark-our-room-item-img">
                         <img src="images/default.png" alt="no payment proof yet" class=" img-responsive">
                      </div>
                      <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                   
                    </div>

                  </div>
                  
                  </div>
                </div>
                    
                    </div>
                </div>

        <!-- <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class=" img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 1 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 2 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 3 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 4 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div> -->
            <?php
            
        // echo '<div class="vk-room-list-content">';
        //  echo '<div class="container">';
        //     echo '<div class="row pl-5 pr-5">';
        //     $user = $_SESSION['username'];
        //                 $history = "SELECT * FROM users WHERE username IN (SELECT downline FROM irion_downlines WHERE user='$user')";
        //                 $serialnumber = 1;
        //                  $history_result = "";
        //                  $trans_type = 'credit';
        //                  $trans_proof = '';
        //                  $trans_date = '';
        //                  $status = 0;
        //                 if ($history_result = mysqli_query($conn, $history)) {
        //                     if (mysqli_num_rows($history_result) == 0) {
        //                     }else {
        //                         while ($row = mysqli_fetch_array($history_result)) {
        //                           $downline = $row['username'];
                                  
        //                           if(isset($_POST['get_proof'])){
        //                             $loadImgQuery = "SELECT * FROM transactions_info_all WHERE trans_confirmed=? AND made_trans_with=? AND trans_type=?";
        //                             $stmt = $conn->prepare($loadImgQuery);
        //                             $stmt->bind_param('sss', $status, $downline, $trans_type);
        //                             $stmt->execute();
        //                             $result = $stmt->get_result();
        //                             $user = $result->fetch_assoc();
        //                             $trans_proof = $user['proof_destination'];
        //                             $trans_date = $user['trans_date'];
        //                           }

        //                           echo '<div class="item pb-4">';
        //                           echo '<form method="post" action="userMainTrans.php" enctype="multipart/form-data">';
        //                               echo '<input type="text" name="downline" value="'.$downline.'" hidden>'; //important. DO NOT DELETE
        //                               echo '<input type="text" name="trans_date" value="'.$trans_date.'" hidden>'; //important. DO NOT DELETE
        //                               if(!empty($updateStatus)){
        //                                 echo '<div class="alert '.$alert_class.' alert-dismissible">';
        //                                 echo $updateStatus;
        //                                 echo '</div>';
        //                               }
        //                               echo '<div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">';
        //                                   echo '<div class="vk-dark-our-room-item-img">';
        //                                   if(empty($trans_proof)){
        //                                     echo '<img src="images/default.png" alt="no payment proof yet" class=" img-responsive">';
        //                                   }else{
        //                                     echo '<img src="'.$trans_proof.'" alt="no payment proof yet" class=" img-responsive">';
        //                                   }
        //                                   echo '</div>';
        //                               echo '</div>';
        //                               echo '<div class="col-md-6 vk-dark-our-room-item-right">';
        //                                   echo '<div class="vk-dark-our-room-item-content">';
                                          
        //                                       echo '<h3 class="text-center"><a href="#">~ DOWNLINE '.$serialnumber.' ~</a></h3>';
        //                                       echo '<table>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Name</span></td>';
        //                                           $fname = $row['user_firstname'];
        //                                           $lname = $row['user_lastname'];
        //                                           $name = $fname.' '.$lname;
        //                                           echo '<td><h6 class="pt-1 pl-2">'.$name.'</h6></td>';
        //                                         echo '</tr>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Downline Level</span></td>';
        //                                           echo '<td><h6 class="pt-1 pl-2">level '.$row['user_level'].'</h6></td>';
        //                                         echo '</tr>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Tel No</span></td>';
        //                                           echo '<td><h6 class="pt-1 pl-2">'.$row['user_phone'].'</h6></td>';
        //                                         echo '</tr>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Account Name</span></td>';
        //                                           echo '<td><h6 class="pt-1 pl-2">'.$row['user_acctname'].'</h6></td>';
        //                                         echo '</tr>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Account No</span></td>';
        //                                           echo '<td><h6 class="pt-1 pl-2">'.$row['user_acctnum'].'</h6></td>';
        //                                         echo '</tr>';
        //                                         echo '<tr>';
        //                                           echo '<td>- Bank Name</span></td>';
        //                                           echo '<td><h6 class="pt-1 pl-2">'.$row['user_bank'].'</h6></td>';
        //                                         echo '</tr>';
        //                                     echo '</table>';
        //                                     echo '<input type="submit" class="btn load-proof" value="LOAD PROOF" name="get_proof">';
        //                                     echo '<input type="submit" class="btn check-proof" value="VERIFY USER" name="verify_payment">';
        //                                           $serialnumber++;
                                                      
        //                                 echo '</div>';
        //                               echo '</div>';
        //                         }
        //                         echo '<form>';
        //           echo '</div>';
        //         echo '</div>';
        //     echo '</div>';
        //                     }
        //                 } 
                    ?>
            <!-- <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4"> -->
                    <?php
                    // require_once "config/dbConnect.php";
                    
                    // $fname = $lname = $phone = $acctname = $acctnum = $bank = $name = $uname = '';
                    // $uname = $_SESSION['username'];
                    // $query = "SELECT * FROM users WHERE username IN (SELECT upline FROM irion_uplines WHERE user='$uname')";
                    // if ($stmt = $conn ->prepare($query)) {
                    //   if ($stmt ->execute()) {
                    //     $result = $stmt ->get_result();
                    //         $user = $result ->fetch_array();
                    //         $fname = $user['user_firstname'];
                    //         $upline = $user['username'];
                    //         $lname = $user['user_lastname'];
                    //         $name = $fname.' '.$lname;
                    //         $phone = $user['user_phone'];
                    //         $acctnum = $user['user_acctnum'];
                    //         $acctname = $user['user_acctname'];
                    //         $bank = $user['user_bank'];
                    //     }
                    // }
                    // echo '<form method="post" action="userMainTrans.php" enctype="multipart/form-data">';
                    // echo '<input type="text" name="upline" value="'.$upline.'" hidden>'; //important. DO NOT DELETE

                    // if(!empty($image_upload_msg)){
                    //   echo '<div class="alert '.$alert_class.' alert-dismissible">';
                    //   echo $image_upload_msg;
                    //   echo '</div>';
                    // }
                    // if(!empty($proof_upload_msg)){
                    //   echo '<div class="alert '.$alert_class.' alert-dismissible fade in">';
                    //   echo $proof_upload_msg;
                    //   echo '</div>';
                    //   echo '<div class="alert '.$alert_info_class.' alert-dismissible fade in">';
                    //   echo $call_upline;
                    //   echo '</div>';
                    // }

                    // echo '<div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">';
                    // echo '<div class="vk-dark-our-room-item-img">';
                    // echo '<img src="images/default.png" onclick="triggerClick()" alt="no payment proof yet" class="img-responsive" id="proofDisplay">';
                    // echo '</div>';
                    // echo '</div>';
                    // echo '<div class="col-md-6 vk-dark-our-room-item-right">';
                    // echo '<div class="vk-dark-our-room-item-content">';
                    // echo '<h3 class="text-center"><a href="#">~ UPLINE ~</a></h3>';
                    // echo '<table>';
                    // echo '<tr>';
                    // echo '<td>- Name</span></td>';
                    // echo '<td><h6 class="pt-1 pl-2">'.$name.' </h6></td>';
                    // echo '</tr>';
                    // echo '<tr>';
                    // echo '<td>- Tel No</span></td>';
                    // echo '<td><h6 class="pt-1 pl-2">'.$phone.'</h6></td>';
                    // echo '</tr>';
                    // echo '<tr>';
                    // echo '<td>- Account Name</span></td>';
                    // echo '<td><h6 class="pt-1 pl-2">'.$acctname.'</h6></td>';
                    // echo '</tr>';
                    // echo '<tr>';
                    // echo '<td>- Account No</span></td>';
                    // echo '<td><h6 class="pt-1 pl-2">'.$acctnum.'</h6></td>';
                    // echo '</tr>';
                    // echo '<tr>';
                    // echo '<td>- Bank Name</span></td>';
                    // echo '<td><h6 class="pt-1 pl-2">'.$bank.'</h6></td>';
                    // echo '</tr>';
                    // echo '</table>';
                          
                    // echo '<input type="file" onchange="displayImage(this)" class="btn load-proof" value="LOAD PROOF" name="load_proof" id="load_proof">';
                    // echo '<input type="submit" class="btn check-proof" value="UPLOAD PROOF" name="upload_proof">';
                    // echo '</div>';
                    // echo '</div>';
                    // echo '</form>';
                    ?>
                  <!-- </div>
                </div> -->

              
            <!-- </div> -->
    </body>
    <script src="scripts/preview.js"></script>
</html>