@extends('layouts.main')

@section('main-section')
    <button class="cart-toggle-btn" onclick="toggleCart()">
        🛒 <span id="mobileCartCount">0</span>
    </button>
    <div id="cartContainer" class="cart-container">
        <div class="cart-header">
            <h5>Shopping Cart (<span id="cartCount">0</span>)</h5>
            <button class="btn-close" onclick="toggleCart()"></button>
        </div>
        <div class="cart-items" id="cartItems">
            <!-- Cart items will be dynamically inserted here -->
        </div>
        <div class="cart-footer">
            <div class="total-amount">
                Total: ₹<span id="cartTotal">0</span>
            </div>
            <button class="btn btn-primary w-100" onclick="checkout()">Checkout</button>
        </div>
    </div>

    <div class="container flex-grow-1">
        <div class="text-left mb-4">
            <h3 style="color: darkmagenta;"> The Book can be ordered in 3 ways:</h3>
            <ul class="list-unstyled" style="color: darkmagenta;">
                <li><strong>Print Book</strong> - Paperback copy.</li>
                <li><strong>E-Book</strong> - Digital version to read online.</li>
                <li><strong>Print on Demand (POD)</strong> - For buyers outside India.</li>
            </ul>
        </div>
        <!-- Tabs in a Single Row -->
        <div class="d-flex justify-content-left">
            <button class="tab-btn active" data-lang="english" onclick="showSection('english')">English Book</button>
            <button class="tab-btn" data-lang="hindi" onclick="showSection('hindi')">Hindi Book</button>
            <button class="tab-btn" data-lang="telugu" onclick="showSection('telugu')">Telugu Book</button>
            <button class="tab-btn" data-lang="gujarati" onclick="showSection('gujarati')">Gujarati Book</button>
            <button class="tab-btn" data-lang="marathi" onclick="showSection('marathi')">Marathi Book</button>
        </div>

        <div class="row">
            <!-- Left Side (Book Content) -->
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="content-section">
                    @foreach (['english', 'hindi', 'telugu', 'gujarati', 'marathi'] as $language)
                        <div id="{{ $language }}" class="section {{ $language == 'english' ? 'active' : '' }}">
                            <div class="row align-items-start mt-3">
                                <!-- Image Column -->
                                <div class="col-md-5 text-center">
                                    <img src="{{ file_exists(public_path("assets/img/Cover_Front_{$language}.jpg")) ? asset("assets/img/Cover_Front_{$language}.jpg") : asset('assets/img/default_cover.jpg') }}"
                                        alt="{{ ucfirst($language) }} Book" class="img-fluid rounded-3 shadow-lg"
                                        style="max-width: 100%; height: auto;">
                                </div>

                                <!-- Purchase Section Column -->
                                <div class="col-md-7">
                                    @php $currentLanguage = $language; @endphp
                                    @include('layouts.purchase-section')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Switching -->
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.add('active');

            // Update active button
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.lang === sectionId) {
                    btn.classList.add('active');
                }
            });

            // Refresh mutual exclusion after tab change
            handleMutualExclusion();
            document.querySelector(`[onclick="showSection('${sectionId}')"]`).classList.add('active');
        }
    </script>

    <!-- CSS for Styling -->
    <style>
        .tab-btn {
            background-color: #444;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .tab-btn.active {
            background-color: darkmagenta;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }
    </style>

@endsection
