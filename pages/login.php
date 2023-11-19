<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/log.css">
    
</head>
<body>
    <div class="container">
        <img class="logo" src="../image/adam.png" alt="Adamson">
        <div class="form-box">
            <div id="error"></div>
            <form action="login_func.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <input id="idnum" name="idnum"
                               type="text" placeholder="ID Number">
                            <div id="idnum_error" required></div>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password"
                               type="password" placeholder="Password">
                               <div id="pass_error" required></div>
                    </div>
                    <div class="error">
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] === "emptyinput") {
                                echo '<div style="color:red;">Please Fill in All Details</div>';
                            } else if ($_GET["error"] === "wronglogin") {
                                echo '<div style="color:red; postion=absolute top=10px;" >Incorrect Login Details</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                
                <div class="btn-field">
                    <input type="submit" name="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
