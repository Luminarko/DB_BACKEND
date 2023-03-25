<?php
include "../DB/dbh.php";


if($_POST["action"] == "Submit"){
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $sql = "INSERT INTO auto (brand, model, date_prod) VALUES ('$brand', '$model', '$year');";
    $mysqli->query($sql);
    header("Location: ../LOGIN/edit_page.php"); 
}else{
    header("Location: ../LOGIN/edit_page.php");
}
?>