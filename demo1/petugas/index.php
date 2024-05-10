<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_petugas'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $sql_tampil="SELECT*FROM data_user WHERE id_user=$_SESSION[id_petugas]";
 $query=mysqli_query($conn,$sql_tampil);
 $data=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Petugas</title>
    <link rel="icon" href="../../../main/img/iconLogo.png">
    <link rel="stylesheet" href="../../demo1/css/home-petugas.css">
</head>
<body>
    <main class="container">
    <div class="header">
        <div class="greeting-header">
            <h1>Hallo, <?= $data['nama']?></h1>
            <p>Siap menjaga kelestarian bumi dengan mengambil sampah warga pada hari ini?</p>
            <a class="logout" href="../auth/logout.php">logout</a>
        </div>
        <div class="ilustration">
            <img src="../../main/img/ilustrastion_petugas.png" alt="" srcset="">
        </div>
    </div>
    <div class="menu-nav">
        <h1 class="text">Kategori</h1>
        <div class="card-group">
            <a href="profile-petugas.php" class="card-menu">
                <span class="icon-card" id="one">
                        <img class="icon-card-img" src="../../main/img/person.png" alt="" width="30"
                        height="80">
                </span>
                <p class="teks">Profil</p>
            </a>
            <a href="jemput-petugas.php" class="card-menu">
                <span class="icon-card" id="two">
                        <img class="icon-card-img" src="../../main/img/delivery-truck.png" alt="" width="30"
                        height="80">
                </span>
                <p>Jemput</p>
            </a>
            <a href="infobank.php" class="card-menu">
                <span class="icon-card" id="three">
                        <img class="icon-card-img" src="../../main/img/info.png" alt="" width="70"
                        height="60">
                </span>                
                <p class="teks">Info</p>
            </a>
        </div>
    </div>
        <div class="content">
            <div class="text-content">
                <h1>Jaga bumi dan dia akan menjagamu</h1>
                <p>Di dalam rimba, pesona tak terungkap,
                    Gunung menjulang, sungai mengalir tiada henti,
                    Langit biru, bintang menyinari malam,
                    Di sana, keindahan alam mengundang hati untuk terpaku. Pelajari alam, dicintai alam, berdekatlah dengan alam karena alam tidak pernah mengecewakan</p>
            </div>
            <div class="image-content">
                <img src="../../main/img/ilustration-sampah.png" alt="" srcset="">
            </div>
        </div>
    </main>
</body>
</html>