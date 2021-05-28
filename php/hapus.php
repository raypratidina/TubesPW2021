<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
                        alert('Data Berhasll dihapus!');
                        document.location.herf = 'admin.php';
                    </script>";
} else {
    echo "<script>
                        alert('Data Gagal dihapus!');
                        document.location.herf = 'admin.php';
                    </script>";
}
?>