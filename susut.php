<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $ket = $_POST['ket'];
        $dn;
        $do;
        if($ket = 1){
            $dn = date('Y-m-d');
            $do = date('Y-m-d', time() - (365*86400));
        }else if($ket == 2){
            $dn = date('Y-m-d', time() - (365*86400));
            $do = date('Y-m-d', time() - (25*365*86400));
        }
        $sql = "SELECT * FROM tb_surat  WHERE tgl_arsip BETWEEN '$do' AND '$dn'";
        $result = $conn->query($sql);
        $i = 1;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['id_surat'];
                $filename = $row['file'];
                $sql2 = "DELETE FROM tb_surat  WHERE id_surat = '$id'";
                if ($conn->query($sql2) === TRUE) {
                    unlink('fileupload'.DIRECTORY_SEPARATOR.$filename); //delete file
                    header("location: penyusutan.php?hapus=berhasil");
                }else {
                    header("location: penyusutan.php?hapus=gagal");
                }
            }
        //if ($conn->query($sql) === TRUE) {
        //    header("location: penyusutan.php?hapus=berhasil");
        //} else {
            //header("location: penyusutan.php?hapus=gagal");
        //    echo $conn->error;
        }
        //"DELETE FROM tb_surat  WHERE tgl_arsip BETWEEN '$do' AND '$dn'";

    }