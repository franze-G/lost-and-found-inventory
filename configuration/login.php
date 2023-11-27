<?php 
$username ="root";
$password ="";
$servername="localhost";
$dbname="login";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Error: ".$conn->connect_error);
}

?>