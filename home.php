<?php
// Start a session if needed
session_start();

// Include external PHP files if necessary
// include 'config.php'; // for database connection
// include 'functions.php'; // for other utilities

// Handling form submissions or other logic
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process your form data here
    // e.g., save to database or send an email
}
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
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars" aria-label="Toggle Menu" tabindex="0"></div>
    </header>

    <main>
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <!-- Slider Item 1 -->
                    <div class="swiper-slide slide" style="background: url(images/back.jpg) no-repeat; background-size: cover;">
                        <div class="content">
                            <span>explore, discover. travel</span>
                            <h3>travel around the world</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                    <!-- Slider Item 2 -->
                    <div class="swiper-slide slide" style="background: url(images/pexels-joyston-judah-331625-933054.jpg) no-repeat; background-size: cover;">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>discover the new places</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                    <!-- Slider Item 3 -->
                    <div class="swiper-slide slide" style="background: url(images/pexels-bri-schneiter-28802-346529.jpg) no-repeat; background-size: cover;">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>make your tour worthwhile</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- Service Section Starts -->
        <section class="services">
            <h1 class="heading-title">Our Services</h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/hicke.jpg" alt="A scenic hike" loading="lazy">
                    <h3>Adventure</h3>
                </div>
                <div class="box">
                    <img src="images/person.jpg" alt="Tour guiding service" loading="lazy">
                    <h3>Tour Guide</h3>
                </div>
                <div class="box">
                    <img src="images/1man.jpg" alt="Trekking activity" loading="lazy">
                    <h3>Trekking</h3>
                </div>
                <div class="box">
                    <img src="images/person.jpg" alt="Campfire gathering" loading="lazy">
                    <h3>Camp Fire</h3>
                </div>
                <div class="box">
                    <img src="images/fire.jpg" alt="Off-roading adventure" loading="lazy">
                    <h3>Off Road</h3>
                </div>
                <div class="box">
                    <img src="images/off.jpg" alt="Camping experience" loading="lazy">
                    <h3>Camping</h3>
                </div>
            </div>
        </section>
        <!-- Service Section Ends -->

        <!-- Home About Section Starts -->
        <section class="about">
    <h3>Why Choose Us?</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas fugit doloremque vel cupiditate!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    
    <div class="about-images">
        <div class="image-container">
            <img src="images/fire.jpg" alt="Fire image" class="img-large">
            <p class="caption">Experience Nature</p>
        </div>
        <div class="image-container">
            <img src="images/person.jpg" alt="Person image" class="img-medium">
            <p class="caption">Guided Tours</p>
        </div>
        <div class="image-container">
            <img src="images/1man.jpg" alt="Trekking image" class="img-small">
            <p class="caption">Adventure Awaits</p>
        </div>
        <div class="image-container">
            <img src="images/hicke.jpg" alt="Hiking image" class="img-medium">
            <p class="caption">Scenic Hikes</p>
        </div>
    </div>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map"></i>
            <span>Top Destination</span>
        </div>
        <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable Price</span>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 Guide Service</span>
        </div>
    </div>
</section>
        <!-- Home About Section Ends -->

        <!-- Home Packages Starts -->
        <section class="home-packages">
            <h1 class="heading title">our packages</h1>
            <div class="box-container">
                <!-- Package Item 1 -->
                <div class="box">
                    <div class="images">
                        <img src="images/person.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <!-- Package Item 2 -->
                <div class="box">
                    <div class="images">
                        <img src="images/1man.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <!-- Package Item 3 -->
                <div class="box">
                    <div class="images">
                        <img src="images/hicke.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
            </div>
            <div class="load more btn"><a href="packages.php">load more</a></div>
        </section>
        <!-- Home Packages Ends -->

        <!-- Home Offer Section Starts -->
        <section class="home-offer">
            <div class="content">
                <h3>up to 50% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>
        <!-- Home Offer Section Ends -->

        <!-- About Section Starts -->
        <section class="about">
            <div class="image">
                <img src="images/fire.jpg" alt="">
            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas fugit doloremque vel cupiditate!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-map"></i>
                        <span>top destination</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>affordable price</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 guide service</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section Ends -->

        <footer class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>
                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Ask Questions</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About Us</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Terms of Use</a>
                </div>
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="tel:+2541111111111"><i class="fas fa-phone-alt"></i>+254 111 111 1111</a>
                    <a href="mailto:nixie237@gmail.com"><i class="fas fa-envelope"></i>nixie237@gmail.com</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>Nairobi, Kenya - 001</a>
                </div>
                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook"><i class="fab fa-facebook"></i>Facebook</a>
                    <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Twitter"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram"><i class="fab fa-instagram"></i>Instagram</a>
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn"><i class="fab fa-linkedin"></i>LinkedIn</a>
                </div>
            </div>
            <div class="credit">Created by <span>Eliza nixie237</span> | All rights reserved</div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        const swiper = new Swiper('.home-slider', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            effect: 'fade',
        });
    </script>
</body>

</html>