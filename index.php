<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?=<?php include 'css/cssversion.php'; ?>">
</head>

<body>
    <?php include_once 'views/header.php'; ?>
    <section class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <?php include_once 'views/footer.php'; ?>
    <script src="js/jquery-3.5.1.slim.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>