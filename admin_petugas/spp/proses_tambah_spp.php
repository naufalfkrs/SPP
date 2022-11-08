<?php
if($_POST){
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
        $insert=mysqli_query($conn,"insert into spp (id_angkatan, tahun, nominal) value ('".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan spp');location.href='tampil_spp.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan spp');location.href='tampil_spp.php';</script>";
        }
    }
}
?>