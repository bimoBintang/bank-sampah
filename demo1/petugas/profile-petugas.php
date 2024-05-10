<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_petugas'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $sql_tampil="SELECT*FROM data_user WHERE nik='$_SESSION[id]'";
 $query=mysqli_query($conn,$sql_tampil);
 $data=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="../../demo1/css/profile.css">
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
        <a class="icon-back" href="index.php">
            <img class="header-logo" src="../../main/img/arrow-left.svg" alt="">
        </a>
        <h1>Pengaturan Profil</h1>
    </div>
    <h2 class="menu-edit">Edit Profile</h2>
    <form method="post">
    <div class="form-profile-disabled">
        <div class="left-coloumn">
            <div class="form-group">
                <p>Nomor Kartu Keluarga</p>
                <input class="input-edit" type="text" required name="nik" value="<?php echo $data['nik'];?>">
            </div>
            <div class="form-group">
                <p>Nama</p>
                <input class="input-edit" name="nama" required value="<?php echo $data['nama'];?>">
            </div>
            <div class="form-group">
                <p>Email</p>
                <input class="input-edit" name="email" type="email" required value="<?php echo $data['email'];?>">
            </div>
            <div class="form-group">
                <p>RT</p>
                <input class="input-edit" name='rt' type="text" required value="<?php echo $data['rt'];?>">
            </div>
        </div>
        <div class="right-coloumn">
            <div class="form-group">
                <p>Alamat</p>
                <textarea class="input-edit" name="address" cols="30" rows="12" required><?php echo $data['alamat'];?>
                </textarea>
            </div>
            <div class="form-group">
                <p>Telepon</p>
                <input class="input-edit" name="phone" type="text" value="<?php echo $data['telepon'];?> required">
            </div>
        </div>
    </div>
    <div class="btn">
        <input type='submit' name='edit' value='Ubah Profil'>
    </div>
    </form>
    <div class="new-pass-card">
    <h2 class="menu-edit">Ganti Password</h2>
    <form class="form-new-pass" method="post">
        <div class="form-group">
            <p>Password Baru</p>
            <input class="input-new-pass" name="password_baru" type="text" placeholder="Masukkan Password Baru Anda.....">
        </div>
        <div class="form-group">
            <p>Konfirmasi Password</p>
            <input class="input-new-pass" name="konfirmasi_password" type="text" placeholder="Masukkan Password Anda Kembali....">
        </div>
        <input class="btn-new-pass" name="change" value="Konfirmasi" type="submit">
    </form>
    </div>
<?php  
    if(isset($_POST['edit'])){
        $nik=$_POST['nik'];
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $telepon=$_POST['phone'];
        $rt=$_POST['rt'];
        $address=$_POST['address'];
        $sql_update="UPDATE data_user SET nik='$nik', nama='$nama', email='$email', telepon='$telepon',alamat='$address',rt='$rt' WHERE id_user='$_SESSION[id]'";
        $query_update=mysqli_query($conn,$sql_update);
        if($query_update){
            echo "<script language='javascript'>swal('Selamat...', 'Profil Anda sudah diperbarui!', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=../user/index.php">';         
        }else{
            echo "<script language='javascript'>swal('Gagal...', 'Maaf ada sedikit error', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=login.php">';        
        }
    }
    if(isset($_POST['change'])){
        $password_baru=$_POST['password_baru'];
        $konfirmasi_password=$_POST['konfirmasi_password'];
        if($password_baru==$konfirmasi_password){
            $sql_update="UPDATE data_user SET password='$password_baru' WHERE id_user='$_SESSION[id]'";
            $query_update=mysqli_query($conn,$sql_update);
            if($query_update){
                echo "<script>alert('Password Anda Telah Diperbarui')</script>";
            }else{
                echo "<script language='javascript'>swal('Gagal...', 'Maaf ada sedikit error', 'error');</script>";
                echo '<meta http-equiv="refresh" content="3; url=login.php">';
            }
        }else{
            echo "<script language='javascript'>swal('Gagal...', 'Maaf konfirmasi password tidak valid', 'error');</script>";
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
</body>
</html>