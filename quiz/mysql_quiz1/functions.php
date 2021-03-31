<?php 
//connect ke database
//(host, user, pass, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");


function query($query){
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }

        return $rows;


}
function tambah($post){
    global $db;

    //ambil data dari tiap elemen dalam form
    $gambar = $post["gambar_cerita"];
    $judul = $post["judul_cerita"];
    $penulis = $post["penulis_cerita"];

    //query insert data
    $query = "INSERT INTO tb_bukucerita VALUES(null, '$gambar', '$judul', '$penulis')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function cari(keyword)
{
    $query = "SELECT * FROM tb_bukucerita WHERE
    gambar_cerita LIKE '$keyword' OR
    judul_cerita LIKE '$keyword' OR
    penulis_cerita LIKE '$keyword'";

    return get ($query);
}

?>