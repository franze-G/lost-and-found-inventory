<?php
session_start();

$result;
function uidExists($conn, $username)
{
    $sql = "SELECT * FROM user_details WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: login.php?error=smtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username);
   // $getAccountDetails = getAccountDetails($conn, $username);
    if ($uidExists === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $pwds = $uidExists["password"];
    $checkPwd = ($pwds === $pwd) ? true : false;

    if ($checkPwd === false) {
        header("location: login.php?error=wronglogin");
        exit();
     }
     elseif ($checkPwd === true) {
        session_start();
            $_SESSION["UserIDs"] = $uidExists["user_id"];
            $_SESSION["Usernames"] = $uidExists["username"];
            $_SESSION["uType"] = $uidExists["userType"];
        header("location: dashboard.php");
        exit();
        
} 
} 
function emptyInputLogin($username, $pwd)
{
    // echo("asdasd");

    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}