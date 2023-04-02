<?php
    require 'functions.php';
    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak'
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahakan!');
                    document.location.href = 'home.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('data gagal ditambahakan!');
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
        <title>Tambah data mahasiswa</title>
    </head>
    <body>
        <div class="tambah">
            <h1>Tambah data mahasiswa</h1>

            <form action="" method="post">
                <ul>
                    <li>
                        <label for="nama"> Nama: </label>
                        <input type="text" name="nama" id="nama" required>
                    </li>
                    <li>
                        <label for="npm"> NPM: </label>
                        <input type="text" name="npm" id="npm" required>
                    </li>
                    <li>
                        <label for="almat"> Alamat: </label>
                        <input type="text" name="alamat" id="alamat">
                    </li>
                    <li>
                        <label for="nomor_sepatu"> No.Sepatu: </label>
                        <input type="text" name="nomor_sepatu" id="nomor_sepatu">
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data</button>
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>
