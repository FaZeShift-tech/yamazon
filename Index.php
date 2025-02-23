<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamazon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
        <body>
            
        <?php
        function renderNavBar($activePage) {
            $pages = [
                'Registration' => 'orders.php',
                'Login' => 'deals.php',
                'Home' => 'index.php',
                'Welcome' => 'index.php',
                'Shop' => 'shop.php',
                'Contact' => 'cart.php'
            ];
            echo '<nav class="navbar navbar-expand-lg navbar-dark">
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
                            <ul class="navbar-nav ms-auto">';
                                foreach ($pages as $name => $url) {
                                    $active = ($activePage === $name) ? 'active' : '';
                                    echo "<li class='nav-item'><a class='nav-link $active' href='$url'>$name</a></li>";
                                }
            echo '          </ul>
                        </div>
                    </div>
                </nav>';
        }
        ?>

        <?php renderNavBar('Home'); ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




            
        </body>
</html>