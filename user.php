<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: sign_in.php');  // Redirect to login if not authenticated
    exit();
}
?>
