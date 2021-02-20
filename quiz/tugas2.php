<?php
//array numerik
$siswa=["fikri", "echa", "acha", "alya"];
//array assosiative
$siswa=[
    ["nama" => "fikri",
    "asal" => "cibubur"],

    ["nama" => "echa",
    "asal" => "cibubur"],

    ["nama" => "alya",
    "asal" => "bekasi"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
</head>
<body>
<!-- array numerik -->
<h1>Daftar Siswa</h1>
<?php foreach($siswa as $siw):?>
        <ul>
            <li><?php echo $siswa[0]?></li>
            <li><?php echo $siswa[3]?></li>
        </ul>
    <?php endforeach;?>

<!-- array assosiative -->
<?php foreach($siswa as $sis):?>
    <ul>
        <li>Nama : <?= $sis["nama"];?></li>
        <li>Asal : <?= $sis["asal"];?></li>
        </ul>
<?php endforeach;?>

</body>
</html>