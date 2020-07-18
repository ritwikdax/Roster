<?php

include 'db/database.php';
include 'db/user.php';
include 'check.php';

if (session_id() == ""){
  session_start();
}

$username = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["pwd"]);
}
$db = new Database();
$db->getConnection();
$connection = $db->getDbConnection();

$user = new User($connection);
$userdata = $user->authenticate($username, $password);
//$user->authenticate($username, $password);

if ($userdata != null)
{
	
	$_SESSION["login"] = "OK";
	$_SESSION["fullname"] = $userdata["first_name"]." ".$userdata["last_name"];
	$_SESSION["teamname"] = $userdata["team_name"];
  echo "success";

}
else
{

	echo "<p>Incorrect Username or Password </p>";
  unset($_SESSION['login']);
  unset($_SESSION['fullname']);
  unset($_SESSION['teamname']);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>