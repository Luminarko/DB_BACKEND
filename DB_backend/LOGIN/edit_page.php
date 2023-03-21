<?php
session_start();
$now = time();
var_dump($now, $_SESSION['expire']);
if($now > $_SESSION['expire']) {
    header("Location: login.php");
    session_destroy();  
}