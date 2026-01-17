<?php
session_start();
require_once 'functions.php'; // where isAdmin() lives

// Not logged in → go to homepage
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

// Logged in but not admin → go to student portal
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: student_portal.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN TEST</h1>
</body>
</html>