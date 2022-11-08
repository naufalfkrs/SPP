<?php
session_start();
if($_SESSION['status_login']==false){
    header('location: ../admin_petugas/login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dashboard_siswa.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="dashboard_siswa.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
                            <a href="upload.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Upload Pembayaran</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="historipembayaran.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Histori Pembayaran</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Keluar</li>

                        <li class="sidebar-item  ">
                            <a href="../admin_petugas/login/logout.php" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-md-8" style="margin:auto;margin-top:7%;">
                            <div class="card">
                                <form action="proses_upload.php" method="post"  enctype="multipart/form-data" class="upload">
                                    <div class="card-header">
                                        <h4 class="card-title" style="text-align:center;">Upload Bukti Pembayaran</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-lg-10 col-md-12" style="margin:auto;">
                                                <div>
                                                    <label for="formFileLg" class="form-label">Upload Foto</label>
                                                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="foto">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-10 mb-4" style="margin:auto;">
                                                <div class="form-group">
                                                    <label for="formFileLg" class="form-label">Pilih Tahun</label>
                                                    <select class="choices form-select" name="year">
                                                        <?php 
                                                            // $ang=$_SESSION['tahun_masuk'];
                                                            echo "<option style='text-align:center;'>Pilih Tahun</option>";
                                                            // if($ang=='30'){
                                                            for($i =$_SESSION['tahun_masuk'] ; $i <= date('Y'); $i++){
                                                                echo "<option style='text-align:center;'>$i</option>";
                                                            }
                                                            // }elseif($ang=='31'){
                                                            //   for($i = 2021 ; $i <= date('Y'); $i++){
                                                            //     echo "<option>$i</option>";
                                                            //  }
                                                            // }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-10 mb-4" style="margin:auto;">
                                                <div class="form-group">
                                                    <label for="formFileLg" class="form-label">Pilih Bulan</label>
                                                    <select class="choices form-select" name="month">
                                                        <option style='text-align:center;'>Pilih Bulan</option>
                                                        <option style='text-align:center;' value="1">Januari</option>
                                                        <option style='text-align:center;' value="2">Februari</option>
                                                        <option style='text-align:center;' value="3">Maret</option>
                                                        <option style='text-align:center;' value="4">April</option>
                                                        <option style='text-align:center;' value="5">Mei</option>
                                                        <option style='text-align:center;' value="6">Juni</option>
                                                        <option style='text-align:center;' value="7">Juli</option>
                                                        <option style='text-align:center;' value="8">Agustus</option>
                                                        <option style='text-align:center;' value="9">September</option>
                                                        <option style='text-align:center;' value="10">Oktober</option>
                                                        <option style='text-align:center;' value="11">November</option>
                                                        <option style='text-align:center;' value="12">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div align="center">
                                                    <button type="submit" value="upload" class="btn btn-primary col-md-10 mb-4">Submit</button>       
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>