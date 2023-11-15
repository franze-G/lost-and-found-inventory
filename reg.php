<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $fname = $_POST['fullname'];
        $studentnum = $_POST['studentnum'];
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $itemname = $_POST['itemname'];
        $itemtype = isset($_POST['item-type']) ? $_POST['item-type'] : '';
        $colors = isset($_POST['color']) ? $_POST['color'] : '';
        $lostdate = isset($_POST['lostdate']) ? date('Y-m-d', strtotime($_POST['lostdate'])) : '';
        $regdate = isset($_POST['registerdate']) ? date('Y-m-d', strtotime($_POST['registerdate'])) : '';
        $stats = isset($_POST['status']) ? $_POST['status'] : '';

        $sql = "INSERT INTO `register` (`fullname`, `studentnum`, `category`, `itemname`, `itemtype`, `color`, `lostdate`, `registerdate`, `status`)
        VALUES ('$fname', '$studentnum', '$category', '$itemname', '$itemtype', '$colors', '$lostdate', '$regdate', '$stats')";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Record successfully submitted.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
