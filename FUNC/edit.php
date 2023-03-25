<?php
include "../DB/dbh.php";

$id = explode(".", $_POST["id"]);


$brand = $_POST['brand'] ?: $id[0];
$model = $_POST['model'] ?: $id[1];
$year = $_POST['year'] ?: $id[2];

$sql = "UPDATE auto SET brand = '$brand', model = '$model', date_prod = '$year' WHERE CONCAT_WS('.', brand, model, date_prod) = '$_POST[id]'";
$mysqli->query($sql);
header("Location: ../LOGIN/edit_page.php");

?>