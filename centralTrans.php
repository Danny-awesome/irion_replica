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
    <!-- <?php
// echo '<div class="vk-room-list-content">';
// echo '<div class="container">';
// echo '<div class="row pl-5 pr-5">';
// $user = $_SESSION['username'];
// $history = "SELECT * FROM users WHERE username IN (SELECT downline FROM irion_downlines WHERE user='$user')";
// $serialnumber = 1;
// $history_result = "";
// if ($history_result = mysqli_query($conn, $history)) {
//     if (mysqli_num_rows($history_result) == 0) {
//     } else {
//         while ($row = mysqli_fetch_array($history_result)) {
//             echo '<div class="item pb-4">';
//             echo '<div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">';
//             echo '<div class="vk-dark-our-room-item-img">';
//             echo '<img src="images/default.png" alt="no payment proof yet" class=" img-responsive">';
//             echo '</div>';
//             echo '</div>';
//             echo '<div class="col-md-6 vk-dark-our-room-item-right">';
//             echo '<div class="vk-dark-our-room-item-content">';

//             echo '<h3 class="text-center"><a href="#">~ DOWNLINE ' . $serialnumber . ' ~</a></h3>';
//             echo '<table>';
//             echo '<tr>';
//             echo '<td>- Name</span></td>';
//             $fname = $row['user_firstname'];
//             $lname = $row['user_lastname'];
//             $name = $fname . ' ' . $lname;
//             echo '<td><h6 class="pt-1 pl-2">' . $name . '</h6></td>';
//             echo '</tr>';
//             echo '<tr>';
//             echo '<td>- Downline Level</span></td>';
//             echo '<td><h6 class="pt-1 pl-2">level ' . $row['user_level'] . '</h6></td>';
//             echo '</tr>';
//             echo '<tr>';
//             echo '<td>- Tel No</span></td>';
//             echo '<td><h6 class="pt-1 pl-2">' . $row['user_phone'] . '</h6></td>';
//             echo '</tr>';
//             echo '<tr>';
//             echo '<td>- Account Name</span></td>';
//             echo '<td><h6 class="pt-1 pl-2">' . $row['user_acctname'] . '</h6></td>';
//             echo '</tr>';
//             echo '<tr>';
//             echo '<td>- Account No</span></td>';
//             echo '<td><h6 class="pt-1 pl-2">' . $row['user_acctnum'] . '</h6></td>';
//             echo '</tr>';
//             echo '<tr>';
//             echo '<td>- Bank Name</span></td>';
//             echo '<td><h6 class="pt-1 pl-2">' . $row['user_bank'] . '</h6></td>';
//             echo '</tr>';
//             echo '</table>';
//             echo '<input type="submit" class="btn load-proof" value="LOAD PROOF">';
//             echo '<input type="submit" class="btn check-proof" value="VERIFY USER">';
//             $serialnumber++;

//             echo '</div>';
//             echo '</div>';
                            // }
                        // } 
                    ?> -->
      <div class="row">
            <div class="col-md-12">
            <table class="table table-hover overflow-auto">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
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
                  <td></td>
                  <td>
          
                    <a href="#" data-toggle="modal" data-target="#TripleBedroom-Modal"> BOOK NOW <i class="fa fa-caret-up" aria-hidden="true"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
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

        </div>     
    </body>
    </html>