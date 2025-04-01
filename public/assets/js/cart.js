const cart = [];
const maxItems = 10;

function addToCart(language, book, price, quantity) {
    const totalItems = cart.reduce((acc, item) => acc + item.quantity, 0);

    if (totalItems + quantity > maxItems) {
        alert(`You can't add more than ${maxItems} items.`);
        return;
    }

    const existing = cart.find(item => item.language === language && item.book === book);
    
    if (existing) {
        existing.quantity += quantity;
    } else {
        cart.push({ language, book, price, quantity });
    }

    updateCart();
}

function updateCart() {
    const cartItemsEl = document.getElementById('cart-items');
    const cartTotalEl = document.getElementById('cart-total');
    
    cartItemsEl.innerHTML = '';
    
    let total = 0;
    
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.language} - ${item.book} (x${item.quantity}) - ₹${item.price * item.quantity}`;
        cartItemsEl.appendChild(li);
        
        total += item.price * item.quantity;
    });

    cartTotalEl.textContent = total;
}

function clearCart() {
    cart.length = 0;
    updateCart();
}
