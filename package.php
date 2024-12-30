<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>   
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header end -->

    <div class="heading" style="background:url(images/images/pexels-joyston-judah-331625-933054.jpg) no-repeat">
        <h1>packages</h1>
    </div>

    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>   
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>   
                <a href="package.php"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="home.php"><i class="fas fa-phone"></i>+254 1111111111</a>
                <a href="home.php"><i class="fas fa-phone"></i>+254 1111111111</a>
                <a href="package.php"><i class="fas fa-envelope"></i>nixie237@gmail.com</a>
                <a href="book.php"><i class="fas fa-map"></i>nairobi kenya - 001</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="home.php"><i class="fab fa-facebook"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
        <div class="credit">created by <span>Eliza nixie237</span> | all rights reserved</div>
    </section>
    <!-- Footer end -->

    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Example initialization of Swiper (adjust according to your needs)
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <!-- Custom JS file link -->
    <script src="js/script.js"></script>
</body>
</html>