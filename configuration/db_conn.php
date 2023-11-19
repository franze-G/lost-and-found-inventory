<?php
$serverName = "localhost";
$dBUserNAme = "root";
$dBUserPassword ="";
$dbName = "lost_and_found_invdb";

$conn = mysqli_connect($serverName, $dBUserNAme,$dBUserPassword,$dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}