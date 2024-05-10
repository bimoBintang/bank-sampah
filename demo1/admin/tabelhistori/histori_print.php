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

$sql_tampil="SELECT data_user.*, data_transaksi.* FROM data_user INNER JOIN data_transaksi ON data_user.id_user=data_transaksi.user WHERE data_transaksi.status_transaksi='Selesai' OR data_transaksi.status_transaksi='Dibatalkan'";
$query_tampil=mysqli_query($conn,$sql_tampil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Riwayat</title>
    <link rel="icon" href="../../../main/img/iconLogo.png">
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 1.5px; 
            position: relative; 
        }
        #content {
            max-width: 100%;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .ttd{
            margin-bottom: 60px;
        }
        .nama_ttd{
            font-weight: 600;
        }
        .signature{
            margin-top: 60px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div id="content">
        <h1>Data Transaksi</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Warga</th>
                    <th>Tanggal Transaksi</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($transaksi=mysqli_fetch_assoc($query_tampil)):
            ?>
                <tr>
                    <td><?php echo"INV/TPS3R/".$transaksi['id_transaksi'] ?></td>
                    <td><?= $transaksi['nama'] ?></td>
                    <td><?= $transaksi['tanggal_transaksi'] ?></td>
                    <td><?=number_format($transaksi['harga_sampah'], 2, ",", ".")?></td>
                    <td><?= $transaksi['berat_sampah'] ?></td>
                    <td><?= $transaksi['keterangan_transaksi'] ?></td>
                    <td><?= $transaksi['status_transaksi'] ?></td>
                </tr>
            <?php
            endwhile;
            ?>
            </tbody>
        </table>
        <div class="signature">
            <p class="ttd">Admin TPS3R Jaticempaka</p>
            <p class="nama_ttd"><?= $data_admin['nama']?></p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
