<?php 
include 'includes/config.php'; 
include 'includes/header.php'; 

if (isset($_POST['submit'])) {
    // Get form data and sanitize it
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<div class='alert alert-danger text-center'>Passwords do not match!</div>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the 'users' table
        $query = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hashed_password')";
        
        if (mysqli_query($con, $query)) {
            echo "<div class='alert alert-success text-center'>Account created successfully!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($con) . "</div>";
        }
    }
}
?>

<div class="signup-bg d-flex flex-column">

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center responsive-container">
            <div class="header-container w-100 text-center">
                <h1>Sign Up</h1>
            </div>
            <div class="breadcrumb-container w-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <hr class="my-3">

    <div class="container flex-grow-1 d-flex justify-content-center align-items-center mt-5">
        <div class="row justify-content-center w-100">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center mb-4">Create Your Account</h3>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="sign_in.php" class="text-decoration-none">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
