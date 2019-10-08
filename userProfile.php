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
    <link rel="stylesheet" href="css/profile.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
  <div class="dashboard-wrappers">
    <div class="mt-5 p row">
        <div class="col-md-6 offset-md-2 pr-5 pd-container">
            <form id="personal-details">
                <h6 class="text-center">Profile Details</h6>
                <div class="form-group">
                <label for="LName">Last Name :</label>
                <input type="text" class="form-control" id="LName" placeholder="Enter Last Name">
                </div>  
                <div class="form-group">
                <label for="FName">First Name :</label>
                <input type="text" class="form-control" id="FName" placeholder="Enter First Name">
                </div>
                <label class="radio-inline"> 
                    Gender :
                <input type="radio" name="optradio" class="ml-3">Male
                </label>
                <label class="radio-inline">
                <input type="radio" name="optradio" class="ml-3">Female
                </label>
                <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                <label for="telno">Telephone No :</label>
                <input type="number" class="form-control" id="telno" placeholder="Enter Telephone Number">
                </div>
                <div class="form-group">
                <label for="o-pwd">Old Password :</label>
                <input type="password" class="form-control" id="o-pwd" placeholder="Enter Old Password">
                </div>
                <div class="form-group">
                <label for="c-pwd">Change Password :</label>
                <input type="password" class="form-control" id="c-pwd" placeholder="Enter New Password">
                </div>
                <div class="form-group">
                <label for="n-pwd">New Password :</label>
                <input type="password" class="form-control" id="n-pwd" placeholder="Retype New Password">
                </div>
                
                <div class="form-group">
                <label for="AName">Account Name :</label>
                <input type="text" class="form-control" id="AName" placeholder="Enter Account Name">
                </div>
                <div class="form-group">
                <label for="telno">Account No :</label>
                <input type="number" class="form-control" id="telno" placeholder="Enter Account Number">
                </div>
                <div class="form-group">
                <label for="sel1">Bank Name :</label>
                <select class="form-control" id="sel1">
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
                <button type="reset" class="mt-4 cancel-btn mr-2">CANCEL</button>
                <button type="submit" class="mt-4 save-btn">SAVE</button>
            </div>
        </form> 
      </div>
  </div>
  </div>
</body>