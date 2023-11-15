<?php
    include "config.php";
    $sql = "SELECT * FROM register";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                        <td><?php echo $row['$id'];?></td>
                        <td><?php echo $row['$category'];?></td>
                        <td><?php echo $row['$itemname'];?></td>
                        <td><?php echo $row['$itemtype'];?></td>
                        <td><?php echo $row['$color'];?></td>
                        <td><?php echo $row['$claimdate'];?></td>
                        <td><?php echo $row['$lostdate'];?></td>
                        <td><?php echo $row['registerdate'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td>
                            <a class="" href="">RETRIEVE</a>
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
            <i class="material-icons grid_view">storage</i>
            <a href="#"></a>
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
<script>
    $(document).ready(function () {
        $('#table').DataTable(); // Use 'mytable' instead of 'myTable'
    });
</script>
</html>