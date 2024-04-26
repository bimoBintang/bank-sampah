<?php 
// session_start();
// if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") 
//     header('location:login.php');
//  }else {
//     $hak_akses = $_SESSION['hak_akses'];
//     $nama = $_SESSION['nama'];
//     $nik = $_SESSION['nik'];
// }
?>


<head>
    <link rel="stylesheet" href="../main/css/petugas.css">
</head>

<!-- sidebar -->
<div class="container_home_petugas">
            <div class="container_home_petugas_header">
                <div class="icon_header">
                    <div class="icon_header_logo">
                        <img src="../main/img/LOGO.jpg" class="icon_header_logo_image" alt='Sabililah'/>
                    </div>
                    <div class="icon_header_notification">
                        <img src="../main/img/icon_notif.svg" width=40 alt='Notifikasi' class="icon_header_notification_icon"/>
                    </div>
                </div>
                <div class="greeting_header">
                    <div class="greeting_header_message">
                    <h1>Hallo, Nindya Salwa</h1>
                    <p>Siap menjaga bumi dengan mengambil sampah hari ini?</p>
                    </div>
                    <div class="greeting_header_ilustration">
                    <img src="../main/img/ilustrastion_petugas.png" class="greeting_header_ilustration_picture" alt='Ilustrasi Petugas'/>
                    </div>
                </div>
            </div>
            <div class="container_home_petugas_content">
                <div class="navbar">
                    <h1>Kategori</h1>
                    <div class="navbar_menu">
                        <a href="#" class="navbar_menu_card">
                        <div class="navbar_menu_card_profil">
                            <img src="../main/img/icon_profile_petugas.png" width=60 alt='' class="menu_icon"/></div>
                            <p>Profil</p>
                        </a>
                        <a href="#" class="navbar_menu_card">
                        <div class="navbar_menu_card_jadwal">
                            <img src="../main/img/icon_jadwal.svg" width=25 alt='' class="menu_icon"/></div>
                            <p>Jadwal</p>
                        </a>
                        <a href="#" class="navbar_menu_card">
                            <div class="navbar_menu_card_info">
                                <img src="../main/img/icon_info.svg" width=10 alt='' class="menu_icon"/>
                            </div>
                            <p>Info</p>
                        </a>
                    </div>
                </div>
                <div class="article">
                    <h1>Jaga bumi dan dia akan menjagamu</h1>
                    <div class="article_describe">
                        <p>Pelajari alam, cintai alam, berdekatanlah dengan alam karena alam tidak akan pernah mengecewakanmu</p>
                        <img src="../main/img/ilustration_home_petugas.png" class="article_photo" alt=''/>
                    </div>
                </div>
                <div class="informasi">
                    <h1>KPP Bina Lindung</h1>
                    <ul>
                        <li class="circle"></li>
                        <li class="detail">Sedang Buka</li>
                    </ul>
                </div>
            </div>
        </div>