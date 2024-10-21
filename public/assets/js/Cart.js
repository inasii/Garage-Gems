function addToCart(productId) {
    fetch(`/add-to-cart/${productId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    // .then(data => {
    //     if (data.success) {
    //         window.location.href = '/cart';
    //     } else {
    //         alert(data.message);
    //     }
    // })
    .catch(error => console.error('Error:', error));
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.remove').forEach(function (element) {
        element.addEventListener('click', function (e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');
            fetch(`/remove-from-cart/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});


function updateCartTotal() {
    let total = 0;
    document.querySelectorAll('.product-price').forEach(function (element) {
        total += parseFloat(element.textContent.replace('Rp ', '').replace('.', ''));
    });
    document.getElementById('totalB').textContent = 'Rp ' + total.toLocaleString('id-ID');
}

function promo() {
    let promoCode = document.getElementById('promoCode').value.trim();
    
    fetch(`/apply-promo`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ promoCode: promoCode })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            updateCartTotal(data.cartTotal);
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

function updateCartTotal(newTotal) {
    document.getElementById('totalA').textContent = 'Rp ' + newTotal;
    document.getElementById('totalB').textContent = 'Rp ' + newTotal;
}



function delElement(id) {
    fetch(`/remove-from-cart/${id}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload(); // Reload the page after successful removal
        } else {
            alert(data.message); // Display error message if removal fails
        }
    })
    .catch(error => console.error('Error:', error));
}

document.querySelectorAll('.remove').forEach(function (element) {
    element.addEventListener('click', function (e) {
        e.preventDefault();
        const id = this.getAttribute('data-id');
        fetch(`/remove-from-cart/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

function searchProducts() {
    let query = document.getElementById('searchInput').value.trim();
    
    if (query !== '') {
        window.location.href = `/search-results?query=${query}`;
    }
}