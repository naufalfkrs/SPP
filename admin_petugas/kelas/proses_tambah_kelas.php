    <script src="../Asset/sweetalert2.all.min.js"></script>
<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['id_angkatan'];
    include "../koneksi.php";
    $qry_cek=mysqli_query($conn,"select * from kelas where nama_kelas like '$nama_kelas'");
    $cek_siswa=mysqli_fetch_array($qry_cek);
    if(empty($nama_kelas)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tampil_kelas.php';</script>"; 
    } elseif(empty($jurusan)){
        echo "<script>alert('Jurusan tidak boleh kosong');location.href='tampil_kelas.php';</script>";  
    } elseif(empty($angkatan)){
        echo "<script>alert('Angkatan tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif(isset($cek_siswa)){
        echo "<script>alert('Nama Kelas sudah ada');location.href='tampil_kelas.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, jurusan, id_angkatan) value ('".$nama_kelas."','".$jurusan."','".$angkatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tampil_kelas.php';</script>";
        }
    }
}
?>