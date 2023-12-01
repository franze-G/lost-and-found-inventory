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

        $sql = "INSERT INTO `register` (`serial`, `fullname`, `studentnum`, `course`, `category`, `itemname`, `itemtype`, `color`,`registerdate`, `status`, `email`)
        VALUES ('$serialNumber', '$fname', '$studentnum', '$course', '$category', '$itemname', '$itemtype', '$colors', '$regdate', '$stats', '$email')";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Record successfully submitted. Serial Number: $serialNumber";
            // Optionally, you can redirect after a delay
            echo '<meta http-equiv="refresh" content="3;url=../admin/inventory.php" />';
            // or provide a link/button to go back to the inventory page
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
