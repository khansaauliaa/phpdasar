<?php 
require 'functions.php';
//cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    } else {
        //kalo gagal
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    }
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
    <h1> Tambah data buku</h1>
<!-- action berfungsi untuk pindah -->
    <form action="" method="post">
    <label for="gambar_cerita">Gambar: </label>
    <input type ="text" name="gambar_cerita" id="gambar_cerita" required ></input>

    <p>

    <label for="judul_cerita">Judul: </label>
    <input type ="text" name="judul_cerita" id="judul_cerita"required> </input>

    <p>

    <label for="penulis_cerita">Penulis: </label>
    <input type ="text" name="penulis_cerita" id="penulis_cerita"required> </input>

    <p>

    <p>
    <button type="submit" name="submit"> Submit </button>
    </form>
</body>
</html>