<head>
    <link rel="stylesheet" href="../../demo1/css/login.css">
    <link rel="shortcut icon" href="../../main/img/LOGO.jpg" type="image/x-icon">
    <title>Halaman Login</title>
</head>
<main class="container">
            <div class="authform">
            <div class="brand">
                    <img class="brand-logo" src="../../main/img/LOGO.jpg" alt='logo'/>
                </div>
                <div class="main-form">
                <div class="title-form">
                    <h2>Login</h2>
                </div>
                <div>
                    <form method="POST">
                    <div class="form-group">
                            <input 
                                type="text"
                                name="username"
                                id="username"
                                class="form-input"
                                placeholder="Username"
                            />
                        </div>  
                        <div class="form-group">
                            <input 
                                type="password"
                                name="password"
                                id="password"
                                class="form-input"
                                placeholder="Password"
                            />
                        </div>  
                    <div class="form-button" >
                        <button 
                            type="submit"
                            name="login"
                            class="btn-submit"
                        >LOGIN</button>
                        <div class="btn-back">
                        <a href="../../index.php">BATAL</a>
                        </div>
                    </div>
                    <div class="footer-form">
                    <a class="footer-link" href='/auth/register'>Lupa password?</a>
                    </div>
                    </form>
                </div>
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