<?php
//cek apakah tombol submit udah diklik atau belum
if(isset($_POST["submit"])){
    //cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        // jika benar,redirect(pindah) ke halaman admin
        header("Location: admin.php");
        exit;
    }else{
        $error = true;

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
<!-- pesan error -->
<?php if(isset($error)):?>
    <p style="color:red; font-style: italic;">username/password salah </p>
<?php endif;?>
    <form action=""method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username">

    <p>

    <label for="password">Password : </label>
    <input type="password" name="password" id="password">

    <p>
    <button type="submit" name="submit">Login</button>
    </from>
</body>
</html>