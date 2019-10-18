<?php require_once 'scripts/check_session_state.php'; ?>
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
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/animate.css">
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
                            if (mysqli_num_rows($history_result) > 0) {
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
                            }else {
                                $error["no-data-found"] = "NO DATA ON TRANSACTION HISTORY FOUND.";
                                echo '<span class="block">'.$error["no-data-found"].'<i class="fas fa-empty"></i></span>';
                            }
                        }  
                        ?>   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>