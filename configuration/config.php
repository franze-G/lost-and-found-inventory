<?php
// Database connection for the 'inventory' database
$inventoryUsername = "root";
$inventoryPassword = "";
$inventoryServername = "localhost";
$inventoryDbname = "inventory";

$conn = new mysqli($inventoryServername, $inventoryUsername, $inventoryPassword, $inventoryDbname);
if ($conn->connect_error) {
    die("Inventory Connection Error: " . $conn->connect_error);
}

// Database connection for the 'login' database
$loginUsername = "root";
$loginPassword = "";
$loginServername = "localhost";
$loginDbname = "login";

$loginconn = new mysqli($loginServername, $loginUsername, $loginPassword, $loginDbname);
if ($loginconn->connect_error) {
    die("Login Connection Error: " . $loginconn->connect_error);
}
?>
