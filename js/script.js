// on clicks
$(document).ready(function(){
    $(".submit-message").click(homePageMsg);
    $(".sign-up-btn").click(signUpForm);
    $(".loginbtn").click(loginForm);
    $(".recoverbtn").click(retrievepwd);
    $(".changepwdbtn").click(changepassword);
});

// preloader
$(window).on('load',function(){
  $('.preloader').addClass('complete');
  preloaderFadeOutTime = 500;
})

// home page
function homePageMsg(){
    var v_email = document.getElementById("msg-email").value;
    var v_pwd = document.getElementById("msg-pwd").value;
    var v_comment = document.getElementById("comment").value;
    var email_Pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(v_email != "" &&  v_pwd != "" && v_comment != ""){
        if(v_email.match(email_Pattern)){
            alert("your message was successfully sent,thank you!");
            document.getElementById("send-message").reset();
        } 
        else{
            alert("Please enter a valid email address");
        }
        }
        else{
        alert("kindy fill up all fields")
      }   
    }
  

//signup page form validation
function signUpForm(){
    var v_surname = document.getElementById("signup-surname").value;
    var v_fname = document.getElementById("signup-firstName").value;
    var v_uname = document.getElementById("signup-username").value
    var v_email = document.getElementById("signup-email").value;
    var v_pwd = document.getElementById("signup-pwd").value;
    var v_rpwd = document.getElementById("signup-re-pwd").value;
    var v_telNo = document.getElementById("signup-telNo").value;
    var email_Pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(v_surname != "" && v_fname !="" && v_uname !="" && 
    v_email !="" &&  v_pwd !="" && v_rpwd != "" && v_telNo !=""){    
     if(v_email.match(email_Pattern)){
        if(v_pwd == v_rpwd){
          // window.open("profileB.php");
          document.getElementById("signupform").reset();
          }
        else{
          alert("passwords do not match");
        }
      }
      else{
        alert("Please enter a valid email address");
      }
    }
  else{
    alert("please fill up the empty fields");
  }}
  
    //login page form validation
    function loginForm(){
      var v_email = document.getElementById("login-email").value;
      var v_pwd = document.getElementById("login-pwd").value;
      var email_Pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(v_email !="" &&  v_pwd !=""){
        if(v_email.match(email_Pattern)){
          // window.open("profileB.php");
          document.getElementById("loginform").reset();
        }else{
          alert("Please enter a valid email address");
        }
      }else{
        alert("please fill up the the empty fields");
      }
    }

    //retrieve pwd form val
    function retrievepwd(){
      var v_email = document.getElementById("recover-email").value;
      var email_Pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(v_email !=""){
        if(v_email.match(email_Pattern)){
          window.open("resetPassword.php");
          document.getElementById("retrieve-acc-form").reset();
        }else{
          alert("Please enter a valid email address");
        }
      }else{
        alert("please enter your email address");
      }
    }

    // change pwd
  function changepassword(){
    var v_pwd = document.getElementById("change-pwd").value;
    if( v_pwd !=""){
      // window.open("profileB.php");
      document.getElementById("reset-password-form").reset();
    }else{
      alert("please enter your new password");
    }
  }
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  // slider
  $(document).ready(function(){
    $("#payment-method").slideDown("slow");
});