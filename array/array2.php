<?php
// pengulangan pada array
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 6, 6, 1, 8, 1, 7];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan pada Array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color:salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        /* biar kebawah */
        .clear{
            clear: both;
        }
    </style>
</head>
<body>

    <?php for($i = 0; $i < 7; $i++){ ?>
    <!-- div = wadah = menyimpan beberapa elemen -->
        <div class="kotak"><?php echo $number[$i];?> </div>
    <?php } ?>

    <div class="clear"></div>

    
    <?php for($i = 0; $i < count($number); $i++): ?>
    <!-- div = wadah = menyimpan beberapa elemen -->
        <div class="kotak"><?= $number[$i];?> </div>
    <?php endfor; ?>
    
    <!-- Biar pengulangannya ke baris baru -->
    <div class="clear"></div>
    
    <!-- pengulangan foreach -->
    <?php foreach($number as $n){?>
        <div class="kotak"><?php echo $n?> </div>
    <?php }?>

    <div class="clear"></div>
    <!-- cara singkat -->
    <?php foreach($number as $n):?>
        <div class="kotak"><?= $n?> </div>
    <?php endforeach;?>


</body>
</html>

