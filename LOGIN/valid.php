<?php
require '../DB/dbh.php';

//error_reporting(E_ERROR | E_PARSE);

function validation($DP, $FP, $DU, $FU){
    if($DU == $FU && $DP == $FP){
        echo "true";
        session_start();
        $_SESSION['username'] =  "$DU";
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 100);
        header("Location: edit_page.php");
    }
    else{
        echo "false";
        echo "<script language='javascript'>";
        echo 'alert("Login was not succesfull...")';
        echo 'window.location.replace("login.php")';
        echo "</script>";
    }
}

$user = $_POST['username'];
$passw = $_POST['password'];

$sql = "SELECT heslo, jmeno FROM manage WHERE jmeno = ('$user')";
$result = $mysqli->query($sql);
var_dump($result);

foreach($result as $row){
    $dbPassw = $row["heslo"];
    $dbUsername = $row["jmeno"];
}
validation($dbPassw, $passw, $dbUsername, $user);