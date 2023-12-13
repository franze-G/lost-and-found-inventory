<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
    <link rel="stylesheet" href="../styles/details.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header"></div>
        <ul class="nav">
            <li><a href="../admin/user.php"><i class="material-icons grid_view">grid_view</i></a></li>
            <li><a href="Uinventory.php"><i class="material-icons grid_view">storage</i></a></li>
            <li><a href="Uregister.php"><i class="material-icons grid_view">library_add</i></a></li>
        </ul>
        <div class="search">
            <h1 class="searchitm">Item Details</h1>

            <?php
            include('../configuration/config.php');

            if (isset($_GET['id'])) {
                $itemId = $_GET['id'];

                // Use prepared statement to prevent SQL injection
                $stmt = $conn->prepare("SELECT * FROM register WHERE id = ?");
                $stmt->bind_param("i", $itemId);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Now you can use $row to access the details of the selected item
                    $itemID = $row['id'];
                    $serial = $row['serial'];
                    $fname = $row['fullname'];
                    $category = $row['category'];
                    $itemname = $row['itemname'];
                    $itemtype = $row['itemtype'];
                    $color = $row['color'];
                    $claimdate = empty($row['claimdate']) ? 'N/A' : $row['claimdate'];
                    $registerdate = date('M d, Y', strtotime($row['registerdate']));
                    $status = $row['status'];
                    $imagePath = $row['image'];

                    // Modify the serial number
                    $firstPart = str_repeat('*', strlen($serial) - 3);
                    $lastThreeDigits = substr($serial, -3);
                    $modifiedSerial = $firstPart . $lastThreeDigits;

                    // Add the HTML and formatting to display the item details and image
                    echo '<p class="details">Item ID: ' . $itemID . '</p>';
                    echo '<p class="details">Serial NO.: ' . $modifiedSerial . '</p>';
                    echo '<p class="details">Owner: ' . $fname . '</p>';
                    echo '<p class="details">Category: ' . $category . '</p>';
                    echo '<p class="details">Item Name: ' . $itemname . '</p>';
                    echo '<p class="details">Type of Item: ' . $itemtype . '</p>';
                    echo '<p class="details">Color: ' . $color . '</p>';
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

            // Close the statement and connection
            $stmt->close();
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
