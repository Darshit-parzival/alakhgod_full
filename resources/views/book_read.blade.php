@extends('layouts.main')

@section('main-section')
    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <h2 class="text-left" style="color: darkmagenta">Read "Message From God" eBook</h2>
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="container ebook-container">
                    <div class="row">
                        <!-- Left Side (Image) -->
                        <div class="col-md-5 ebook-left">
                            <img src="{{ asset('assets/img/Cover_Front_english.jpg') }}" alt="Book Cover">
                        </div>

                        <!-- Right Side (Content) -->
                        <div class="col-md-7 ebook-right">
                            <h2 class="ebook-title">Login to read the eBook: "Message From God"</h2>
                            <p class="mb-1">By Falguni Pathak & Pradip Mukherji</p>
                            <p class="mb-4">Enjoy being Soaked in the Energies of God</p>

                            <form method="post" action="/ebookread.php">
                                <div class="mb-3">
                                    <label for="email" class="form-label">User ID (Your email):</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter your email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <div style="position: relative;">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Enter your password" required>
                                        <span onclick="togglePassword()" style="
                                                    position: absolute;
                                                    top: 50%;
                                                    right: 10px;
                                                    transform: translateY(-50%);
                                                    cursor: pointer;
                                                    color: #007bff;
                                                    font-weight: bold;
                                                    font-size: 0.9rem;
                                                " id="toggleText">Show</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Select Language:</label>
                                    <div>
                                        <input type="radio" id="english" name="language" value="english" required>
                                        <label for="english">English</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="hindi" name="language" value="hindi" required>
                                        <label for="hindi">Hindi</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn ebook-btn w-100">Login to Read eBook</button>
                            </form>


                            <div class="text-end mt-3">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot
                                    Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

    <!-- Forget Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="/ebookresetpassword.php" method="post" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Reset Your Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="emailreset" class="form-label">Your Email:</label>
                        <input type="email" class="form-control" id="emailreset" name="email" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone No (Excluding Country Code):</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g., 9876543210"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword" class="form-label">New Password:</label>
                        <input type="password" class="form-control" id="newpassword" name="newpassword"
                            placeholder="Enter new password" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleText = document.getElementById('toggleText');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleText.innerText = 'Hide';
            } else {
                passwordInput.type = 'password';
                toggleText.innerText = 'Show';
            }
        }
    </script>

@endsection
