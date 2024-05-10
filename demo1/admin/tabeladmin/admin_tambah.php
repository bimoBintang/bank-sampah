<?php
include "../../../konek.php";
session_start();
if(!isset($_SESSION['login_admin'])){
   header("location: ../../auth/login.php?pesan=belum_login");
   exit;
}
 $sql_admin="SELECT*FROM data_user WHERE id_user='$_SESSION[id_admin]'";
 $query_admin=mysqli_query($conn,$sql_admin);
 $data_admin=mysqli_fetch_assoc($query_admin);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/admin.css">
  <title>Halaman Data Admin</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
</head>

<body>
  <?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php' ?>
    <main>
    <div class="kotak-atas">
        <div class="text">
          <h2 class="title-input-data">Tambah Data Admin</h2>
        </div>
        <form method="POST">
        <div class="form-input">
            <div class="left-coloumn">
                <div class="form-group">
                    <p class="caption-form">Nomor Kartu Keluarga</p>
                    <input class="input-edit" type="text" name="kk" required>
                </div>
                <div class="form-group">
                    <p class="caption-form">Nama</p>
                    <input class="input-edit" name="nama" required>
                </div>
                <div class="form-group">
                    <p class="caption-form">Email</p>
                    <input class="input-edit" name="email" type="email" required >
                </div>
                <div class="form-group">
                    <p class="caption-form">Telepon</p>
                    <input class="input-edit" name="phone" type="text" required>
                </div>
            </div>
            <div class="right-coloumn">
                <div class="form-group">
                    <p class="caption-form">Alamat</p>
                    <textarea class="input-edit" name="address" cols="30" rows="10" required>
                        </textarea>
                    </div>
                <div class="form-group">
                    <p class="caption-form">RT</p>
                    <input class="input-edit" name='rt' type="text" required>
                </div>
            </div>
        </div>
        <div class="btn-input">
            <input class='btn-create'type='submit' name='create' value='Kirim'>
        </div>
    </form>
    </main>
  </div>
  </body>
  <?php
  if(isset($_POST['create'])){
    $nokk=$_POST['kk'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telepon=$_POST['phone'];
    $alamat=$_POST['address'];
    $rt=$_POST['rt'];

    $sql_create="INSERT INTO data_user(id_user, nik, password, hak_akses, nama, email, telepon, alamat, rt) VALUES ('','$nokk','222222','Admin','$nama','$email', '$telepon', '$alamat', '$rt')";
    $query_create=mysqli_query($conn,$sql_create);
    if(!$query_create){
        echo"<script>alert('Maaf terjadi error')</script>";
    }
  }
  ?>
  <script src="../js/script.js"></script>
</body>
</html>