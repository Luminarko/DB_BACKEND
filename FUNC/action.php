<?php
require "../DB/dbh.php";

if ($_POST["action"] == "D"){
    echo "<h1>DELETE</h1>";
    echo "<a>Are you sure you want to delete?</a>";
    echo "<form method='POST' action='delete.php'>";
    echo "<input type='hidden' name='id' value='$_POST[id]'>";
    echo "<input type='submit' name='text' value='YES'>";
    echo "<input type='submit' name='text' value='NO'></form>";
}

if ($_POST["action"] == "E"){
    echo "<h1>EDIT</h1>";
    echo "<form action='edit.php' method='POST'>";
    echo "<input type='hidden' name='id' value='$_POST[id]'>";
    echo "<textarea placeholder='Edit brand...' name='brand'></textarea>";
    echo "<textarea placeholder='Edit model...' name='model'></textarea>";
    echo "<textarea type='number' placeholder='Edit year...' name='year'></textarea>";
    echo "<input type='submit' name='action' value='Submit'>";
    echo "</form>";
}

if ($_POST["action"] == "Insert"){
    echo "<h1>INSERT</h1>";
    echo "<form action='insert.php' method='POST'>";
    echo "<textarea placeholder='Brand of car...' name='brand' required></textarea>";
    echo "<textarea placeholder='Model of car...' name='model' required></textarea>";
    echo "<textarea type='number' placeholder='Year of production...' name='year' required></textarea>";
    echo "<input type='submit' name='action' value='Submit'>";
    echo "</form>";
}

?>