<?php
include "../../konek.php";
?>
<html>
<head>
    <link rel="stylesheet" href="../../demo1/css/login.css">
    <link rel="shortcut icon" href="../../  main/img/LOGO.jpg" type="image/x-icon">
    <title>Halaman Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../main/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../main/vendors/base/vendor.bundle.base.css">
    <link href="../../main/css/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- <script src="main/js/jquery-2.1.3.min.js"></script> -->
    <script src="../../main/js/sweetalert.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
</head>
<body>
<div class="container">
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
                                name="nik"
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
                    <a class="footer-link" href='../auth/forgetpassword.php'>Lupa password?</a>
                    </div>
                    </form>
                </div>
                </div>
            </div>
</div>
        <?php
        session_start();
        if(isset($_POST['login'])){
            $username=$_POST['nik'];
            $password=$_POST['password'];
            $sql_login="SELECT*FROM data_user WHERE nik='$username' AND password='$password'";
            $query_login = mysqli_query($conn, $sql_login);
            $data_login = mysqli_fetch_assoc($query_login);
            $jumlah_login = mysqli_num_rows($query_login);
            if($jumlah_login> 0){
                if($password!=$data_login['password']){
                    echo "<script language='javascript'>swal('Gagal...', 'Maaf Password tidak valid', 'error');</script>";
                    echo '<meta http-equiv="refresh" content="3; url=login.php">';
                }
                else{
                if($data_login['hak_akses']=="Admin"){
                    $_SESSION['id_admin']=$data_login['id_user'];
                    $_SESSION['status']='login';
                    $_SESSION['login_admin']=true;
                    echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>";
                    echo '<meta http-equiv="refresh" content="3; url=../admin/dashboard/index.php">';
                }
                else if($data_login['hak_akses']=="Petugas"){
                    $_SESSION['id_petugas']=$data_login['id_user'];
                    $_SESSION['status']='login';
                    $_SESSION['login_petugas']=true;
                    echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>";
                    echo '<meta http-equiv="refresh" content="3; url=../petugas/index.php">';
                }else{
                    $_SESSION['id_warga']=$data_login['id_user'];
                    $_SESSION['status']='login';
                    $_SESSION['login_warga']=true;
                    echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>";
                    echo '<meta http-equiv="refresh" content="3; url=../user/index.php">';
                }
                }
                }else{
                    echo "<script language='javascript'>swal('Gagal...', 'Maaf Username tidak ditemukan', 'error');</script>";
                    echo '<meta http-equiv="refresh" content="3; url=login.php">';
                }
            }
    ?>
    <!-- plugins:js -->
    <script src="../../main//vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../main/js/off-canvas.js"></script>
    <script src="../../main/js/hoverable-collapse.js"></script>
    <script src="../../main/js/template.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    </body>
</html>