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

$sql_tampil="SELECT*FROM data_user WHERE hak_akses='Admin'";
$query_tampil=mysqli_query($conn,$sql_tampil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Admin</title>
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
        <h1>Data Admin</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nomor Kartu Keluarga</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>RT</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $number=1;
            while($warga=mysqli_fetch_assoc($query_tampil)):
            ?>
                <tr>
                    <td><?=$number?></td>
                    <td><?= $warga['nik'] ?></td>
                    <td><?= $warga['nama'] ?></td>
                    <td><?= $warga['email'] ?></td>
                    <td><?= $warga['telepon'] ?></td>
                    <td><?= $warga['alamat'] ?></td>
                    <td><?= $warga['rt'] ?></td>
                </tr>
            <?php
            $number++;
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
