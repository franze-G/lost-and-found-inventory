<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/dash.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="header">
        </div>
        <ul class="nav">
        <li>
            <a href="dashboard.php"><i class="material-icons grid_view">grid_view</i>Dashboard</a>
        </li>
        <li>
        <a href="retrieve.php"><i class="material-icons grid_view">output</i>Retrieve Item</a>  
            
        </li>
        <li>
            <a href="register.php"><i class="material-icons grid_view">library_add</i>Register Item</a>
        </li>
        </ul>
        <div class="lostitems">
            <h1 class="lost">Lost items</h1>
            <i class="material-icons lost_item">search</i>
        </div>
        <div class="founditems">
            <h1 class="found">Found items</h1>
            <i class="material-icons found_item">task_alt</i>
        </div>
        <div class="search">
            <h1 class="searchitm">Search item</h1>
            <i class="material-icons search_item">manage_search</i>
            <div class="input-field">
                <input type="text" name="itemtype" id="itemtype" placeholder="Type of item">
            </div>

            <div class="input-field">
                <input type="text" name="itemtype" id="itemtype" placeholder="Category">
            </div>

            <div class="input-field">
                <input type="date" name="itemtype" id="itemtype" placeholder="Month">
            </div>
            <div class="btn-field">
                    <button type="submit">SEARCH</button>
            </div>  
        </div>
    </div>
</body>