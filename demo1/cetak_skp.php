<?php include '../konek.php';?>
<?php
	if(isset($_GET['id_request_skp'])){
		$id=$_GET['id_request_skp'];
		$sql = "SELECT * FROM data_request_skp natural join data_user WHERE id_request_skp='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
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
		$alamat = $data['alamat'];
		$status_warga = $data['status_warga'];
        $request = $data['request'];
        $acc = $data['acc'];
        $keperluan = $data['keperluan'];
        $format4 = date('d F Y', strtotime($acc));
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SKP</title>
</head>

<body>

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
                    <font size="4"><b>SURAT KETERANGAN PAMIT</b></font><br>
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
            <td>Maksud/Tujuan</td>
            <td>&emsp;:&ensp;</td>
            <td><?php echo "Surat keterangan ini dipergunakan untuk," ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><b><?php echo $keperluan; ?></b></td>
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


</body>

</html>
<script>
window.print();
</script>