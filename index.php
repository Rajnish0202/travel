<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Header Section Starts -->

    <?php include 'header.php' ?>

    <!-- Header Section Ends -->

    <!-- Home Section Starts -->

    <section class="home" id="home">

    <div class="swiper home-slider">

    <div class="swiper-wrapper">

    <div class="swiper-slide slide" style = "background:url(images/home-slide-1.jpg) no-repeat">
        <div class="content">
            <span> Explore, discover, travel</span>
            <h3>travel arround the world</h3>
            <a href="package.php" class="btn"> Discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style = "background:url(images/home-slide-2.jpg) no-repeat">
        <div class="content">
            <span> Explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn"> Discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style = "background:url(images/home-slide-3.jpg) no-repeat">
        <div class="content">
            <span> Explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn"> Discover more</a>
        </div>
    </div>
    </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </section>

    <!-- Home Section Ends -->


    <!-- Services Section Starts -->

    <section class="services" id="services">

    <h1 class="heading-title">our services</h1>

    <div class="box-container">

    <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
    </div>
    <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
    </div>
    <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>trekking</h3>
    </div>
    <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>adventure</h3>
    </div>
    <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>off road</h3>
    </div>
    <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
    </div>
    </div>

    </section>

    <!-- Services Section Ends -->

    <!-- Home About Section Starts -->

    <section class="home-about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>“It is always sad to leave a place to which one knows one will never return. Such are the melancolies du voyage: perhaps they are one of the most rewarding things about traveling.”</p>
        <span>― Gustave Flaubert</span>
        <a href="about.php" class="btn">read more</a>
    </div>
    </section>

    <!-- Home About Section Ends -->

    <!-- Home Packages Section Starts -->

    <section class="home-packages">

        <h1 class="heading-title">our packages</h1>

        <div class="box-container">

            <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and tour</h3>
                <p>I googled my symptoms. Turns out I just needed to go on vacation.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>
            <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and tour</h3>
                <p>It is not down in any map; true places never are.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>
            <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure and tour</h3>
                <p>You don’t need magic to disappear. All you need is a destination.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>
        </div>

        <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

    </section>

    <!-- Home Packages Section Ends -->

    <!-- Home Offer Section Starts -->

    <section class="home-offer">

    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi veritatis earum culpa quam ut voluptas reprehenderit tempora, dolor officia laborum?</p>
        <a href="book.php" class="btn">book now</a>
    </div>
    </section>

    <!-- Home Offer Section Ends -->












<!-- Footer Section Starts -->

    <?php include 'footer.php' ?>

<!-- Footer Section Ends -->

    <!-- Swiper JS Link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link -->
    <script src="script.js"></script>
</body>
</html>