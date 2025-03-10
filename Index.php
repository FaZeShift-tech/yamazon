<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamazon - Online Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f3f3f3;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #232f3e !important;
        }
        .navbar-brand {
            color: #ff9900 !important;
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
            background-color: #ff9900;
            border: none;
        }
        .carousel {
            margin-top: 20px; /* Adjusted margin to avoid overlapping */
        }
        .carousel-item {
            height: 400px;
            background-size: cover;
            background-position: center;
        }
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hero-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            text-align: center;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin: 20px 0;
            color: #232f3e;
        }
        .category-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .category-card:hover {
            transform: scale(1.05);
        }
        .category-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .category-card h3 {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .deals-section, .favorites-section {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .footer {
            background-color: #232f3e;
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: #ff9900;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer h5 {
            color: #ff9900;
            margin-bottom: 15px;
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff9900;
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
            background-color: #e68a00;
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

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/imgs/comp.jpg" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="assets/imgs/shoe.jpg" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="assets/imgs/book.jpg" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Main Content -->
<div class="container mt-4">
    <!-- Featured Categories -->
    <div class="row">
        <div class="col-12">
            <h2 class="section-title">Shop by Category</h2>
        </div>
        <div class="col-md-3">
            <div class="category-card">
                <img src="assets/imgs/colo.png" alt="Electronics">
                <h3>Electronics</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="category-card">
                <img src="assets/imgs/fashion.jpeg" alt="Fashion">
                <h3>Fashion</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="category-card">
                <img src="assets/imgs/chair.jpg" alt="Home & Kitchen">
                <h3>Home & Kitchen</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="category-card">
                <img src="assets/imgs/frog.png" alt="Books">
                <h3>Books</h3>
            </div>
        </div>
    </div>

    <!-- Deals of the Day -->
    <div class="deals-section">
        <h2 class="section-title">Deals of the Day</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/strix.jpg" alt="Deal 1">
                    <h3>Up to 50% Off</h3>
                    <p>Explore amazing deals on selected items.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/deal.jpg" alt="Deal 2">
                    <h3>Limited Time Offer</h3>
                    <p>Grab these deals before they're gone.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/foot.jpg" alt="Deal 3">
                    <h3>Flash Sale</h3>
                    <p>Hurry, these deals won't last long!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Favorites -->
    <div class="favorites-section">
        <h2 class="section-title">Customer Favorites</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/clothes.jpg" alt="Favorite 1">
                    <h3>Top Rated</h3>
                    <p>Products loved by our customers.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/rolex.jpg" alt="Favorite 2">
                    <h3>Best Sellers</h3>
                    <p>Shop the most popular items.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="assets/imgs/adidas.jpg" alt="Favorite 3">
                    <h3>New Arrivals</h3>
                    <p>Discover the latest trends.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer mt-4">
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
            <p>&copy; 2025 Yamazon. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">↑</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
