<?php
include "../../konek.php";
?>
<html>
<head>
    <link rel="stylesheet" href="../../demo1/css/change-pass.css">
    <link rel="shortcut icon" href="../../main/img/LOGO.jpg" type="image/x-icon">
    <title>Halaman Login</title>
</head>
<body>
<div class="container">
            <div class="authform">
            <div class="brand">
                    <img class="brand-logo" src="../../main/img/LOGO.jpg" alt='logo'/>
                </div>
                <div class="main-form">
                <div class="title-form">
                    <h2>Lupa Password</h2>
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
                                placeholder="Password Baru"
                            />
                        </div>  
                        <div class="form-group">
                            <input 
                                type="password"
                                name="new-password"
                                id="password"
                                class="form-input"
                                placeholder="Konfirmasi Password"
                            />
                        </div>  
                    <div class="form-button" >
                        <button 
                            type="submit"
                            name="change"
                            class="btn-submit"
                        >LOGIN</button>
                        <div class="btn-back">
                        <a href="login.php">BATAL</a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
</div>
        <?php
          if(isset($_POST['change'])){
            $nik=$_POST['nik'];
            $sql="SELECT * FROM data_user WHERE id_user='$nik'";
            $query = mysqli_query($conn, $sql);
            $jumlah_login = mysqli_num_rows($query);
            if($jumlah_login> 0){
              $password_baru=$_POST['password'];
              $konfirmasi_password=$_POST['new-password'];
              if($password_baru==$konfirmasi_password){
                  $sql_update="UPDATE data_user SET password='$password_baru' WHERE id_user='$nik'";
                  $query_update=mysqli_query($conn,$sql_update);
                  if($query_update){
                      echo "<script>alert('Password Anda Telah Diperbarui')</script>";
                  }else{
                      echo "<script>alert('Password Anda Gagal Diperbarui')</script>";
                  }
              }else{
                  echo "<script>alert('Konfirmasi Password Anda Tidak Sesuai')</script>";
              }
            }else{
                echo "<script>alert('Username Tidak Terdaftar')</script>";
              }
            }
    ?>
    <!-- plugins:js -->
    <script src="main/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="main/js/off-canvas.js"></script>
    <script src="main/js/hoverable-collapse.js"></script>
    <script src="main/js/template.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    </body>
</html>