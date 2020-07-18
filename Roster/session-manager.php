<?php
if (session_id() == "") {
	//No Session Started
	session_start();
}

if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK") && strcmp(session_id(), "") == 0) {
	unset($_SESSION['login']);
	session_destroy();
    header("Location: index.php");
    exit;
?>