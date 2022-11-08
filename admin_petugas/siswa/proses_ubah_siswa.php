<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($id_kelas)){
        echo "<script>alert('ID Kelas tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($no_tlp)){
        echo "<script>alert('No Telepon tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
    include "../koneksi.php";
        $update=mysqli_query($conn,"update siswa set nama='".$nama."', id_kelas='".$id_kelas."',alamat='".$alamat."',no_tlp='".$no_tlp."' where id = '".$id."' ") or
        die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal update siswa');location.href='tampil_siswa.php;</script>";
        }
    }
}
?>