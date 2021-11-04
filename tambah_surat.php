<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $no_surat = $_POST['no_surat'];
        $perihal = $_POST['perihal'];
        $tgl = $_POST['tanggal'];
        $asal = $_POST['asal'];
        $ket = $_POST['ket'];

        $rand = rand();
        $ekstensi =  array('pdf');
        $filename = $_FILES['file']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$ekstensi) ) {
            header("location: surat_masuk.php?alert=gagal");
        }else{
            $xx = $rand.'_'.$filename;
            $sql = "INSERT INTO tb_surat VALUES('','$ket','$no_surat','$perihal','$tgl','$asal','$xx')";
            if ($conn->query($sql) === TRUE) {
                move_uploaded_file($_FILES['file']['tmp_name'], 'fileupload/'.$xx);
                if($ket=='1'){
                    header("location: surat_masuk.php?tambah=berhasil");
                }else{
                    header("location: surat_keluar.php?tambah=berhasil");
                }
            } else {
                if($ket=='2'){
                    header("location: surat_masuk.php?tambah=gagal");
                }else{
                    header("location: surat_keluar.php?tambah=gagal");
                }
            }
        }
    }else{
        header("Location: login.php");
    }

