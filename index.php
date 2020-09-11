<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QWERTY E-Commerce Website</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
        <a class="navbar-brand text-white bg-dark pl-3 pr-3" href="index.php">QWERTY E-Commerce Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white bg-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Shirts</a>
                <a class="dropdown-item" href="#">Pants</a>
                <a class="dropdown-item" href="#">Shoes</a>
                <a class="dropdown-item" href="#">Accessories</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Inserting Images -->
    <div id="background-image">
        <div id="image-1"></div>
        <div id="image-2"></div>   
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center">Featured Products</h2>
        <div class="row">
            <div class="col-md-3">
                <h4>Levis Jeans</h4>
                <img src="images/jeans.png" alt="Levis Jeans" id="images" />
                <p class="list-price text-danger">List Price: <s>€24.99</s></p>
                <p class="price">Our Price: €19.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Adidas Football</h4>
                <img src="images/football.png" alt="Adidas Football" id="images" />
                <p class="list-price text-danger">List Price: <s>€39.99</s></p>
                <p class="price">Our Price: €29.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Gucci Watch</h4>
                <img src="images/watch.png" alt="Gucci Watch" id="images" />
                <p class="list-price text-danger">List Price: <s>€50.99</s></p>
                <p class="price">Our Price: €37.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Polo Shirt</h4>
                <img src="images/shirt.png" alt="Polo Shirt" id="images" />
                <p class="list-price text-danger">List Price: <s>€62.99</s></p>
                <p class="price">Our Price: €54.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Nike Joggers</h4>
                <img src="images/joggers.png" alt="Nike Joggers" id="images" />
                <p class="list-price text-danger">List Price: <s>€24.99</s></p>
                <p class="price">Our Price: €19.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Purse</h4>
                <img src="images/purse.png" alt="Purse" id="images" />
                <p class="list-price text-danger">List Price: <s>€66.99</s></p>
                <p class="price">Our Price: €61.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Hoodie</h4>
                <img src="images/hoodie.png" alt="Hoodie" id="images" />
                <p class="list-price text-danger">List Price: <s>€27.99</s></p>
                <p class="price">Our Price: €19.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
            </div>

            <div class="col-md-3">
                <h4>Head Band</h4>
                <img src="images/head_band.png" alt="Head Band" id="images" />
                <p class="list-price text-danger">List Price: <s>€9.99</s></p>
                <p class="price">Our Price: €5.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
            </div>
        </div>
        <br>
        <footer class="text-center" id="footer">&copy; Copyright 2020-2021 QWERTY E-Commerce Website</footer>
    </div>

    <!-- details modal -->

    <?php include 'php/details-modal-Jeans.php';
          include 'php/details-modal-Football.php';
          include 'php/details-modal-Watch.php';
          include 'php/details-modal-HeadBand.php';
          include 'php/details-modal-Hoodie.php';
          include 'php/details-modal-Purse.php';
          include 'php/details-modal-Joggers.php';
          include 'php/details-modal-PoloShirt.php';
    ?>
    <!-- end of details modal -->





</body>
</html>