<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $id_surat = $_POST['id_surat'];
        $filename = $_POST['file'];
        $ket = $_POST['ket'];

        $sql = "DELETE FROM tb_surat WHERE id_surat='$id_surat'";
        if ($conn->query($sql) === TRUE) {
            unlink('fileupload'.DIRECTORY_SEPARATOR.$filename); //delete file
            if($ket == 'masuk'){
                header("location: surat_masuk.php?hapus=berhasil");
            }else{
                header("location: surat_keluar.php?hapus=berhasil");
            }
        } else {
            if($ket == 'masuk'){
                header("location: surat_masuk.php?hapus=gagal");
            }else{
                header("location: surat_keluar.php?hapus=gagal");
            }
        }

    }

