<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   CarryCouture
  </title>
  <link href="https://cdn.jsdelivr.net/gh/ryanve/hp.css@1.0.0/dist/hp.min.css" rel="stylesheet"/>
  <link href="hp.css" rel="stylesheet"/>
 </head>
 <body>
  <nav class="navbar" id="navbar">
   <div class="nav-left">
    <a href="homepage.php">
     <img alt="Logo" src="homepage/logo.png"/>
    </a>
   </div>
   <div class="nav-middle">
    <ul>
     <li class="dropdown">
      <a href="#">
       Product
      </a>
      <div class="dropdown-content">
       <a href="product1.html">
        Handbag
       </a>
       <a href="product2.html">
        Backpack
       </a>
       <a href="product3.html">
        Tote Bag
       </a>
       <a href="product4.html">
        Clutch Purse
       </a>
       <a href="product5.html">
        Duffle Bag
       </a>
       <a href="product6.html">
        Crossbody Bag
       </a>
      </div>
     </li>
     <li>
      <a href="wishlist.php">
       Wishlist
      </a>
     </li>
     <li>
      <a href="purchase.html">
       My Purchases
      </a>
     </li>
    </ul>
   </div>
   <div class="nav-right">
    <?php
    session_start();
    if (isset($_SESSION['username'])): ?>
    <!-- Show User Greeting -->
    <span class="welcome-message">
     Welcome,
     <?php echo htmlspecialchars($_SESSION['username']); ?>
     !
    </span>
    <?php endif; ?>
    <button class="cart-button" onclick="toggleCart()">
     Cart
    </button>
    <?php if (isset($_SESSION['username'])): ?>
    <!-- Show Logout Button -->
    <form action="logout.php" method="POST" style="display: inline;">
     <button class="btn" type="submit">
      Logout
     </button>
    </form>
    <?php else: ?>
    <!-- Show Login Button -->
    <button onclick="location.href='login.html'">
     Login
    </button>
    <?php endif; ?>
   </div>
  </nav>
  <!-- Banner Section -->
  <div class="banner-container">
   <div class="banner-overlay">
    <div class="banner">
     <img alt="Promotion 1" src="homepage/promo1.jpg"/>
     <img alt="Promotion 2" src="homepage/promo2.jpg"/>
     <img alt="Promotion 3" src="homepage/promo3.jpg"/>
    </div>
    <div class="indicator">
     <div class="dot-timer">
      <span class="dot">
       •
      </span>
     </div>
     <span class="text">
      Mother's Day!
     </span>
    </div>
   </div>
  </div>
  <!-- Scrolling Section (now below the banner) -->
  <section class="scrolling-section">
   <div class="centered-text">
    Our Exclusive Collection
   </div>
   <!-- Moving Background Text -->
   <div class="moving-background-text">
    Limited Edition - Exclusive Designs - High Quality
   </div>
   <!-- Widget Image -->
   <div class="widget-container">
    <img alt="Widget" class="scrolling-widget" src="homepage/widget.jpeg"/>
   </div>
   <!-- Additional Text Below Widget -->
   <div class="below-widget-text">
    <p>
     Discover the latest trends and exclusive pieces in our curated collection.
    </p>
    <p>
     Browse through top-quality designs tailored for you.
    </p>
   </div>
  </section>
  <!-- Top Brands Section -->
  <section class="top-brands-section">
   <div class="top-brands-title">
    Top Brands
   </div>
   <!-- Moving Brand Logos -->
   <div class="moving-brands">
    <!-- Brand Logos -->
    <img alt="Brand 1" class="brand-logo" src="homepage/brands/logo1.png"/>
    <img alt="Brand 2" class="brand-logo" src="homepage/brands/logo2.png"/>
    <img alt="Brand 3" class="brand-logo" src="homepage/brands/logo3.png"/>
    <img alt="Brand 4" class="brand-logo" src="homepage/brands/logo4.png"/>
    <img alt="Brand 5" class="brand-logo" src="homepage/brands/logo5.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo6.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo7.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo8.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo9.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo10.png"/>
    <!-- Duplicate Set for Seamless Scroll -->
    <img alt="Brand 1" class="brand-logo" src="homepage/brands/logo1.png"/>
    <img alt="Brand 2" class="brand-logo" src="homepage/brands/logo2.png"/>
    <img alt="Brand 3" class="brand-logo" src="homepage/brands/logo3.png"/>
    <img alt="Brand 4" class="brand-logo" src="homepage/brands/logo4.png"/>
    <img alt="Brand 5" class="brand-logo" src="homepage/brands/logo5.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo6.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo7.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo8.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo9.png"/>
    <img alt="Brand 6" class="brand-logo" src="homepage/brands/logo10.png"/>
   </div>
  </section>
  <!-- Footer Section -->
  <footer class="footer">
   <div class="footer-content" id="footerContent">
    <h2 class="footer-title">
     Check Us Out
    </h2>
    <div class="footer-line">
    </div>
    <div class="footer-links">
     <a href="about.html">
      About Us
     </a>
     <a href="javascript:void(0);" onclick="openContactDrawer()">
      Contact Us
     </a>
     <a href="faq.html">
      FAQ
     </a>
    </div>
    <p class="footer-copyright">
     © 2024 CarryCo. Project by syfqh
    </p>
   </div>
  </footer>
  <!-- Cart Modal -->
  <div class="cart-modal" id="cartModal">
   <div class="cart-modal-content">
    <span class="close" onclick="toggleCart()">
     ×
    </span>
    <h2>
     Your Cart
    </h2>
    <p>
     Your selected items will appear here.
    </p>
    <!-- Cart items can be added here in future with backend functionality -->
    <button class="checkout-button" onclick="location.href='payment.html'">
     Proceed to Checkout
    </button>
   </div>
  </div>
  <div class="contact-drawer" id="contactDrawer">
   <div class="contact-drawer-content">
    <span class="close" onclick="closeContactDrawer()">
     ×
    </span>
    <h2>
     Contact Us
    </h2>
    <form>
     <label for="name">
      Name:
     </label>
     <input id="name" name="name" required="" type="text"/>
     <label for="email">
      Email:
     </label>
     <input id="email" name="email" required="" type="email"/>
     <label for="message">
      Message:
     </label>
     <textarea id="message" name="message" required="" rows="4"></textarea>
     <button type="submit">
      Send Message
     </button>
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
        }
		    document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const showCart = urlParams.get("showCart");

            if (showCart === "true") {
                toggleCart(); // Open the cart modal if the parameter is present
            }
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
