<?php
//session_start();
//require_once 'functions.php'; // where isAdmin() lives

include "partials/header.php";
include "partials/navigation.php";

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

<?php
// admin.php
session_start();
require_once "header.php"; // make sure session, DB, and functions are included

// Protect page: only admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}

// Fetch counts from database
// Replace table names if different
$studentCount = $conn->query("SELECT COUNT(*) as total FROM users WHERE role='student'")->fetch_assoc()['total'];
$categoryCount = $conn->query("SELECT COUNT(*) as total FROM categories")->fetch_assoc()['total'];
$testCount = $conn->query("SELECT COUNT(*) as total FROM tests")->fetch_assoc()['total'];

$adminName = $_SESSION['username']; // from login session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="container mt-4">

    <!-- Welcome -->
    <div class="mb-4">
        <h2>Welcome Admin, <strong><?php echo htmlspecialchars($adminName); ?></strong></h2>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-5">
        <!-- Students Card -->
        <div class="col-md-4">
            <div class="card text-white bg-primary h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-user-graduate fa-3x mb-3"></i>
                    <h5 class="card-title">Students</h5>
                    <h3><?php echo $studentCount; ?></h3>
                </div>
                <div class="card-footer text-center">
                    <a href="#students-section" class="btn btn-light btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Categories Card -->
        <div class="col-md-4">
            <div class="card text-white bg-success h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-tags fa-3x mb-3"></i>
                    <h5 class="card-title">Categories</h5>
                    <h3><?php echo $categoryCount; ?></h3>
                </div>
                <div class="card-footer text-center">
                    <a href="#categories-section" class="btn btn-light btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Tests Card -->
        <div class="col-md-4">
            <div class="card text-white bg-warning h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-file-alt fa-3x mb-3"></i>
                    <h5 class="card-title">Tests</h5>
                    <h3><?php echo $testCount; ?></h3>
                </div>
                <div class="card-footer text-center">
                    <a href="#tests-section" class="btn btn-light btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sections -->
    <div id="students-section" class="mb-5">
        <h3>Students</h3>
        <!-- Add your students table or content here -->
    </div>

    <div id="categories-section" class="mb-5">
        <h3>Categories</h3>
        <!-- Add your categories table or content here -->
    </div>

    <div id="tests-section" class="mb-5">
        <h3>Tests</h3>
        <!-- Add your tests table or content here -->
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




