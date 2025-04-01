@extends('layouts.main')

@section('main-section')

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">

            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="text-content">

                    <!-- Language Tabs -->
                    <div class="tabs">
                        <button onclick="showSection('english')" class="active">English Book</button>
                        <button onclick="showSection('hindi')">Hindi Book</button>
                        <button onclick="showSection('telugu')">Telugu Book</button>
                        <button onclick="showSection('gujarati')">Gujarati Book</button>
                        <button onclick="showSection('marathi')">Marathi Book</button>
                    </div>

                    <!-- Book Sections -->
                    <div id="english" class="section active">
                        <div class="container">
                            <!-- <h2 class="text-center mb-4">About The Book: <span class="text-primary">Message From God (English)</span></h2> -->

                            <div class="row align-items-center g-4">
                                <!-- Image Column -->
                                <div class="col-lg-5 text-center">
                                    <img src="../../assets/img/New_Cover_Front_English.jpg" alt="English Book"
                                        class="img-fluid rounded-3 shadow-lg" style="max-width: 100%; height: auto;">
                                </div>

                                <!-- Text Content Column -->
                                <div class="col-lg-7">
                                    <div class="p-4">
                                        <!-- <p class="lead">Experience the Grace of God over a period of 30 days with this enlightening book. Discover divine insights, spiritual awakening, and a path to inner peace.</p> -->
                                        <!-- <div class="text-center text-lg-start mt-4">
                                                                                <button class="btn btn-primary btn-lg px-4 shadow-sm">Read Free Chapters</button>
                                                                            </div> -->
                                        <div class="mt-5">
                                            <!-- <h3 class="text-center mb-4">Purchase the Book</h3> -->
                                            <div class="table-responsive">
                                                @php $language = 'english'; @endphp
                                                @include('layouts.purchase-section')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Purchase Section -->

                        </div>
                    </div>


                    <div id="hindi" class="section">
                        <h2 class="text-center">About The Book: Message From God (Hindi)</h2>
                        <div class="d-flex align-items-start mt-3">
                            <img src="../../assets/img/New_Cover_Front_Hindi.jpg" alt="Hindi Book" class="img-fluid"
                                style="max-width: 300px; margin-right: 20px;">
                            <div>
                                <p>Experience the message of God in Hindi...</p>
                                <button class="btn btn-custom mt-3">Read Free Chapters of Hindi Book</button>
                            </div>
                        </div>

                        <!-- Purchase Section -->
                        <div class="table-responsive">
                            @php $language = 'hindi'; @endphp
                            @include('layouts.purchase-section')
                        </div>
                    </div>

                    <div id="telugu" class="section">
                        <h2 class="text-center">About The Book: Message From God (Telugu)</h2>
                        <div class="d-flex align-items-start mt-3">
                            <img src="../../assets/img/Cover_Front_Telugu.jpg" alt="Telugu Book" class="img-fluid"
                                style="max-width: 300px; margin-right: 20px;">
                            <div>
                                <p>Experience the message of God in Telugu...</p>
                                <button class="btn btn-custom mt-3">Read Free Chapters of Telugu Book</button>
                            </div>
                        </div>

                        <!-- Purchase Section -->
                        <div class="table-responsive">
                            @php $language = 'telugu'; @endphp
                            @include('layouts.purchase-section')
                        </div>
                    </div>

                    <div id="gujarati" class="section">
                        <h2 class="text-center">About The Book: Message From God (Gujarati)</h2>
                        <div class="d-flex align-items-start mt-3">
                            <img src="../../assets/img/Cover_Front_Gujarati.jpg" alt="Gujarati Book" class="img-fluid"
                                style="max-width: 300px; margin-right: 20px;">
                            <div>
                                <p>Experience the message of God in Gujarati...</p>
                                <button class="btn btn-custom mt-3">Read Free Chapters of Gujarati Book</button>
                            </div>
                        </div>

                        <!-- Purchase Section -->
                        <div class="table-responsive">
                            @php $language = 'gujarati'; @endphp
                            @include('layouts.purchase-section')
                        </div>
                    </div>

                    <div id="marathi" class="section">
                        <h2 class="text-center">About The Book: Message From God (Marathi)</h2>
                        <div class="d-flex align-items-start mt-3">
                            <img src="../../assets/img/Cover_Front_Marathi.jpg" alt="Marathi Book" class="img-fluid"
                                style="max-width: 300px; margin-right: 20px;">
                            <div>
                                <p>Experience the message of God in Marathi...</p>
                                <button class="btn btn-custom mt-3">Read Free Chapters of Marathi Book</button>
                            </div>
                        </div>

                        <!-- Purchase Section -->
                        <div class="table-responsive">
                            @php $language = 'marathi'; @endphp
                            @include('layouts.purchase-section')
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize sections
            document.querySelectorAll('.section').forEach((section, index) => {
                section.style.display = index === 0 ? 'block' : 'none';
            });

            // Initialize cart display
            updateCartDisplay();
        });
        let cart = [];
        const cartLimit = 10;

        function changeQuantity(id, delta) {
            const input = document.getElementById(id);
            let value = parseInt(input.value) + delta;
            if (value >= parseInt(input.min) && value <= parseInt(input.max)) {
                input.value = value;
            }
        }

        function updateIntlPrice(lang) {
            const qty = parseInt(document.getElementById(`${lang}_intlQty`).value);
            const priceElement = document.getElementById(`${lang}_intlPrice`);
            priceElement.textContent = qty === 2 ? '₹4100' : '₹4000';
        }

        function addToCart(name, basePrice, qtyId, maxLimit) {
            const qty = parseInt(document.getElementById(qtyId).value);
            const currentQty = cart.find(item => item.name === name)?.qty || 0;

            if (currentQty + qty > maxLimit) {
                alert(`Max ${maxLimit} items allowed for ${name}`);
                return;
            }

            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0) + qty;
            if (totalItems > cartLimit) {
                alert(`Cart cannot exceed ${cartLimit} items total`);
                return;
            }

            // Handle international pricing
            let finalPrice = basePrice;
            if (name.includes('International') && qty === 2) {
                finalPrice = 4100;
            }

            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.qty += qty;
                existingItem.price = finalPrice; // Update price if quantity changed
            } else {
                cart.push({
                    name,
                    price: finalPrice,
                    qty,
                    maxLimit
                });
            }

            updateCartDisplay();
        }

        function updateCartDisplay() {
            const cartElement = document.getElementById('cart');
            const cartItemsElement = document.getElementById('cartItems');
            const cartTotalElement = document.getElementById('cartTotal');

            cartItemsElement.innerHTML = '';
            let total = 0;

            cart.forEach(item => {
                total += item.price * item.qty;
                cartItemsElement.innerHTML += `
                                                <li>${item.qty} x ${item.name} - ₹${item.price * item.qty}
                                                    <button class="btn btn-sm btn-success" onclick="updateCartItem('${item.name}', 1)">+</button>
                                                    <button class="btn btn-sm btn-danger" onclick="updateCartItem('${item.name}', -1)">−</button>
                                                </li>
                                            `;
            });

            cartTotalElement.textContent = total;

            // Update cart visibility
            cartElement.style.display = cart.length > 0 ? 'block' : 'none';
        }

        function updateCartItem(name, delta) {
            const item = cart.find(item => item.name === name);
            if (!item) return;

            const newQty = item.qty + delta;

            if (newQty > item.maxLimit) {
                alert(`Maximum ${item.maxLimit} items allowed for ${name}`);
                return;
            }

            const totalItems = cart.reduce((sum, i) => sum + (i.name === name ? newQty : i.qty), 0);
            if (totalItems > cartLimit) {
                alert(`Cart cannot exceed ${cartLimit} items total`);
                return;
            }

            if (newQty < 1) {
                cart = cart.filter(i => i.name !== name);
            } else {
                item.qty = newQty;
                // Update price for international items
                if (name.includes('International') && newQty === 2) {
                    item.price = 4100;
                } else if (name.includes('International') && newQty === 1) {
                    item.price = 4000;
                }
            }

            updateCartDisplay();
        }

        function checkout() {
            if (cart.length === 0) {
                alert("Your cart is empty.");
                return;
            }
            const checkoutModal = new bootstrap.Modal(document.getElementById('checkoutModal'));
            checkoutModal.show();
        }

        // Existing showSection function with modification
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            const buttons = document.querySelectorAll('.tabs button');

            sections.forEach(section => {
                section.classList.remove('active');
                section.style.display = 'none';
            });

            buttons.forEach(button => button.classList.remove('active'));

            document.getElementById(sectionId).classList.add('active');
            document.getElementById(sectionId).style.display = 'block';
            event.target.classList.add('active');
        }
    </script>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="checkoutForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address 1</label>
                                <input class="form-control" id="address" rows="3" required />
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address 2</label>
                                <input class="form-control" id="address" rows="3" required />
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address 3</label>
                                <input class="form-control" id="address" rows="3" required />
                            </div>
                            <div class="col-md-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" required>
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" required>
                            </div>
                            <div class="col-md-4">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" required>
                            </div>
                            <div class="col-md-4">
                                <label for="pincode" class="form-label">Pincode/Zipcode</label>
                                <input type="text" class="form-control" id="pincode" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="checkoutForm" class="btn btn-primary">Submit Order</button>
                </div>
            </div>
        </div>
    </div>

@endsection
