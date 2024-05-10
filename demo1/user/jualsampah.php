<?php
include "../../konek.php";
session_start();
if(!isset($_SESSION['login_warga'])){
   header("location: ../auth/login.php?pesan=belum_login");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../demo1/css/jualsampah.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../main/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../main/vendors/base/vendor.bundle.base.css">
    <link href="../../main/css/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- <script src="main/js/jquery-2.1.3.min.js"></script> -->
    <script src="../../main/js/sweetalert.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
</head>
<body>
    <div class="header">
        <a class="icon-back" href="index.php">
            <img class="header-logo" src="../../main/img/arrow-left.svg" alt="">
        </a>
        <h1>Tukar Sampah</h1>
    </div>
    <div class="card-form">
    <form class="main-form" method="post">
        <h3>Form Penjemputan</h3>
        <h4 class="caption-input">Waktu Tukar</h4>
        <input class="input-datetime" type="datetime-local" name="time">
        <h4 class="caption-input">Tambahkan Catatan</h4>
        <textarea class="input-note" name="note"></textarea>
        <h4 class="caption-input">Pilihan Tukar</h4>
        <select class="input-option" name="option">
            <option value="Jemput">Dijemput</option>
            <option value="Langsung">Langsung</option>
        </select>
        <div class="btn-form">
        <input class="btn-submit" type="submit" value="KIRIM" name="jemput">
        <a class="btn-back" href="index.php">BATAL</a>
        </div>
    </form>
    <?php
        if(isset($_POST['jemput'])){
            $nik=$_SESSION['id'];
            $time=$_POST['time'];
            $catatan=$_POST['note'];
            $option=$_POST['option'];
            if($option=="Jemput"){
                $sql_req="INSERT INTO data_transaksi (user, waktu_jemput, status_jemput, status_transaksi, catatan_jemput) VALUES ('$nik','$time','Sedang dalam perjalanan','Masih dalam penjemputan','$catatan')";
                $message="Sampah Anda akan segera dijemput";
            }else{
                $sql_req="INSERT INTO data_transaksi (user, waktu_jemput, status_jemput, status_transaksi, catatan_jemput) VALUES ('$nik','$time','Sudah dijemput','Sedang diproses','$catatan')";
                $message="Terima kasih telah menukar sampah Anda";
            }
            $query=mysqli_query($conn,$sql_req);
            if($query){
                echo "<script language='javascript'>swal('Selamat...', '$message!', 'success');</script>";
                echo '<meta http-equiv="refresh" content="3; url=../user/index.php">';         
            }else{
                echo "<script language='javascript'>swal('Gagal...', 'Maaf ada sedikit error', 'error');</script>";
                echo '<meta http-equiv="refresh" content="3; url=login.php">';
            }
        }
    ?>
    <!-- plugins:js -->
    <script src="../../main//vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../main/js/off-canvas.js"></script>
    <script src="../../main/js/hoverable-collapse.js"></script>
    <script src="../../main/js/template.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    </div>
</body>
</html>