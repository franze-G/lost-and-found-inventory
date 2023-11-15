<?php
    include "config.php";
    $sql = "SELECT * FROM register ORDER BY id ASC";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="stylesheet" href="invent.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
    <div class="header">
        </div>
        <h2 class="title">Inventory</h2>
        <table class="items" id="table">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Category</th>
                    <th>Item name</th>
                    <th>Type of Item</th>
                    <th>Color</th>
                    <th>Date of Claim</th>
                    <th>Date of Lost</th>
                    <th>Date Registered</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['itemtype'];?></td>
                        <td><?php echo $row['itemname'];?></td>
                        <td><?php echo $row['category'];?></td>
                        <td><?php echo $row['color'];?></td>
                        <td><?php echo empty($row['claimdate']) ? 'N/A' : $row['claimdate'];?></td>
                        <td><?php echo date('M d, Y', strtotime($row['lostdate']));?></td>
                        <td><?php echo date('M d, Y', strtotime($row['registerdate']));?></td>
                        <td><?php echo $row['status'];?></td>
                        <td>
                            <a class="retrieve" href="retrieve.php">Retrieve Item</a>
                        </td>
                    </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
      
        <ul class="nav">
        <li>
            <a href="dashboard.php"><i class="material-icons grid_view">grid_view</i></a>
        </li>
        <li>
        <a href="inventory.php"><i class="material-icons grid_view">storage</i></a>

        </li>
        <li>
        <a href="retrieve.php"><i class="material-icons grid_view">output</i></a>  
            
        </li>
        <li>
            <a href="register.php"><i class="material-icons grid_view">library_add</i></a>
        </li>
        </ul>
        </div>
    </div>
</body>
</html>