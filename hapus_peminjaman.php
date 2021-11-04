<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $id = $_POST['id_peminjaman'];

        $sql = "DELETE FROM tb_peminjaman WHERE id_peminjaman='$id'";
        if ($conn->query($sql) === TRUE) {
            header("location: peminjaman.php?hapus=berhasil");
        } else {
            header("location: peminjaman.php?hapus=gagal");
        }

    }

