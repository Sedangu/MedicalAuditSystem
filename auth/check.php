<?php
session_start();

if (!isset($_SESSION['rol'])) {
    header("Location: ../auth/login.php");
    exit;
}
