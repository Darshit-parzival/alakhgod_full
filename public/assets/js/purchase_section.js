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
    const hasDomestic = cart.some(item => item.type === 'domesticBook');
    const hasIntl = cart.some(item => item.type === 'intlBook');

    const lang = '{{ $language }}'; // or pass it explicitly to this function

    if (hasDomestic && !hasIntl) {
        setRowDisabled(`${lang}_intlRow`, true);
        setRowDisabled(`${lang}_domesticRow`, false);
    } else if (hasIntl && !hasDomestic) {
        setRowDisabled(`${lang}_domesticRow`, true);
        setRowDisabled(`${lang}_intlRow`, false);
    } else {
        setRowDisabled(`${lang}_domesticRow`, false);
        setRowDisabled(`${lang}_intlRow`, false);
    }
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

    // Check if the cart contains only eBooks
    const onlyEbooks = cart.every(item => item.type === "ebook");

    // Get the container for extra fields
    const extraFieldsContainer = document.getElementById("extraFieldsContainer");

    if (onlyEbooks) {
        // Hide extra fields and remove their 'required' attribute
        extraFieldsContainer.classList.add("d-none");
        // Optionally, loop through inputs in extraFieldsContainer to remove 'required'
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
    const modal = new bootstrap.Modal(document.getElementById("checkoutModal"));
    modal.show();
}

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', updateCartDisplay);

document.addEventListener("DOMContentLoaded", function () {
    // Fetch countries on load
    fetch("https://countriesnow.space/api/v0.1/countries/positions")
        .then(res => res.json())
        .then(data => {
            const countrySelect = document.getElementById("countrySelect");
            countrySelect.innerHTML = '<option value="">Select Country</option>';
            data.data.forEach(country => {
                countrySelect.innerHTML += `<option value="${country.name}">${country.name}</option>`;
            });
        });

    // Fetch states on country change
    document.getElementById("countrySelect").addEventListener("change", function () {
        const selectedCountry = this.value;
        const stateSelect = document.getElementById("stateSelect");
        stateSelect.innerHTML = '<option value="">Loading...</option>';

        fetch("https://countriesnow.space/api/v0.1/countries/states", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ country: selectedCountry })
        })
            .then(res => res.json())
            .then(data => {
                stateSelect.innerHTML = '<option value="">Select State</option>';
                if (data.data && data.data.states.length > 0) {
                    data.data.states.forEach(state => {
                        stateSelect.innerHTML += `<option value="${state.name}">${state.name}</option>`;
                    });
                } else {
                    stateSelect.innerHTML = '<option value="">No States Found</option>';
                }
            });
    });
});
