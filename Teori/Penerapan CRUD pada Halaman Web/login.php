<?php
    session_start();
    include "functions.php";

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = mysqli_query($conn, "SELECT * FROM login where user='$username' and pass='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:home.php");
    } else {
        header("location:index.php");
    }
