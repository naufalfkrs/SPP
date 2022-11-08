<?php 
error_reporting(E_ERROR | E_PARSE);
    if($_POST){
        include "../koneksi.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];

        $sql_petugas = mysqli_query($conn, "select * from petugas where username = '".$username."' and password = '".md5($password)."'");
        $sql_siswa = mysqli_query($conn, "select * from siswa where nama = '".$nama."' and nisn = '".$nisn."'");
      
            if(mysqli_num_rows($sql_petugas) > 0) {
                $dt_login = mysqli_fetch_assoc($sql_petugas);
                if($dt_login['level'] == "Admin") { 
                    session_start();
                    $_SESSION['username'] = $dt_login['username'];
                    $_SESSION['id_petugas'] = $dt_login['id_petugas'];
                    $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
                    $_SESSION['status_login2'] = true;
                    $_SESSION['level'] = "Admin";
                    echo "<script>alert('Success login as Admin'); location.href='../petugas/dashboard_admin.php';</script>";
                } else if($dt_login['level'] == "Petugas") {
                    session_start();
                    $_SESSION['username'] = $dt_login['username'];
                    $_SESSION['id_petugas'] = $dt_login['id_petugas'];
                    $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
                    $_SESSION['status_login1'] = true;
                    $_SESSION['level'] = "Petugas";
                    echo "<script>alert('Success login as Petugas'); location.href='../Punya_Petugas/dashboard_petugas.php';</script>";
                }
            } else if(mysqli_num_rows($sql_siswa) > 0) {
                $dt_login = mysqli_fetch_assoc($sql_siswa);
                session_start();
                $_SESSION['nisn'] = $dt_login['nisn'];
                $_SESSION['nama'] = $dt_login['nama'];
                $_SESSION['status_login'] = true;
                echo "<script>alert('Succes login as Siswa'); location.href='../../siswa/dashboard_siswa.php';</script>";
            } else {
                echo "<script>alert('Username dan Password tidak benar'); location.href='login.php';</script>";
            }
        }

?>