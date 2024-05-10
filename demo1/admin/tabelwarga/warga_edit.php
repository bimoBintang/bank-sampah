<?php
include "../../../konek.php";
session_start();
if(!isset($_SESSION['login_admin'])){
   header("location: ../auth/login.php?pesan=belum_login");
   exit;
}
 $sql_admin="SELECT*FROM data_user WHERE id_user='$_SESSION[id_admin]'";
 $query_admin=mysqli_query($conn,$sql_admin);
 $data_admin=mysqli_fetch_assoc($query_admin);
 
 $id=$_GET['id_user'];
 $sql_tampil="SELECT*FROM data_user WHERE id_user='$id'";
 $query_tampil=mysqli_query($conn,$sql_tampil);
 $data_tampil=mysqli_fetch_assoc($query_tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/admin.css">
  <title>Halaman Edit Data Warga</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
</head>

<body>
  <?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php' ?>
    <main>
    <div class="kotak-atas">
        <div class="text">
          <h2 class="title-edit-data">Edit Data Warga</h2>
        </div>
        <form method="post">
        <div class="form-input">
            <div class="left-coloumn">
                <div class="form-group">
                    <p class="caption-form">Nomor Kartu Keluarga</p>
                    <input class="input-edit" type="text" required name="nik" value="<?= $data_tampil['nik']?>">
                </div>
                <div class="form-group">
                    <p class="caption-form">Nama</p>
                    <input class="input-edit" name="nama" required value="<?= $data_tampil['nama']?>">
                </div>
                <div class="form-group">
                    <p class="caption-form">Email</p>
                    <input class="input-edit" name="email" type="email" value="<?= $data_tampil['email']?>" required >
                </div>
                <div class="form-group">
                    <p class="caption-form">Saldo</p>
                    <input class="input-edit" name="saldo" type="text" value="<?=$data_tampil['saldo']?>"required >
                </div>
            </div>
            <div class="right-coloumn">
                <div class="form-group">
                    <p class="caption-form">Alamat</p>
                    <textarea class="input-edit" name="address" cols="30" rows="5" required><?= $data_tampil['alamat']?>
                    </textarea>
                    </div>
                <div class="form-group">
                    <p class="caption-form">RT</p>
                    <input class="input-edit" name='rt' type="text" required value="<?= $data_tampil['rt']?>">
                </div>
                <div class="form-group">
                    <p class="caption-form">Telepon</p>
                    <input class="input-edit" name="phone" type="text" value="<?= $data_tampil['telepon']?>">
                </div>
            </div>
        </div>
        <div class="btn-input">
            <input class='btn-update'type='submit' name='update'value='Ubah'>
        </div>
    </form>
    </main>
  </div>
  <?php
  if(isset($_POST['update'])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telepon=$_POST['phone'];
    $rt=$_POST['rt'];
    $address=$_POST['address'];
    $saldo=$_POST['saldo'];
    $sql_update="UPDATE data_user SET nik='$nik', nama='$nama', email='$email', telepon='$telepon',alamat='$address',rt='$rt', saldo='$saldo' WHERE id_user='$id'";
    $query_update=mysqli_query($conn,$sql_update);
    if(!$query_update){
        echo "<script>alert('Maaf terjadi sedikit error')</script>";
    }else{
        echo "<script>alert('Ubah Data Berhasil')
        window.location.href='warga_data.php'</script></script>";    }
}
  ?>
  <script src="../js/script.js"></script>
</body>
</html>