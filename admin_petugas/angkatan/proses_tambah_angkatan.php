<?php
if($_POST){
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun_angkatan'];
    include "../koneksi.php";
    $qry_cek=mysqli_query($conn,"select * from angkatan where angkatan like '$angkatan'");
    $cek_siswa=mysqli_fetch_array($qry_cek);
    if(empty($angkatan)){
        echo "<script>alert('Angkatan tidak boleh kosong');location.href='tampil_angkatan.php';</script>"; 
    } elseif(empty($tahun)){
        echo "<script>alert('Tahun tidak boleh kosong');location.href='tampil_angkatan.php';</script>";  
    } elseif(isset($cek_siswa)){
        echo "<script>alert('Angkatan sudah ada');location.href='tampil_angkatan.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into angkatan (angkatan, tahun_angkatan) value ('".$angkatan."','".$tahun."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan angkatan');location.href='tampil_angkatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan angkatan');location.href='tampil_angkatan.php';</script>";
        }
    }
}
?>