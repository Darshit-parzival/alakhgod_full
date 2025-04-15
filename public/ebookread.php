<?php
// Database connection settings
$host = 'localhost';  // Or your database host
$db = 'alakhvz7_ebook';
$user = 'root';  // Replace with your DB username
$pass = '';  // Replace with your DB password

//$con = mysqli_connect("localhost", "alakhvz7_printbook_admin", "GraceofGod@PrintBook01", "alakhvz7_printbook");

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $language = $_POST['language'] ?? '';

    // Escape input
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Check if email exists
    $sql = "SELECT * FROM ebookreader WHERE EmailDB = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
        echo "<script>alert('You have not purchased the book.'); window.location.href = '/Gods-Book/Order';</script>";
        exit();
    }

    $row = $result->fetch_assoc();

    // Check password
    if ($row['ReadpasswordDB'] !== $password) {
        echo "<script>alert('Password is wrong.'); window.location.href = '/Gods-Book/ForgetPassword';</script>";
        exit();
    }

    // Check if selected language was purchased
    if ($language === 'english' && !$row['EnglishDB']) {
        echo "<script>alert('You have not bought the book in English.'); window.location.href = '/Gods-Book/Order';</script>";
        exit();
    } elseif ($language === 'hindi' && !$row['HindiDB']) {
        echo "<script>alert('You have not bought the book in Hindi.'); window.location.href = '/Gods-Book/Order';</script>";
        exit();
    }

    // All checks passed, redirect to reader
    header("Location: /Custom_Reader/index.php?lang=$language");
    exit();
}

$conn->close();
?>
