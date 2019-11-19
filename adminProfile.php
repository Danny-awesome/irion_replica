<?php 
require_once 'scripts/check_admin_session_state.php';
require_once 'scripts/admin_profile_update.php';
?>
  <!-- header page  -->
  <?php include 'adminDashHeader.php'?>
  <!-- sidebar page  -->
  <?php include 'adminDashSideBar.php'?>
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
      <link rel="stylesheet" href="css/profile.css">
      <link rel="icon" href="images/irion-logo1.png">
        <title>Admin Profile</title>
  </head>

  <body>
      <div class="dashboard-wrappers">
          <div class="mt-5 row">
              <div class="col-md-6 offset-md-2 mr-3 pd-container">
                  <form id="personal-details" method="post" action="adminProfile.php">
                      <?php
                      if (!empty($profileUpdated)) {
                            echo '<div class="alert alert-info">';
                            echo $profileUpdated;
                            echo '</div>';
                        }

                        require_once 'config/dbConnect.php';
                        $admin = $_SESSION['admin_id'];
                        $profile_all = "SELECT * FROM super_user WHERE admin_id = '$admin'";
                        $get_profile_result = "";
                        if ($get_profile_result = mysqli_query($conn, $profile_all)) {
                            if (mysqli_num_rows($get_profile_result) > 0) {
                                while ($row = mysqli_fetch_array($get_profile_result)) {
                                    echo '<h6 class="text-center">Profile Details</h6>';
                                    echo '<div class="form-group">';
                                    echo '<label for="LName">Admin Name :</label>';
                                    echo '<p class="error-msg">' . $numero_uno . '</p>';
                                    echo '<input type="text" class="form-control" id="LName" name="admin_name" placeholder="" value="' . $row['admin'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    
                                    echo '<button type="submit" class="mt-4 cancel-btn mr-2" name="">CANCEL</button>';
                                    echo '<button type="submit" class="mt-4 save-btn" name="update_profile_btn">SAVE</button>';
                                    echo '</div>';
                                }
                            }
                        }
                      ?>
              </div>
          </div>
      </div>
  </body>