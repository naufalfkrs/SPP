<head>
<link rel="stylesheet" type="text/css" href="../Asset/sweetalert2.min.css">
<script type="text/javascript" src="../Asset/sweetalert2.all.min.js"></script>
<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
</head>
<body>
<?php
if($_GET['id_angkatan']){
    include "../koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from angkatan where id_angkatan='".$_GET['id_angkatan']."'");
    if($qry_hapus){
        // echo '<script type="text/javascript">
        //     setTimeout(function () { Swal.fire({
        //         icon: "success",
        //         title: "Your work has been saved",
        //         showConfirmButton: false,
        //         timer: 1500
        //       })
        //     }, 1000);</script>';
        echo "<script>alert('Sukses hapus angkatan');location.href='tampil_angkatan.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus angkatan');location.href='tampil_angkatan.php';</script>";
    }
}
?>
</body>