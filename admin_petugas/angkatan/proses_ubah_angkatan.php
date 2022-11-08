<?php
if($_POST){
    $id_angkatan=$_POST['id_angkatan'];
    $tahun=$_POST['tahun_angkatan'];
    if(empty($tahun)){
        echo "<script>alert('Tahun tidak boleh kosong');location.href='tampil_angkatan.php';</script>";
    } elseif(isset($cek_siswa)){
        echo "<script>alert('Angkatan sudah ada');location.href='tampil_angkatan.php';</script>";
    } else {
    include "../koneksi.php"; 
        $update=mysqli_query($conn,"update angkatan set tahun_angkatan='".$tahun."' where id_angkatan = '".$id_angkatan."' ") or
        die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update angkatan');location.href='tampil_angkatan.php';</script>";
        } else {
            echo "<script>alert('Gagal update angkatan');location.href='tampil_angkatan.php;</script>";
        }
    }
}
?>