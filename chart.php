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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Grafik Absensi</title>
</head>
<body>
    <div class="container">
        <h1>Grafik Kehadiran - <?php echo $employee_name; ?></h1>
        <canvas id="attendanceChart"></canvas>
    </div>

    <script>
        const attendanceData = JSON.parse(localStorage.getItem('attendanceHistory')) || [];

        const data = {
            labels: attendanceData.map(item => item.date),
            datasets: [{
                label: 'Status Kehadiran',
                data: attendanceData.map(item => item.status === 'Hadir' ? 1 : 0),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        };

        const attendanceChart = new Chart(
            document.getElementById('attendanceChart'),
            config
        );
    </script>
</body>
</html>
