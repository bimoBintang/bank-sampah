<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_petugas'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $id = $_GET['id_transaksi'];
 $sql_tampil="SELECT data_transaksi.*, data_user.* FROM data_transaksi INNER JOIN data_user ON data_transaksi.user=data_user.id_user WHERE data_transaksi.id_transaksi='$id'";
 $query=mysqli_query($conn,$sql_tampil);
 $data=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Penjemputan</title>
    <link rel="stylesheet" href="../../demo1/css/konfirmasi.css">
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
    <link rel="icon" href="../../../main/img/iconLogo.png">
</head>
<body>
    <div class="header">
        <a class="icon-back" href="jemput-petugas.php">
            <img class="header-logo" src="../../main/img/arrow-left.svg" alt="">
        </a>
        <h1>Konfirmasi Penjemputan</h1>
    </div>
    <h2 class="menu-edit">Input Validasi</h2>
    <form method="post">
    <div class="form-profile-disabled">
        <div class="left-coloumn">
            <div class="form-group">
                <p>ID Transaksi</p>
                <input class="input-edit" type="text" required name="nik" value="<?php echo $id;?>" disabled>
            </div>
            <div class="form-group">
                <p>Nama</p>
                <input class="input-edit" name="nama" required value="<?php echo $data['nama'];?>" disabled>
            </div>
            <div class="form-group">
                <p>Telepon</p>
                <input class="input-edit" name="telepon" type="text" required value="<?php echo $data['telepon'];?>" disabled>
            </div>
            <div class="form-group">
                <p>RT</p>
                <input class="input-edit" name='rt' type="text" required value="<?php echo $data['rt'];?>" disabled>
            </div>
            <div class="form-group">
                <p>Waktu</p>
                <input class="input-edit" name='time' type="datetime-local" required value="<?php echo $data['waktu_jemput'];?>" disabled>
            </div>
            <div class="form-group">
                <p>Berat</p>
                <input class="input-edit" name="weight" type="text" value="<?php echo $data['berat_sampah'];?>">
            </div>
        </div>
        <div class="right-coloumn">
            <div class="form-group">
                <p>Alamat</p>
                <textarea class="input-edit" name="address" cols="30" rows="9.5" required disabled><?php echo $data['alamat'];?>
                </textarea>
            </div>
            <div class="form-group">
                <p>Catatan</p>
                <textarea class="input-edit" name="address" cols="30" rows="9.8" required disabled><?php echo $data['catatan_jemput'];?>
                </textarea>
            </div>
            <div class="form-group">
                <p>Status</p>
                <select name="status" id="">
                    <option value="Ditunda">Ditunda</option>
                    <option value="Sedang dalam perjalanan">Sedang dalam perjalanan</option>
                    <option value="Sudah dijemput">Sudah dijemput</option>
                </select>
            </div>
        </div>
    </div>
    <div class="btn">
        <input type='submit' name='konfirm' value='Konfirmasi'>
    </div>
    </form>
<?php  
    if(isset($_POST['konfirm'])){
        $berat=$_POST['weight'];
        $status=$_POST['status'];
        if($status=="Ditunda" || $status=="Sedang dalam perjalanan"){
            $sql_update="UPDATE data_transaksi SET  berat_sampah='$berat', status_jemput='$status' WHERE id_transaksi='$id'";
            
        }else{
            $sql_update="UPDATE data_transaksi SET  berat_sampah='$berat', status_jemput='$status', status_transaksi='Sedang diproses' WHERE id_transaksi='$id'";
        }
        $query_update=mysqli_query($conn,$sql_update);
        if($query_update){
            echo "<script language='javascript'>swal('Selamat...', 'Konfirmasi Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=../petugas/index.php">';
        }else{
            echo "<script language='javascript'>swal('Gagal...', 'Maaf ada sedikit error', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=login.php">';        }
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
</body>
</html>