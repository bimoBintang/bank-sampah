<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_petugas'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $sql_tampil="SELECT data_transaksi.*, data_user.* FROM data_transaksi INNER JOIN data_user ON data_transaksi.user=data_user.id_user WHERE data_transaksi.status_jemput!='Sudah dijemput'";
 $query=mysqli_query($conn,$sql_tampil);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjemputan</title>
    <link rel="stylesheet" href="../../demo1/css/riwayat-warga.css">
    <link rel="icon" href="../../../main/img/iconLogo.png">
</head>
<body>
    <div class="header">
        <a class="icon-back" href="index.php">
            <img class="header-logo" src="../../main/img/arrow-left.svg" alt="">
        </a>
        <h1>Jemput Sampah</h1>
    </div>
    <table class="history-table">
  <thead>
    <tr>
      <th>ID Transaksi</th>
      <th>Nama Warga</th>
      <th>Alamat</th>
      <th>RT</th>
      <th>telepon</th>
      <th>Waktu</th>
      <th>Status</th>
      <th>Catatan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php while($data = mysqli_fetch_assoc($query)) {?>
    <tr>
      <td><?php echo $data['id_transaksi'];?></td>
      <td><?php echo $data['nama'];?></td>
      <td><?php echo $data['alamat'];?></td>
      <td><?php echo $data['rt'];?></td>
      <td><?php echo $data['telepon'];?></td>
      <td><?php echo $data['waktu_jemput'];?></td>
      <td><?php echo $data['status_jemput'];?></td>
      <td><?php echo $data['catatan_jemput'];?></td>
      <td class="field-btn">
        <a class="btn-konfirmasi" href="konfirmasi.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Konfirm</a>
        <a class="btn-tolak" href="tolak.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Tolak</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

</body>
</html>