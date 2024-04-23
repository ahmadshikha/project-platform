document.addEventListener('DOMContentLoaded', () => {
    // Your code here

    const cartIcon = document.querySelector('.cart-icon');
    const cartDropdown = document.querySelector('.cart-dropdown');
    const cartItems = document.querySelector('.cart-items');
    const totalAmount = document.querySelector('.total-amount');
    const checkoutButton = document.querySelector('.checkout-button');

    let cartCount = 0;
    let cartTotal = 0;
    let cart = [];

    cartIcon.addEventListener('click', () => {
        cartDropdown.classList.toggle('show');
    });

    function addToCart(item) {
        // Check if item is already in cart
        for (let i = 0; i < cart.length; i++) {
            if (cart[i].name === item.name) {
                cart[i].quantity++;
                updateCart();
                return;
            }
        }

        // Add new item to cart
        cart.push({ ...item, quantity: 1 });
        updateCart();
    }

    function updateCart() {
        // Clear cart items
        cartItems.innerHTML = '';

        // Calculate total price and update cart total
        cartTotal = 0;
        for (let i = 0; i < cart.length; i++) {
            const { name, price, quantity } = cart[i];
            cartTotal += price * quantity;

            const cartItem = document.createElement('li');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
          <span class="cart-item-name">${name}</span>
          <span class="cart-item-price">$${price.toFixed(2)}</span>
          <span class="cart-item-quantity">${quantity}</span>
          <button class="remove-button">Remove</button>
        `;
            cartItems.appendChild(cartItem);

            const removeButton = cartItem.querySelector('.remove-button');
            removeButton.addEventListener('click', () => {
                const itemIndex = cart.findIndex(item => item.name === name);
                cart.splice(itemIndex, 1);
                updateCart();
            });
        }
        totalAmount.textContent = cartTotal.toFixed(2);
        cartCount = cart.reduce((total, item) => total + item.quantity, 0);
        cartIcon.querySelector('.cart-count').textContent = cartCount;
    }
 
    // Example usage
    const item1 = { name: 'Product 1', price: 10, image: 'https://via.placeholder.com/50x50' };
    const item2 = { name: 'Product 2', price: 20, image: 'https://via.placeholder.com/50x50' };
    addToCart(item1);
    addToCart(item2);

    const products = document.querySelectorAll('.product');

    products.forEach(product => {
        const addToCartButton = product.querySelector('.add-to-cart');
        const name = addToCartButton.dataset.name;
        const price = parseFloat(addToCartButton.dataset.price);
        addToCartButton.addEventListener('click', () => {
            addToCart({ name, price });
        });
    });

    const purchaseButton = document.querySelector('.purchase-button');

    purchaseButton.addEventListener('click', () => {
        if (cart.length === 0) {
            alert('Your cart is empty.');
            return;
        }

        const itemList = cart.map(item => `${item.name} ($${item.price.toFixed(2)}) x ${item.quantity}`).join('\n');
        const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0);
        const invoiceText = `Items:\n${itemList}\nTotal Price: $${totalPrice.toFixed(2)}`;

        alert(invoiceText);

        // Clear cart and update UI
        cart = [];
        updateCart();
    });

});