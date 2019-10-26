<?php
// HEADER 
    include 'userDashHeader.php';
// SIDENAV 
    include 'userDashSideNav.php';
?>

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
  
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/userTrans.css">
    <title>Central Transactions</title>
</head> 

    <body>
    <div class="dashboard-wrappers">
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <?php
                        echo '<div class="vk-dark-our-room-item-img">';
                            echo '<img src="images/default.png" alt="no payment proof yet" class=" img-responsive">';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="col-md-6 vk-dark-our-room-item-right">';
                        echo '<div class="vk-dark-our-room-item-content">';
                        $user = $_SESSION['username'];
                        $history = "SELECT * FROM users WHERE username IN (SELECT downline FROM irion_downlines WHERE user='$user')";
                        $serialnumber = 1;
                         $history_result = "";
                        if ($history_result = mysqli_query($conn, $history)) {
                            if (mysqli_num_rows($history_result) == 0) {
                            }else {
                                while ($row = mysqli_fetch_array($history_result)) {
                             echo '<h3 class="text-center"><a href="#">~ DOWNLINE '.$serialnumber.' ~</a></h3>';
                            echo '<table>';
                            echo '<td>- Name</span></td>';
                            $fname = $row['user_firstname'];
                            $lname = $row['user_lastname'];
                            $name = $fname.' '.$lname;
                            echo '<td><h6 class="pt-1 pl-2">'.$name.'</h6></td>';
                              echo '<tr>';
                                echo '<td>- Downline Level</span></td>';
                                echo '<td><h6 class="pt-1 pl-2">level '.$row['user_level'].'</h6></td>';
                              echo '</tr>';
                              echo '<tr>';
                                echo '<td>- Tel No</span></td>';
                                echo '<td><h6 class="pt-1 pl-2">'.$row['user_phone'].'</h6></td>';
                              echo '</tr>';
                              echo '<tr>';
                                echo '<td>- Account Name</span></td>';
                                echo '<td><h6 class="pt-1 pl-2">'.$row['user_acctname'].'</h6></td>';
                              echo '</tr>';
                              echo '<tr>';
                                echo '<td>- Account No</span></td>';
                                echo '<td><h6 class="pt-1 pl-2">'.$row['user_acctnum'].'</h6></td>';
                              echo '</tr>';
                              echo '<tr>';
                                echo '<td>- Bank Name</span></td>';
                                echo '<td><h6 class="pt-1 pl-2">'.$row['user_bankname'].'</h6></td>';
                              echo '</tr>';
                          echo '</table>';
                          echo '<input type="submit" class="btn load-proof" value="LOAD PROOF">';
                          echo '<input type="submit" class="btn check-proof" value="VERIFY USER">';
                                $serialnumber++;
                                    
                                }
                       echo '</div>';
                    echo '</div>';
                            }
                        } 
                        ?>
                  </div>
                </div>
            </div>
      
        </div>     
    </body>