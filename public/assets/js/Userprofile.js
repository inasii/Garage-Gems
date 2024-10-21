document.addEventListener('DOMContentLoaded', () => {
    const userType = 'customer'; // Change this value to 'seller' or 'customer' to simulate different user types

    const myProducts = [
        { image: 'images/brown cabinet.jpg', title: 'Brown Cabinet', price: 'RP 500K' },
        { image: 'images/fan.jpg', title: 'Fan', price: 'RP 150K' },
    ];

    const orderHistory = [
        { image: 'images/navy sofa.jpg', title: 'Navy Sofa', price: 'RP 1200K', status: 'Delivered' },
        { image: 'images/white pot.jpg', title: 'White Pot', price: 'RP 200K', status: 'Delivered' },
    ];

    const myOrders = [
        { image: 'images/leather sofa.jpg', title: 'leather sofa', price: 'RP 3000K', status: 'Shipped' },
        { image: 'images/bathub.jpg', title: 'Bathub', price: 'RP 2500K', status: 'Processing' },
        // Add more current orders as needed
    ];

    const myProductList = document.getElementById('myProductList');
    const orderHistoryList = document.getElementById('orderHistoryList');
    const myOrderList = document.getElementById('myOrderList');

    function renderItems(items, container) {
        container.innerHTML = '';
        items.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.className = 'item';

            itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.title}">
                <div class="item-info">
                    <div class="item-title">${item.title}</div>
                    <div class="item-price">${item.price}</div>
                </div>
                ${item.status ? `<div class="item-status">${item.status}</div>` : ''}
            `;

            container.appendChild(itemElement);
        });
    }

    renderItems(myProducts, myProductList);
    renderItems(orderHistory, orderHistoryList);
    renderItems(myOrders, myOrderList);
    if (userType === 'seller') {
        document.querySelector('[href="#account-notifications"]').style.display = 'block'; // Show "My Product" for sellers
        document.querySelector('[href="#account-social-links"]').style.display = 'block'; // Show "My Order" for sellers
        document.querySelector('[href="#account-connections"]').style.display = 'block'; // Show "Order History" for sellers
    } else {
        document.querySelector('[href="#account-notifications"]').style.display = 'none'; // Hide "My Product" for customers
        document.querySelector('[href="#account-social-links"]').style.display = 'block'; // Show "My Order" for customers
        document.querySelector('[href="#account-connections"]').style.display = 'block'; // Show "Order History" for customers
    }

    if (userType === 'seller'){
        document.querySelector('[href="#account-seller"]').style.display = 'none'; // Hide "Become A Seller" for sellers
    } else {
            document.querySelector('[href="#account-seller"]').style.display = 'block'; // Show "Become A Seller" for customers
            }
});
