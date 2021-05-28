<?php
/*
Ray Pratidina
203040099
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';


if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $keyboard = query("SELECT * FROM keyboard WHERE
                picture LIKE '%$keyword%' OR
                name LIKE '%$keyword%' OR
                Description LIKE'%$keyword%' OR
                price LIKE '%$keyword%' OR
                category LIKE '%$keyword%' ");
} else {
    $keyboard = query("SELECT * FROM keyboard");
}

// melakukan query

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Booststrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Booststrap-->
    <title>admin</title>
    <style>

        body {
            background-color: #01a3a4;
        }
        .table {
            width: 100%;
            padding: 10px;
            font-family: sans-serif;
            src: url('asset/font/Rockford Sans-Light.otf');
            text-align: center;
            background-color: #01a3a4;
            color: white;
            
        }
        th {
            background-color: #00d2d3;
            color: #f7f1e3;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
    <link rel = "stylesheet" href = "css/style.css">
<body>
    <div class="add">
        <a href="tambah.php">
        <button style="background-color: cyan; color: blue;">Tambah data</button></a></a>
        </div>
        <form action="" method="get">
            <input type = "text" name="keyword" autofocus>
            <button type = "submit" name="cari">cari!</button>
        </form>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
            <?php if (empty($keyboard)): ?>
            <tr>
                <td colspan = "7">
                    <h1> Data tidak ditemukan</h1>
                </td>
                </tr>
                <?php else : ?>
            <?php $i = 1; ?>
       
               
    <?php foreach($keyboard as $ky) : ?>
      <tr>
        <th scope="row"><?= $i ?></th>
        <td>
            <a href="ubah.php?id=<?= $ky['id'] ?>"><button style="background-color: cyan; color: blue;">Ubah</button></a><a href="">
            <a href="hapus.php?id=<?= $ky['id'] ?>" onclick="return confirm('hapus data??')"><button style="background-color: cyan; color: blue;">hapus</button></a></a>
        </td>
                        <td><img src="../asset/img/<?= $ky["Picture"]; ?>"></td>
                        <td><?= $ky["Name"] ?></td>
                        <td><?= $ky["Description"] ?></td>
                        <td><?= $ky["Price"] ?></td>
                        <td><?= $ky["Category"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>

        </table>
    </div>

    <div class="logout">
        <a href="logout.php"><button style="background-color: cyan; color: blue;">Logout</button></a></a>
    </div>
</body>
</html>