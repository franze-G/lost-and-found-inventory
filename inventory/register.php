<?php
    include "config.php";

    if(isset($_POST['submit'])){
        
        $fullname = $_POST['fullname'];
        $studentnum = $_POST['studentnum'];
        $course = $_POST['course'];
        $category = $_POST['category'];
        $itemname = $_POST['itemname'];
        $itemtype = $_POST['itemtype'];
        $color = $_POST['color'];
        $surrenderdate = $_POST['surrenderdate'];
        $lostdate = $_POST['lostdate'];
        $registerdate = $_POST['registerdate'];
        $status = $_POST['status'];
        

        $sql = "INSERT INTO 'register' ('category','itemname','itemtype','color','surrenderdate',
                'claimdate','lostdate','registerdate','status') VALUES ('$category','$itemname','
                $itemtype','$color','$surrenderdate','$claimdate','$lostdate','$registerdate','$status')";

                $result = $conn->query($sql);

                if($result === TRUE ){
                    echo "Item successfully submitted";
                } else{
                    echo "Error:" . $sql ."<br>" . $conn->error;
                }

                $conn->close();
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
    <script src="validation.js"></script>

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
            <form action="" method="POST">
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
                <input type="text" name="itemtype" id="type" placeholder="type of item">
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
                <input type="text" name="lostdate" id="fullname" placeholder="Item color">
            </div>
            <label class="labe">Item Color</label>
            <div class="input-field">
                <input type="date" name="color" id="lostdate" value="Date of Lost">
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
                    <button type="submit" name="submit" value="submit">SUBMIT</button>
            </div>  
            </form>
        </div>
    </div>
</body>