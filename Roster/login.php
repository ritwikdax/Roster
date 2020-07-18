<?php
include "check.php";
session_start();
if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK") && strcmp(session_id(), "") !=0) {
    header("Location: update-roster.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/login.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap styles-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--Custom stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form id="login-form" onsubmit="return false;">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right"><strong>User ID</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus placeholder="Type Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><strong>Password</strong></label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required placeholder="Type Password">
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                    </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
    </div>


</main>
<div class="p-5 display-message" >
    <div class="alert alert-info shadow-lg" id="message">
</div>
 

</div>

</body>
</html>