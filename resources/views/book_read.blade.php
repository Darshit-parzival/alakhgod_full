@extends('layouts.main')

@section('main-section')
    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="container ebook-container">
                    <div class="row">
                        <!-- Left Side (Image) -->
                        <div class="col-md-5 ebook-left">
                            <img src="image.png" alt="Book Cover">
                        </div>

                        <!-- Right Side (Content) -->
                        <div class="col-md-7 ebook-right">
                            <h2 class="ebook-title">Login to read the eBook: "Message From God"</h2>
                            <p class="mb-1">By Falguni Pathak & Pradip Mukherji</p>
                            <p class="mb-4">Enjoy being Soaked in the Energies of God</p>

                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">User ID (Your email):</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter your email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Enter your password" required>
                                </div>

                                <button type="submit" class="btn ebook-btn w-100">Login to Read eBook</button>
                            </form>

                            <div class="text-end mt-3">
                                <a href="#" class="forgot-link">Forgot Password?</a>
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

@endsection
