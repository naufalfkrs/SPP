<?php
session_start();
$nisn=$_SESSION['nisn'];
if($_SESSION['status_login']!=true){
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

                        <li class="sidebar-item active ">
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
            <?php
                include "../admin_petugas/koneksi.php";
                $sql=mysqli_query($conn, "select sum(a.nominal), b.* 
                from spp as a 
                join pembayaran as b 
                USING(id_spp) 
                where b.keterangan like 'belum lunas' 
                and 
                b.jatuh_tempo in (
                    SELECT jatuh_tempo 
                    FROM pembayaran 
                    WHERE 
                    month(jatuh_tempo)<=month(now()) 
                    AND 
                    YEAR(jatuh_tempo) = year(now())) 
                    and b.nisn=$nisn ");

                $qu=mysqli_query($conn,"select sum(a.nominal), b.* 
                from spp as a 
                join pembayaran as b 
                USING(id_spp) 
                where b.keterangan like 'belum lunas' 
                and 
                b.jatuh_tempo in (
                    SELECT jatuh_tempo 
                    FROM pembayaran 
                    WHERE 
                    month(jatuh_tempo)=month(now()) 
                    AND 
                    YEAR(jatuh_tempo) = year(now())) 
                    and b.nisn=$nisn  ");    

                $bul=mysqli_fetch_array($qu);
                if($bul['sum(a.nominal)']==0){
                $po="Tidak ada tunggakan";
                }elseif($bul['sum(a.nominal)']>0){
                $po=$bul['sum(a.nominal)'];
                }


                $n=mysqli_fetch_array($sql);
                if($n['sum(a.nominal)']==0){
                $p="Tidak ada tunggakan";
                }elseif($n['sum(a.nominal)']>0){
                $p=$n['sum(a.nominal)'];
                }
            ?>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">

                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldTicket-Star"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tunggakan Bulan Ini</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo"Rp ".$po?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldWallet"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Tunggakan</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo"Rp ".$p?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                    
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 align="center">Profile</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">                                          
                                            <div class="col-md-4">
                                                <div class="avatar avatar-xl">
                                                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                                                </div>
                                            </div>                           
                                        </div>
                                        <div class="row">                                          
                                            <div class="col-md-8"> 
                                                <div class="ms-3 name">
                                                    <h5 class="font-bold"><?=$_SESSION['nama']?></h5>
                                                    <h6 class="text-muted mb-0">SISWA SMK TELKOM</h6>
                                                </div>
                                            </div>   
                                        </div>
          
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 align="center">Biodata</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>


        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>