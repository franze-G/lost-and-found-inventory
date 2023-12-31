
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/account.css">
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
        <a href="inventory.php"><i class="material-icons grid_view">storage</i></a>
        </li>
        
        <li>
            <a href="register.php"><i class="material-icons grid_view">library_add</i></a>
        </li>

        <li>
            <a href="account.php"><i class="material-icons grid_view">person_add</i></a>
        </li>

        <li>
            <a href="report.php"><i class="material-icons grid_view">report</i></a>
        </li>
        </ul>

        <div class="search">
            <h1 class="searchitm">Account Registration</h1>

            <form action ="../configuration/account.php" method="post" enctype="multipart/form-data">

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
                <input type="text" name="course" id="course" placeholder="Enter course">
            </div>
            
            <label class="labelss">Type of User</label>
            <div class="input-field">
                <input type="text" name="email" id="email" placeholder="Enter email">
            </div>

            <label class="labelss">Email</label>
            <div class="input-field">
                <input type="password" name="password" id="password" placeholder="enter password">
            </div>

            <label class="labelss">Password</label>  
            <div class="input-field">
                <select name="type"  placeholder="Category of item">
                    <option value="" disabled selected>Select type of user</option>
                    <option value="1">ADMIN</option>
                    <option value="2">STUDENT</option>
                </select>
            </div>
            
            <div class="btn-field">
                    <input type="submit" name="submit" value="REGISTER">
            </div> 
            </form> 
        </div>
    </div>
</body>