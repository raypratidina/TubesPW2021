 <?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

        require 'functions.php';

        $id = $_GET["id"];
        $ky = query("SELECT * FROM keyboard WHERE id = $id")[0];

        if (isset($_POST['ubah'])) {
            if (ubah($_POST) > 0) {
                echo "<script>
                        alert('Data Berhasil dubah!');
                        document.location.herf = 'admin.php';
                    </script>";
            
            } else {
                echo "<script>
                        alert('Data Gagal diubah!');
                        document.location.herf = 'admin.php';
                    </script>";
            }
        }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           body {
            background-color: #01a3a4;
            color: #f7f1e3;
            font-family: sans-serif;
            src: url('asset/font/Rockford Sans-Light.otf');
        }

    </style>
</head>
    <title>Form ubah Data keyboard</title>
        <form action="" method="post">
        
        <ul>
            <input type="hidden" name="id" id="id" value="<?= $ky['id']; ?>">   
            <li>
                <label for="Picture">picture : </label><br>
                <input type="file" name="Picture" id="Picture" required
                value="<?= $mhs['Picture']; ?>"><br><br>
            </li>
            <li>
                <label for="Name">nama :</label><br>
                <input type="text" name="Name" id="Name" required value="<?= $ky['Name']; ?>"><br><br>
            </li>
            <li>
                <label for="Name">description :</label><br>
                <input type="text" name="Description" id="Description" required value="<?= $ky['Description']; ?>"><br><br>
            </li>
            <li>
                <label for="Price">price :</label><br>
                <input type="Price" name="Price" id="Price" required value="<?= $ky['Price']; ?>"><br><br>
            </li>
            <li>
                <label for="Category">Category :</label><br>
                <select name="Category" id="Category" required>
                    <option value="">------------------pilih category----------------</option>
                    <option value="mouse">mouse</option>
                    <option value="keyboard">keyboard</option>
                </select>
            </li>
            <br>
            <button type="submit" name="ubah">ubah Data!</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
            </ul>

        