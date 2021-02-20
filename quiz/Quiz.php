<?php

//soal 1
for($a=0;$a <100; $a++){
    echo "$a";
}
//soal 2
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam = "04.25"){
    $waktu = "Shubuh";
}elseif ($jam > "12.00"){
    $waktu = "Dzuhur";
}elseif ($jam > "15.05"){
    $waktu = "Ashar";
}elseif ($jam >= "18.55"){
    $waktu = "Isya";
}else{
    $waktu = "tidak ada waktu sholat";
}

echo  "Waktunya Sholat $waktu hey!!";
echo "<p>";

//soal 3
$nilai =85;

if($nilai > 90 && $nilai <= 100){
    $hasil="A";
}elseif($nilai > 80 && $nilai <= 90){
    $hasil ="B";
}elseif($nilai >= 70 && $nilai <= 80){
    $hasil = "C";
}
echo "Nilai Zaki adalah $hasil";
?>