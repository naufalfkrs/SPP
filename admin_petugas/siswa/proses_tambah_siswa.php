<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    $id_spp = $_POST['id_spp'];
    $id_ang=$_POST['id_ang'];
    $awaltempo = $_POST['jatuh_tempo'];
    $random=rand();
    include "../koneksi.php";
    $qry_cek=mysqli_query($conn,"select * from siswa where nisn like '$nisn' or nis like '$nis' ");
    $cek_siswa=mysqli_fetch_array($qry_cek);
    if(empty($nisn)){
        echo "<script>alert('NISN tidak boleh kosong');location.href='tampil_siswa.php';</script>"; 
    } elseif(empty($nis)){
        echo "<script>alert('NIS tidak boleh kosong');location.href='tampil_siswa.php';</script>"; 
    } elseif(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($id_kelas)){
        echo "<script>alert('ID Kelas tidak boleh kosong');location.href='tampil_siswa.php';</script>";  
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($no_tlp)){
        echo "<script>alert('No Telp tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(isset($cek_siswa)){
        if ($cek_siswa["nisn"]== $nisn and $cek_siswa["nis"]== $nis) {
            echo "<script>alert('NIS dan NIS sudah ada');location.href='tampil_siswa.php';</script>";
        }
        elseif ($cek_siswa["nisn"]== $nisn) {
            echo "<script>alert('NISN sudah ada');location.href='tampil_siswa.php';</script>";
        }
        elseif ($cek_siswa["nis"]== $nis) {
            echo "<script>alert('NIS sudah ada');location.href='tampil_siswa.php';</script>";
        }
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nisn, nis, nama, id_kelas, alamat, id, no_tlp) value ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$random."','".$no_tlp."')") or die(mysqli_error($conn));
        if(!$insert){
            echo "<script>alert('Gagal menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            $query=mysqli_query($conn, "select * from spp a join angkatan b on b.id_angkatan=a.id_angkatan where a.tahun like '$id_spp' and b.id_angkatan=$id_ang");
            while($eks=mysqli_fetch_array($query)){
                $id_spp2=$eks['id_spp'];
            }
            for($i=0; $i<12; $i++){
                $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));
                $bulan     = date("m" ,strtotime($jatuhtempo));
                $tahun = date("Y", strtotime($jatuhtempo));
                
                $add = mysqli_query($conn,"INSERT INTO pembayaran(nisn , jatuh_tempo, bulan_spp, id_spp, tahun_spp, keterangan) 
                VALUES ('$nisn','$jatuhtempo','$bulan','$id_spp2', '$tahun', 'belum lunas')");
                echo "<script>alert('Sukses Tambah Siswa');location.href='tampil_siswa.php';</script>";           
            }
        }
    }
}
?>