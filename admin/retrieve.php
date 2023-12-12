<?php
    
    include('../configuration/config.php');
        // Retrieve the item ID from the URL
        $itemId = $_GET['id'] ?? null;

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Item </title>
    <link rel="stylesheet" href="../styles/retrieve.css">
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

        <li>
            <a href="report.php"><i class="material-icons grid_view">report</i></a>
        </li>
        </ul>

        <div class="search">
            <h1 class="searchitm">Retrieve Item</h1>

            <form action ="../configuration/retrieve.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
            <label class="labels">Fullname</label>
            <div class="input-field">
                <input 
                type="text" 
                name="fullname" 
                id="fullname" 
                value="<?php echo $item['fullname']; ?>" 
                placeholder="Enter Fulname"
                readonly>
            </div>

            <label class="labels">Student number</label>
            <div class="input-field">
                <input 
                type="text" 
                name="studentnum" 
                id="studentnum"  
                value="<?php echo $item['studentnum']; ?>"
                placeholder="Enter Student number"
                readonly>
            </div>

            <label class="labels">Serial Number</label>
            <div class="input-field">
                <input type="text" name="serial" id="serial" placeholder="Enter serial number">
            </div>

            <label class="labelss">Item Color</label>
            <div class="input-field">
                <input 
                type="text" 
                name="type" 
                id="type"  
                value="<?php echo $item['itemtype']; ?>"
                placeholder="Enter type of item"
                readonly>
            </div>

            <label class="labelss">Type of Item</label>
            <div class="input-field">
                <select name="item-type"  placeholder="Category of item"  value="<?php echo $item['itemtype']; ?>">
                    <option value="" disabled selected>Select category of item</option>
                    <option value="valuable">VALUABLE</option>
                    <option value="non-valuable">NON-VALUABLE</option>
                </select>
            </div>

            <label class="labelss">Category</label>
            <div class="input-field">
                <input 
                type="text" 
                name="itemname" 
                id="itemname"  
                value="<?php echo $item['color']; ?>"
                placeholder="Enter color"
                readonly>
            </div>

            <label class="labe">Date of Claim</label>
            <div class="input-field">
                <input 
                type="email" 
                name="email" 
                id="email" 
                value="<?php echo $item['email']; ?>"
                readonly>
            </div>

            <label class="labe">Email</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate"  value="Date of Lost">
            </div>

            <label class="labe">Date of Lost</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" value="Date of Lost">
            </div>


            <div class="btn-field">
                    <input type="submit" name="submit" value="RETRIEVE ITEM">
            </div> 
            </form> 
        </div>
    </div>
</body>