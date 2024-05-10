<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_warga'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $sql_tampil="SELECT data_transaksi.*, data_user.nama as nama FROM data_transaksi INNER JOIN data_user ON data_transaksi.user=data_user.id_user WHERE data_transaksi.user='$_SESSION[id]'";
 $query=mysqli_query($conn,$sql_tampil);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../demo1/css/riwayat-warga.css">
</head>
<body>
    <div class="header">
        <a class="icon-back" href="index.php">
            <img class="header-logo" src="../../main/img/arrow-left.svg" alt="">
        </a>
        <h1>Riwayat Sampah</h1>
    </div>
    <table class="history-table">
  <thead>
    <tr>
      <th>ID Transaksi</th>
      <th>Nama</th>
      <th>Berat</th>
      <th>Harga</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php while($data = mysqli_fetch_assoc($query)) {?>
    <tr>
      <td><?php echo $data['id_transaksi'];?></td>
      <td><?php echo $data['nama'];?></td>
      <td><?php echo $data['berat_sampah'];?> kg</td>
      <td>Rp <?php echo " ".number_format($data['harga_sampah'], 2, ",", ".") ;?></td>
      <td><?php echo $data['status_transaksi'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>

</body>
</html>