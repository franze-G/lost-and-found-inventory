<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
        </div>
        <ul class="nav">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">Inventory</a></li>
        <li><a href="retrieve.php">Retrieve Item</a></li>
        <li><a href="register.php">Register Item</a></li>
        </ul>
        <div class="lostitems">
            <h1 class="lost">Lost items</h1>
        </div>
        <div class="founditems">
            <h1 class="found">Found items</h1>
        </div>
        <div class="search">
            <h1 class="searchitm">Search item</h1>
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