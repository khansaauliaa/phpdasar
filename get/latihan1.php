<?php 


/*
variable super global(variable dari php)
$_GET
$_POST
$_REQUEST
$_COOKIE
$_SESSION
$_SERVER
$_ENV
$_GLOBALS
*/
// GET ($_GET)
//mengiri, data lewat url
//data tidak rahasia

// Post($_POST)
//ngirim data lewat form
// login

echo $_GET["nama"]="aca";
echo"<br>";
var_dump($_GET);


$mahasiswa=[
    ["nama" => "Bilqis",
    "jurusan" => "RPL",
    "domisili" => "Bekasi"],

    ["nama" => "Disi",
    "jurusan" => "RPL",
    "domisili" => "Tangerang"],

    ["nama" => "Nailah",
    "jurusan" => "RPL",
    "domisili" => "Batam"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach($mahasiswa as $mhs):?>

     <li>
        <a href="latihan2.php?
        nama=<?= $mhs["nama"];?>
        &jurusan=<?=$mhs["jurusan"];?>
        &domisili=<?=$mhs["domisili"];?>">


        <?= $mhs["nama"];?>
        </a>
     </li> 

     <?php endforeach;?>  
    
</body>
</html>
