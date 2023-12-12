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
            $found = $_POST['founddate'];

            // Update the status in the database
            $sql = "UPDATE register SET `status` = '$status', `lostdate` = '$lostdate', `founddate`='$found' WHERE `serial` = '$serial'";

            if ($conn->query($sql) === TRUE) {
                echo '<div id="registrationModal" class="modal">';
                echo '<div class="modal-content">';
                echo '<p>Item update successful. </p>';
                echo '<button class="close-btn" onclick="closeModal()">Close</button>';
                echo '</div>';
                echo '</div>';
                echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';
    
                // Optionally, you can redirect after a delay
                echo '<meta http-equiv="refresh" content="3;url=../admin/inventory.php" />';
            } else {
                echo "Error updating status: " . $conn->error;
            }
        }
    }

    $conn->close();
?>

</body>
</html>