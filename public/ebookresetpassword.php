<?php
// Database connection settings
$host = 'localhost';         // Or your host
$db = 'alakhvz7_ebook';
$user = 'root';  // Replace with actual DB username
$pass = '';  // Replace with actual DB password

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$newpassword = $_POST['newpassword'] ?? '';

// Escape for safety
$fullname = $conn->real_escape_string($fullname);
$email = $conn->real_escape_string($email);
$phone = $conn->real_escape_string($phone);
$newpassword = $conn->real_escape_string($newpassword);

// Check if user exists
$sql = "SELECT * FROM ebookreader WHERE FullnameDB = '$fullname' AND EmailDB = '$email' AND PhonenoDB = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    // Update password
    $update_sql = "UPDATE ebookreader SET ReadpasswordDB = '$newpassword' WHERE EmailDB = '$email'";
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Password reset successfully! You can now log in.'); window.location.href = '/Gods-Book/Read';</script>";
    } else {
        echo "<script>alert('Error while resetting password.'); window.location.href = '/ebookread.php';</script>";
    }
} else {
    echo "<script>alert('User not found! Please check your details.'); window.history.back();</script>";
}

$conn->close();
?>
