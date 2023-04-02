<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Document</title>
    </head>
    <body>
        <div class="daftarMahasiswa">
            <h1>Daftar Mahasiswa</h1>

            <a href="tambah.php">Tambah data mahasiswa</a>
            <br><br>

            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Alamat</th>
                    <th>Nomor Sepatu</th>
                    <th>Aksi</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach($mahasiswa as $row): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["npm"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
                    <td><?= $row["nomor_sepatu"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            </table>
            <br><br>
            <a href="logout.php">Logout</a>
        </div>
    </body>
</html>