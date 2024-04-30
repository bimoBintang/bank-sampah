<?php ?>

<head>
    <link rel="stylesheet" href="../../demo1/css/register.css">
</head>

<main class="container_register"> 
        <header class="container_header_register">
        </header>
        <section class="container_sidebar_register">
            <div class="container_logo_page">
                <img src="../../main/img/LOGO.jpg" class="container_logo_page_image" alt='Sabililah'/>
            </div>
            <div class="container">
                <div class="container_form_register">
                        <p class="register_erorr"></p>
                    <form class="form_container">
                        <div class="container_input">
                            <label class="container_caption" htmlFor="nama">nama</label>
                            <input 
                                type="text"
                                name="nama"
                                id="nama"
                                class="container_input_input"
                            />
                        </div>  
                        <div class="container_input">
                            <label class="container_caption" htmlFor="username">username</label>
                            <input 
                                type="text"
                                name="username"
                                id="username"
                                class="container_input_input"
                            />
                        </div>  
                        <div class="container_input">
                            <label class="container_caption" htmlFor="password">password</label>
                            <input 
                                type="password"
                                name="password"
                                id="password"
                                class="container_input_input"
                            />
                        </div>  
                        <button class="pagination_sumbit__register" type="submit">
                            Register    
                        </button>            
                        <div class="announcement">
                            Anda sudah punya akun?

                            <a class="announcement_Link_register" href="/demo1/auth/login.php" 

                            >sign In</a>  

                        </div>
                    </form>
                </div>                  
            </div>
        </section> 
</main>


<?php
    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = "User";
       
    
        $sql_simpan = "INSERT INTO data_user (username,password,role,nama) VALUES ('$username','$password','$role','$nama')";
        $query_simpan = mysqli_query($konek, $sql_simpan);
    
        if ($query_simpan) {
            echo "<script language='javascript'>swal('Selamat...', 'Akun Berhasil dibuat!', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=login.php">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Akun Gagal dibuat!', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=register.php">';
        }
    }
    ?>