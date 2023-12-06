<?php
    include ('../configuration/config.php');
    $sql = "SELECT * FROM register ORDER BY id ASC";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="stylesheet" href="../styles/invent.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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
                    <th>Serial NO.</th>
                    <th>Category</th>
                    <th>Item name</th>
                    <th>Type of Item</th>
                    <th>Color</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
            <?php
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            // Determine the class based on status for styling
                            $statusClass = ($row['status'] == 'LOST') ? 'status-lost' : (($row['status'] == 'FOUND') ? 'status-found' : '');
                            $firstPart = str_repeat('*', strlen($row['serial']) - 3);
                            $lastThreeDigits = substr($row['serial'], -3);

                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $firstPart . $lastThreeDigits . '</td>';
                            echo '<td>' . $row['category'] . '</td>';
                            echo '<td>' . $row['itemname'] . '</td>';
                            echo '<td>' . $row['itemtype'] . '</td>';
                            echo '<td>' . $row['color'] . '</td>';
                            // Apply the class to the <td> for status
                            echo '<td class="' . $statusClass . '">' . $row['status'] . '</td>';
                            echo '<td><a class="retrieve" href="Uretrieve.php?id=' . $row['id'] . '">Retrieve Item</a></td>';
                            echo '<td><a class="details" href="Udetails.php?id=' . $row['id'] . '">View Item Details</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
      
        <ul class="nav">
        <li>
            <a href="../admin/user.php"><i class="material-icons grid_view">grid_view</i></a>
        </li>
        <li>
        <a href="UInventory.php"><i class="material-icons grid_view">storage</i></a>

        </li>
     
        <li>
            <a href="Uregister.php"><i class="material-icons grid_view">library_add</i></a>
        </li>
        </ul>
        </div>
    </div>
   
</body>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>
