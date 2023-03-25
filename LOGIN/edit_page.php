<?php
include "../DB/dbh.php";

//GETTING ALL DATA
$sql = "SELECT * FROM auto";
$result = $mysqli->query($sql);

foreach($result as $row){
    $brand[] =  $row["brand"];
    $model[] = $row["model"];
    $date[] = $row["date_prod"];
}
//LOGOUT
function logout(){
    session_destroy();
    header('Location: ' . 'login.php');
}

//echo "<button class='logout' onclick=\"logout()\">Logout</button>";

//TABLE GEN
$i = 0;
$action = "../FUNC/action.php";
echo '<link rel="stylesheet" href="../STYLE/style.css">';
echo "<table>";
echo "<tr class='header'><td>Brand</td><td>Model</td><td>Year of production</td><td><form action='../FUNC/action.php' method='POST'><input type='submit' id='insert' name='action' value='Insert'></form></td></tr>";
foreach($brand as $row){
    echo "<tr><form action='../FUNC/action.php' method='POST'>";
    $id = $brand[$i].".".$model[$i].".".$date[$i];
    
    echo "<td>$brand[$i]</td><td>$model[$i]</td><td>$date[$i]</td><td>";
    echo "<input type='hidden' name='id' value='$id'>";
    echo "<input class='btn' type='submit' id='$id' name='action' value='E'>";
    echo "<input class='btn' type='submit' id='$id' name='action' value='D'>";
    echo "</td></tr></form>";
    $i++;
}
echo "</table>";