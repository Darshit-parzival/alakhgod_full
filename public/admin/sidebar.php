<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: index.php");
    exit();
}

// Get current route
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <h4 class="text-center py-3">Admin</h4>
                    <a href="users.php" class="<?= $current_page == 'users.php' ? 'active' : '' ?>">Users</a>
                    <a href="products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Products</a>
                    <a href="orders.php" class="<?= $current_page == 'orders.php' ? 'active' : '' ?>">Orders</a>
                    <a href="settings.php" class="<?= $current_page == 'settings.php' ? 'active' : '' ?>">Settings</a>
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
