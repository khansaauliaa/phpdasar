<?php
require'functions.php';
$result = query("SELECT * FROM tb_bukucerita");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buku Cerita</h1>
    <a href="tambah.php">tambah data buku</a>
    <p>
    <from action="" method="post">
        <input type="text" name="keyword" size="40" autofocus 
        placeholder="search here!" autocomplete="off">
        <button type="submit" name="search">search </button>
    
    </from>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>gambar cerita</th>
            <th>judul cerita</th>
            <th>penulis cerita</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($result as $row):?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="">ubah | </a>
                    <a href="">hapus</a>
                </td>
                <td><img src="cerita/<?= $row["gambar_cerita"]?>"width="50"></td>
                <td><?= $row["judul_cerita"]?></td>
                <td><?= $row["penulis_cerita"]?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>