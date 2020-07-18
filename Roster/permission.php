<?php
session_start();
//check user is logged in or not
if (!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
	# code...
	header("Location: login.php");
    exit;
}

?>