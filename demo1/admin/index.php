<?php 
?>



<head>
    <link rel="stylesheet" href="../main/css/admin.css">
</head>


<main class="admin_container">
    <div class="sidebar">
        <div class="sidebar_menu">
            <div class="sidebar_menu_list">
                <h2>Admin Panel</h2>
                <div class="sidebar_Link">
                    <Link class="sidebar_icon" href=list.url>
                        <h3 class="sidebar_title">Dashboard</h3>
                    </Link>
                </div>
                <div class="sidebar_Link">
                    <Link class="sidebar_icon" href=list.url>
                        <h3 class="sidebar_title">Kelola Data</h3>
                    </Link>
                </div>
                <div class="sidebar_Link"`>
                    <Link class="sidebar_icon" href=list.url>
                        <h3 class="sidebar_title">Transaksi</h3>
                    </Link>
                </div>
                <div class="sidebar_Link">
                    <Link class="sidebar_icon" href=list.url>
                        <h3 class="sidebar_title">Profile</h3>
                    </Link>
                </div>
            </div>

            <img class="logo_admin" src="../main/img/logo_unkris.png" alt=" Universitas KrisnaDwipayana" height=90 width=100/>
            <button
                    type="button"
                    class="sidebar_button_logout">
                    Logout
            </button>
        </div>
    </div>
<div class="container">
            <div class="container_dashboard">
                <div class="content">
                    <div class="aside">
                    <div class="header"></div>
                        <div class="group_card">
                            <div class="group_card_greeting">
                                <div class="group_card_greeting_text">
                                    <h2>Hello, Ismail</h2>
                                    <p>Selamat Datang Kembali ! Saatnya melangkah ke dalam keseharian dengan semangat yang membara</p>
                                </div>
                                <div class="group_card_greeting_ilustration">
                                    <Img class="group_card_greeting_content" src="../../main/img/ilustration_dashboard_admin.svg" alt='ilustrasi'/>
                                </div>
                            </div>
                            <div class="group_card_configuration">
                                <h3>Cek Status</h3>
                                <p>Periksa status terkini dan pastikan anda menggunakan opsi yang tepat untuk mengubah status toko dari "buka" menjadi "tutup" atau sebaliknya.</p>
                                <form action="">
                                    <select class="group_card_configuration_change" id="">
                                        <option value="">Open</option>
                                        <option value="">Close</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="group_box">
                            <a href="/" class="group_box_total">
                                <img class="group_box_image" src="../main/img/total warga.png" alt='ilustrasi'/>
                                <h2 class="group_box_text">Total Warga</h2>
                                <p class="group_box_text">5 Orang</p>
                            </a>
                            <a href="/" class="group_box_total">
                                <img class="group_box_image" src="../main/img/total transaksi.png" alt='ilustrasi'/>
                                <h2 class="group_box_text">Total Transaksi</h2>
                                <p class="group_box_text">5 Kali</p>
                            </a>
                            <a href="/" class="group_box_total">
                                <img class="group_box_image" src="../main/img/total berat sampah.png" alt='ilustrasi'/>
                                <h2 class="group_box_text">Total Sampah</h2>
                                <p class="group_box_text">5 Kg</p>
                            </a>
                            <a href="/" class="group_box_total">
                                <img class="group_box_image" src="../main/img/total pengeluaran.png" alt='ilustrasi'/>
                                <h2 class="group_box_text">Total Pengeluaran</h2>
                                <p class="group_box_text">Rp. 5000</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>