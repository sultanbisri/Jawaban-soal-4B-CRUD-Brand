<?php
require 'functions.php';

// ambil data dari url
$id = $_GET['id'];

$brand = query("SELECT * FROM brand WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Brand</title>
</head>

<body>

    <h3>Detail Brand</h3>

    <ul>
        <li>Nama : <?= $brand['name']; ?> </li>
        <li>
            <a href="ubah.php?id=<?= $brand['id']; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $brand['id']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?'); ">hapus</a>
        </li>
        <li><a href="index.php">Kembali Ke Daftar brand</a></li>
    </ul>

</body>

</html>