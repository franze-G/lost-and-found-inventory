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
    include ('config.php');

    if(isset($_POST['submit'])){
        $fname = $_POST['fullname'];
        $studentnum = $_POST['studentnum'];
        $category = $_POST['category'];
        $itemname = $_POST['itemname'];
        $itemtype = $_POST['type'];
        $colors = $_POST['colors'];
        $course = $_POST['courses'];
        $regdate = isset($_POST['registerdate']) ? date('Y-m-d', strtotime($_POST['registerdate'])) : '';
        $email = $_POST['email'];

        // Generate a random serial number with 8 digits
        $serialNumber = rand(10000000, 99999999);

        // If the category is "VALUABLE," prepend "V" to the serial number
        // If the category is "NON-VALUABLE," prepend "NV" to the serial number
        if ($category == 'VALUABLE') {
            $serialNumber = 'V' . $serialNumber;
        } elseif ($category == 'NON-VALUABLE') {
            $serialNumber = 'NV' . $serialNumber;
        }

        // Set the status to "registered"
        $stats = 'REGISTERED';

        if (isset($_FILES["image"])) {
            // File Upload Handling
            $uploadDirectory = "../Item/";
            $uploadedFilename = "image" . uniqid() . "_" . basename($_FILES["image"]["name"]);
            $targetPath = $uploadDirectory . $uploadedFilename;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {


                $sql = "INSERT INTO `register` (`serial`, `fullname`, `studentnum`, `course`, `category`, `itemname`, `itemtype`, `color`,`registerdate`, `status`, `email`,`image`)
                VALUES ('$serialNumber', '$fname', '$studentnum', '$course', '$category', '$itemname', '$itemtype', '$colors', '$regdate', '$stats', '$email','$targetPath')";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            // Display the modal with the success message and serial number
            echo '<div id="registrationModal" class="modal">';
            echo '<div class="modal-content">';
            echo '<p>Record successfully submitted. Serial Number: ' . $serialNumber . '</p>';
            echo '<button class="close-btn" onclick="closeModal()">Close</button>';
            echo '</div>';
            echo '</div>';
            echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';

            // Optionally, you can redirect after a delay
            echo '<meta http-equiv="refresh" content="3;url=../admin/inventory.php" />';
        } else {
            // Display the modal with the error message
            echo '<div id="registrationModal" class="modal">';
            echo '<div class="modal-content">';
            echo '<p>Error: ' . $conn->error . '</p>';
            echo '<button class="close-btn" onclick="closeModal()">Close</button>';
            echo '</div>';
            echo '</div>';
            echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';
        }
    }

        $conn->close();
    }
}
?>
</body>
</html>