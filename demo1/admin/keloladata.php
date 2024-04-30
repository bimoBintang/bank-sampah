<?php ?>

<head>
    <link rel="stylesheet" href="/demo1/css/keloladata.css">
</head>

<!-- header -->
<div class="header"></div>

<main class="admin_container">
    <div class="sidebar">
        <div class="sidebar_menu">
            <div class="sidebar_menu_list">
                <h2>Admin Panel</h2>
                <div class="sidebar_Link">
                    <a class="sidebar_icon_dashboard" href="#">
                        <h3 class="sidebar_title">Dashboard</h3>
                    </a>
                </div>
                <div class="sidebar_Link">
                    <a class="sidebar_icon" href="#">
                        <h3 class="sidebar_title">Kelola Data</h3>
                    </a>
                </div>
                <div class="sidebar_Link"`>
                    <a class="sidebar_icon" href="#">
                        <h3 class="sidebar_title">Transaksi</h3>
                    </a>
                </div>
                <div class="sidebar_Link">
                    <a class="sidebar_icon" href="#">
                        <h3 class="sidebar_title">Profile</h3>
                    </a>
                </div>
            </div>

            <img class="logo_admin" src="/main/img/logo_unkris.png" alt=" Universitas KrisnaDwipayana" height=90 width=100/>
            <button
                    type="button"
                    class="sidebar_button_logout">
                    Logout
            </button>
        </div>
    </div>

    <!-- Add Contact user -->
    <div class="container_Contact">
            <div class="wrapper_Contact">
                <header class="header_content">
                    <div class="">
                    </div>
                </header>
              
                <section class="container_content_main">
                    <div class="container_main">
                            <h2 class="text">Data Warga</h2>
                        <div class="container_main_side">
                            <Link href="/admin/keloladata/create" class="container_add">
                                <p class="container_text">Add</p>
                               
                            </Link>
                            <span class="container_adds">
                                <Image src="" alt="Icon" />
                                <p>Download PDF Report</p>
                            </span>
                        </div>
                    </div>
                    <div class="container_main_">
                        <SearchInput type="text" placeholder="Search" />
                        <span class="container_add_">
                                <img src="" alt="Fitur" /> 
                                <p class="container_text_">Fitur</p>
                        </span>
                    </div>
                    <div class="content read">
                        <table>
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>Nama</td>
                                    <td>username</td>
                                    <td>password</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Alamat</td>
                                    <td>Rt</td>
                                    <td>Role</td>
                                    <td>Created</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contacts as $contact): ?>
                                <tr>
                                    <td><?=$contact['id']?></td>
                                    <td><?=$contact['nama']?></td>
                                    <td><?=$contact['username']?></td>
                                    <td><?=$contact['password']?></td>
                                    <td><?=$contact['email']?></td>
                                    <td><?=$contact['phone']?></td>
                                    <td><?=$contact['alamat']?></td>
                                    <td><?=$contact['rt']?></td>
                                    <td><?=$contact['role']?></td>
                                    <td><?=$contact['created']?></td>
                                    <td class="actions">
                                        <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                        <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <?php if ($page > 1): ?>
                            <a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
                            <?php endif; ?>
                            <?php if ($page*$records_per_page < $num_contacts): ?>
                            <a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>

     <!-- Crud Keloladata  -->
    
</main>