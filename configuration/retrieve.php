<?php
    include('../configuration/config.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve item ID from the hidden field
            $itemId = $_POST['id'];

            // Process the retrieval action as needed
            // ...

            // Redirect back to inventory or another appropriate page
            header("location: inventory.php");
            exit();
        } else {
            // Invalid request method, handle the error or redirect
            header("location: inventory.php");
            exit();
        }
?>
