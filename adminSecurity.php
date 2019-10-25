<!-- ADMIN HEADER  -->
<?php include 'adminDashHeader.php' ?>
<!-- ADMIN SIDE NAVIGATION  -->
<?php include 'adminDashSideBar.php' ?>

<!-- ADMIN DASHBOARD PAGE  -->
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
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/adminDashboard.css">

</head>
<body>
    <div class="dashboard-wrappers">
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