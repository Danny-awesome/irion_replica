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
<body>
    <form>
        <div class="form-group d-flex justify-content-center ">
            <input type="password"  id="signup-pwd" placeholder="Password" >
          </div>
          <div class="form-group d-flex justify-content-center ">
            <input type="password"  id="signup-re-pwd" placeholder="Retype password">
          </div>
         <div class="d-flex justify-content-center">
            <button type="button" class="sign-up-btn" >SIGN UP</button>
          </div>  
    </form>
    <script>
        $(document).ready(function(){
            $(".sign-up-btn").click(signUpForm);
        });
        function signUpForm(){
            var v_pwd = document.getElementById("signup-pwd").value;
            var v_rpwd = document.getElementById("signup-re-pwd").value;
            console.log(v_pwd + " " + v_rpwd);
            if(v_pwd === v_rpwd){
                console.log("wow! it matched");
            }else{
                console.log("not a match");
            }
        }
    </script>
</body>