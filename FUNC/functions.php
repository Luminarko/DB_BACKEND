<?php

function del($id){
    require "../DB/dbh.php";
    $query = $mysqli->query("DELETE FROM auto WHERE CONCAT(brand, model, date_prod) = $id");
}