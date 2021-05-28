<?php 
session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

//ambil username berdasarkan id
$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
$row = mysqli_fetch_assoc($result);

//cek cookie dan username
    if ($hash === hash('sha256' , $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;

    }
}
//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION[ 'username' ])) {
    header("Location: admin.php");
    exit;
}
//login
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    //mencocokan USERNAME DAN PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            
            //jika remember me dicentang
            if (isset ($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 *24);
            }

            if (hash('sha256', $row['id']) == $_SESSION ['hash']) {
                header("Location: admin.php");
                die;
            }
            header("location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Booststrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Booststrap-->

    <!--fontawosome-->
    <script src="https://kit.fontawesome.com/50ec7016ca.js" crossorigin="anonymous"></script>
    <!--fontawosome-->
    
    <title>Document</title>
    <style>

        .container{
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px rgba(0,0,0,0.5);
            padding: 40px;
        }
        body {
            background-image: url(asset/img/bahan.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #01a3a4;
            color:#f7f1e3;
            padding: 20px;
            font-family: sans-serif;
            src: url('asset/RockfordSans-light.otf');
           
        }

    </style>
</head>

<body>
    <form action="" method="post">
        <?php if (isset($error)) : ?>
        <p style=" color: red; font-style: italic;">Username  atau Password salah</p>
        <?php endif; ?>
            <div class="container">
             <h4 class ="text-center">FORM LOGIN</h4>

                <form>
                    <div class="form-group">
                        <td><label for ="username">Username</label></td>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
                    </div>
                    </div>

                    <div class="form-group">
                        <td><label for ="password">Password</label></td>

                          <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></i></div>
                            </div>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
                    </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT GAN</submit>
                </form>
            </div>
    </form>
    <div class ="registrasi">
         <p class = "text-center">Belum punya akun? registrasi dulu Disini yaa sayang <a href="registrasi.php">Disini</a></p>
        </div>