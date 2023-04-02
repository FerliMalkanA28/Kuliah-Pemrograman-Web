<?php
    require 'functions.php';

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil diubah atau tidak'
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'home.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('data gagal diubah!');
                    document.location.href = 'home.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Ubah Data Mahasiswa</title>
    </head>
    <body>
        <div class="tambah">
            <h1>Ubah Data Mahasiswa</h1>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $mhs["id"];?>">
                <ul>
                    <li>
                        <label for="nama"> Nama: </label>
                        <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
                    </li>
                    <li>
                        <label for="npm"> NPM: </label>
                        <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
                    </li>
                    <li>
                        <label for="almat"> Alamat: </label>
                        <input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"]; ?>">
                    </li>
                    <li>
                        <label for="nomor_sepatu"> Nomor Sepatu: </label>
                        <input type="text" name="nomor_sepatu" id="nomor_sepatu" value="<?= $mhs["nomor_sepatu"]; ?>">
                    </li>
                    <li>
                        <button type="submit" name="submit">Ubah Data</button>
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>
