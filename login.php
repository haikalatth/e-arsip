<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN | E-ARSIP</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/logincss.css">
</head>
<body>
<div class="registration-form">
    <form action="cek_login.php" method="post">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-block create-account">Login</button>
        </div>
        <div>
            <p style="text-align: center">Belum punya akun? <a href="daftar.php">DAFTAR</a> disini!</p>
        </div>
    </form>
    <div class="social-media" style="color: red">
        <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username atau password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "admin"){
                    echo "Akun anda tidak memiliki akses ke halaman admin. <br>Silakan login dengan akun admin";
                }else if($_GET['pesan'] == "berhasil"){
                    echo "Pendaftaran Berhasil, Silakan Login!";
                }
            }
        ?>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="assets/js/loginjs.js"></script>
</body>
</html>
