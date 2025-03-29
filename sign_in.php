<?php 
include 'includes/config.php'; 
include 'includes/header.php'; 

// Handle login when the form is submitted
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Query the database for the user
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            // Remember Me functionality
            if (isset($_POST['remember'])) {
                setcookie('user_email', $email, time() + (86400 * 30), "/");  // 30 days
                setcookie('user_password', $password, time() + (86400 * 30), "/");
            }

            echo "<script>window.location.href='user.php'</script>";
            exit();
        } else {
            echo "<div class='alert alert-danger text-center'>Invalid password!</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>No account found with this email!</div>";
    }
}
?>

<div class="login-bg d-flex flex-column">

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center responsive-container">
            <div class="header-container w-100 text-center">
                <h1>Sign In</h1>
            </div>
            <div class="breadcrumb-container w-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
                    <h3 class="text-center mb-4">Login to Your Account</h3>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" 
                            value="<?php echo isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : ''; ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" 
                            value="<?php echo isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : ''; ?>" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <input type="checkbox" id="remember" name="remember" 
                                <?php echo isset($_COOKIE['user_email']) ? 'checked' : ''; ?>>
                                <label for="remember">Remember me</label>
                            </div>
                            <a href="forgot_password.php" class="text-decoration-none">Forgot password?</a>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="sign_up.php" class="text-decoration-none">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
