<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    if(empty($nama_petugas)){
        echo "<script>alert('Namatidak boleh kosong');location.href='tampil_petugas.php';</script>"; 
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tampil_petugas.php';</script>";  
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tampil_petugas.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('Level tidak boleh kosong');location.href='tampil_petugas.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, username, password, level) value ('".$nama_petugas."','".$username."','".md5($password)."','".$level."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tampil_petugas.php';</script>";
        }
    }
}
?>