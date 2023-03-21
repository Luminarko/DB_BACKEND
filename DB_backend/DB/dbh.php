<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'auta');

if($mysqli->connect_errno){
    throw new RuntimeException('mysqli_connect error: '.$mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
if ($mysqli->errno) {
    throw new RuntimeException('mysqli error: ' . $mysqli->error);
}