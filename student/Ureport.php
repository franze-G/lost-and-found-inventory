<?php
    include('../configuration/config.php');

    $conn = new mysqli($inventoryServername, $inventoryUsername, $inventoryPassword, $inventoryDbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the submit button is clicked
        if (isset($_POST["submit"])) {
            // Get the values from the form
            $serial = $_POST["serial"];
            $status = $_POST["status"];
            $lostdate = $_POST["lostdate"];

            // Update the status in the database
            $sql = "UPDATE register SET `status` = '$status', `lostdate` = '$lostdate' WHERE `serial` = '$serial'";

            if ($conn->query($sql) === TRUE) {
                echo "Status updated successfully.";
            } else {
                echo "Error updating status: " . $conn->error;
            }
        }
    }

    $conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/report.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="header">
        </div>

        <ul class="nav">
        <li>
            <a href="../admin/user.php"><i class="material-icons grid_view">grid_view</i></a>
        </li>
        <li>
        <a href="UInventory.php"><i class="material-icons grid_view">storage</i></a>
        </li>
        
        <li>
            <a href="Uregister.php"><i class="material-icons grid_view">library_add</i></a>
        </li>

        <li>
            <a href="Ureport.php"><i class="material-icons grid_view">report</i></a>
        </li>
        </ul>

        <div class="search">
            <h1 class="searchitm">Item Report</h1>

            <form action ="" method="post" enctype="multipart/form-data">

            <label class="labels">Serial Number</label>
            <div class="input-field">
                <input type="text" name="serial" id="serial" placeholder="Enter item serial number">
            </div>

            <label class="labels">Status</label>
            <div class="input-field">
                <select name="status">
                    <option value="" disabled selected>Select status</option>
                    <option value="LOST">LOST</option>
                    <option value="FOUND">FOUND</option>
                </select>
            </div>  
            
            <label class="labels">Date of Lost</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" placeholder="Enter item serial number">
            </div>
            
            <label class="labels">Date of Found</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" placeholder="Enter item serial number">
            </div>
            
            <div class="btn-field">
                    <input type="submit" name="submit" value="REPORT">
            </div> 
            </form> 
        </div>
    </div>
</body>