<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Item </title>
    <link rel="stylesheet" href="../styles/retrieve.css">
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
            <h1 class="searchitm">Retrieve Item</h1>

            <form action ="../configuration/reg.php" method="post" enctype="multipart/form-data">


            <label class="labels">Fullname</label>
            <div class="input-field">
                <input type="text" name="fullname" id="fullname" placeholder="Enter Fulname">
            </div>

            <label class="labels">Student number</label>
            <div class="input-field">
                <input type="text" name="studentnum" id="studentnum" placeholder="Enter Student number">
            </div>

            <label class="labels">Serial Number</label>
            <div class="input-field">
                <input type="text" name="serial" id="serial" placeholder="Enter serial number">
            </div>

            <label class="labelss">Item Color</label>
            <div class="input-field">
                <input type="text" name="type" id="type" placeholder="Enter type of item">
            </div>

            <label class="labelss">Type of Item</label>
            <div class="input-field">
                <select name="item-type"  placeholder="Category of item">
                    <option value="" disabled selected>Select category of item</option>
                    <option value="valuable">VALUABLE</option>
                    <option value="non-valuable">NON-VALUABLE</option>
                </select>
            </div>

            <label class="labelss">Category</label>
            <div class="input-field">
                <input type="text" name="itemname" id="itemname" placeholder="Enter color">
            </div>

            <label class="labe">Date of Claim</label>
            <div class="input-field">
                <input type="email" name="email" id="email" value="Enter Email">
            </div>

            <label class="labe">Email</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" value="Date of Lost">
            </div>

            <label class="labe">Date of Lost</label>
            <div class="input-field">
                <input type="date" name="lostdate" id="lostdate" value="Date of Lost">
            </div>


            <div class="btn-field">
                    <input type="submit" name="submit" value="RETRIEVE ITEM">
            </div> 
            </form> 
        </div>
    </div>
</body>