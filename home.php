<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - Explore the World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar" role="navigation">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars" aria-label="Toggle Menu" tabindex="0"></div>
    </header>

    <main>
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background: url(images/back.jpg) no-repeat; background-size: cover;">
                        <div class="content">
                            <span>Explore, Discover</span>
                            <h3>Travel around the world</h3>
                            <a href="package.php" class="btn">Discover more</a>
                        </div>
                    </div>
                    <!-- Add more slides here as needed -->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <section class="services">
            <h1 class="heading-title">Our Services</h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/hicke.jpg" alt="A scenic hike" loading="lazy">
                    <h3>Adventure</h3>
                </div>
                <!-- Add additional service boxes here -->
            </div>
        </section>

        <section class="about">
            <h3>Why Choose Us?</h3>
            <!-- Content here -->
        </section>

        <section class="home-packages">
            <h1 class="heading title">Our Packages</h1>
            <div class="box-container">
                <div class="box">
                    <div class="images">
                        <img src="images/1man.jpg" alt="Package 1">
                    </div>
                    <div class="content">
                        <h3>Adventure & Tour</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="book.php" class="btn">Book now</a> 
                    </div>
                </div>
                <!-- Add more packages here -->
            </div>
        </section>

        <section class="footer">
            <!-- Footer content -->
            <div class="credit">Created by <span>Eliza nixie237</span> | All rights reserved</div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>