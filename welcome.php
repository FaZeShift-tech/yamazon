<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Yamazon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb); /* Soft gradient background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .navbar {
            background-color: #232f3e !important; /* Navy blue */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            color: #ff9900 !important; /* Yamazon orange */
            font-weight: bold;
            font-size: 1.5rem;
        }
        .search-bar {
            width: 50%;
        }
        .search-input {
            border-radius: 5px 0 0 5px;
        }
        .btn-warning {
            border-radius: 0 5px 5px 0;
            background-color: #ff9900; /* Yamazon orange */
            border: none;
        }
        .section {
            height: 100vh; /* Each section takes up the full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            opacity: 0; /* Initially hidden */
            transform: translateY(50px); /* Slightly shifted down */
            transition: opacity 1s ease, transform 1s ease;
            position: relative;
            overflow: hidden;
        }
        .section.active {
            opacity: 1; /* Fully visible */
            transform: translateY(0); /* Move to original position */
        }
        .section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the section */
            z-index: -1; /* Places the image behind the content */
            opacity: 0.8; /* Slightly transparent */
        }
        .footer {
            background-color: #232f3e; /* Navy blue */
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .footer a {
            color: #ff9900; /* Yamazon orange */
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer h5 {
            color: #ff9900; /* Yamazon orange */
            margin-bottom: 15px;
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff9900; /* Yamazon orange */
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back-to-top:hover {
            background-color: #e68a00; /* Darker orange on hover */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Yamazon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex search-bar">
                <input class="form-control me-2 search-input" type="search" placeholder="Search products..." aria-label="Search">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Account</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Cart <i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Welcome Section -->
<div class="section welcome-section active">
    <img src="assets/imgs/cart.png" alt="">
    <h1>Welcome to Yamazon</h1>
    <p>Your one-stop destination for all your shopping needs. Discover a world of products, amazing deals, and exceptional service.</p>
</div>

<!-- Vision Section -->
<div class="section vision-section">
    <img src="assets/imgs/hands.jpg" alt="">
    <h2>Our Vision</h2>
    <p>To be the most customer-centric company in the world, where customers can find and discover anything they might want to buy online.</p>
</div>

<!-- Mission Section -->
<div class="section mission-section">
    <img src="assets/imgs/together.jpg" alt="">
    <h2>Our Mission</h2>
    <p>To empower businesses and individuals by providing a seamless, reliable, and innovative platform for online shopping.</p>
</div>

<!-- Slogan Section -->
<div class="section slogan-section">
    <img src="https://via.placeholder.com/1200x800" alt="">
    <h2>Our Slogan</h2>
    <p>"From A to Z, Yamazon has it all!"</p>
</div>

<!-- Why Choose Us Section -->
<div class="section why-choose-section">
    <img src="assets/imgs/choose.jpg" alt="">
    <h2>Why Choose Yamazon?</h2>
    <p>At Yamazon, we are committed to providing:</p>
    <ul>
        <li>Wide selection of products</li>
        <li>Competitive prices</li>
        <li>Fast and reliable delivery</li>
        <li>Exceptional customer service</li>
    </ul>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Get to Know Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Yamazon Science</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Make Money with Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Sell on Yamazon</a></li>
                    <li><a href="#">Sell under Yamazon Accelerator</a></li>
                    <li><a href="#">Become an Affiliate</a></li>
                    <li><a href="#">Advertise Your Products</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Yamazon Payment Products</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Yamazon Business Card</a></li>
                    <li><a href="#">Shop with Points</a></li>
                    <li><a href="#">Reload Your Balance</a></li>
                    <li><a href="#">Yamazon Currency Converter</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Let Us Help You</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Your Account</a></li>
                    <li><a href="#">Your Orders</a></li>
                    <li><a href="#">Shipping Rates & Policies</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2023 Yamazon. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">↑</button>

<script>
    // JavaScript to handle section transitions on scroll
    const sections = document.querySelectorAll('.section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, {
        threshold: 0.5, // Trigger when 50% of the section is visible
    });

    sections.forEach(section => {
        observer.observe(section);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
