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
            <div class="input-field">
                <input type="text" name="fullname" id="fullname" placeholder="Full name">
            </div>
            <div class="input-field">
                <input type="text" name="studentnum" id="studentnum" placeholder="Student number">
            </div>
            <div class="input-field">
                <input type="text" name="course" id="Course" placeholder="Course">
            </div>

            <div class="input-field">
                <input type="dropdown" name="category" id="category" placeholder="Category of Item">
            </div>
            <div class="input-field">
                <input type="text" name="type" id="type" placeholder="Type of item">
            </div>
            <div class="input-field">
                <input type="text" name="itemname" id="itemname" placeholder="Item name">
            </div>

            
            <div class="input-field">
                <input type="text" name="name" id="fullname" placeholder="Item color">
            </div>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" placeholder="Date of Lost">
            </div>
            <div class="input-field">
                <input type="date" name="registerdate" id="registerdate" placeholder="Date registered">
            </div>

            <div class="input-field">
                <input type="date" name="claimdate" id="claimdate" placeholder="Date of claim">
            </div>    
            <div class="btn-field">
                    <button type="submit">Submit</button>
            </div>  
        </div>
    </div>
</body>