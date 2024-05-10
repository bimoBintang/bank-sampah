<?php
include "../../../konek.php";
 session_start();
 if(!isset($_SESSION['login_admin'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
$id = $_GET['id_user'];
$sql_hapus="DELETE FROM data_user WHERE id_user='$id'";
$data=mysqli_query($conn,$sql_hapus);
if($data){
    echo "<script>alert('Data berhasil dihapus');
    document.location.href = 'warga_data.php';</script>";
}else{
    echo "<script>alert('Maaf data gagal dihapus');
        document.location.href = 'warga_data.php';</script>";
}
?>