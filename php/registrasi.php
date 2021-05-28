<?php 
require 'functions.php';

if (isset($_POST["register"])) {
    
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal');
                document.location.href = 'login.php';
            </script>";
    }
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

    <title>Registrasi</title>
    <style>

        .container{
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px rgba(0,0,0,0.5);
            padding: 40px;
        }
    
        body {
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
    <div class="container">
    <h4 class="text-center">REGSITRASI</h4>

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
    <button type="submit" class="btn btn-primary" name="register"> REGISTRASI</button>
</form>
