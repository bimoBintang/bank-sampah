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

 $sql_tampil="SELECT data_user.*, data_transaksi.* FROM data_user INNER JOIN data_transaksi ON data_user.id_user=data_transaksi.user WHERE data_transaksi.status_transaksi='Sedang diproses'";
 
 if (isset($_POST["cari"])) {
   $keyword = $_POST["keyword"];
   $sql_tampil = "SELECT data_user.*, data_transaksi.* FROM data_user INNER JOIN data_transaksi ON data_user.id_user=data_transaksi.user WHERE data_transaksi.status_transaksi='Sedang diproses' AND (id_transaksi LIKE '%$keyword%' OR nama LIKE '%$keyword%' keterangan LIKE '%$keyword%')";
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
  <title>Halaman Transaksi</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
</head>

<body>
  <?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php' ?>
    <main>
      <div class="kotak-atas">
        <div class="text">
          <h2>Data Transaksi</h2>
        </div>
        <div class="kotak2">
          <div>
            <br>
            <div class="btn">
              <a href="transaksi_print.php" class="btn-a">PRINT</a>
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
            <th>ID Transaksi</th>
            <th>Nama Warga</th>
            <th>Waktu</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Status</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
          <?php
          $number=1;
          while($transaksi=mysqli_fetch_assoc($query)){
          ?>
            <tr>
              <td><?php echo"INV/TPS3R/".$transaksi['id_transaksi'] ?></td>
              <td><?= $transaksi['nama'] ?></td>
              <td><?= $transaksi['waktu_jemput'] ?></td>
              <td><?=number_format($transaksi['harga_sampah'], 2, ",", ".")?></td>
              <td><?= $transaksi['berat_sampah'] ?></td>
              <td><?= $transaksi['status_transaksi'] ?></td>
              <td><?= $transaksi['keterangan_transaksi'] ?></td>
              <td>
                <a href="transaksi_edit.php?id_transaksi=<?= $transaksi['id_transaksi'] ?>" class="ubah">Ubah</a>
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