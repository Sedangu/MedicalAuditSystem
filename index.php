<?php
session_start();

if (isset($_SESSION['rol'])) {
    header("Location: dashboards/dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-page">

<div class="login-wrapper">

    <div class="login-left">

        <div class="login-logo">
            <img src="assets/logo.png" alt="HardSystem">
            <p>AUDITORÍA MÉDICA</p>
        </div>

        <h2>Iniciar sesión</h2>

        <form action="auth/validar.php" method="POST">
            <input type="email" name="email" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn-login">Ingresar</button>
        </form>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-msg">Usuario o contraseña incorrectos</div>
        <?php endif; ?>

    </div>

    <div class="login-right">
        <img src="assets/doctora.png" alt="Doctora">
    </div>

</div>

</body>
</html>

