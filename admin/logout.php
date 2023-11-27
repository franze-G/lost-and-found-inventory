<?php
setcookie('token',"");
unset($_COOKIE['token']);
header("location:login.php");

?>
