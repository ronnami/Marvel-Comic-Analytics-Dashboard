<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please log in first.'); window.location='login.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        background-color: #2c3e50;
        color: #ecf0f1;
        padding-top: 20px;
        overflow-y: auto;
    }

    .sidebar h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .sidebar a {
        color: #ecf0f1;
        text-decoration: none;
        padding: 10px 20px;
        display: block;
    }

    .sidebar a:hover {
        background-color: #34495e;
    }

    .navbar {
        margin-left: 250px;
        background-color: #ffffff;
        border-bottom: 1px solid #ddd;
    }

    .navbar .navbar-brand {
        margin-left: 10px;
    }

    .navbar .logout-btn {
        margin-right: 10px;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
        height: calc(100vh - 56px);
    }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>HOMEPAGE</h3>
        <a href="dashboard.php">Dashboard</a>
        <a href="#">User Management</a>
        <a href="#">List of Comics</a>
        <a href="#">Employees</a>
        <a href="#">Clients</a>
        <a href="#">To be Published</a>
        <a href="#">Calendar</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light">
        <span class="navbar-brand">Admin Panel</span>
        <!-- Logout Button with Confirmation -->
        <button class="btn btn-danger logout-btn" id="logoutBtn">Logout</button>

        <script>
        document.getElementById('logoutBtn').addEventListener('click', function() {
            // Show a confirmation dialog
            if (confirm("Are you sure you want to logout?")) {
                // Redirect to the logout.php file if confirmed
                window.location.href = "logout.php";
            }
        });
        </script>
    </nav>

    <!-- Content -->
    <div class="content">
        <div id="vizContainer"></div>
    </div>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>