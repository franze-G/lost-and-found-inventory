<?php
include('../configuration/config.php');

if (isset($_COOKIE['token'])) {
    $id = $_COOKIE['token'];
    $sql = "SELECT account.*, user.fullname
           FROM account 
           JOIN user ON account.id = user.id 
           WHERE account.id=$id";

    if ($rs = $conn->query($sql)) {
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $usertype = $row['user_type'];
            $userid = $row['id'];
            $fname = $row['fullname']; // Retrieve the user's full name

            // Use absolute path for redirection and exit
            switch ($usertype) {
                case 1:
                    header("location:");
                    exit();
                // Add other cases as needed
            }
        } else {
            // Token does not exist
            header("location:../admin/logout.php");
            exit();
        }
    } else {
        echo $conn->error;
        exit(); // Exit on error
    }
} else {
    header("location:../admin/logout.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Staff</title>
    <link rel="stylesheet" href="../style/guest.css">
</head>
<body>
    <div class="container">
        <h1 class="title">WELCOME Staff <?php echo strtoupper($fname); ?> </h1>
        <a class="logout" href="../admin/logout.php">Logout</a>
    </div>
</body>
</html>
