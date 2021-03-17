<?php
require 'functions.php';
$siswa = get( "SELECT * FROM tb_film");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Students</h1>
    <a href="tambah.php">tambah data film</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>judul</th>
            <th>liris</th>
        
            
        </tr>

        <?php $i = 1;?>
        <?php foreach($siswa as $row):?>

            <tr>
                <td><?= $i;?></td>
                <td>
                <a href="ubah.php?id=<?= $row["id_film"]; ?>">ubah | </a>
                <a href="hapus.php?id=<?= $row["id_film"]; ?>">hapus </a>


                <td><img src="img/<?= $row["gambar_film"]?>"width="50"></td>
                <td><?= $row["judul_film"]?></td>
                <td><?= $row["liris_film"]?></td>
                <td><?= $row["gambar_film"]?></td>
            
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>