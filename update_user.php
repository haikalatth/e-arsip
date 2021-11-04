<?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_POST['username'];

        $sql = "UPDATE user SET jabatan='1' WHERE  username='$username'";
        if ($conn->query($sql) === TRUE) {
            header("location: admin_userdata.php?adnin=berhasil");
        } else {
            echo $username;
        }

    }

