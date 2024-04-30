<?php ?>

<head>
    <link rel="stylesheet" href="../../demo1/css/login.css">
</head>

<main class="container">
            <div class="container_page_login">
                <div class="container_login">
                <div class="header">
                    <h1 class="header_title>"Login</h1>
                    <p class="header_describe">Login untuk mengakses akun Anda</p>
                </div>
                 <p class="container_erorr"></p>
                <div>
                    <form class="form_login">
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
                    <div class="form_submit">
                        <button 
                            type="submit"
                            class="submit_pagination"
                            
                        >Login</button>
                    </div>
                    <div class="footer">
                        Apakah sudah punya Akun? 
                    <a class="footer_link" href='/demo1/auth/register.php'>Daftar</a>
                    </div>
                    </form>
                </div>
                </div>
                <div class="container_content">
                    <img class="content" src="../../main/img/LOGO.jpg" alt='logo'/>
                </div>
            </div>
        </main>


        <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql_login = "SELECT * FROM data_user WHERE username='$username' AND password='$password'";
        $query_login = mysqli_query($konek, $sql_login);
        $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
        $jumlah_login = mysqli_num_rows($query_login);
    
        if ($jumlah_login > 0) {
            $getData = mysqli_fetch_array($query_login);
            session_start();
            $_SESSION['role'] = $data_login['role'];
            $_SESSION['nama'] = $data_login['nama'];
            $_SESSION['password'] = $data_login['password'];
            $_SESSION['username'] = $data_login['username'];

            if($role == 'admin' && $role == 'petugas') {
                $_SESSION['role'] = 'admin';
                $_SESSION['role'] = 'petuags';
                header('location:admin', 'location:petugas');
            } else {
                header('location:index.php');
            }
    
            echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=demo1/main.php">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Login Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=login.php">';
        }
    }
    ?>