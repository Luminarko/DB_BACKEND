<?php
include '../DB/dbh.php';

error_reporting(E_ERROR | E_PARSE);

function validation($DP, $FP, $DU, $FU){
    if($DU === $FU && $DP === $FP){
        session_start();
        $_SESSION['username'] =  "$DU";
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 10);
        header("Location: edit_page.php");
    }   
    else{
        echo "<script language='javascript'>";
        echo 'alert("Login was not succesfull...")';
        echo 'window.location.replace("login.php")';
        echo "</script>";
    }
}


$user = $_POST['username'];
$passw = $_POST['password'];

$sql = "SELECT password, name FROM admin WHERE name =('$user');";
$result = $mysqli->query($sql);

while($row = mysqli_fetch_assoc($result)){
    $dbUsername = $row['name'];
    $dbPassw = $row['password'];
}

validation($dbPassw, $passw, $dbUsername, $user);