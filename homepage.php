<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarryCouture</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ryanve/hp.css@1.0.0/dist/hp.min.css">
    <link rel="stylesheet" href="HP.css"> 
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="nav-left">
			<a href = "homepage.php">
            <img src="homepage/logo.png" alt="Logo"> 
			</a>
        </div>
        <div class="nav-middle">
            <ul>
                <li class="dropdown">
                    <a href="#">Product</a>
                    <div class="dropdown-content">
                        <a href="product1.html">Handbag</a>
                        <a href="product2.html">Backpack</a>
                        <a href="product3.html">Tote Bag</a>
                        <a href="product4.html">Clutch Purse</a>
                        <a href="product5.html">Duffle Bag</a>
                        <a href="product6.html">Crossbody Bag</a>
                    </div>
                </li>
                <li><a href="wishlist.php">Wishlist</a></li> 
				<li><a href="purchase.html">My Purchases</a></li>
            </ul>
        </div>
        <div class="nav-right">
    <?php
    session_start();
    if (isset($_SESSION['username'])): ?>
        <!-- Show User Greeting -->
        <span class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
    <?php endif; ?>
    <button class="cart-button" onclick="toggleCart()">Cart</button>
    <?php if (isset($_SESSION['username'])): ?>
        <!-- Show Logout Button -->
        <form action="logout.php" method="POST" style="display: inline;">
            <button type="submit" class="btn">Logout</button>
        </form>
    <?php else: ?>
        <!-- Show Login Button -->
        <button onclick="location.href='login.html'">Login</button>
    <?php endif; ?>
</div>
    </nav>

    <!-- Banner Section -->
    <div class="banner-container">
        <div class="banner-overlay">
            <div class="banner">
                <img src="homepage/promo1.jpg" alt="Promotion 1">
                <img src="homepage/promo2.jpg" alt="Promotion 2">
                <img src="homepage/promo3.jpg" alt="Promotion 3">
            </div>
            <div class="indicator">
                <div class="dot-timer">
                    <span class="dot">•</span>
                </div>
                <span class="text">Mother's Day!</span>
            </div>
        </div>
    </div>

    <!-- Scrolling Section -->
    <section class="scrolling-section">
        <div class="centered-text">Our Exclusive Collection</div>
        
        <!-- Moving Background Text -->
        <div class="moving-background-text">Limited Edition - Exclusive Designs - High Quality</div>
        
        <!-- Widget Image -->
        <div class="widget-container">
            <img src="homepage/widget.jpeg" alt="Widget" class="scrolling-widget">
        </div>
        
        <!-- Additional Text Below Widget -->
        <div class="below-widget-text">
            <p>Discover the latest trends and exclusive pieces in our curated collection.</p>
            <p>Browse through top-quality designs tailored for you.</p>
        </div>
    </section>
	
	<!-- Top Brands Section -->
<section class="top-brands-section">
    <div class="top-brands-title">Top Brands</div>

    <!-- Moving Brand Logos -->
    <div class="moving-brands">
        <!-- Brand Logos -->
        <img src="homepage/brands/logo1.png" alt="Brand 1" class="brand-logo">
        <img src="homepage/brands/logo2.png" alt="Brand 2" class="brand-logo">
        <img src="homepage/brands/logo3.png" alt="Brand 3" class="brand-logo">
        <img src="homepage/brands/logo4.png" alt="Brand 4" class="brand-logo">
        <img src="homepage/brands/logo5.png" alt="Brand 5" class="brand-logo">
        <img src="homepage/brands/logo6.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo7.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo8.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo9.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo10.png" alt="Brand 6" class="brand-logo">
        <!-- Loop -->
        <img src="homepage/brands/logo1.png" alt="Brand 1" class="brand-logo">
        <img src="homepage/brands/logo2.png" alt="Brand 2" class="brand-logo">
        <img src="homepage/brands/logo3.png" alt="Brand 3" class="brand-logo">
        <img src="homepage/brands/logo4.png" alt="Brand 4" class="brand-logo">
        <img src="homepage/brands/logo5.png" alt="Brand 5" class="brand-logo">
        <img src="homepage/brands/logo6.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo7.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo8.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo9.png" alt="Brand 6" class="brand-logo">
		<img src="homepage/brands/logo10.png" alt="Brand 6" class="brand-logo">
    </div>
</section>

	<!-- Footer Section -->
	<footer class="footer">
    	<div class="footer-content" id="footerContent">
        	<h2 class="footer-title">Check Us Out</h2>
        	<div class="footer-line"></div>
        	<div class="footer-links">
            	<a href="about.html">About Us</a>
            	<a href="javascript:void(0);" onclick="openContactDrawer()">Contact Us</a>
            	<a href="faq.html">FAQ</a>
        	</div>
        	<p class="footer-copyright">© 2024 CarryCo. Project by syfqh</p>
    	</div>
	</footer>
	
    <!-- Cart Modal -->
    <div id="cartModal" class="cart-modal">
        <div class="cart-modal-content">
            <span class="close" onclick="toggleCart()">&times;</span>
            <h2>Your Cart</h2>
            <div id="cartItems" class="cart-items">
            <!-- Cart items can be added here in future with backend functionality -->
            </div>
            <button class="checkout-button" onClick="location.href='payment.html'">Proceed to Checkout</button>
        </div>
    </div>

    <div id="contactDrawer" class="contact-drawer">	
        <div class="contact-drawer-content">
            <span class="close" onclick="closeContactDrawer()">&times;</span>
            <h2>Contact Us</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
	
    <!-- Scripts -->
    <script>
        function openContactDrawer() {
            document.getElementById("contactDrawer").style.width = "300px";
        }

        function closeContactDrawer() {
            document.getElementById("contactDrawer").style.width = "0";
        }
    </script>

    <script>
        function toggleCart() {
            const cartModal = document.getElementById("cartModal");
            cartModal.style.display = cartModal.style.display === "flex" ? "none" : "flex";
            fetchCartItems();
        }
		    document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const showCart = urlParams.get("showCart");

            if (showCart === "true") {
                toggleCart(); // Open the cart modal if the parameter is present
            }
        });

                // Function to fetch cart items from the server
                function fetchCartItems() {
            fetch('/cart') // Backend endpoint to fetch cart data
                .then(response => response.json())
                .then(cartItems => {
                    const cartItemsContainer = document.getElementById('cartItems');
                    cartItemsContainer.innerHTML = ''; // Clear previous items
                    if (cartItems.length === 0) {
                        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
                    } else {
                        cartItems.forEach(item => {
                            const cartItemDiv = document.createElement('div');
                            cartItemDiv.classList.add('cart-item');
                            cartItemDiv.innerHTML = `
                                <span>${item.product_name} (${item.quantity})</span>
                                <span>$${item.price}</span>
                            `;
                            cartItemsContainer.appendChild(cartItemDiv);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error fetching cart items:', error);
                    const cartItemsContainer = document.getElementById('cartItems');
                    cartItemsContainer.innerHTML = '<p>Failed to load cart items. Please try again later.</p>';
                });
    </script>
	
    <script>
        const banners = document.querySelector('.banner');
        const indicatorText = document.querySelector('.indicator .text');
        const texts = ["Mother's Day!", "Newest Addition", "♥Valentine's Deals♥"];
        let currentIndex = 0;

        function rotateBanner() {
            currentIndex = (currentIndex + 1) % 3;
            banners.style.transform = `translateX(-${currentIndex * 33.33}%)`;
            indicatorText.textContent = texts[currentIndex];
        }

        setInterval(rotateBanner, 5000);

        // Update the '--scroll-y' CSS variable for the parallax effect on the widget image
        document.addEventListener('scroll', () => {
            let scrollValue = window.scrollY;
            let maxScroll = 500;  // Set the maximum scroll value that you want for scaling
            
            // Calculate parallax effect for the translateY and limit the zoom scale
            let parallaxValue = scrollValue / 10;
            let scaleValue = Math.min(1 + (scrollValue / 1000), 1.2);  // Limit the scale to 1.2

            // Apply the transform for both parallax and scaling
            document.querySelector('.scrolling-widget').style.transform = `translateY(${parallaxValue}px) scale(${scaleValue})`;

            // Handle navbar visibility
            const navbar = document.getElementById('navbar');
            if (scrollValue > 100) {  // When scroll is beyond a certain point
                navbar.classList.add('hide-navbar');  // Hide navbar when scrolling down
            } else {
                navbar.classList.remove('hide-navbar');  // Show navbar at top
            }
        });

        let lastScrollTop = 0;  // Keep track of last scroll position
        document.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;
            const navbar = document.getElementById('navbar');

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                navbar.classList.add('hide-navbar');
            } else {
                // Scrolling up
                navbar.classList.remove('hide-navbar');
            }
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Prevent negative scroll values
        });
    </script>
	
	<script>
    // Function to detect if footer is in viewport
    function isFooterInView() {
        const footerContent = document.getElementById('footerContent');
        const rect = footerContent.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

        if (isVisible) {
            footerContent.style.opacity = '1';
            footerContent.style.transform = 'translateY(0)';
        } else {
            footerContent.style.opacity = '0';
            footerContent.style.transform = 'translateY(20px)';
        }
    }

    // Event listeners for scroll and resize
    window.addEventListener('scroll', isFooterInView);
    window.addEventListener('resize', isFooterInView);
	</script>

</body>
</html>
