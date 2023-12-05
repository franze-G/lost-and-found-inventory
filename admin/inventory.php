<?php
    include ('../configuration/config.php');
    $sql = "SELECT * FROM register ORDER BY id ASC";

    $result = $conn->query($sql);

    
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
              //case 1 : header("location:staff_dash.php"); break;
              //case 2 : header("location:guest_dash.php"); break;
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
        <p class="stats">Admin</p>
        <p><?php echo $fname; ?> </p>
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
                    <th>Date of Claim</th>
                    <th>Date Registered</th>
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

                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['serial'] . '</td>';
                            echo '<td>' . $row['category'] . '</td>';
                            echo '<td>' . $row['itemname'] . '</td>';
                            echo '<td>' . $row['itemtype'] . '</td>';
                            echo '<td>' . $row['color'] . '</td>';
                            echo '<td>' . (empty($row['claimdate']) ? 'N/A' : $row['claimdate']) . '</td>';
                            echo '<td>' . date('M d, Y', strtotime($row['registerdate'])) . '</td>';
                            // Apply the class to the <td> for status
                            echo '<td class="' . $statusClass . '">' . $row['status'] . '</td>';
                            // Replace this line in the table body
                            echo '<td><a class="retrieve" href="retrieve.php?id=' . $row['id'] . '">Retrieve Item</a></td>';
                            echo '<td><a class="details" href="details.php?id=' . $row['id'] . '">View Item Details</a></td>';
                            echo '</tr>';
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
            <a href="register.php"><i class="material-icons grid_view">library_add</i></a>
        </li>
        <li>
            <a href="account.php"><i class="material-icons grid_view">person_add</i></a>
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
