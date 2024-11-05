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
    <title>Histori Absensi</title>
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="container">
        <h1>Histori Absensi - <?php echo $employee_name; ?></h1>
        <div id="historyContent"></div>
        <button onclick="clearHistory()">Hapus Histori</button>
    </div>
</body>
</html>
