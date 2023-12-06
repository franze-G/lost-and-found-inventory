<?php
    include('../configuration/config.php');

    
    if(isset($_COOKIE['token'])){
        $id=$_COOKIE['token'];

        $sql ="SELECT account.*, user.fullname
               FROM account 
               JOIN user ON account.id = user.id 
               WHERE account.id=$id";

            if($rs=$conn->query($sql)){
                if($rs->num_rows>0){
                    $row=$rs->fetch_assoc();
                    $usertype=$row['user_type'];
                    $userid=$row['id'];
                    $fname=$row['fullname']; // Add this line to get the user's first name
            // Add this line to get the user's last name
                    switch($usertype){
                    case 1 : header("location:"); break;

                    //case 2 : header("location:../student/user.php"); break;
                    }
                }else{
                    //token not exist
                    header("location:login.php");
                }
                }
                else{
                    echo $conn->error;
                }
            }else{
                header("location:login.php");
            }
            
    // Query to count the number of lost items
    $lostItemsQuery = "SELECT COUNT(*) AS lostItemCount FROM register WHERE status = 'LOST'";
    $lostItemsResult = $conn->query($lostItemsQuery);

    // Query to count the number of found items
    $foundItemsQuery = "SELECT COUNT(*) AS foundItemCount FROM register WHERE status = 'FOUND'";
    $foundItemsResult = $conn->query($foundItemsQuery);

    // Check if the query for lost items was successful
    if ($lostItemsResult) {
        $lostItemsRow = $lostItemsResult->fetch_assoc();
        $lostItemCount = $lostItemsRow['lostItemCount'];
    } else {
        // Handle the error if the query for lost items fails
        $lostItemCount = 0;
    }

    // Check if the query for found items was successful
    if ($foundItemsResult) {
        $foundItemsRow = $foundItemsResult->fetch_assoc();
        $foundItemCount = $foundItemsRow['foundItemCount'];
    } else {
        // Handle the error if the query for found items fails
        $foundItemCount = 0;
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/dash.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="header">
        <p class="title">Student</p>
        <p><?php echo $fname; ?> </p>
        </div>

        <ul class="nav">
        <li>
            <a href="user.php"><i class="material-icons grid_view">grid_view</i>Dashboard</a>
        </li>

        <li>
        <a href="../student/UInventory.php"> <i class="material-icons grid_view">storage</i> Inventory</a>
      
        </li>

        <li>
            <a href="../student/Uregister.php"><i class="material-icons grid_view">library_add</i>Register Item</a>
        </li>

        <li>
            <a href="logout.php"><i class="material-icons grid_view">logout</i>Logout</a>
        </li>
        </ul>

        <div class="lostitems">
            <h1 class="lost">Lost items</h1>
            <i class="material-icons lost_item">search</i>
            <p class="lost_count"><?php echo $lostItemCount; ?></p>
        </div>

        <div class="founditems">
            <h1 class="found">Found items</h1>
            <i class="material-icons found_item">task_alt</i>
            <p class="found_count"><?php echo $foundItemCount; ?></p>
        </div>

        <div class="search">
            <h1 class="searchitm">Search item</h1>
            <i class="material-icons search_item">manage_search</i>
            <div class="input-field">
                <input type="text" name="itemtype" id="itemtype" placeholder="Type of item">
            </div>

            <div class="input-field">
                <input type="text" name="itemtype" id="itemtype" placeholder="Category">
            </div>

            <div class="input-field">
                <input type="date" name="itemtype" id="itemtype" placeholder="Month">
            </div>
            <div class="btn-field">
                    <button type="submit">SEARCH</button>
            </div>  
        </div>
    </div>
</body>