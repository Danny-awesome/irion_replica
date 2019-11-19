<?php
    require_once 'config/dbConnect.php';
    require_once 'scripts/check_admin_session_state.php';
    require_once 'scripts/admin_unblock_reset_user.php';
?>
<!-- ADMIN HEADER  -->
<?php include 'adminDashHeader.php' ?>
<!-- ADMIN SIDE NAVIGATION  -->
<?php include 'adminDashSideBar.php' ?>


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
        <link rel="icon" href="images/irion-logo1.png">
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/adminDashboard.css">

   <!-- BOOTSTRAP MIN CSS  -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  <title>Reset User Account </title>
    </head>
    <body>
        <div class="dashboard-wrappers">
        <div class="row">
                <div class="col-md-12 admin-history p-5">
                <?php
                if(!empty($done)){
                      echo '<div class="alert alert-success">';
                      echo $done;
                      echo '</div>';
                    }
                    ?>
                <?php
                    echo '<div class="history-table">';
                        echo '<table class="table table-bordered table-sm table-hover">';
                            echo '<thead>';

                            $acct_type = 'common';
                            $level = 9;
                            $userDetails = "SELECT * FROM users WHERE acct_type='$acct_type' AND user_level='$level' ORDER BY user_lastname" ;
                            $history_result = "";
                    
                            echo '<tr>';
                            echo '<th>SURNAME</th>';
                            echo '<th>FIRST NAME</th>';
                            echo '<th>USERNAME</th>';
                            echo '<th>TELEPHONE</th>';
                            echo '<th>ACCOUNT NAME</th>';
                            echo '<th>ACCOUNT NO</th>';
                            echo '<th>BANK NAME</th>';
                            echo '<th>LEVEL</th>';
                            echo '<th></th>';
                            echo '</tr>';
                        echo '</thead>';

                        if ($history_result = mysqli_query($conn, $userDetails)) {
                            if (mysqli_num_rows($history_result) > 0) {

                                echo '<tbody>';
                                
                                while ($row = mysqli_fetch_array($history_result)) {
                                    echo '<form method="post" action="adminResetUser.php">';
                                    $user = $row['username'];
                                    echo '<tr>';
                                    echo '<td>'.$row['user_lastname'].'</td>';
                                    echo '<td>'.$row['user_firstname'].'</td>';
                                    echo '<td>'.$user.'</td>';
                                    echo '<td>'.$row['user_phone'].'</td>';
                                    echo '<td>'.$row['user_acctname'].'</td>';
                                    echo '<td>'.$row['user_acctnum'].'</td>';   
                                    echo '<td>'.$row['user_bank'].'</td>';  
                                    echo '<td>'.$row['user_level'].'</td>';  
                                    echo '<input type="text" name="subscriber" value="'.$user.'" hidden>';
                                    echo '<td><input type="submit" class="btn btn-success" name="reset" value="RESET"></td>';
                                    echo '</tr>';
                                    echo '</form>';
                                }
                                echo '</tbody>';
                            }
                        }
                        echo '</table>';        
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    <body>
</html>