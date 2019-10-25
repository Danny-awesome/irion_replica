<?php 
require_once "config/dbConnect.php";
require_once 'scripts/check_session_state.php'; 
require_once 'scripts/check_new_entry.php';
?>

<?php
  include 'userDashHeader.php';
  // sidebar page
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JQUERY 3.4.1  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP MIN JS  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- LOGO  -->
  
        <link rel="stylesheet" href="css/userTrans.css">
        <link rel="icon" href="images/irion-logo1.png">
    </head>

    <body>
        <div class="dashboard-wrappers">
    
        <div class="row pl-5 pr-5">
        
        <div class="col-md-7 pl-5">
          <P><span class="warning-note">PLEASE READ!! </span>When all your downlines have payed you, 
          you are expected to pay your upgrade fee to your upline before 48 hours runs out. If you do not
           abide by that, your account will be temporarily blocked until you pay unblocking fee of <span>&#8358;</span>5000 and then your account will be unblocked after 24hours.
If your account is blocked more than 3 times then you will be permanently blocked from using this platform. Once you are blocked, you will lose your level progress and start all over from the beginning.</P>
        </div>    
        <div class="col-md-5 pr-5">
              <!--  -->
            </div>
          </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class=" img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 1 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 2 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 3 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ DOWNLINE 4 ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Downline Level</span></td>
                                <td><h6 class="pt-1 pl-2">level 0</h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="VERIFY USER">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        <div class="vk-room-list-content">
         <div class="container">
            <div class="row pl-5 pr-5">
                <div class="item pb-4">
                    <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                        <div class="vk-dark-our-room-item-img">
                            <img src="images/default.png" alt="no payment proof yet" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 vk-dark-our-room-item-right">
                        <div class="vk-dark-our-room-item-content">
                            <h3 class="text-center"><a href="#">~ UPLINE ~</a></h3>
                            <table>
                              <tr>
                                <td>- Username</span></td>
                                <td><h6 class="pt-1 pl-2">user name </h6></td>
                              </tr>
                              <tr>
                                <td>- Tel No</span></td>
                                <td><h6 class="pt-1 pl-2">number</h6></td>
                              </tr>
                              <tr>
                                <td>- Account Name</span></td>
                                <td><h6 class="pt-1 pl-2">Acc name</h6></td>
                              </tr>
                              <tr>
                                <td>- Account No</span></td>
                                <td><h6 class="pt-1 pl-2">Acc number</h6></td>
                              </tr>
                              <tr>
                                <td>- Bank Name</span></td>
                                <td><h6 class="pt-1 pl-2">Bank Name </h6></td>
                              </tr>
                          </table>
                          
                          <input type="button" class="btn load-proof" value="LOAD PROOF">
                          <input type="button" class="btn check-proof" value="UPLOAD PROOF">
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>