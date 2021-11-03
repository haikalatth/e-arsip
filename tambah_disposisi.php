<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $no_surat = $_POST['no_surat'];
        $pengirim =$_SESSION['username'];
        $penerima = $_POST['penerima'];
        $pesan = $_POST['pesan'];


        $sql = "INSERT INTO tb_disposisi(id_disposisi, id_surat, id_pengirim, id_penerima, pesan ) VALUES(NULL,'$no_surat','$pengirim','$penerima','$pesan')";
        if ($conn->query($sql) === TRUE) {
            header("location: disposisi_keluar.php?tambah=berhasil");
        } else {
            //header("location: disposisi_keluar.php?tambah=gagal");
            echo $conn->error;
        }
    }else{
        header("Location: login.php");
    }

