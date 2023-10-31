<?php
    include "config.php";

    if(isset($_POST['submit'])){

        $category = $_POST['category'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="regist.css">
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

        <div class="search">
            <h1 class="searchitm">Register Item</h1>
            <label class="labels">Fullname</label>
            <div class="input-field">
                <input type="text" name="fullname" id="fullname" placeholder="Full name">
            </div>
            <label class="labels">Student number</label>
            <div class="input-field">
                <input type="text" name="studentnum" id="studentnum" placeholder="Student number">
            </div>
            <label class="labels">Course</label>
            <div class="input-field">
                <input type="text" name="course" id="Course" placeholder="Course">
            </div>
            
            <label class="labelss">Item name</label>
            <div class="input-field">
                <input type="text" name="type" id="type" placeholder="type of item">
            </div>
            <label class="labelss">Type of Item</label>
            <div class="input-field">
                <select name="item-type"  placeholder="Category of item">
                    <option value="" disabled selected>Select category of item</option>
                    <option value="valuable">Valuable</option>
                    <option value="non-valuable">Non-Valuable</option>
                </select>
            </div>
            <label class="labelss">Category of Item</label>
            <div class="input-field">
                <input type="text" name="itemname" id="itemname" placeholder="Item name">
            </div>

            <label class="labe">Date of Lost</label>
            <div class="input-field">
                <input type="text" name="name" id="fullname" placeholder="Item color">
            </div>
            <label class="labe">Item Color</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" value="Date of Lost">
            </div>
            <label class="labe">Date of Register</label>
            <div class="input-field">
                <input type="date" name="registerdate" id="registerdate" placeholder="Date registered">
            </div>

            <label class="lab">Status</label>
            <div class="input-fields">
                <select name="item-type"  placeholder="Category of item">
                    <option value="" disabled selected>Select status</option>
                    <option value="valuable">Lost</option>
                    <option value="non-valuable">Found</option>
                </select>
            </div>
            <label class="labs">Upload image here</label>
                <input type="file" name="fileupload" id="fileupload">

            <div class="btn-field">
                    <button type="submit" name="submit">SUBMIT</button>
            </div>  
        </div>
    </div>
</body>