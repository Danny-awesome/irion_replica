  <?php require_once 'scripts/check_session_state.php';?>
  <?php require_once 'scripts/update_profile.php';?>
  <!-- header page  -->
  <?php include 'userDashHeader.php'?>
  <!-- sidebar page  -->
  <?php include 'userDashSideNav.php'?>
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
      <link rel="stylesheet" href="css/profile.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>

  <body>
      <div class="dashboard-wrappers">
          <div class="mt-5 row">
              <div class="col-md-6 offset-md-2 mr-3 pd-container">
                  <form id="personal-details" method="post" action="userProfile.php">
                      <?php

                        if (!empty($_SESSION['notactivemsg'])) {
                            echo '<div class="alert alert-success">';
                            echo $_SESSION['notactivemsg'];
                            echo '</div>';
                        } elseif (!empty($profileUpdated)) {
                            echo '<div class="alert alert-success">';
                            echo $profileUpdated;
                            echo '</div>';
                        }

                        require_once 'config/dbConnect.php';
                        $user = $_SESSION['id'];
                        $profile_all = "SELECT * FROM users WHERE user_id = '$user'";
                        $get_profile_result = "";
                        if ($get_profile_result = mysqli_query($conn, $profile_all)) {
                            if (mysqli_num_rows($get_profile_result) > 0) {
                                while ($row = mysqli_fetch_array($get_profile_result)) {
                                    echo '<h6 class="text-center">Profile Details</h6>';
                                    echo '<div class="form-group">';
                                    echo '<label for="LName">Last Name :</label>';
                                    echo '<p class="error-msg">' . $numero_uno . '</p>';
                                    echo '<input type="text" class="form-control" id="LName" name="lastname" placeholder="" value="' . $row['user_lastname'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="FName">First Name :</label>';
                                    echo '<p class="error-msg">' . $numero_dos . '</p>';
                                    echo '<input type="text" class="form-control" id="FName" name="firstname" placeholder="" value="' . $row['user_firstname'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="UName">Username :</label>';
                                    echo '<p class="error-msg">' . $numero_tres . '</p>';
                                    echo '<input type="text" class="form-control" id="UName" name="username" placeholder="" value="' . $row['username'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="email">Email :</label>';
                                    echo '<p class="error-msg">' . $numero_cuatro . '</p>';
                                    echo '<input type="email" class="form-control" id="email" name="email" placeholder="" value="' . $row['user_email'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="telno">Telephone No :</label>';
                                    echo '<p class="error-msg">' . $numero_cinco . '</p>';
                                    echo '<input type="text" class="form-control" id="telno" name="phone" placeholder="" value="' . $row['user_phone'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    // echo '<div class="form-group">';
                                    // echo '<label for="o-pwd">Old Password :</label>';
                                    // echo '<p class="error-msg">'.$numero_cinco.'</p>';
                                    // echo '<input type="password" class="form-control" id="o-pwd" name="pword" placeholder="">';
                                    // echo '</div>';
                                    // echo ' ';
                                    // echo '<div class="form-group">';
                                    // echo '<label for="c-pwd">New Password :</label>';
                                    // echo '<p class="error-msg">'.$numero_seis.'</p>';
                                    // echo '<input type="password" class="form-control" id="c-pwd" name="npword" placeholder="">';
                                    // echo '</div>';
                                    // echo ' ';
                                    // echo '<div class="form-group">';
                                    // echo '<label for="n-pwd">Confirm New Password :</label>';
                                    // echo '<p class="error-msg">'.$numero_siete.'</p>';
                                    // echo '<input type="password" class="form-control" name="cnpword" id="n-pwd" placeholder="">';
                                    // echo '</div>';
                                    // echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="AName">Account Name :</label>';
                                    echo '<p class="error-msg">' . $numero_seis . '</p>';
                                    echo '<input type="text" class="form-control" id="AName" name="acctname" placeholder="" value="' . $row['user_acctname'] . '">';
                                    echo '</div>';
                                    echo ' ';
                                    // if (empty($_SESSION['notactivemsg'])) {
                                    //   echo '<div class="form-group">';
                                    //   echo '<label for="telno">Account No :</label>';
                                    //   echo '<p class="error-msg">'.$numero_siete.'</p>';
                                    //   echo '<input type="text" class="form-control" id="telno" name="acctnum" placeholder="" value="' . $row['user_acctnum'] . '">';
                                    //   echo '</div>';

                                    // } else {
                                    echo '<div class="form-group">';
                                    echo '<label for="telno">Account No :</label>';
                                    echo '<p class="error-msg">' . $numero_siete . '</p>';
                                    echo '<input type="text" class="form-control" id="telno" name="acctnum" placeholder="" value="' . $row['user_acctnum'] . '">';
                                    echo '</div>';
                                    // }

                                    echo ' ';
                                    echo '<div class="form-group">';
                                    echo '<label for="sel1">Bank Name :</label>';
                                    echo '<p class="error-msg">' . $numero_ocho . '</p>';
                                    echo '<select class="form-control" id="sel1" name="bank">';
                                    echo '<option value="">' . $row['user_bank'] . '</option>';
                                    echo '<option>Access Bank Plc</option>';
                                    echo '<option>Fidelity Bank Plc</option>';
                                    echo '<option>First City Monument Bank Plc</option>';
                                    echo '<option>First Bank of Nigeria Limited</option>';
                                    echo '<option>Guaranty Trust Bank Plc</option>';
                                    echo '<option>Union Bank of Nigeria Plc</option>';
                                    echo '<option>United Bank for Africa Plc</option>';
                                    echo '<option>Zenith Bank Plc</option>';
                                    echo '<option>Citibank Nigeria Limited</option>';
                                    echo '<option>Heritage Banking Company Limited</option>';
                                    echo '<option>Keystone Bank Limited</option>';
                                    echo '<option>Polaris Bank Limited. </option>';
                                    echo '<option>Stanbic IBTC Bank Plc</option>';
                                    echo '<option>Standard Chartered</>';
                                    echo '<option>Sterling Bank Plc</option>';
                                    echo '<option>Unity Bank Plc</option>';
                                    echo '<option>Wema Bank Plc</option>';
                                    echo '</select>';
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