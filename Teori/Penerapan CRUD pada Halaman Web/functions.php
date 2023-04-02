<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "teori_web");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }


    function tambah($data){
        global $conn;
        // ambil data dari tiap elemen dalam form
        $nama = htmlspecialchars($data["nama"]);
        $npm = htmlspecialchars($data["npm"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor_sepatu = htmlspecialchars($data["nomor_sepatu"]);

        // querry insert data
        $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$npm', '$alamat', '$nomor_sepatu')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $npm = htmlspecialchars($data["npm"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor_sepatu = htmlspecialchars($data["nomor_sepatu"]);

        $query = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', alamat = '$alamat', nomor_sepatu ='$nomor_sepatu' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>