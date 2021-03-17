<?php 
$db = mysqli_connect("localhost","root","","db_phpdasar");

if(isset($_POST["submit"])){

    $judul = $_POST["judul_film"];
    $gambar = $_POST["gmabar_film"];
    $liris = $_POST["liris_film"];
    

   
    $query ="INSERT INTO tb_siswa VALUES('','$gambar','$judul','$liris')";
    mysqli_query($db,$query);

   var_dump(mysqli_affected_rows($db));

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
    <h1> Tambah data siswa</h1>
<!-- action berfungsi untuk pindah -->
    <form action="" method="post">
    <label for="gambar_film">Gambar: </label>
    <input type ="text" name="gambar_film" id="gambar_film"><i/input>

    <p>

    <label for="judul_film">Judul: </label>
    <input type ="text" name="judul_film" id="judul_film"><i/input>

    <p>

    <label for="liris_film">Liris: </label>
    <input type ="text" name="liris_film" id="liris_film"><i/input>

    <p>

   <button type="submit" name="submit"> Submit </button>
    </form>
</body>
</html>