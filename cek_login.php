<?php

    include 'koneksi.php';

    error_reporting(0);

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        } else {
            //echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
            header("Location: login.php?pesan=gagal");
        }
    }
