<?php
include "config/connect.php"; 

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$query = "SELECT COUNT(*) AS total FROM users";
$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalUsers = $row['total'];
} else {
    echo "Error: " . mysqli_error($con);
}


$query2 = "SELECT COUNT(*) AS total FROM contact_messages";
$result2 = mysqli_query($con, $query2);

if ($result2) {
    $row2 = mysqli_fetch_assoc($result2);
    $totalMessages = $row['total'];
} else {
    echo "Error: " . mysqli_error($con);
}

$query3 = "SELECT COUNT(*) AS total FROM contact_messages";
$result3 = mysqli_query($con, $query3);

if ($result3) {
    $row3 = mysqli_fetch_assoc($result3);
    $totalFAQs = $row['total'];
} else {
    echo "Error: " . mysqli_error($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet" >
</head>
<body>

<?php include "includes/sidebar.php"; ?>

<!-- Main Content -->
<div class="main-content">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
        </div>
    </nav>

    <!-- Dashboard Cards -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text"><?php echo $totalUsers ?></p>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="card-title">Total Contact Messages</h5>
                    <p class="card-text"><?php echo $totalMessages ?></p>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="card-title">Total FAQs</h5>
                    <p class="card-text"><?php echo $totalFAQs ?></p>
                    <a href="#" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
