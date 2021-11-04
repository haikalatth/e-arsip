<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $id = $_POST['id_peminjaman'];
        $dn = date("Y-m-d ");

        $sql = "UPDATE tb_peminjaman SET status='dikembalikan<br>$dn' WHERE  id_peminjaman='$id'";
        if ($conn->query($sql) === TRUE) {
            header("location: peminjaman.php?pengembalian=berhasil");
        }else{
            header("location: peminjaman.php?pengembalian=gagal");

        }

    }

