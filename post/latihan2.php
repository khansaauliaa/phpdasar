<!-- <?php
//isset = untuk nge-cek variable udah ada atau belum
//di $_GET ada data apa engga? kalo ga ada,pindah ke latihansatu.php
//if( ($_POST["name"])
//){
    //header("Location: latihan1.php");
    //exit;
//}
//?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?= $_POST["name"];?></h1>
</body>
</html>