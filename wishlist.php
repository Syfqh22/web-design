<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - CarryCo</title>
    <link rel="stylesheet" href="WL.css">
</head>
<body>

    <!-- Centered Clickable Logo -->
    <header class="centered-logo">
        <a href="homepage.html">
            <img src="homepage/logo.png" alt="CarryCo Logo">
        </a>
    </header>

    <!-- Wishlist Display Section -->
    <section class="wishlist-display">
        <h1>Your Wishlist</h1>
        
        <div class="wishlist-grid">
            <div class="wishlist-item" onclick="showWishlistDetails('Wishlist Product A', 'Description for Product A', '$99.99')">
                <img src="product/sp.jpeg" alt="Wishlist Product A" class="wishlist-primary-image">
                <img src="product/sp1.jpeg" alt="Wishlist Product A Hover" class="wishlist-hover-image">
                <div class="wishlist-name">Wishlist Product A</div>
            </div>
            <!-- Add more items dynamically as needed -->
        </div>
    </section>

    <!-- Wishlist Detail Overlay -->
    <div id="wishlist-overlay" class="wishlist-overlay">
        <div class="wishlist-overlay-content">
            <span class="close-button" onclick="closeWishlistDetails()">×</span>
            <h2 id="wishlist-overlay-name"></h2>
            <p id="wishlist-overlay-description"></p>
            <p id="wishlist-overlay-price"></p>
            <button onclick="addToCart()">Add to Cart</button>
            <button onclick="removeFromWishlist()">Remove from Wishlist</button>
        </div>
    </div>

    <script>
        function showWishlistDetails(name, description, price) {
            document.getElementById('wishlist-overlay-name').textContent = name;
            document.getElementById('wishlist-overlay-description').textContent = description;
            document.getElementById('wishlist-overlay-price').textContent = price;
            document.getElementById('wishlist-overlay').style.display = 'flex';
        }

        function closeWishlistDetails() {
            document.getElementById('wishlist-overlay').style.display = 'none';
        }

        function addToCart() {
            alert("Item added to cart!");
        }

        function removeFromWishlist() {
            alert("Item removed from wishlist!");
        }
    </script>
</body>
</html>
