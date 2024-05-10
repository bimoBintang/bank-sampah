<?php
include "../../../konek.php";
session_start();
if(!isset($_SESSION['login_admin'])){
   header("location: ../auth/login.php?pesan=belum_login");
   exit;
}
 $sql_admin="SELECT*FROM data_user WHERE id_user='$_SESSION[id_admin]'";
 $query_admin=mysqli_query($conn,$sql_admin);
 $data_admin=mysqli_fetch_assoc($query_admin);
 
 $id=$_GET['id_transaksi'];
 $sql_tampil="SELECT data_user.*, data_transaksi.* FROM data_user INNER JOIN data_transaksi ON data_user.id_user=data_transaksi.user WHERE id_transaksi='$id'";
$query_tampil=mysqli_query($conn,$sql_tampil);
 $data_tampil=mysqli_fetch_assoc($query_tampil);

 if(isset($_POST['update'])){
    $berat=$_POST['berat'];
    $harga=$_POST['harga'];
    $keterangan=$_POST['note'];
    $status=$_POST['status'];
    $sql_update="UPDATE data_transaksi SET harga_sampah='$harga', berat_sampah='$berat', status_transaksi='$status', keterangan_transaksi='$keterangan' WHERE id_transaksi='$id'";
    $query_update=mysqli_query($conn,$sql_update);
    if(!$query_update){
        echo "<script>alert('Maaf terjadi sedikit error')</script>";
    }else{
        echo "<script>alert('Ubah Data Berhasil')
        window.location.href='transaksi_data.php'</script></script>";  
        if($status=="Selesai"){
            $sql_saldo="SELECT saldo FROM data_user WHERE id_user='$data_tampil[id_user]'";
            $query_saldo=mysqli_query($conn,$sql_saldo);
            $saldo=mysqli_fetch_assoc($query_saldo);
            $total_saldo=$harga+$saldo['saldo'];
            $update_saldo="UPDATE data_user SET saldo='$total_saldo' WHERE id_user='$data_tampil[id_user]'";
            $query_transfer=mysqli_query($conn,$update_saldo);
        }  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/admin.css">
  <title>Halaman Edit Data Transaksi</title>
  <link rel="icon" href="../../../main/img/iconLogo.png">
</head>

<body>
  <?php include '../components/header.php' ?>
  <div class="container">
    <?php include '../components/sidebar.php' ?>
    <main>
    <div class="kotak-atas">
        <div class="text">
          <h2 class="title-edit-data">Edit Data Transaksi</h2>
        </div>
        <form method="post">
        <div class="form-input">
            <div class="left-coloumn">
                <div class="form-group">
                    <p class="caption-form">ID Transaksi</p>
                    <input class="input-edit" type="text" required value="<?php echo"INV/TPS3R/".$data_tampil['id_transaksi'] ?>" disabled>
                </div>
                <div class="form-group">
                    <p class="caption-form">Nama</p>
                    <input class="input-edit" name="nama" required value="<?= $data_tampil['nama']?>" disabled>
                </div>
                <div class="form-group">
                    <p class="caption-form">Berat</p>
                    <input class="input-edit" name="berat" type="text" value="<?= $data_tampil['berat_sampah']?>" required>
                </div>
                <div class="form-group">
                    <p class="caption-form">Harga</p>
                    <input class="input-edit" name="harga" type="text" value="<?=$data_tampil['harga_sampah']?>"required >
                </div>
            </div>
            <div class="right-coloumn">
                <div class="form-group">
                    <p class="caption-form">Keterangan</p>
                    <textarea class="input-edit" name="note" cols="30" rows="5" required><?= $data_tampil['keterangan_transaksi']?>
                    </textarea>
                    </div>
                <div class="form-group">
                    <p class="caption-form">Waktu</p>
                    <input class="input-edit" name='rt' name="waktu" type="datetime-local" required value="<?= $data_tampil['waktu_jemput']?>" disabled>
                </div>
                <div class="form-group">
                    <p class="caption-form">Status</p>
                    <select class="input-edit" name="status">
                        <option value="Sedang diproses">Sedang diproses</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="btn-input">
            <input class='btn-update'type='submit' name='update'value='Ubah'>
        </div>
    </form>
    </main>
</div>
<script src="../js/script.js"></script>
</body>
</html>