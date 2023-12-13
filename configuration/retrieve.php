<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Popup</title>

    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .close-btn {
            cursor: pointer;
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php
    include('../configuration/config.php');

    // Retrieve the item ID from the URL
    $itemId = $_GET['id'] ?? null;
    $claim = isset($_POST['claimdate']) ? $_POST['claimdate'] : '';

    // Check if the ID is provided
    if ($itemId !== null) {
        // Retrieve item details based on ID
        $sql = "SELECT * FROM register WHERE id = $itemId";
        $result = $conn->query($sql);

        // Check if the query was successful
        if ($result->num_rows > 0) {
            // Fetch item details
            $item = $result->fetch_assoc();

            // Close the result set
            $result->close();
        } else {
            // Item not found, handle the error or redirect
            header("location: inventory.php");
            exit();
        }
    } else {
        // ID not provided, handle the error or redirect
        header("location: inventory.php");
        exit();
    }

    // Initialize error and success messages
    $errorMessage = '';
    $successMessage = 'Retrieve item sucessfully.';

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve serial number from the form
        $enteredSerial = $_POST['serial'];

        // Check if the entered serial number matches the item's serial number
        if ($enteredSerial === $item['serial']) {
            // Update the item status to "claimed" in the database
            $updateSql = "UPDATE register SET status = 'CLAIMED',  `claimdate`='$claim' WHERE id = $itemId";
            $conn->query($updateSql);

            // Set success message
            $successMessage = "Item successfully retrieved!";

            // Redirect to inventory or any other page
            header("location: inventory.php");
            exit();
        } else {
            // Serial number doesn't match, handle the error or display a message
            $errorMessage = "Serial number does not match. Please try again.";
        }
    }
?>
