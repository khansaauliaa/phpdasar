<?php
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($post){
    global $db;

    //ambil data dari tiap elemen dalam form
    $judul = $post["judul_film"];
    $liris = $post["liris_film"];
    $gambar = $post["gambar_film"];
   

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES(null, '$gambar', '$judul', '$liris')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;

    mysqli_query($db, "DELETE FROM tb_film WHERE id_film = $id" );
    return mysqli_affected_rows($db);

}

function ubah($data){
    global $db;
    $id = $data["id_film"];
    $judul = $post["judul_film"];
    $liris = $post["liris_film"];
    $gambar = $post["gambar_film"];

    $query = "UPDATE tb_siswa SET 
    judul_film = '$judul',
    liris_film = '$liris',
    gambar_film = '$gambar'
   
    
    WHERE id_film = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
