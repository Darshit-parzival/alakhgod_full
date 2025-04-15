@php
    $language = isset($language) ? $language : 'english';
@endphp

<div class="purchase-section mt-5 w-100 d-none d-md-block">
    <h3 class="text-center">Purchase Options</h3>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Option</th>
                <th>Price</th>
                <th style="width: 120px;">Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Domestic Shipping -->
            <tr id="{{ $language }}_domesticRow">
                <td>Printed Book - Domestic India</td>
                <td>₹200</td>
                <td>
                    <div class="input-group">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', -1)">−</button>
                        <input type="number" id="{{ $language }}_domesticQty" min="1" max="5" value="1"
                            class="form-control text-center">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', 1)">+</button>
                    </div>
                </td>
                <td>
                    <button class="btn btn-primary"
                        onclick="addToCart('{{ $language }} Domestic Book', 200, '{{ $language }}_domesticQty', 5, 'domesticBook')">
                        Add
                    </button>
                </td>
            </tr>

            @if ($language === 'english' || $language === 'hindi')
                <!-- International Purchase -->
                <tr id="{{ $language }}_intlRow">
                    <td>Printed Book - International Purchase</td>
                    <td id="{{ $language }}_intlPrice">₹4000</td>
                    <td>
                        <div class="input-group">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', -1); updateIntlPrice('{{ $language }}')">
                                −
                            </button>
                            <input type="number" id="{{ $language }}_intlQty" min="1" max="2" value="1"
                                class="form-control text-center" oninput="updateIntlPrice('{{ $language }}')">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', 1); updateIntlPrice('{{ $language }}')">
                                +
                            </button>

                        </div>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('{{ $language }} International Book', 4000, '{{ $language }}_intlQty', 2, 'intlBook')">
                            Add
                        </button>

                    </td>
                </tr>

                <!-- Ebook -->
                <tr id="{{ $language }}_ebookRow">
                    <td>Ebook</td>
                    <td>₹200</td>
                    <td>
                        <input type="number" id="{{ $language }}_ebookQty" min="1" max="1" value="1"
                            class="form-control text-center" disabled>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('{{ $language }} Ebook', 200, '{{ $language }}_ebookQty', 1, 'ebook')">
                            Add
                        </button>
                    </td>
                </tr>

                <!-- POD with Amazon Links -->
                <tr>
                    <td>POD (Print on Demand) <br>for outside of India</td>
                    <td>—</td>
                    <td>—</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amazonModal">
                            POD - Amazon
                        </button>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Mobile View - Purchase Options (Cards) -->
<div class="purchase-section mt-5 w-100 d-block d-md-none">
    <h3 class="text-center mb-4">Purchase Options</h3>
    <div class="row g-3">

        <!-- Domestic Book Card -->
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Printed Book - Domestic India</h5>
                    <p class="card-text">Price: ₹200</p>
                    <div class="input-group mb-3">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', -1)">−</button>
                        <input type="number" id="{{ $language }}_domesticQty" min="1" max="5" value="1"
                            class="form-control text-center">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', 1)">+</button>
                    </div>
                    <button class="btn btn-primary mt-auto"
                        onclick="addToCart('{{ $language }} Domestic Book', 200, '{{ $language }}_domesticQty', 5, 'domesticBook')">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>

        @if ($language === 'english' || $language === 'hindi')

            <!-- International Book Card -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Printed Book - International Purchase</h5>
                        <p class="card-text">Price: <span id="{{ $language }}_intlPrice">₹4000</span></p>
                        <div class="input-group mb-3">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', -1); updateIntlPrice('{{ $language }}')">−</button>
                            <input type="number" id="{{ $language }}_intlQty" min="1" max="2" value="1"
                                class="form-control text-center" oninput="updateIntlPrice('{{ $language }}')">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', 1); updateIntlPrice('{{ $language }}')">+</button>
                        </div>
                        <button class="btn btn-primary mt-auto"
                            onclick="addToCart('{{ $language }} International Book', 4000, '{{ $language }}_intlQty', 2, 'intlBook')">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Ebook Card -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Ebook</h5>
                        <p class="card-text">Price: ₹200</p>
                        <input type="number" id="{{ $language }}_ebookQty" min="1" max="1" value="1"
                            class="form-control text-center mb-3" disabled>
                        <button class="btn btn-primary mt-auto"
                            onclick="addToCart('{{ $language }} Ebook', 200, '{{ $language }}_ebookQty', 1, 'ebook')">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- POD Card -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">POD (Print on Demand)</h5>
                        <p class="card-text">For outside of India</p>
                        <p class="card-text text-muted">Available via Amazon</p>
                        <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal"
                            data-bs-target="#amazonModal">
                            POD - Amazon
                        </button>
                    </div>
                </div>
            </div>

        @endif
    </div>
</div>


<!-- Amazon Modal -->
<div class="modal fade" id="amazonModal" tabindex="-1" aria-labelledby="amazonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amazonModalLabel">Select Amazon Store according to your country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.com/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.com (United States)
                            </a>
                            <a href="https://www.amazon.co.uk/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.co.uk (United Kingdom)
                            </a>
                            <a href="https://www.amazon.de/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.de (Germany)
                            </a>
                            <a href="https://www.amazon.fr/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.fr (France)
                            </a>
                            <a href="https://www.amazon.es/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.es (Spain)
                            </a>
                            <a href="https://www.amazon.it/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.it (Italy)
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.nl/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.nl (Netherlands)
                            </a>
                            <a href="https://www.amazon.pl/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.pl (Poland)
                            </a>
                            <a href="https://www.amazon.se/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.se (Sweden)
                            </a>
                            <a href="https://www.amazon.co.jp/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.co.jp (Japan)
                            </a>
                            <a href="https://www.amazon.ca/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.ca (Canada)
                            </a>
                            <a href="https://www.amazon.com.au/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.com.au (Australia)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Checkout Modal -->
<div id="checkoutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h5 class="modal-title">Shipping Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="checkoutForm" method="POST" action="/pay_razorpay.php">
                    <!-- Always shown -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Full Name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone No.</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone No." required>
                    </div>

                    <!-- Extra fields for printed items -->
                    <div id="extraFieldsContainer">
                        <div class="mb-3">
                            <label for="address1" class="form-label">Address 1</label>
                            <input type="text" name="address1" id="address1" class="form-control"
                                placeholder="Address 1 (House No, Society/Sector)" required>
                        </div>
                        <div class="mb-3">
                            <label for="address2" class="form-label">Address 2</label>
                            <input type="text" name="address2" id="address2" class="form-control"
                                placeholder="Address 2 (Landmark)">
                        </div>
                        <div class="mb-3">
                            <label for="address3" class="form-label">Address 3</label>
                            <input type="text" name="address3" id="address3" class="form-control"
                                placeholder="Address 3 (Area, City/Village)" required>
                        </div>
                        <div class="mb-3">
                            <label for="pincode" class="form-label">Pincode/Zipcode</label>
                            <input type="text" name="pincode" id="pincode" class="form-control"
                                placeholder="Pincode/Zipcode" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="country">Country</label>
                                <select name="country" id="countrySelect" class="form-select" required>
                                    <option value="">Select Country</option>
                                    <!-- Add your country options dynamically -->
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="state">State</label>
                                <select name="state" id="stateSelect" class="form-select" required>
                                    <option value="">Select State</option>
                                    <!-- Add your state options dynamically -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="orderButtonsContainer">
                        <button type="submit" class="btn btn-primary w-100">Submit Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cart = JSON.parse(localStorage.getItem('cart') || '[]');
        const hasDomestic = cart.some(item => item.type === 'domesticBook');
        const hasIntl = cart.some(item => item.type === 'intlBook');
        const eBook = cart.some(item => item.type === 'ebook');

        const container = document.getElementById('orderButtonsContainer');

        // Display payment buttons based on cart type
        if (hasDomestic || eBook) {
            container.innerHTML = `
        <div class="d-flex justify-content-between gap-2">
            <div class="d-flex flex-column w-50">
                <button type="button" id="razorpayBtn" class="btn btn-success w-100">Order with Razorpay</button>
                <small class="text-success mt-1 text-center">No Gateway Charges</small>
            </div>
            <div class="d-flex flex-column w-50">
                <button type="button" id="topmateBtn" class="btn btn-info w-100">Order with Topmate</button>
                <small class="text-danger mt-1 text-center">Gateway Charges Extra</small>
            </div>
        </div>`;
        } else if (hasIntl) {
            container.innerHTML = `
        <div class="d-flex flex-column w-100">
            <button type="button" id="topmateBtn" class="btn btn-info w-100">Order with Topmate</button>
            <small class="text-danger mt-1 text-center">Gateway Charges Extra</small>
        </div>`;
        }

        // Razorpay form submission
        const razorBtn = document.getElementById('razorpayBtn');
        if (razorBtn) {
            razorBtn.addEventListener('click', () => {
                submitForm('/pay_razorpay.php', [
                    'fullName', 'email', 'phone', 'address1', 'address2', 'address3', 'pincode', 'countrySelect', 'stateSelect'
                ]);
            });
        }

        // Topmate form submission
        const topmateBtn = document.getElementById('topmateBtn');
        if (topmateBtn) {
            topmateBtn.addEventListener('click', () => {
                submitForm('/pay_topmate.php', [
                    'fullName', 'email', 'phone', 'address1', 'address2', 'address3', 'pincode', 'countrySelect', 'stateSelect'
                ]);
            });
        }

        // eBook form submission
        const ebookBtn = document.getElementById('ebookOrderBtn');
        if (ebookBtn) {
            ebookBtn.addEventListener('click', () => {
                submitForm('/pay_ebook.php', ['fullName', 'email', 'phone']);
            });
        }

        // Generic form submission handler
        function submitForm(actionURL, fieldIds) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = actionURL;

            let formDataPreview = '';

            fieldIds.forEach(id => {
                const inputElement = document.getElementById(id);
                if (inputElement) {
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';

                    // For dropdowns (select), get the text of selected option
                    if (inputElement.tagName === 'SELECT') {
                        hiddenInput.name = id === 'countrySelect' ? 'country' : id === 'stateSelect' ? 'state' : id;
                        hiddenInput.value = inputElement.options[inputElement.selectedIndex].text;
                        formDataPreview += `${hiddenInput.name}: ${hiddenInput.value}\n`;
                    } else {
                        hiddenInput.name = id;
                        hiddenInput.value = inputElement.value;
                        formDataPreview += `${id}: ${inputElement.value}\n`;
                    }

                    form.appendChild(hiddenInput);
                }
            });

            const cartInput = document.createElement('input');
            cartInput.type = 'hidden';
            cartInput.name = 'cart';
            cartInput.value = JSON.stringify(cart, null, 2);
            form.appendChild(cartInput);

            formDataPreview += `cart: ${JSON.stringify(cart, null, 2)}`;

            if (confirm("Review your order details:\n\n" + formDataPreview)) {
                document.body.appendChild(form);
                form.submit();
            } else {
                alert("Submission cancelled.");
            }
        }
    });

    function updateIntlPrice(language) {
        const qtyInput = document.getElementById(`${language}_intlQty`);
        const priceElement = document.getElementById(`${language}_intlPrice`);
        const qty = parseInt(qtyInput.value);

        if (qty === 1) {
            priceElement.innerText = "₹4000";
        } else if (qty === 2) {
            priceElement.innerText = "₹4100";
        } else {
            priceElement.innerText = "—";
        }
    }


    function getIntlPrice(language) {
        let qty = document.getElementById(language + "_intlQty").value;
        return qty == 2 ? 4100 : 4000;
    }

    function changeQuantity(inputId, delta) {
        let input = document.getElementById(inputId);
        let newValue = parseInt(input.value) + delta;
        if (newValue >= input.min && newValue <= input.max) {
            input.value = newValue;
            if (inputId.includes("intlQty")) {
                updateIntlPrice(inputId.split("_")[0]);
            }
        }
    }

    // Initialize cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function getTotalCartQuantity() {
        return cart.reduce((sum, item) => sum + item.quantity, 0);
    }

    function setRowDisabled(rowId, disabled) {
        const row = document.getElementById(rowId);
        if (!row) return;

        const elements = row.querySelectorAll('button, input');
        elements.forEach(el => {
            el.disabled = disabled;
            if (disabled) {
                el.classList.add('disabled');
                el.classList.add('opacity-50');
            } else {
                el.classList.remove('disabled');
                el.classList.remove('opacity-50');
            }
        });
    }

    function addToCart(name, basePrice, quantityId, maxQuantity, type) {
        const quantityInput = document.getElementById(quantityId);
        let quantity = parseInt(quantityInput.value);
        const currentTotal = getTotalCartQuantity();

        // Determine total price (specific for intlBook)
        let totalPrice;
        if (type === "intlBook") {
            if (quantity === 1) {
                totalPrice = 4000;
            } else if (quantity === 2) {
                totalPrice = 4100;
            } else {
                alert("Max 2 international books allowed");
                return;
            }
        } else {
            totalPrice = quantity * basePrice;
        }

        const existingIndex = cart.findIndex(item => item.name === name);

        if (existingIndex !== -1) {
            const existingItem = cart[existingIndex];
            const newGlobalTotal = currentTotal - existingItem.quantity + quantity;

            if (newGlobalTotal > 10) {
                alert("Cart cannot contain more than 10 items total");
                return;
            }

            if (type === "ebook" && quantity > 1) {
                alert("Only 1 eBook can be purchased");
                return;
            }
            if (type === "domesticBook" && quantity > 5) {
                alert("Max 5 domestic books allowed");
                return;
            }

            cart[existingIndex] = {
                ...existingItem,
                quantity: quantity,
                price: basePrice,
                total: totalPrice,
            };
        } else {
            if (currentTotal + quantity > 10) {
                alert("Cart cannot contain more than 10 items total");
                return;
            }

            if (type === "ebook" && quantity > 1) {
                alert("Only 1 eBook can be purchased");
                return;
            }
            if (type === "domesticBook" && quantity > 5) {
                alert("Max 5 domestic books allowed");
                return;
            }

            cart.push({
                name: name,
                price: basePrice,
                quantity: quantity,
                total: totalPrice,
                type: type,
            });
        }

        updateCartDisplay();
        saveCartToStorage();
        showCart();
        handleMutualExclusion();
    }
    function handleMutualExclusion() {
        // Get active language from the visible section
        const activeSection = document.querySelector('.section.active');
        const currentLang = activeSection ? activeSection.id : 'english';

        const hasDomestic = cart.some(item => item.type === 'domesticBook');
        const hasIntl = cart.some(item => item.type === 'intlBook');
        const hasEbook = cart.some(item => item.type === 'ebook');

        // Target rows based on current language
        const langPrefix = `${currentLang}_`;
        const domesticRow = document.getElementById(`${langPrefix}domesticRow`);
        const intlRow = document.getElementById(`${langPrefix}intlRow`);
        const ebookRow = document.getElementById(`${langPrefix}ebookRow`);

        // Disable rows based on cart contents
        [domesticRow, intlRow, ebookRow].forEach(row => {
            if (!row) return; // Skip if row doesn't exist (e.g., non-English tabs)

            const elements = row.querySelectorAll('button, input');
            elements.forEach(el => {
                if (hasDomestic) {
                    el.disabled = row !== domesticRow;
                } else if (hasIntl) {
                    el.disabled = row !== intlRow;
                } else if (hasEbook) {
                    el.disabled = row !== ebookRow;
                } else {
                    el.disabled = false;
                }
            });
        });
    }
    function updateCartDisplay() {
        const cartItems = document.getElementById('cartItems');
        const cartCount = document.getElementById('cartCount');
        const cartTotal = document.getElementById('cartTotal');

        cartItems.innerHTML = '';
        let total = 0;

        if (cart.length === 0) {
            cartItems.innerHTML = '<p class="text-center text-muted">Your cart is empty</p>';
            cartCount.textContent = '0';
            cartTotal.textContent = '0';
            document.getElementById('mobileCartCount').textContent = '0';
            const cartContainer = document.getElementById('cartContainer');
            cartContainer.classList.remove('show');
            return;
        }

        cart.forEach((item, index) => {
            total += item.total;
            const itemHTML = `
            <div class="cart-item">
                <div class="item-details">
                    <span class="item-name">${item.name}</span>
                    <span class="quantity">Qty: ${item.quantity}</span>
                </div>
                <div class="item-price">₹${item.total}</div>
                <button class="btn btn-danger btn-sm" onclick="removeItem(${index})">×</button>
            </div>
        `;
            cartItems.insertAdjacentHTML('beforeend', itemHTML);
        });

        cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartTotal.textContent = total;
        document.getElementById('mobileCartCount').textContent = cartCount.textContent;
    }

    function removeItem(index) {
        cart.splice(index, 1);
        updateCartDisplay();
        saveCartToStorage();
        handleMutualExclusion();
    }

    function saveCartToStorage() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    function toggleCart() {
        const cartContainer = document.getElementById('cartContainer');
        cartContainer.classList.toggle('show');
    }

    function showCart() {
        document.getElementById('cartContainer').classList.add('show');
    }

    function checkout() {
        if (cart.length === 0) {
            alert("Your cart is empty!");
            return;
        }

        const onlyEbooks = cart.every(item => item.type === "ebook");

        const extraFieldsContainer = document.getElementById("extraFieldsContainer");

        if (onlyEbooks) {
            extraFieldsContainer.classList.add("d-none");
            extraFieldsContainer.querySelectorAll("input, select").forEach(field => {
                field.required = false;
            });
        } else {
            // Show extra fields and ensure they are required as needed
            extraFieldsContainer.classList.remove("d-none");
            // Set required attributes for specific fields
            document.getElementById("address1").required = true;
            document.getElementById("address3").required = true;
            document.getElementById("pincode").required = true;
            document.getElementById("countrySelect").required = true;
            document.getElementById("stateSelect").required = true;
        }

        // Finally, show the modal
        const modalElement = document.getElementById('checkoutModal');
        const modal = bootstrap.Modal.getOrCreateInstance(modalElement);
        modal.show();
    }

    // Initialize cart on page load
    document.addEventListener('DOMContentLoaded', updateCartDisplay);

    document.addEventListener("DOMContentLoaded", function () {
        fetch("https://countriesnow.space/api/v0.1/countries/positions")
            .then(res => res.json())
            .then(data => {
                console.log("Fetched Countries:", data); // ✅ LOG

                const countrySelect = document.getElementById("countrySelect");
                countrySelect.innerHTML = '<option value="">Select Country</option>';

                data.data.forEach(country => {
                    countrySelect.innerHTML += `<option value="${country.name}">${country.name}</option>`;
                });
            }).catch(err => {
                console.error("Error fetching countries:", err);
            });

        document.getElementById("countrySelect").addEventListener("change", function () {
            const selectedCountry = this.value;
            console.log("Selected Country:", selectedCountry); // ✅ LOG

            const stateSelect = document.getElementById("stateSelect");
            stateSelect.innerHTML = '<option value="">Loading...</option>';

            fetch("https://countriesnow.space/api/v0.1/countries/states", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ country: selectedCountry })
            })
                .then(res => res.json())
                .then(data => {
                    console.log("States data:", data); // ✅ LOG
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    if (data.data && data.data.states.length > 0) {
                        data.data.states.forEach(state => {
                            stateSelect.innerHTML += `<option value="${state.name}">${state.name}</option>`;
                        });
                    } else {
                        stateSelect.innerHTML = '<option value="">No States Found</option>';
                    }
                }).catch(err => {
                    console.error("Error fetching states:", err);
                });
        });
    });

</script>
