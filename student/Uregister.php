<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/regist.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="header">
        </div>

        <ul class="nav">
        <li>
            <a href="user.php"><i class="material-icons grid_view">grid_view</i></a>
        </li>

        <li>
        <a href="UInventory.php"><i class="material-icons grid_view">storage</i></a>
        </li>

        <li>
        <a href="Uretrieve.php"><i class="material-icons grid_view">output</i></a>   
        </li>

        <li>
            <a href="Uregister.php"><i class="material-icons grid_view">library_add</i></a>
        </li>
        </ul>

        <div class="search">
            <h1 class="searchitm">Register Item</h1>

            <form action ="../configuration/reg.php" method="post" enctype="multipart/form-data">

            <label class="labels">Fullname</label>
                <div class="input-field">
                    <input type="text" name="fullname" id="fullname" placeholder="Enter fullname">
                </div>

            <label class="labels">Student number</label>
                <div class="input-field">
                    <input type="text" name="studentnum" id="studentnum" placeholder="Enter student no.">
                </div>

            <label class="labels">Course</label>
                <div class="input-field">
                    <input type="text" name="courses" id="courses" placeholder="Enter course">
                </div>
            
            <label class="labelss">Brand</label>
                <div class="input-field">
                    <input type="text" name="type" id="type" placeholder="Enter type of item">
                </div>

            <label class="labelss">Type of Item</label>
                <div class="input-field">
                    <select name="category"  placeholder="Category of item">
                        <option value="" disabled selected>Select category of item</option>
                        <option value="VALUABLE">VALUABLE</option>
                        <option value="NON-VALUABLE">NON-VALUABLE</option>
                    </select>
                </div>

            <label class="labelss">Category of Item</label>
                <div class="input-field">
                    <input type="text" name="itemname" id="itemname" placeholder="Enter item name">
                </div>

            <label class="labe">Email</label>
                <div class="input-field">
                    <input type="text" name="colors" id="color" placeholder="Enter item color">
                </div>

            <label class="labe">Item Color</label>
                <div class="input-field">
                    <input type="date" name="registerdate" id="registerdate" placeholder="Date registered">
                </div>

            <label class="labe">Date of Register</label>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Enter email">
                </div>
                
            <label class="labs">Upload image here</label>
                <input type="file" name="fileupload" id="fileupload">

            <div class="btn-field">
                    <input type="submit" name="submit" value="REGISTER">
            </div> 
            </form> 
        </div>
    </div>
</body>