<?php   
    include('../configuration/config.php');

    $msg = '';

    if (isset($_COOKIE['token'])) {
    $id = $_COOKIE['token'];
    $sql = "SELECT * FROM account WHERE id=$id";
    if ($rs = $conn->query($sql)) {
        $row = $rs->fetch_assoc();
        $usertype = $row['user_type'];
        $userid = $row['id'];
        switch ($usertype) {
            case 1:
                header("location:dashboard.php");
                break;
            case 2:
                header("location:user.php");
                break;
        }
    } else {
        header("location:logout.php");
    }
} else {
    echo $conn->error;
}

    if (isset($_POST['idnum'], $_POST['password'])) {
    $UN = $_POST['idnum'];

    $sql = "SELECT * FROM account WHERE username=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $UN);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (md5($_POST['password']) === $row['pass']) {
                    $usertype = $row['user_type'];
                    $userid = $row['id'];
                    setcookie('token', $userid);
                    switch ($usertype) {
                        case 1:
                            header("location:dashboard.php");
                            exit();
                        case 2:
                            header("location:user.php");
                            exit();
                    }
                } else {
                    $msg = 'Invalid Password';
                }
            } else {
                $msg = 'Invalid Username';
            }
        } else {
            echo $conn->error;
        }
        $stmt->close();
    } else {
        echo $conn->error;
    }

    if (isset($msg)){
        echo $msg;
    }
}
?>

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
    
            <form action="" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <input id="idnum" name="idnum" type="text" placeholder="Enter username" required>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password" type="password" placeholder="Enter password" required>
                    </div>
             
                </div>
                <p class="error" id="error"><?php echo $msg; ?></p>
                <div class="btn-field">
                    <input type="submit" name="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
