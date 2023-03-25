<?php
require "../DB/dbh.php";

if($_POST["text"] == "YES"){
    $sql = "DELETE FROM auto WHERE CONCAT_WS('.', brand, model, date_prod) = '$_POST[id]'";
    $mysqli->query($sql);
    header("Location: "."../LOGIN/edit_page.php");
}else{
    header("Location: "."../LOGIN/edit_page.php");
}
?>