<?php
$serverName = "localhost";
$user = "root";
$password = ""; 
$dbName = "proba";

$conn = mysqli_connect($serverName, $user, $password, $dbName);

 if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>