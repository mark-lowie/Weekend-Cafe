
window.addEventListener('scroll', handleScroll);

function handleScroll() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 200;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }x``
    }
}

function toggleMenu() {
    var menu = document.getElementById("navDemo");
    menu.classList.toggle("w3-show");
}

// Array to hold cart items
let cart = [];

function addToCart(itemElement, itemId) {
    let itemButton = itemElement;
    if (!itemButton) {
        console.error('Button element not found for item ID:', itemId);
        return;
    }

    let itemParentElement = itemButton.parentElement;
    if (!itemParentElement) {
        console.error('Parent element not found for item ID:', itemId);
        return;
    }

    let itemNameElement = itemParentElement.querySelector('h4');
    let itemPriceElement = itemParentElement.querySelector('p');
    if (!itemNameElement || !itemPriceElement) {
        console.error('Name or price element not found for item ID:', itemId);
        return;
    }


    let itemName = itemNameElement.innerText.trim(); 
    let itemPriceText = itemPriceElement.innerText.trim().replace('₱', ''); 
    let itemPrice = parseFloat(itemPriceText);
    
    if (isNaN(itemPrice)) {
        console.error('Failed to parse item price:', itemPriceText);
        return;
    }

    let item = {
        id: itemId,
        name: itemName,
        price: itemPrice,
        image: itemParentElement.previousElementSibling.src
    };

    cart.push(item);
    updateCartCount();
}


// Function to update the cart count display
function updateCartCount() {
    var cartCount = cart.length;
    document.getElementById('cart-count').innerText = cartCount;
}

function updateCart() {
    document.getElementById('cart-count').innerText = cart.length;
    displayCartItems();
}

function displayCartItems() {
    let cartItemsDiv = document.getElementById("cart-items");
    cartItemsDiv.innerHTML = "";
    let total = 0;
    cart.forEach((item, index) => {
        total += item.price;
        cartItemsDiv.innerHTML += `
            <div>
                <img src="${item.image}" alt="${item.name}" style="width:100px; height:auto; vertical-align:middle; margin-right:10px; margin-bottom: 1rem">
                ${item.name} - ₱${item.price.toFixed(2)}
                <button onclick="removeFromCart(${index})" style="margin-left:1rem">Remove</button>
            </div>`;
    });
    document.getElementById("cart-total").innerText = `Total: ₱${total.toFixed(2)}`;
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

function checkout() {
    fetch('widgets/checkout.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(cart)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Checkout successful!');
            cart = [];
            updateCart();
            toggleCart();
        } else {
            alert('Checkout failed: ' + (data.error || 'Please try again.'));
        }
    })
    .catch(error => {
        console.error('Error during checkout:', error);
        alert('Checkout failed: An unexpected error occurred.');
    });
}


function toggleCart() {
    var modal = document.getElementById("cart-modal");
    var computedStyle = window.getComputedStyle(modal);

    if (computedStyle.display === "none" || computedStyle.display === "hidden") {
        modal.style.display = "block";
        displayCartItems(); 
    } else {
        modal.style.display = "none";
    }
}


function cancelOrder() {
    cart = [];
    updateCart();
    toggleCart();
}


