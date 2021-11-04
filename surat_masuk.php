<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-ARSIP - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-90">
                <i class="fas fa-archive"></i>
            </div>
            <div class="sidebar-brand-text mx-3">E-ARSIP <sup>v1.0</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- SURAT -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSurat"
               aria-expanded="true" aria-controls="collapseSurat">
                <i class="fas fa-fw fa-folder"></i>
                <span>Dokumen</span>
            </a>
            <div id="collapseSurat" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Surat:</h6>
                    <a class="collapse-item active" href="surat_masuk.php">Surat Masuk</a>
                    <div class="collapse-divider"></div>
                    <a class="collapse-item" href="surat_keluar.php">Surat Keluar</a>
                </div>
            </div>
        </li>

        <!-- TRANSAKSI -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrans"
               aria-expanded="true" aria-controls="collapseTrans">
                <i class="fas fa-fw fa-retweet"></i>
                <span>Transaksi</span>
            </a>
            <div id="collapseTrans" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Transaksi:</h6>
                    <a class="collapse-item" href="#">Peminjaman</a>
                    <div class="collapse-divider"></div>
                    <a class="collapse-item" href="#">Pengembalian</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Agenda -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Agenda</span></a>
        </li>

        <!-- Nav Item - Profil -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-user"></i>
                <span>Profil</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- if else session admin dimulai disini -->
        <div class="sidebar-heading">
            Bagian Admin
        </div>

        <!-- Nav Item - Profil -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-users"></i>
                <span>Data User</span></a>
        </li>

        <!-- end of if else admin -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle"
                                 src="assets/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Surat Masuk</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="#" data-toggle="modal" data-target="#tambahModal">
                            <h6 class="m-0 font-weight-bold text-primary" style="float: right">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                Tambah Surat Masuk
                            </h6>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Perihal</th>
                                    <th>Tanggal Surat</th>
                                    <th>Terima Dari</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Perihal</th>
                                    <th>Tanggal Surat</th>
                                    <th>Terima Dari</th>
                                    <th>Aksi</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                    include 'koneksi.php';
                                    $sql = "SELECT * FROM tb_surat WHERE ket='1'";
                                    $result = $conn->query($sql);
                                    $i = 1;
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['no_surat']?></td>
                                        <td><?php echo $row['perihal']?></td>
                                        <td><?php echo $row['tanggal']?></td>
                                        <td><?php echo $row['asal']?></td>
                                        <td>
                                            <!--
                                            <a href="#" data-toggle="modal" data-target="#disposisiModal" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-share"></i>
                                            </a>
                                            -->
                                            <a href="#" data-toggle="modal" data-target="#infoModal" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>


                                        <!-- SEMUA MODAL DISINI-->

                                        <!-- MODAL DISPOSISI-->
                                        <div class="modal fade" id="disposisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Disposisi Surat </h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Penerima Disposisi:</label>
                                                                <select class="form-control">
                                                                    <option value="idne">PENERIMA 1</option>
                                                                    <option>PENERIMA 2</option>
                                                                </select>
                                                                <label for="recipient-name" class="col-form-label">Pesan:</label>
                                                                <input class="form-control" type="text" name="pesan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </span>
                                                            <span class="text">Teruskan Surat</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL DISPOSISI-->

                                        <!-- MODAL INFO-->
                                        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Surat Dari <?php echo $row['asal']?></h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Nomor Surat  </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    : <?php echo $row['no_surat']?>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Perihal </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    : <?php echo $row['perihal']?>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Tanggal </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    : <?php echo $row['tanggal']?>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Pengirim</label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    : <?php echo $row['asal']?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="download.php?surat=<?php echo $row['file']; ?>" target="_blank" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-download"></i>
                                                            </span>
                                                            <span class="text">Lihat Surat</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL INFO-->

                                        <!-- HAPUS Modal-->
                                        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Surat Masuk?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Pilih "Hapus" jika ingin menghapus surat.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <a class="btn btn-primary" href="#" onclick="hapusFunc()">Hapus</a>
                                                        <form id="hapus" action="hapus_surat.php" method="post">
                                                            <input type="hidden" name="id_surat" value="<?php echo $row['id_surat']?>">
                                                            <input type="hidden" name="file" value="<?php echo $row['file']?>">
                                                        </form>
                                                        <script>
                                                            function hapusFunc() {
                                                                document.getElementById("hapus").submit();
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END HAPUS MODAL-->
                                    </tr>
                                <?php
                                        }
                                    } else {
                                        printf('No record found.<br />');
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; E-Arsip v1.0 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- MODAL DILUAR TABEL -->

    <!-- MODAL DISPOSISI-->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="add" action="tambah_surat.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nomor Surat:</label>
                            <input class="form-control" type="text" name="no_surat">

                            <label for="recipient-name" class="col-form-label">Perihal:</label>
                            <input class="form-control" type="text" name="perihal">

                            <label for="recipient-name" class="col-form-label">Tanggal Surat:</label>
                            <input class="form-control" type="date" name="tanggal">

                            <label for="recipient-name" class="col-form-label">Terima Dari:</label>
                            <input class="form-control" type="text" name="asal">

                            <label for="recipient-name" class="col-form-label">File Dokumen:</label>
                            <input class="form-control-file" type="file" name="file">
                            <p style="color: red">Ekstensi yang diperbolehkan .pdf</p>
                            <input type="hidden" name="ket" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" onclick="myFunction()" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </a>
                        <script>
                            function myFunction() {
                                document.getElementById("add").submit();
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MODAL DISPOSISI-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Akhiri sesi?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika ingin mengakhiri sesi anda.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>

<?php

    if(isset($_GET['hapus'])){
        if($_GET['hapus'] == "berhasil"){
            echo '<script type ="text/JavaScript">';
            echo 'alert("Berhasil Menghapus Surat Masuk")';
            echo '</script>';
        }else if($_GET['hapus'] == "gagal"){
            echo '<script type ="text/JavaScript">';
            echo 'alert("Gagal Menghapus Surat Masuk")';
            echo '</script>';
        }
    }
    
    if(isset($_GET['tambah'])){
        if($_GET['tambah'] == "berhasil"){
            echo '<script type ="text/JavaScript">';
            echo 'alert("Berhasil Menambahkan Surat Masuk")';
            echo '</script>';
        }else if($_GET['tambah'] == "gagal"){
            echo '<script type ="text/JavaScript">';
            echo 'alert("Gagal Menambahkan Surat Masuk")';
            echo '</script>';
        }
    }

?>