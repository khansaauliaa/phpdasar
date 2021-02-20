<?php 

// variable yg menyimpan banyak nilai

// cara lama
$siswa = array("dinda","nadhifa","disi","kirei");

//cara baru
$siswa = ["aca","bilqis","tiway","keputh"];
$arr = [1,2,3,"text",false,true];

//echo $siswa [3];
//echo $arr [1];
//echo "<br>"

var_dump($siswa);

//cara nambahin elemn pada array
$siswa[]="nailah";
$siswa[]="uzlah";
var_dump($siswa);
?>