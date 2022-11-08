<?php
session_start();

      if ($_POST) {
        $search = $_POST['cari'];
        // $search2=$_POST['cari2'];
        include "../../koneksi.php";
        // $ru=mysqli_query($conn, "select nama_produk from produk");

          if(isset($_POST['cari'])){
          include "../../koneksi.php";
          $his = mysqli_query($conn, "select * from siswa where nisn like '$search'");
          $f=mysqli_fetch_array($his);
          $row = mysqli_num_rows($his);
          if ($row > 0) {
           

      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../Asset/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../Asset/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../Asset/assets/css/style.css?<?php echo time(); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../Asset/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../index.php"><img src="../../Asset/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../../index.php"><img src="../../Asset/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../Asset/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?=$_SESSION['nama_petugas']?></h5>
                  <span><?=$_SESSION['level']?></span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Menu</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../dashboard_petugas.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../transaksi.php">
              <span class="menu-icon">
                <i class="mdi mdi-onepassword text-success"></i>
              </span>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../histori.php">
              <span class="menu-icon">
                <i class="mdi mdi-settings text-warning"></i>
              </span>
              <span class="menu-title">Histori Transaksi</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Keluar</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../login/logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-logout text-danger"></i>
              </span>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../petugas/dashboard_petugas.php"><img src="../../Asset/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form action="searchspp.php" method="post" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="number" name="cari" class="form-control" placeholder="Search NISN">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../Asset/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../Asset/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../Asset/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../Asset/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?=$_SESSION['nama_petugas']?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <?php
                $sq=mysqli_query($conn, "select * from siswa a join kelas b on b.id_kelas=a.id_kelas where a.nisn=$f[nisn] order by nama asc ");
                $t=mysqli_fetch_array($sq);
                ?>
 
            <h4 class="card-title">Tagihan SPP</h4>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                        <table cellpadding="5">
                            <tr>
                                <td width="55%">NISN</td>
                                <td width="10%">:</td>
                                <td width="40%"><?php echo $f['nisn']; ?></td>
                            </tr>
                            <tr>
                                <td width="55%">Nama Siswa</td>
                                <td width="10%">:</td>
                                <td width="40%"><?php echo $f['nama']; ?></td>
                            </tr>
                            <tr>
                                <td width="55%">Kelas</td>
                                <td width="10%">:</td>
                                <td width="40%"><?php echo $t['nama_kelas']; ?></td>
                            </tr>
                        </table>
                        <br>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="text-align:center;" width="1%">No</th>
                            <th style="text-align:center;">Bulan</th>                     
                            <th style="text-align:center;">Tahun</th>                     
                            <th style="text-align:center;">Bukti Bayar</th>                     
                            <th style="text-align:center;">Nominal</th>
                            <th style="text-align:center;" width="5%">Bayar</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "../../koneksi.php";
                            $sql = mysqli_query($conn, "SELECT *, a.* FROM pembayaran b join spp a using(id_spp)WHERE nisn='$f[nisn]' ORDER BY jatuh_tempo ASC");
                        // $b=mysqli_query($conn, "select * from spp a join pembayaran b on b.id_spp=a.id_spp");
                        // while($d=mysqli_fetch_array($b)){
                        //   $nominal=$d['nominal'];
                        
                            $no=0;
                            while($d=mysqli_fetch_array($sql)){
                        $bulan=$d['bulan_spp'];
                        $tahun=$d['tahun_spp'];
                        $nominal=$d['nominal'];

                        if($d['foto_bukti']==null){
                        $bukti="-";
                        }else{
                        $bukti="<span class='tampil-gambar' data-src='../../../siswa/bukti/$d[foto_bukti]' alt='foto bukti'>Lihat Foto</span>";
                        }


                            include "../../koneksi.php";
                            $no++;
                            if($d['keterangan']=='lunas'){
                            $bayar="<img src='../gambar/lunas.png' style='width:40px; heigth:40px;'>";
                            }elseif($d['keterangan']=='belum lunas'){
                            $bayar="<a href='../proses_transaksi.php?id_pembayaran=$d[id_pembayaran]&nisn=$d[nisn]'  class='btn btn-inverse-success'>Bayar</a>";
                            }
                        ?>
                          <tr>
                            <td style="text-align:center;"><?=$no?></td>
                            <td style="text-align:center;"><?=$bulan?></td>                    
                            <td style="text-align:center;"><?=$tahun?></td>
                            <td style="text-align:center;"><?=$bukti?></td>       
                            <td style="text-align:center;"><?=$nominal?></td>
                            <td style="text-align:center;"><?=$bayar?></td>  
                          </tr>
                        </tbody>
                        <?php
                            }            
                        ?>
                      </table>
                      <div id="myModal" class="modal">

                      <!-- // The Close Button  -->
                      <span class="close">&times;</span>

                      <!-- // Modal Content (The Image)  -->
                      <img class="modal-content" id="img01">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          <!-- partial -->
        </div>    
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../Asset/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../Asset/assets/js/off-canvas.js"></script>
    <script src="../../Asset/assets/js/hoverable-collapse.js"></script>
    <script src="../../Asset/assets/js/misc.js"></script>
    <script src="../../Asset/assets/js/settings.js"></script>
    <script src="../../Asset/assets/js/todolist.js"></script>
    <script src="app.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
<?php
  
          }elseif($row==0){
            header('location: searchemptyspp.php');
          }
          }
}
          
        
?>