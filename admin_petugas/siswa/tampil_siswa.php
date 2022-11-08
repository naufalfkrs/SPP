<?php
session_start();
if($_SESSION['status_login2']!=true){
    header('location: ../login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Asset/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../Asset/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../Asset/assets/css/style.css?<?php echo time(); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../Asset/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../index.php"><img src="../Asset/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../../index.php"><img src="../Asset/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../Asset/assets/images/faces/face15.jpg" alt="">
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
            <a class="nav-link" href="../petugas/dashboard_admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../siswa/tampil_siswa.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Data Siswa</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../petugas/tampil_petugas.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Data Petugas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../kelas/tampil_kelas.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Data Kelas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../spp/tampil_spp.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Data SPP</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../angkatan/tampil_angkatan.php">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-today text-secondary"></i>
              </span>
              <span class="menu-title">Data Angkatan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../Pembayaran/transaksi.php">
              <span class="menu-icon">
                <i class="mdi mdi-onepassword text-info"></i>
              </span>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../Pembayaran/histori.php">
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
            <a class="nav-link" href="../login/logout.php">
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
            <a class="navbar-brand brand-logo-mini" href="../petugas/dashboard_admin.php"><img src="../Asset/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form action="../search/searchsis.php" method="post" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" name="cari" class="form-control" placeholder="Search Siswa">
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
                      <img src="../Asset/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../Asset/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../Asset/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
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
                    <img class="img-xs rounded-circle" src="../Asset/assets/images/faces/face15.jpg" alt="">
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
            <div class="page-header">
              <h3 class="page-title"> Data Siswa </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <div class="table-responsive">
                    <button type="button" class="btn btn-inverse-primary" data-toggle="modal" data-target="#exampleModalCenter" >+ Add</button>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="text-align:center;" width="5%">NO</th>
                            <th style="text-align:center;">NISN</th>
                            <th style="text-align:center;">NIS</th>
                            <th style="text-align:center;">NAMA SISWA</th>
                            <th style="text-align:center;">NAMA KELAS</th>
                            <th style="text-align:center;">ALAMAT</th>
                            <th style="text-align:center;">NO TELP</th>
                            <th style="text-align:center;" width="10%">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                              include "../koneksi.php";
                              $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
                              $no=0;
                              while($data_siswa=mysqli_fetch_array($qry_siswa)){
                              $no++;
                            ?>
                          <tr>
                            <td style="text-align:center;"><?=$no?></td>
                            <td style="text-align:center;"><?=$data_siswa['nisn']?></td>
                            <td style="text-align:center;"><?=$data_siswa['nis']?></td>
                            <td style="text-align:center;"><?=$data_siswa['nama']?></td>
                            <td style="text-align:center;"><?=$data_siswa['nama_kelas']?></td>
                            <td style="text-align:center;"><?=$data_siswa['alamat']?></td>
                            <td style="text-align:center;"><?=$data_siswa['no_tlp']?></td>
                            <td ><a class="btn btn-inverse-success mdi mdi-pencil" data-toggle="modal" data-target="#update<?php echo $data_siswa['nisn'];?>"></a>
                            <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-inverse-danger mdi mdi-delete"></a>
                            </td>
                            <!-- Modal Update-->
                            <div class="modal fade" id="update<?php echo $data_siswa['nisn'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div style="background-color: #191c24;" class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                  <form class="forms-sample" action="proses_ubah_siswa.php" method="post">
                                  <input type="hidden" name="id" class="form-control" id="exampleInputUsername1" value= "<?=$data_siswa['id']?>" >
                                    <div class="form-group">
                                      <label for="exampleInputUsername1">NISN</label>
                                      <input type="text" name="nisn" class="form-control" id="exampleInputUsername1" placeholder="NISN" value= "<?=$data_siswa['nisn']?>" style="background-color:rgba(42,48,56,0.2);" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">NIS</label>
                                      <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="NIS" value= "<?=$data_siswa['nis']?>" style="background-color:rgba(42,48,56,0.2);" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Nama</label>
                                      <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" value= "<?=$data_siswa['nama']?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleSelectGender">Kelas</label>
                                      <select name="id_kelas" class="form-control" id="exampleSelectGender">
                                        <?php
                                        include "../koneksi.php";
                                        $qry_kelas=mysqli_query($conn,"select * from kelas");
                                        while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                        if($data_kelas['id_kelas']==$data_siswa['id_kelas']){
                                        $selek="selected";
                                        } else {
                                        $selek="";
                                        }
                                        echo '<option value="'.$data_kelas['id_kelas'].'"
                                        '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';
                                        }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleTextarea1">Alamat</label>
                                      <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="4" placeholder="Alamat" value= "<?=$data_siswa['alamat']?>"><?=$data_siswa['alamat']?></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">No Telp</label>
                                      <input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1" placeholder="No Telp" value= "<?=$data_siswa['no_tlp']?>">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                       
                        <!-- Modal Add-->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div style="background-color: #191c24;" class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <form class="forms-sample" action="proses_tambah_siswa.php" method="post">
                                <div class="form-group">
                                  <label for="exampleInputUsername1">NISN</label>
                                  <input type="text" name="nisn" class="form-control" id="exampleInputUsername1" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">NIS</label>
                                  <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="NIS">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Nama</label>
                                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                  <label for="exampleSelectGender">Kelas</label>
                                  <select name="id_kelas" class="form-control" id="exampleSelectGender">
                                      <?php 
                                      include "../koneksi.php";
                                      $qry_kelas=mysqli_query($conn,"select * from kelas");
                                      while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                          echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
                                      }
                                      ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleTextarea1">Alamat</label>
                                  <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="4" placeholder="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">No Telp</label>
                                  <input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1" placeholder="No Telp">
                                </div>
                                <div class="form-group">
                                  <label for="exampleSelectGender">Tahun SPP</label>
                                  <select name="id_spp" class="form-control" id="exampleSelectGender">
                                      <?php 
                                      include "../koneksi.php";
                                      $qry_kelas=mysqli_query($conn,"select * from spp");
                                      while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                          echo '<option value="'.$data_kelas['tahun'].'">'.$data_kelas['tahun'].'</option>';    
                                      }
                                      ?>
                                  </select>
                                </div> 
                                <div class="form-group">
                                  <label for="exampleSelectGender">Angkatan</label>
                                  <select name="id_ang" class="form-control" id="exampleSelectGender">
                                      <?php 
                                      include "../koneksi.php";
                                      $qry_kelas=mysqli_query($conn,"select * from angkatan");
                                      while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                          echo '<option value="'.$data_kelas['id_angkatan'].'">'.$data_kelas['angkatan'].'</option>';    
                                      }
                                      ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Jatuh Tempo</label>
                                  <input type="date" name="jatuh_tempo" class="form-control" id="exampleInputPassword1">
                                </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- partial -->
        </div>  
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../Asset/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../Asset/assets/js/off-canvas.js"></script>
    <script src="../Asset/assets/js/hoverable-collapse.js"></script>
    <script src="../Asset/assets/js/misc.js"></script>
    <script src="../Asset/assets/js/settings.js"></script>
    <script src="../Asset/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>