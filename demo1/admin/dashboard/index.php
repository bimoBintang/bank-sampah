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

 $sql = "
 SELECT 
 (SELECT COUNT(id_transaksi) FROM data_transaksi WHERE status_transaksi='Selesai') AS jumlah_invoice,
 (SELECT COUNT(id_transaksi) FROM data_transaksi WHERE status_transaksi='Sedang diproses') AS jumlah_transaksi,
 (SELECT SUM(berat_sampah) FROM data_transaksi WHERE status_transaksi='Selesai') AS jumlah_berat ,
 (SELECT SUM(harga_sampah) FROM data_transaksi WHERE status_transaksi='Selesai') AS jumlah_harga
";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_object($query);
$property = [
  ["img" => "invoice.png", 
  "title" => "Total Transaksi Selesai", 
  "jumlah" => $data->jumlah_invoice, 
  "caption" => 'Buah', 
  "url" => '../tabelhistori/histori_data.php'
],

  [
    "img" => "totaltransaksi.png",
    "title" => "Total Transaksi Diproses",
    "jumlah" => $data->jumlah_transaksi,
    "caption" => 'Buah',
    "url" => '../tabeltransaksi/transaksi_data.php'
  ],

  [
    "img" => "totalberat.png",
    "title" => "Total Berat Sampah",
    "jumlah" => $data->jumlah_berat,
    "caption" => 'Kg',
    "url" => '../tabeltransaksi/transaksi_data.php'
  ],

  [
    "img" => "totalpengeluaran.png",
    "title" => "Total Pengeluaran",
    "jumlah" => number_format($data->jumlah_harga, 2, ",", "."),
    "caption" => '',
    "url" => '../tabeltransaksi/transaksi_data.php'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda Admin</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
  <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>
<?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php'  ?>
    <main>
      <div class="container-card">
        <?php foreach ($property as $datum) : ?>
          <a class="card" href="<?= $datum['url']?>">
            <img src="../../../main/img/<?= $datum['img'] ?>" alt="<?= $datum['img'] ?>" width="120">
            <h1><?= $datum['title'] ?></h1>
            <h3><?= $datum['jumlah'] . " " . $datum['caption'] ?></h3>
          </a>
        <?php endforeach ?>
      </div>
    </main>
  </div>
  <script src="../js/script.js"></script>
</body>
</html>