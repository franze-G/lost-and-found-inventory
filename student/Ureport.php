<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/report.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="header">
        </div>

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

        <li>
            <a href="Ureport.php"><i class="material-icons grid_view">report</i></a>
        </li>
        </ul>

        <div class="search">
            <h1 class="searchitm">Item Report</h1>

            <form action ="../configuration/Ureport.php" method="post" enctype="multipart/form-data">

            <label class="labels">Serial Number</label>
            <div class="input-field">
                <input type="text" name="serial" id="serial" placeholder="Enter item serial number">
            </div>

            <label class="labels">Status</label>
            <div class="input-field">
                <select name="status">
                    <option value="" disabled selected>Select status</option>
                    <option value="LOST">LOST</option>
                    <option value="FOUND">FOUND</option>
                </select>
            </div>  
            
            <label class="labels">Date of Lost</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" placeholder="Enter item serial number">
            </div>
            
            <label class="labels">Date of Found</label>
            <div class="input-field">
                <input type="date" name="founddate" id="lostdate" placeholder="Enter item serial number">
            </div>
            
            <div class="btn-field">
                    <input type="submit" name="submit" value="REPORT">
            </div> 
            </form> 
        </div>
    </div>
</body>