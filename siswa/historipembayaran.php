<?php
session_start();
$nisn=$_SESSION['nisn'];
if ($_SESSION['status_login']==false) {
  header('location: ../admin_petugas/login/login.php');
}else{
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

                        <li class="sidebar-item ">
                            <a href="dashboard_siswa.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="upload.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Upload Pembayaran</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
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

            <?php
                include "../admin_petugas/koneksi.php";
                $his=mysqli_query($conn, "select * from pembayaran a join siswa b using(nisn) where keterangan like 'lunas' and nisn=$nisn ");
                $row=mysqli_num_rows($his);

                if($row==0){
                    echo "<h3 style='text-align:center;margin-top:5%'>Belum ada transaksi</h3>";
                }elseif($row>0){
            ?>
                <h2 class="title">Histori Pembayaran Anda yang Lunas</h2>
                <div class="table-wrapper">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan SPP</th>
                            <th>Tahun SPP</th>                                      
                            </tr>                    
                        </thead>
                        <tbody>
                            <?php 
                                $no=0;
                                while($histori = mysqli_fetch_array($his)){
                                include "../admin_petugas/koneksi.php";
                                $no++;
                            ?>
                            <td><?=$no?></td>                   
                            <td><?=$histori['tgl_bayar']?></td>                    
                            <td><?=$histori['bulan_spp']?></td>                    
                            <td><?=$histori['tahun_spp']?> </td>                                            
                        <tbody>
                        <?php
                            }
                
                        ?>   
                    </table>
                </div>
            <?php
                }
                
            ?>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
}
?>