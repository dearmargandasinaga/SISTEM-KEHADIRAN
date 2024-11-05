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
    <script src="assets/js/barcodeScanner.js"></script>
    <title>Scan Barcode Absensi</title>
</head>
<body>
    <div class="container">
        <h1>Scan Barcode Absensi</h1>
        <div id="cameraContainer">
            <video id="video" width="300" height="200" autoplay></video>
            <button onclick="startScanner()">Mulai Scan</button>
        </div>
        <div id="resultContainer"></div>
    </div>
</body>
</html>
