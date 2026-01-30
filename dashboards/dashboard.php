<?php
require "../auth/check.php";

$rol = $_SESSION['rol'];
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Consultora Auditoría Médica | HardSystem</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../css/style.css">
</head>

<body class="rol-<?= $rol ?>">

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Auditoría Médica</h2>

    <a href="#">Inicio</a>

    <?php if ($rol !== 'medico'): ?>
        <a href="#">Auditorías</a>
        <a href="#">Historial</a>
    <?php endif; ?>

    <?php if ($rol === 'admin'): ?>
        <a href="#">Reportes</a>
        <a href="#">Usuarios</a>
    <?php endif; ?>

    <a href="../auth/logout.php">Cerrar sesión</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h1>Panel de Auditoría Médica</h1>
        <span id="reloj">📅 Cargando...</span>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- CENTER -->
        <div class="center">

            <!-- ESTADO GENERAL -->
            <div class="card">
                <h3>Estado general del sistema</h3>
                <p>✔ Auditorías Activas: <b>128</b></p>
                <p>⚠ Observadas: <b>17</b></p>
                <p>❌ Rechazadas: <b>9</b></p>
            </div>

            <!-- MÓDULOS -->
            <div class="card">
                <h3>Áreas de Auditoría</h3>

                <div class="modules">

                    <?php if ($rol !== 'medico'): ?>
                    <div class="module">
                        <h3>Ambulatoria</h3>
                        <p>Consultas, Estudios, Terapias</p>
                        <button>Ingresar</button>
                    </div>

                    <div class="module">
                        <h3>Internaciones</h3>
                        <p>Hospitalaria / Sanatorial</p>
                        <button>Ingresar</button>
                    </div>
                    <?php endif; ?>

                    <div class="module">
                        <h3>Bioquímica</h3>
                        <p>Laboratorio clínico</p>
                        <button>Ingresar</button>
                    </div>

                    <div class="module">
                        <h3>Odontología</h3>
                        <p>Prótesis, Ortodoncia</p>
                        <button>Ingresar</button>
                    </div>

                    <?php if ($rol === 'admin'): ?>
                    <div class="module">
                        <h3>Farmacia</h3>
                        <p>Recetas y Medicación</p>
                        <button>Ingresar</button>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>

        <!-- RIGHT -->
        <div class="right">

            <!-- USER -->
            <div class="card user-box">
                <img src="../assets/FotosEmp/FotoSergio.png">
                <h3><?= $nombre ?></h3>
                <p class="tag"><?= ucfirst($rol) ?></p>
            </div>

            <div class="card">
                <h3>Última auditoría</h3>
                <p>📄 Internación – Clínica Central</p>
                <p>✔ Estado: Aprobada</p>
            </div>

            <?php if ($rol === 'admin'): ?>
            <div class="card">
                <h3>Informes</h3>
                <p>📊 Reporte mensual disponible</p>
                <button>Exportar PDF</button>
            </div>
            <?php endif; ?>

        </div>

    </div>

</div>

<script src="../js/reloj.js"></script>
</body>
</html>
