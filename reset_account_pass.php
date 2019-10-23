<?php require_once "scripts/account/_reset_account_pass.php" ?>
<?php require_once "scripts/registerUser.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="This content provides you the ability to grow your money safely online by referal">
      <meta name="keywords"  content="online,money,finance,growth">
      <meta name="author" content="Irion global"> 
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="css/bootstrap/js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
      <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body">

   <div class="row changepwd-card">
      <div class="col-md-4 a">
        <!-- ad -->
      </div>
      <!-- change the password of after the reset/new password is sent -->
      <div class="col-md-4 change-pwd-form">
        <form id="reset-password-form" action="reset_account_pass.php" method="post">
          <div class="login-icon  d-flex justify-content-center">
            <a href="index.html"><img src="images/Irion-logo.png" alt="irion's logo"></a>
          </div>
          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>
          <?php endif;?>
          <!-- <p class  ="recover-notice d-flex justify-content-center">
            copy and paste new password from your mail    
          </p> -->
          <div class="form-group d-flex justify-content-center">
            <input type="password" id="change-pwd" placeholder="password" name="new-pword">
          </div>
          <div class="form-group d-flex justify-content-center">
            <input type="password" id="change-pwd" placeholder="Retype Password" name="cpword">
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="submit"  id="change-pwd-btn" class="changepwdbtn" value="Reset Password" name="rp-btn">
          </div>
        </form>
      </div>
      <div class="col-md-4 b">
        <!-- ad -->
      </div>
    </body>
</html>