<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

    <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- About Section Starts -->

    <section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>Why choose us?</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eveniet id voluptatibus quibusdam repellendus corrupti totam dicta mollitia quis temporibus.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero similique eum eligendi enim deleniti adipisci consequatur quia quos ipsa, dicta, unde suscipit repudiandae veritatis cumque. Exercitationem natus nisi ipsa reprehenderit!</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 services</span>
            </div>
        </div>
    </div>
    </section>

    <!-- About Section Ends -->

    <!-- Reviews Section Starts -->

    <section class="reviews">

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>john carter</h3>
                <span>traveler</span>
                <img src="images/pic-1.png" alt="">
            </div>
            
            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>nicole kidman</h3>
                <span>traveler</span>
                <img src="images/pic-2.png" alt="">
            </div>

            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>johnny depp</h3>
                <span>traveler</span>
                <img src="images/pic-3.png" alt="">
            </div>

            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>sandra bullock</h3>
                <span>traveler</span>
                <img src="images/pic-4.png" alt="">
            </div>

            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>tom cruise</h3>
                <span>traveler</span>
                <img src="images/pic-5.png" alt="">
            </div>

            <div class="slide swiper-slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolores quis quae, tempore, incidunt id ullam a voluptas quia commodi numquam quibusdam quaerat quod placeat accusantium iusto vel, excepturi dolorem.</p>
                <h3>meryl streep</h3>
                <span>traveler</span>
                <img src="images/pic-6.png" alt="">
            </div>
        </div>
    </div>
    </section>

    <!-- Reviews Section Ends -->
    










<!-- Footer Section Starts -->

        <?php include 'footer.php' ?>


<!-- Footer Section Ends -->

    <!-- Swiper JS Link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link -->
    <script src="script.js"></script>
</body>
</html>