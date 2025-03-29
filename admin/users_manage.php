<?php
include "config/connect.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Fetch all users
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table th {
            background-color: #f8f9fa;
        }
        .btn-action {
            min-width: 80px;
        }
    </style>
</head>
<body>

<?php include "includes/sidebar.php"; ?>

<div class="container mt-5">
    <h2 class="mb-4">User Management</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div></div>
        <a href="user_form.php" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Add New User
        </a>
    </div>

    <div class="table-responsive rounded">
        <table class="table table-striped table-hover border">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td class="text-center"><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['phone']) ?></td>
                        <td><?= date('M j, Y H:i', strtotime($row['created_at'])) ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="user_form.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning me-2 btn-action">
                                    ✏️ Edit
                                </a>
                                <a href="user_delete.php?id=<?= $row['id'] ?>" 
                                   class="btn btn-sm btn-danger btn-action" 
                                   onclick="return confirm('Are you sure you want to delete this user?')">
                                    🗑️ Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>