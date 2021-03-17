<?php
require 'functions.php';
$id = $_GET["id"];
//var_dump($id);

$siswa = get("SELECT * FROM tb_film WHERE id_film = $id")[0];
// var_dump($siswa["nama_siswa"]);



//cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php'
            </script>
        ";
    } else {
        //kalo gagal
        echo "
            <script>
            alert('data gagal diubah!');
            </script>
        ";
    }

    $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
    echo mysqli_error($db);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Tambah Data Siswa</h1>

    <form action="" method="post">

    <input type="hidden" name="id_film" value="<?= $siswa["id_film"];?>"

        <label for="gambar_film">Gambar : </label>
        <input type="text" name="gambar_film" id="gambar_film" required
        value="<?= $siswa["gambar_film"];?>"></input>
        <p>
            <label for="judul_film">Judul : </label>
            <input type="text" name="judul_film" id="judul_film" required
            value="<?= $siswa["judul_film"];?>"></input></input>
        <p>
            <label for="liris_film">Liris : </label>
            <input type="text" name="liris_film" id="liris_film" required
            value="<?= $siswa["liris_film"];?>"></input></input>
        <p>
    
            <button type="submit" name="submit"> Submit </button>
    </form>
</body>

</html>