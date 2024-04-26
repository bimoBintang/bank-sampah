<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_sku'])) {
    $id = $_GET['id_request_sku'];
    $sql = "SELECT * FROM data_request_sku natural join data_user WHERE id_request_sku='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_sku'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $keperluan = $data['keperluan'];
    $request = $data['request'];
    $usaha = $data['usaha'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
    }
}
?>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-tools">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="date" name="tgl_acc" class="form-control">
                                <div class="form-group">
                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $ket = "Surat sedang dalam proses cetak";
                            $tgl = $_POST['tgl_acc'];
                            $update = mysqli_query($konek, "UPDATE data_request_sku SET acc='$tgl', status=2, keterangan='$ket' WHERE id_request_sku=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sku">';
                            }
                        
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table border="1" align="center">
                        <table border="0" align="center">
                            <tr>
                                <td><img src="img/bekasi.png" width="70" height="87" alt=""></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center>
                                        <font size="4"><b>PEMERINTAH KOTA BEKASI</b></font><br>
                                        <font size="4"><b>KECAMATAN PONDOKGEDE</b></font><br>
                                        <font size="5"><b>KELURAHAN JATICEMPAKA</b></font><br>
                                        <font size="2"><b>JL. Wadas Raya Jamblang III Telp. (021) 84977901</b>
                                        </font><br>
                                    </center>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="45">
                                    <hr color="black">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <font size="4"><b>SURAT KETERANGAN USAHA</b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : 460/ &emsp;&emsp; - Kl.Jtc.Kessos</span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Kelurahan Jaticempaka
                                    Kecamatan Pondokgede Kota Bekasi,<br>
                                    Menerangkan bahwa :
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>Nama</td>
                                <td>&emsp;:&ensp;</td>
                                <td style="text-transform:uppercase"><b><?php echo $nama; ?></b></td>
                            </tr>
                            <tr>
                                <td>Tmpt/Tgl. Lahir</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $tempat . ", " . $format1; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $jekel; ?></td>
                            </tr>
                            <tr>
                                <td>Warganegara</td>
                                <td>&emsp;:&ensp;</td>
                                <td>Indonesia</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $agama; ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $status_warga; ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $nik; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $alamat; ?></td>
                            </tr>
                            <tr>
                                <td>Usaha</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php echo $usaha; ?></td>
                            </tr>
                            <tr>
                                <td>Maksud/Tujuan</td>
                                <td>&emsp;:&ensp;</td>
                                <td><?php if ($request == "USAHA") {
                                    $request = "Surat keterangan usaha ";
                                }
                                echo $request, "ini dipergunakan"?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>untuk, <b><?php echo $keperluan; ?></b></td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian
                                    surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <td>Jaticempaka, <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $bulanIndonesia = array(
                                    1 => 'Januari',
                                    2 => 'Februari',
                                    3 => 'Maret',
                                    4 => 'April',
                                    5 => 'Mei',
                                    6 => 'Juni',
                                    7 => 'Juli',
                                    8 => 'Agustus',
                                    9 => 'September',
                                    10 => 'Oktober',
                                    11 => 'November',
                                    12 => 'Desember',
                                );
                                $tanggal = date('d');
                                $bulan = $bulanIndonesia[date('n')];
                                $tahun = date('Y');
                                echo $tanggal . " " . $bulan . " " . $tahun;
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanda tangan pemohon</td>
                                <td></td>
                                <td><b>LURAH JATICEMPAKA</b></td>
                            </tr>
                            <tr>
                                <td rowspan="15"></td>
                                <td></td>
                                <td rowspan="15"></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b style="text-transform:uppercase"><?php echo $nama; ?></b></td>
                                <td></td>
                                <td><b><u></u></b></td>
                            </tr>
                        </table>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>