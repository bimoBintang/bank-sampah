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

 $sql_tampil="SELECT*FROM data_user WHERE hak_akses='Petugas'";
 
 if (isset($_POST["cari"])) {
   $keyword = $_POST["keyword"];
   $sql_tampil = "SELECT*FROM data_user WHERE hak_akses='Petugas' AND (id_user LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR email LIKE '%$keyword%' OR telepon LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR rt LIKE '%$keyword%')";
  }
  $query=mysqli_query($conn,$sql_tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/admin.css">
  <title>Halaman Data Petugas</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
</head>

<body>
  <?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php' ?>
    <main>
      <div class="kotak-atas">
        <div class="text">
          <h2>Data Petugas</h2>
        </div>
        <div class="kotak2">
          <div>
            <div class="btn">
              <a href="petugas_tambah.php" class="btn-a">+ Tambah Data</a>
            </div>
            <br>
            <div class="btn">
              <a href="petugas_print.php" class="btn-a">PRINT</a>
            </div>
          </div>
          <div class="kotak-search">
            <form action="" method="post">
              <input name="keyword" type="text" placeholder="Search" autocomplete="off">
              <button type="submit" name="cari" class="cari">Cari</button>
            </form>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <table class="w-table" cellpadding="10">
          <tr>
            <th>No.</th>
            <th>Nomor Kartu Keluarga</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>RT</th>
            <th colspan="2">Aksi</th>
          </tr>
          <?php
          $number=1;
          while($warga=mysqli_fetch_assoc($query)){
          ?>
            <tr>
              <td><?=$number?></td>
              <td><?= $warga['nik'] ?></td>
              <td><?= $warga['nama'] ?></td>
              <td><?= $warga['email'] ?></td>
              <td><?= $warga['telepon'] ?></td>
              <td><?= $warga['alamat'] ?></td>
              <td><?= $warga['rt'] ?></td>
              <td>
                <a href="petugas_edit.php?id_user=<?= $warga['id_user'] ?>" class="ubah">Ubah</a>
              </td>
              <td>
                <a href="petugas_hapus.php?id_user=<?= $warga['id_user'] ?>" class="hapus" onclick="return confirm('Yakin Hapus')">Hapus</a>
              </td>
            </tr>
          <?php 
          $number++;
          }
          ?>
        </table>
      </div>
    </main>
  </div>
  <script src="../js/script.js"></script>
</body>
</html>