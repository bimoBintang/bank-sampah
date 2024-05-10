<?php
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_petugas'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
$id = $_GET['id_transaksi'];
$sql_hapus="DELETE FROM data_transaksi WHERE id_transaksi='$id'";
$data=mysqli_query($conn,$sql_hapus);
if($data){
    echo "<script>alert('Data berhasil dihapus');
    document.location.href = 'jemput-petugas.php';</script>";
}else{
    echo "<script>alert('Maaf data gagal dihapus');
        document.location.href = 'jemput-petugas.php';</script>";
}
?>