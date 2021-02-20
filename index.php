<?php

require 'functions.php';

$brand = query("SELECT * FROM brand");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Brand</title>
</head>

<body>
    <h3>Daftar Brand</h3>

    <a href="tambah.php">Tambah Data Brand</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($brand as $bonus) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $bonus['name']; ?></td>
                <td> <a href="detail.php?id=<?= $bonus['id']; ?> ">lihat detail</a> </td>
            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>