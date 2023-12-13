

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/details.css">
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
            <h1 class="searchitm">Item Details</h1>

            <?php
            include('../configuration/config.php');

            if (isset($_GET['id'])) {
                $itemId = $_GET['id'];

                $sql = "SELECT * FROM register WHERE id = $itemId";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Now you can use $row to access the details of the selected item
                    $itemID = $row['id'];
                    $fname = $row['fullname'];
                    $serial = $row['serial'];
                    $category = $row['category'];
                    $itemname = $row['itemname'];
                    $itemtype = $row['itemtype'];
                    $color = $row['color'];
                    $claimdate = empty($row['claimdate']) ? 'N/A' : date('M d, Y', strtotime($row['claimdate']));
                    $registerdate = date('M d, Y', strtotime($row['registerdate']));
                    $status = $row['status'];
                    $imagePath = $row['image']; // Assuming 'image_path' is the column storing the file path or URL

                    // Add the HTML and formatting to display the item details and image
                    echo '<p class="details">Item ID: ' . $itemID . '</p>';
                    echo '<p class="details">Owner: ' . $fname . '</p>';
                    echo '<p class="details">Serial #: ' . $serial . '</p>';
                    echo '<p class="details">Category: ' . $category . '</p>';
                    echo '<p class="details">Item Name: ' . $itemname . '</p>';
                    echo '<p class="details">Type of Item: ' . $itemtype . '</p>';
                    echo '<p class="details">Color: ' . $color . '</p>';
                    echo '<p class="details">Date of Claim: ' . $claimdate . '</p>';
                    echo '<p class="details">Date Registered: ' . $registerdate . '</p>';
                    echo '<p class="details">Status: ' . $status . '</p>';

                    // Display the image if the image path is available
                    if (!empty($imagePath)) {
                        echo '<img class="image" src="' . $imagePath . '" alt="Item Image">';
                    } else {
                        echo '<p>No image available.</p>';
                    }
                } else {
                    echo '<p>No item found with the provided ID.</p>';
                }
            } else {
                echo '<p>No item ID provided.</p>';
            }
            ?>
 
        </div>
    </div>
</body>
