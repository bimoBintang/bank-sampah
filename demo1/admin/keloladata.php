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
                                <Image src={filterico alt="Fitur" width={20 height={50/> 
                                <p class="container_text_">Fitur</p>
                        </span>
                    </div>
                </section>
                
            </div>
        </div>

     <!-- Crud Keloladata  -->
    <main class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            {children
            <div cla    // Crud Keloladata //ss="text-sm text-black uppercase bg-gray-500 ">
                <div class="flex it // Crud Keloladata //ems-center justify-center gap-[6rem]">
                    <span>Nama Warga</span>
                    <span>Phone</span>
                    <span>Email</span>
                    <span>Alamat</span>
                    <span>Blok</span>
                    <span>Rt</span>
                    <span>Action</span>
                </div>
            </div>
            
            <div>
                {data.map((content, index) => (
                    <div key={index} class="d   // Crud Keloladata //ark:bg-gray-700 border-b flex flex-col">
                        <div class="flex ga // Crud Keloladata //p-[1.5rem] py-3 px-6 items-center justify-center">
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.namaWarga}</div>
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.phone}</div>
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.email}</div>
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.alamat}</div>
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.blok}</div>
                            <div class="py-3 px // Crud Keloladata //-[1.91rem]">{content.rt}</div>
                            <div class="flex ga // Crud Keloladata //p-1 justify-end">
                                <EditButton />
                                <DeleteButton />
                            </div> {/* Tambahkan konten Action sesuai kebutuhan */}
                        </div>
                    </div>
                ))}
            </div>
        </main>
</main>