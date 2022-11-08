<?php
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $jurusan=$_POST['jurusan'];
    $id_angkatan=$_POST['id_angkatan'];
    if(empty($jurusan)){
        echo "<script>alert('Jurusan tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif(empty($id_angkatan)){
        echo "<script>alert('Angkatan tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif(isset($cek_siswa)){
        echo "<script>alert('Nama Kelas sudah ada');location.href='tampil_kelas.php';</script>";
    } else {
    include "../koneksi.php"; 
        $update=mysqli_query($conn,"update kelas set jurusan='".$jurusan."',id_angkatan='".$id_angkatan."' where id_kelas = '".$id_kelas."' ") or
        die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal update kelas');location.href='tampil_kelas.php;</script>";
        }   
    }
}
?>
</body>