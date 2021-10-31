<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $no_surat = $_POST['no_surat'];
        $pengirim =$_SESSION['username'];
        $penerima = $_POST['penerima'];
        $pesan = $_POST['pesan'];


        $sql = "INSERT INTO tb_disposisi VALUES('','$no_surat','$pengirim','$penerima','$pesan')";
        if ($conn->query($sql) === TRUE) {
            header("location: disposisi_keluar.php?tambah=berhasil");
        } else {
            header("location: disposisi_keluar.php?tambah=gagal");
        }
    }else{
        header("Location: login.php");
    }

