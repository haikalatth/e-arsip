<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_POST['username'];

        $sql = "DELETE FROM user WHERE username='$username'";
        if ($conn->query($sql) === TRUE) {
            header("location: admin_userdata.php?hapus=berhasil");
        } else {
            echo $username;
        }

    }

