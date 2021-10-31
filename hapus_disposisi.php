<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $id_disposisi = $_POST['id_disposisi'];

        $sql = "DELETE FROM tb_disposisi WHERE id_disposisi='$id_disposisi'";
        if ($conn->query($sql) === TRUE) {
            header("location: disposisi_masuk.php?hapus=berhasil");
        } else {
            header("location: disposisi_masuk.php?hapus=gagal");
        }

    }

