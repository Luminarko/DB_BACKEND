<?php
require "../DB/dbh.php";

//if($_POST["name"] == "delete"){
//    echo "kokot";
//}

if ($_POST["action"] == "D"){
    echo "<h1>DELETE</h1>";
    echo "<div id='yn'></div>";
    echo '<script src="script.js"></script>';
    
}
if ($_POST["action"] == "E"){
    echo "<h1>EDIT</h1>";
}

var_dump($a);