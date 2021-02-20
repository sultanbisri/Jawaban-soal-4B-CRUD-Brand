<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['btn_tambah'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "Data gagal ditambahkan!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Brand</title>
</head>

<body>
    <h3>Form Tambah Data Brand</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">
                    Nama :
                    <input type="text" name="name" id="nama" autocomplete="off" autofocus placeholder="Nama Lengkap" required>
                </label>
            </li>
        </ul>
    </form>

    <script src="js/script.js"></script>
</body>

</html>