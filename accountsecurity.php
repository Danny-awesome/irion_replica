<?php require_once 'scripts/check_session_state.php';
require_once 'scripts/transaction_due.php';
?>
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
    <script src="js/script.js"></script>
       <!-- BOOTSTRAP MIN CSS  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  
    <link rel="stylesheet" href="css/profile.css">
    <title>Update Password</title>

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
        <div class="mt-5 row">
            <div class="col-md-6 offset-md-2 mr-3 pd-container">
                <form id="personal-details" method="post" action="accountsecurity.php">
                    <?php
                        if (!empty($update_confirmed)) {
                            echo '<div class="alert alert-success">';
                            echo $update_confirmed;
                            echo '</div>';
                        }
                        echo '<h6 class="text-center">Change Password</h6>';
                        echo '<div class="form-group">';
                        echo '<div class="form-group">';
                        echo '<label for="o-pwd">Old Password :</label>';
                        echo '<p class="error-msg">' . $numero_nueve . '</p>';
                        echo '<input type="password" class="form-control" id="o-pwd" name="pword" placeholder="">';
                        echo '</div>';
                        echo ' ';
                        echo '<div class="form-group">';
                        echo '<label for="c-pwd">New Password :</label>';
                        echo '<p class="error-msg">' . $numero_diez . '</p>';
                        echo '<input type="password" class="form-control" id="c-pwd" name="npword" placeholder="">';
                        echo '</div>';
                        echo ' ';
                        echo '<div class="form-group">';
                        echo '<label for="n-pwd">Confirm New Password :</label>';
                        echo '<p class="error-msg">' . $numero_once . '</p>';
                        echo '<input type="password" class="form-control" name="cnpword" id="n-pwd" placeholder="">';
                        echo '</div>';
                        echo ' ';
                        echo '<button type="submit" class="mt-4 up-btn " name="security_reset_btn">Update Password</button>';
                        echo '</div>';
                    ?>
            </div>
        </div>
    </div>
</body>