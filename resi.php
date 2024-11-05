<?php
session_start();

if (!isset($_SESSION["employee_id"])) {
    header("Location: index.php");
    exit();
}

$employee_id = $_SESSION["employee_id"];
$employee_name = $_SESSION["employee_name"];
$date = date("Y-m-d");
$time = date("H:i:s");

// Menggabungkan data untuk barcode (ID, tanggal, waktu)
$barcode_data = $employee_id . '-' . $date . '-' . $time;

// URL API pihak ketiga untuk menghasilkan barcode
$barcode_api_url = "https://api.barcodes4.me/barcode/c128b/{$barcode_data}.png";

// Mendapatkan gambar barcode dari API
$barcode_image = file_get_contents($barcode_api_url);

// Menyimpan barcode sebagai file PNG
$barcode_file = "barcode_{$employee_id}.png";
file_put_contents($barcode_file, $barcode_image);

// Header untuk resi absensi
header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=resi_absensi.txt");

// Menampilkan informasi absensi pada resi
echo "ID Karyawan: " . $employee_id . "\n";
echo "Nama: " . $employee_name . "\n";
echo "Tanggal Absensi: " . $date . "\n";
echo "Waktu Absensi: " . $time . "\n";
echo "Status: Hadir\n";
echo "Data Barcode: " . $barcode_data . "\n";
echo "\nBarcode Image Path: " . $barcode_file . "\n";
?>
