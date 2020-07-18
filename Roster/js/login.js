
$(document).ready(function() {

  $("#message").hide();

  $("#login-form").submit(function(){
    var username = $("#username").val();
    var password = $("#password").val();

    $.post("validate-login.php", 
      {
        uname : username,
        pwd : password
      }, 
      function(result, status){
        if (result == "success") {
          window.location.href = "update-roster.php";
          //alert("Working");
        }else{
          $("#message").html(result);
          $("#message").show();
          setTimeout(function(){
            $("#message").hide();
          }, 2000);
          
          //alert("Working");
        }
        
    });
  });
});