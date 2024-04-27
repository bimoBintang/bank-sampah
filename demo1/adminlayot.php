<?php ?>


<head>
    <link rel="stylesheet" href="../main/css/adminLayout.css">
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
</main>