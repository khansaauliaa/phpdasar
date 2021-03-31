<?php
require 'functions.php';
//ambil data dr table
$siswa = get( "SELECT * FROM tb_siswa");


// jika tombol search di tekan

if (isset($_POST["search"])){
    $siswa = cari($_POST["keyword"]);
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
    <h1>List of Students</h1>
    <a href="tambah.php">tambah data siswa</a>

    <br>
    <from action="" method="post">
        <input type="text" name="keyword" size="40" autofocus 
        placeholder="search here!" autocomplete="off">
        <button type="submit" name="search">search </button>
    
    </from>




    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>pict</th>
            <th>Name</th>
            <th>Class</th>
            <th>Email</th>
            
        </tr>

        <?php $i = 1;?>
        <?php foreach($siswa as $row):?>

            <tr>
                <td><?= $i;?></td>
                <td>
                <a href="ubah.php?id=<?= $row["id_siswa"]; ?>">ubah | </a>
                <a href="hapus.php?id=<?= $row["id_siswa"]; ?>">hapus </a>


                <td><img src="img/<?= $row["gambar_siswa"]?>"width="50"></td>
                <td><?= $row["nama_siswa"]?></td>
                <td><?= $row["kelas_siswa"]?></td>
                <td><?= $row["email_siswa"]?></td>
            
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>