<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- Booking Section Starts -->

    <section class="booking" id="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method = "post" class="book-form">

    <div class="flex">
        <div class="inputbox">
            <span>name :</span>
            <input type="text" placeholder = "Enter Your Name" name="name">
        </div>

        <div class="inputbox">
            <span>email :</span>
            <input type="email" placeholder = "Enter Your Email" name="email">
        </div>

        <div class="inputbox">
            <span>phone :</span>
            <input type="number" placeholder = "Enter Your Number" name="phone">
        </div>

        <div class="inputbox">
            <span>address :</span>
            <input type="text" placeholder = "Enter Your Address" name="address">
        </div>

        <div class="inputbox">
            <span>where to :</span>
            <input type="text" placeholder = "Place You Want To Visit" name="Location">
        </div>

        <div class="inputbox">
            <span>how many :</span>
            <input type="number" placeholder = "How Many Guests" name="guests">
        </div>

        <div class="inputbox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>

        <div class="inputbox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
    </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
    </section>

    <!-- Booking Section Ends -->











<!-- Footer Section Starts -->

        <?php include 'footer.php' ?>


<!-- Footer Section Ends -->

    <!-- Swiper JS Link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link -->
    <script src="script.js"></script>
</body>
</html>