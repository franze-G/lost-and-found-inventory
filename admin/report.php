<?php
include('../configuration/config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the serial number from the form
    $serialNumber = $_POST['serial'];

    // Validate the serial number (you can add more validation as needed)
    if (empty($serialNumber)) {
        echo "Please enter a serial number.";
    } else {
        // Execute a query to fetch the items from the database
        $query = "SELECT * FROM register";
        $result = $pdo->query($query);

        // Check if the query was successful
        if ($result) {
            // Loop through the items in the result set
            while ($row = $result->fetch_assoc()) {
                // Check if the entered serial number matches an item
                if ($row['serial'] == $serialNumber) {
                    // Determine the new status (you can modify this logic as needed)
                    $newStatus = ($row['status'] == 'LOST') ? 'FOUND' : 'LOST';

                    // Update the status in the database
                    $updateQuery = "UPDATE register SET status = :newStatus WHERE id = :itemId";
                    $updateStmt = $pdo->prepare($updateQuery);
                    $updateStmt->bindParam(':newStatus', $newStatus);
                    $updateStmt->bindParam(':itemId', $row['id']);

                    if ($updateStmt->execute()) {
                        echo "Item status updated successfully.";
                    } else {
                        echo "Error updating item status.";
                    }

                    // Break out of the loop once the item is found and updated
                    break;
                }
            }
        } else {
            echo "Error executing the query.";
        }
    }
}

// Rest of your existing code for displaying items goes here...
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
            <a href="dashboard.php"><i class="material-icons grid_view">grid_view</i></a>
        </li>
        <li>
        <a href="inventory.php"><i class="material-icons grid_view">storage</i></a>
        </li>
        
        <li>
            <a href="register.php"><i class="material-icons grid_view">library_add</i></a>
        </li>

        <li>
            <a href="account.php"><i class="material-icons grid_view">person_add</i></a>
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
            
            
            <div class="btn-field">
                    <input type="submit" name="submit" value="REPORT">
            </div> 
            </form> 
        </div>
    </div>
</body>