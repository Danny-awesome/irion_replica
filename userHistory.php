<?php 
require_once "config/dbConnect.php";
require_once 'scripts/check_session_state.php'; 
require_once 'scripts/check_new_entry.php';
?>
  <!-- header page  -->
  <?php include 'userDashHeader.php' ?>
    <!-- sidebar page  -->
      <?php include 'userDashSideNav.php' ?>
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
           <!-- BOOTSTRAP MIN CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="icon" href="images/irion-logo1.png">
        <title>User History</title>
    </head>
    <body>
        <div class="dashboard-wrappers">
            <div class="row">
                <div class="col-md-9 m-4">
                    <div class="history-table mt-5">
                    <?php 
                        $error["no-data-found"] = "";
                        echo '<table class="table table-bordered table-sm table-hover">';
                        echo '<thead>';
                        echo '<tr>';
                        echo  '<th>S/N</th>';
                        echo   '<th>Transaction Made With</th>';
                        echo   '<th>Transaction Type</th>';
                        echo    '<th>Amount</th>';
                        echo    '<th>Transaction Date</th>';
                        echo   '</tr>';
                        echo  '</thead>';
                        require_once 'config/dbConnect.php';
                        $user = $_SESSION['username'];
                        $history = "SELECT * FROM transactions_info_all WHERE user = '$user'";
                        $serialnumber = 1;
                        $history_result = "";
                        if ($history_result = mysqli_query($conn, $history)) {
                            if (mysqli_num_rows($history_result) == 0) {
                                
                                $error["no-data-found"] = "NO DATA ON TRANSACTION HISTORY FOUND.";
                                echo '<div class="alert alert-success">';
                                echo $error["no-data-found"];
                                echo '</div>';
                               
                            }else {
                                echo  '<tbody>';
                                while ($row = mysqli_fetch_array($history_result)) {
                                    echo    '<tr>';
                                    echo        '<td>'.$serialnumber.'</td>';
                                    echo        '<td>'.$row['made_trans_with'].'</td>';
                                    echo        '<td>'.$row['trans_type'].'</td>';
                                    echo        '<td>'.$row['amount'].'</td>';
                                    echo        '<td>'.$row['trans_date'].'</td>';
                                    echo    '</tr>';
                                    $serialnumber++;
                                }
                                echo  '</tbody>';
                                echo '</table>'; 
                            }
                        }  
                        ?>   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>