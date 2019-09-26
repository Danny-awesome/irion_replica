// on clicks
$(document).ready(function(){
    $(".submit-message").click(homePageMsg);
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
  
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}