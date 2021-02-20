<?php 
//array biasa
$siswa = ["acha","smk idn boarding school","khansa.aulfa12@gmail.com"];

//array di dalam array
$siswi = [
    ["acha","smk idn boarding school","khansa.aulfa12@gmail.com"],
    ["dinda","smk idn boarding school","ashalinaazhr@gmail.com"],
    ["bilqis","smk idn boarding school","bilqis@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan List</title>
</head>
<body>
    <h1>Siswa</h1>
    <ul>
        <li><?php echo $siswa[0] ?></li>
        <li><?php echo $siswa[1] ?></li>
        <li><?php echo $siswa[2] ?></li>
    </ul>    

    <ul>
       <?php foreach($siswa as $s):?>
       <li> <?= $s?></li>
       <?php endforeach; ?>
    </ul>

    <!-- mencetak array di dalam array menggunakan foreach -->
    <ul>
    <?php foreach($siswi as $sws): echo"<br>";?>
                <?php foreach($sws as $s):?>
                    <li><?= $s;?> </li>
             <?php endforeach; ?>  
         <?php endforeach;?>
    </ul>

</body>
</html>