@php
    $language = isset($language) ? $language : 'english';
@endphp

<div class="purchase-section mt-5 w-100">
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
            <tr>
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
                        onclick="addToCart('{{ $language }} Domestic Book', 200, '{{ $language }}_domesticQty', 5)">
                        Add
                    </button>
                </td>
            </tr>

            @if ($language === 'english' || $language === 'hindi')
                <!-- International Purchase -->
                <tr>
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
                            onclick="addToCart('{{ $language }} International Book', 4000, '{{ $language }}_intlQty', 2)">
                            Add
                        </button>
                    </td>
                </tr>

                <!-- Ebook -->
                <tr>
                    <td>Ebook</td>
                    <td>₹200</td>
                    <td>
                        <input type="number" id="{{ $language }}_ebookQty" min="1" max="1" value="1"
                            class="form-control text-center" disabled>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('{{ $language }} Ebook', 200, '{{ $language }}_ebookQty', 1)">
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

<!-- Amazon Modal -->
<div class="modal fade" id="amazonModal" tabindex="-1" aria-labelledby="amazonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amazonModalLabel">Select Amazon Store</h5>
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

<script>
    function updateIntlPrice(language) {
        let qty = document.getElementById(language + "_intlQty").value;
        let price = qty == 2 ? 4100 : 4000;
        document.getElementById(language + "_intlPrice").innerText = "₹" + price;
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

    function addToCart(name, basePrice, quantityId, maxQuantity, type) {
        const quantityInput = document.getElementById(quantityId);
        let quantity = parseInt(quantityInput.value);

        // Enforce global max cart limit (10 items total)
        if (getTotalCartQuantity() + quantity > 10) {
            alert("Cart cannot contain more than 10 items in total.");
            return;
        }

        // Enforce specific rules for each product type
        if (type === "ebook" && quantity > 1) {
            alert("Only 1 eBook can be purchased.");
            return;
        }

        if (type === "intlBook") {
            if (quantity > 2) {
                alert("Maximum 2 copies allowed for international orders.");
                return;
            }
            basePrice = quantity === 2 ? 4100 : 4000;
        }

        if (type === "domesticBook" && quantity > 5) {
            alert("Maximum 5 copies allowed for domestic printed books.");
            return;
        }

        // Check if item already exists in cart
        const existingItem = cart.find(item => item.name === name);

        if (existingItem) {
            let newTotal = existingItem.quantity + quantity;

            // Ensure we do not exceed item-specific max quantity
            if (type === "intlBook" && newTotal > 2) {
                alert("Maximum 2 copies allowed for international books.");
                return;
            }
            if (type === "domesticBook" && newTotal > 5) {
                alert("Maximum 5 copies allowed for domestic books.");
                return;
            }
            if (type === "ebook" && newTotal > 1) {
                alert("Only 1 eBook can be purchased.");
                return;
            }

            existingItem.quantity += quantity;
            existingItem.total = existingItem.quantity * existingItem.price;
        } else {
            cart.push({
                name: name,
                price: basePrice,
                quantity: quantity,
                total: basePrice * quantity,
                type: type
            });
        }

        updateCartDisplay();
        saveCartToStorage();
        showCart();
    }

    function updateCartDisplay() {
        const cartItems = document.getElementById('cartItems');
        const cartCount = document.getElementById('cartCount');
        const cartTotal = document.getElementById('cartTotal');

        // Clear current items
        cartItems.innerHTML = '';
        let total = 0;

        if (cart.length === 0) {
            cartItems.innerHTML = '<p class="text-center text-muted">Your cart is empty</p>';
            return;
        }

        // Add items to display
        cart.forEach((item, index) => {
            total += item.total;
            const itemHTML = `
        <div class="cart-item">
            <div class="item-details">
                <span class="item-name">${item.name}</span>
                <div class="item-controls">
                    <button class="btn btn-sm btn-secondary" onclick="updateQuantity(${index}, -1)">-</button>
                    <span class="quantity">${item.quantity}</span>
                    <button class="btn btn-sm btn-secondary" onclick="updateQuantity(${index}, 1)">+</button>
                </div>
            </div>
            <div class="item-price">₹${item.total}</div>
            <button class="btn btn-danger btn-sm" onclick="removeItem(${index})">×</button>
        </div>
    `;
            cartItems.insertAdjacentHTML('beforeend', itemHTML);
        });

        // Update totals
        cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartTotal.textContent = total;

        document.getElementById('mobileCartCount').textContent = cartCount.textContent;
    }

    function updateQuantity(index, change) {
        let item = cart[index];
        let newQuantity = item.quantity + change;

        // Enforce max limits on quantity updates
        if (item.type === "ebook" && newQuantity > 1) {
            alert("Only 1 eBook can be purchased.");
            return;
        }
        if (item.type === "intlBook" && newQuantity > 2) {
            alert("Maximum 2 copies allowed for international books.");
            return;
        }
        if (item.type === "domesticBook" && newQuantity > 5) {
            alert("Maximum 5 copies allowed for domestic books.");
            return;
        }

        if (newQuantity < 1) {
            cart.splice(index, 1);
        } else {
            item.quantity = newQuantity;
            item.total = item.quantity * item.price;
        }

        updateCartDisplay();
        saveCartToStorage();
    }

    function removeItem(index) {
        cart.splice(index, 1);
        updateCartDisplay();
        saveCartToStorage();
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
            alert('Your cart is empty!');
            return;
        }
        alert('Proceeding to checkout...');
    }

    // Initialize cart on page load
    document.addEventListener('DOMContentLoaded', updateCartDisplay);

</script>
