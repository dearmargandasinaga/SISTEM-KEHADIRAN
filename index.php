<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST["employee_id"];
    if (array_key_exists($employee_id, $employees)) {
        $_SESSION["employee_id"] = $employee_id;
        $_SESSION["employee_name"] = $employees[$employee_id];
        header("Location: lobby.php");
        exit();
    } else {
        $error = "ID Karyawan tidak valid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login Karyawan</title>
</head>
<body class="login-body">
    <div class="login-container">
        <h2>Login Karyawan</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post" action="">
            <label for="employee_id">ID Karyawan:</label>
            <input type="text" id="employee_id" name="employee_id" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
