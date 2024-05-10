<?php 
include "../../konek.php";
 session_start();
 if(!isset($_SESSION['login_warga'])){
    header("location: ../auth/login.php?pesan=belum_login");
    exit;
 }
 $sql_tampil="SELECT*FROM data_user WHERE id_user='$_SESSION[id_warga]'";
 $query=mysqli_query($conn,$sql_tampil);
 $data=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi E-Sabililah</title>
  <link rel="icon" href="main/img/iconLogo.png">
  <link rel="stylesheet" href="../../demo1/css/home-warga.css">
</head>
<body>
      <div class="header">
        <div class="logo-header">
          <div class="brand">
              <img class="brand-logo" src="../../main/img/LOGO.jpg" alt='logo'/>
          </div>
        </div>
        <div class="dropdown">
        <img src="../../main/img/profile-user.png" width="50px" class="dropbtn" onclick="toggleDropdown()">
        <div id="myDropdown" class="dropdown-content">
          <a href="profile-warga.php">Pengaturan Profil</a>
          <a href="../auth/logout.php">Log Out</a>
        </div>
    </div>
      </div>
      <div class="wrapper">
      <div class="earning">
        <h1>Saldo Anda</h1>
        <div class="card-total-earning">
          <div class="nominal">
            <span class="rupiah">Rp.</span><span class="total-earning"><?php echo " ".number_format($data['saldo'], 2, ",", ".");?></span></div>
          <a  href="#" class="tarik-saldo">Tarik Saldo</a>
        </div>
      </div>
      <div class="card-nav">
        <a href="jualsampah.php" class="card-menu">
          <div class="card-icon" id="one">
            <img class="image-icon-card" src="../../main/img/selling.png"alt="">
          </div>
          <p>Tukar</p>
        </a>
        <a href="riwayat-warga.php" class="card-menu">
          <div class="card-icon" id="two">
            <img class="image-icon-card" src="../../main/img/time-past.png" alt="">
          </div>
          <p>Riwayat</p>
          </a>
          <a href="infobank.php" class="card-menu">
            <div class="card-icon" id="three">
              <img class="image-icon-card" src="../../main/img/info.png"alt="">
            </div>
            <p>Informasi</p>
          </a>
        </div>
      </div>
      <div class="main-container"></div>
      <div class="content">
        <div class="card-content">
          <div class="text-card-content">
            <div class="title-card">
              <h1>Ubahlah Sampah Anorganik Anda Menjadi Uang Sekarang!</h1></div>
            <div class="descript-card">Sabililah kepanjangan dari "Sampah Bina Lindung Pilah" adalah aplikasi dan sistem untuk membantu dalam pengelolaan sampah di wilayah RW 11</div>
          </div>
          <div class="ilustration-card">
            <img src="../../main/img/ilustration-trashcan.png" alt="">
          </div>
        </div>
      </div>
    <div class="main-container"></div>
    <script>
      function toggleDropdown() {
      var dropdownContent = document.getElementById("myDropdown");
      dropdownContent.classList.toggle("show");
    }
    // Tutup dropdown jika klik di luar dropdown
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>

</body>
</html>