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