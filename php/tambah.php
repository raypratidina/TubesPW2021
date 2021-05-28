<?php

    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }


        require 'functions.php';

        if (isset($_POST['tambah'])) {
            if (tambah($_POST) > 0) {
                echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.herf = 'admin.php';
                    </script>";
            
            } else {
                echo "<script>
                        alert('Data Gagal ditambahkan!');
                        document.location.herf = 'admin.php';
                    </script>";
            }
        }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Booststrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Booststrap-->

    <!--fontawosome-->
      <script src="https://kit.fontawesome.com/50ec7016ca.js" crossorigin="anonymous"></script>
    <!--fontawosome-->

    <title>admin</title>
    <style>

        .container{
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px rgba(0,0,0,0.5);
            padding: 40px;
        }
           body {
            background-color: #01a3a4;
            color: #f7f1e3;
            font-family: sans-serif;
            src: url('asset/font/Rockford Sans-Light.otf');
        }

    </style>
    </head>

<body>
    <form action="" method="post">
    <div class="container">
    <h4 class ="text-center">Form Tambah Data keyboard</h4>
  

 <form>
    <div class="form-group">
            <label for="picture">picture :</label><br>

        <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="file" name="picture" id="picture" required><br><br>
        </div>
        </div>
        
    <div class="form-group">
            <label for="name">nama :</label><br>

        <div class="input-group">
            <input type="text" name="name" id="name" required><br><br>
        </div>
        </div>
        
        
            <label for="description">description :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        
        
            <label for="price">price :</label><br>
            <input type="price" name="price" id="price" required><br><br>
        
        
            <label for="category">Category :</label><br>
            <select name="category" id="category" required>
                <option value="">------------------pilih category----------------</option>
                <option value="mouse">mouse</option>
                <option value="keyboard">keyboard</option>
            </select>

          
        

        <br>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php">Kembali</a>
        </button>
        
        </ul>
        
        </from>
            </div>
        </form>

      
       