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
        $lostdate = isset($_POST['lostdate']) ? date('Y-m-d', strtotime($_POST['lostdate'])) : '';
        $regdate = isset($_POST['registerdate']) ? date('Y-m-d', strtotime($_POST['registerdate'])) : '';
        $stats = isset($_POST['status']) ? $_POST['status'] : '';
        $email = $_POST['email'];

        $sql = "INSERT INTO `register` (`fullname`, `studentnum`, `course`, `category`, `itemname`, `itemtype`, `color`, `lostdate`, `registerdate`, `status`,`email`)
        VALUES ('$fname', '$studentnum', '$course', '$category', '$itemname', '$itemtype', '$colors', '$lostdate', '$regdate', '$stats','$email')";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Record successfully submitted.";
            header("Location: ../pages/inventory.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
