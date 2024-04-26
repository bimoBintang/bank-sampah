<!DOCTYPE html>
<html>

<head>
    <title>Import Data Excel ke Database</title>
</head>

<body>
    <h1>Import Data Excel ke Database</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xlsx">
        <input type="submit" name="submit" value="Import Data">
    </form>
    <br>

    <?php
require 'vendor/autoload.php'; // Ubah path sesuai dengan lokasi autoload.php dari Composer

include 'konek.php'; // Mengambil koneksi dari file konek.php

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    // Membaca file Excel
    $inputFileName = $_FILES['excel_file']['tmp_name'];
    $spreadsheet = IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();

    // Mendapatkan jumlah baris dan kolom
    $rowCount = $sheet->getHighestRow();
    $columnCount = $sheet->getHighestColumn();

    // Loop untuk membaca dan memasukkan data ke dalam database
    for ($row = 2; $row <= $rowCount; $row++) {
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $columnCount . $row, null, true, false)[0];

        // Menggunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO data_terpadu (kelurahan, nik, nama, alamat, rt, rw, pkh, bpnt, bst, bpnt_ppkm, pbi, pekerjaan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssiiiiis", $rowData[0], $rowData[1], $rowData[2], $rowData[3], $rowData[4], $rowData[5], $rowData[6], $rowData[7], $rowData[8], $rowData[9], $rowData[10], $rowData[11]);

        if ($stmt->execute() !== true) {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    echo "Import data selesai.";
}

$conn->close();
?>

</body>

</html>