<?php
if (isset($_POST["submit"])) {

    $username = $_POST["idnum"];
    $pwd = $_POST["password"];

    require_once 'db_conn.php';
    require_once 'functions.php';

    if (emptyInputLogin($username, $pwd) !== false) {
     header("location: /login.php?error=emptyinput");
    exit();
    }
    loginUser ($conn,$username,$pwd);

}else {
    header("location: login.php");
    exit(); 
}
