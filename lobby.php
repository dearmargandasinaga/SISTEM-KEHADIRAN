<?php
session_start();
if (!isset($_SESSION["employee_id"])) {
    header("Location: index.php");
    exit();
}
$employee_name = $_SESSION["employee_name"];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Lobby Absensi Karyawan</title>
</head>
<body>
    <div class="container">
        <h1>Hi, <?php echo $employee_name; ?>. Selamat Pagi.</h1>
        <p>@versi absensi 1.0_waktu jam:</p>
        <div class="info-section">
            <p>Jumlah Kehadiran:</p>
            <p>Jumlah Mendownload Resi Absensi:</p>
        </div>
        <div class="button-section">
            <div class="status">
                <p>Status Absensi</p>
                <button onclick="alert('Membuat Absensi')">BUAT ABSENSI</button>
                <button onclick="alert('Scan Barcode Absensi')">SCAN BARCODE ABSENSI</button>
                <button onclick="alert('Lihat Grafik Kehadiran')">LIHAT GRAFIK KEHADIRAN</button>
                <button onclick="alert('Download Resi Absensi')">DOWNLOAD RESI ABSENSI HARI INI (MANUAL)</button>
                <button onclick="alert('Histori Absensi')">HISTORI ABSENSI</button>
            </div>
            <div class="logout">
                <button onclick="window.location.href='index.php';">Logout!</button>
            </div>
        </div>
        <footer>
            <p>Waktu server absensi:</p>
            <p>Tanggal sekarang:</p>
            <p>Status absensi:</p>
            <p>@2024 TIM IT EPS</p>
        </footer>
    </div>
</body>
</html>
