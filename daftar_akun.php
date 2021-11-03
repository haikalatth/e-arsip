<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "INSERT INTO user(username, jabatan, nama, password) VALUES('$username','2','$nama','$password')";
        if ($conn->query($sql) === TRUE) {
            header("location: login.php?daftar=berhasil");
        } else {
            header("location: daftar.php?daftar=gagal");
        }
    }else{
        header("Location: login.php");
    }

