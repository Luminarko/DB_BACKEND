<?php
include "DB/dbh.php";

$sql = "SELECT * FROM auto";
$result = $mysqli->query($sql);

foreach($result as $row){
    $brand[] =  $row["brand"];
    $model[] = $row["model"];
    $date[] = $row["date_prod"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE/style.css">
    <title>CAR LIST</title>
</head>
<body>
    <header>
        <h1>CAR LIST</h1>
        <button class="login" onclick="location.href = 'LOGIN/login.php'">Login</button>
    </header>
    <main>
        <table>
            <tr><tr class='header'><td>Brand</td><td>Model</td><td>Year of production</td></tr>
            <?php
                $i = 0;
                foreach($brand as $row){
                    echo "<tr>";
                    echo "<td>$brand[$i]</td><td>$model[$i]</td><td>$date[$i]</td>";
                    echo "</tr>";
                    $i++;
                    }
            ?>
        </table>
    </main>
</body>
</html>