<?php
// isset = unutk ngecek variable apakah udah ada apa belum
if(!isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["domisili"])
){
    header("Location: latihan1.php");
    exit;

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nama :<?=$_GET["nama"];?></li>
        <li>Jurusan :<?=$_GET["jurusan"];?></li>
        <li>Domisili :<?=$_GET["domisili"];?></li>
    </ul>

    <a href ="latihan1.php">back</a>
    
</body>
</html>