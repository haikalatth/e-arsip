<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $idsurat = $_POST['id_surat'];
        $dn = date("Y-m-d");
        $dk = date("Y-m-d", time() + 86400*7);
        $user = $_SESSION['username'];

        $sql = "INSERT INTO tb_peminjaman VALUES(NULL,'$idsurat','$dn','$dk','$user','dipinjam')";
        if ($conn->query($sql) === TRUE) {
            header("location: peminjaman.php?tambah=berhasil");
        } else {
            echo $conn->error;
        }
    }else{
        header("Location: login.php");
    }
