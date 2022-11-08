<?php
if($_POST){
    $id_spp=$_POST['id_spp'];
    $angkatan=$_POST['id_angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    if(empty($angkatan)){
        echo "<script>alert('Angkatan tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } elseif(empty($tahun)){
        echo "<script>alert('Tahun tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('Nominal tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } else {
    include "../koneksi.php"; 
        $update=mysqli_query($conn,"update spp set id_angkatan='".$angkatan."', tahun='".$tahun."',nominal='".$nominal."' where id_spp = '".$id_spp."' ") or
        die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
        } else {
            echo "<script>alert('Gagal update spp');location.href='tampil_spp.php;</script>";
        }
    }
}
?>