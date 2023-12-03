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

