<?php
// HEADER 
    include 'centralHeaderNav.php';
// SIDENAV 
    include 'centralSideNav.php';
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
  
    <link rel="icon" href="images/irion-logo1.png">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Central Profile</title>
</head>
<body>
    <div class="dashboard-wrappers">
        <div class="mt-5 row">
            <div class="col-md-6 offset-md-2 mr-3 pd-container">
                <form id="personal-details" method="post" action="userProfile.php">
                    <h6 class="text-center">Profile Details</h6>
                        <div class="form-group">
                            <label for="LName">Last Name :</label>
                            <input type="text" class="form-control" id="LName" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="FName">First Name :</label>
                            <input type="text" class="form-control" id="FName" name="firstname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="uname">Username :</label>
                            <input type="text" class="form-control" id="Uname" name="uname" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" > 
                        <div>
                        <div class="form-group pt-3">
                            <label for="telno">Telephone No :</label>
                            <input type="text" class="form-control" id="telno" name="phone" placeholder="Telephone No">
                        <div>
                        <div class="form-group pt-3">
                            <label for="AName">Account Name :</label>
                            <input type="text" class="form-control" id="AName" name="acctname" placeholder="Account Name"> 
                        <div>
                        <div class="form-group pt-3">
                            <label for="telno">Account No :</label>
                            <input type="text" class="form-control" id="telno" name="acctnum" placeholder="Account Number"> 
                        <div>
                        <div class="form-group">
                            <label for="sel1">Bank Name :</label>
                            <select class="form-control" id="sel1" name="bank">
                                <option>Access Bank Plc</option>
                                   <option>Fidelity Bank Plc</option>
                                   <option>First City Monument Bank Plc</option>
                                   <option>First Bank of Nigeria Limited</option>
                                   <option>Guaranty Trust Bank Plc</option>
                                   <option>Union Bank of Nigeria Plc</option>
                                   <option>United Bank for Africa Plc</option>
                                   <option>Zenith Bank Plc</option>
                                   <option>Citibank Nigeria Limited</option>
                                   <option>Heritage Banking Company Limited</option>
                                   <option>Keystone Bank Limited</option>
                                   <option>Polaris Bank Limited. </option>
                                   <option>Stanbic IBTC Bank Plc</option>
                                   <option>Standard Chartered</option>
                                   <option>Sterling Bank Plc</option>
                                   <option>Unity Bank Plc</option>
                                   <option>Wema Bank Plc</option>
                            </select>
                                <button type="submit" class="mt-4 cancel-btn mr-2" name="">CANCEL</button>
                                <button type="submit" class="mt-4 save-btn" name="update_profile_btn">SAVE</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>