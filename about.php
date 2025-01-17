<?php
    require_once("php/mainLogCheck.php");
?>

<!DOCTYPE html>
<html lang="en">
    <link href="css/about.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <head>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Petopia</title>
        <link href="css/about.css" rel="stylesheet" type="text/css">
        <link href="css/navigation.css" rel="stylesheet" type="text/css">
        <link href="css/footer.css" rel="stylesheet" type="text/css">
    
        <!--[Google Fonts]-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!--Nunito Font-->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800&family=Work+Sans:wght@700;800&display=swap"
            rel="stylesheet">
    
        <!--Box Icons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <!--Flickity-->
        <!--CSS Templates-->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="templates/hero-banner.css">
        <!--JS-->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
    </head>

 <body>    
    <!--
        [NAVIGATION/HEADER]
    -->
    <header>
        <!--Logo-->
        <div class="logo-container"><a href="index.php"><img src="assets/logo.png" alt=""></a></div>

        <!--Middle Navigation-->
        <nav class="desktop-nav">
            <ul class="desktop-nav-ul">
                <li><a href="index.php">Home</a></li>
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#">Pets v</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-li"><a href="products.php">Cats</a></li>
                        <li class="dropdown-li"><a href="products.php">Dogs</a></li>
                    </ul>
                </li>
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#">Shop v</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-li"><a href="products.php">Toys</a></li>
                        <li class="dropdown-li"><a href="products.php">Grooming</a></li>
                        <li><a href="products.php">Treats</a></li>
                    </ul>
                </li>
                <li><a href="advice.php">Advice</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <!--Right Navigation-->
        <div class="right-nav">
            <!--Shoppiung Basket Button-->
            <?php
                //Login Button
                if ($b==true) {
                    //Log out button

                    //Shopping Basket Button

                    echo '<a href="basket.php" class="basket-link"><div class="basket-button bx bx-basket"></div></a>';
                    echo '<div class="login-button"><a href="php/signOut.php"">Log Out</a></div>';
                }else{
                    //Login Button
                    echo '<div class="login-button"><a href="login.php">Login</a></div>';
                }       

            ?>
        </div>

        <!--Mobile-Background-->
        <div class="mobile-background"></div>
        <!--Mobile Navigation-->
        <nav class="mobile-nav">
            <div class="mobile-nav-top">
                <div class="mobile-logo"><img src="assets/logo.png" alt=""></div>
                <p class="close-menu-button" draggable="false">X</p>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#">Pets v</a>
                    <ul class="dropdown-menu-mobile">
                        <li class="dropdown-li"><a href="products.php">Cats</a></li>
                        <li class="dropdown-li"><a href="products.php">Dogs</a></li>
                    </ul>
                </li>
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#">Shop v</a>
                    <ul class="dropdown-menu-mobile">
                        <li class="dropdown-li"><a href="products.php">Cats</a></li>
                        <li class="dropdown-li"><a href="products.php">Dogs</a></li>
                    </ul>
                </li>
                <li><a href="advice.php">Advice</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <div class="mobile-bottom-nav">
                    <?php
                //Login Button
                if ($b==true) {
                    //Log out button
                    //Shoppiung Basket Button
                    echo '<a href="basket.php" class="basket-link"><div class="basket-button bx bx-basket"></div></a>';
                    echo '<div class="login-button"><a href="php/signOut.php"">Log Out</a></div>';
                }else{
                    //Login Button
                    echo '<div class="login-button"><a href="login.php">Login</a></div>';
                }       
            ?>
                </div>
            </ul>
        </nav>
        <!--Mobile Hamburger-->
        <div id="hamburger-button" class='bx bx-menu'></div>
    </header>
    <!--
        [HEADER/NAVIGATION END]
    -->

        <!--Hero Banner-->
        <section class="hero-banner">
            <!--Hero Banner Image-->
            <div class="hero-banner-image"><img src="assets/Homepage/hero-banner2.jpg" alt=""></div>

            <!--Hero Banner Text Container-->
            <div class="hero-banner-left">

                <div class="hero-banner-content">
                    <h2>About Us</h2>
                    <p>Learn a little about us</p>
                </div>
            </div>
        </section>


    
    
    <section class="main-content">
    <p> Petopia is a place where dreams of owning a pet come true. Our goal is to unite families and animals, in a relationship full of love and care.
                            <br> Looking back on our adventure, we are ecstatic to have shared innumerable stories of delight and excitement for families.</p>
                            <p>Petopia welcomes you to join in the fun. Discover our virtual shop, establish a connection with our community,
                            and allow Petopia to serve as the starting point for your quest to find a new, four-legged family member. </p>

                            <h3>How we help</h3>
    
                            <p>
                                We love celebrating the joy pets bring to our customers.  As part of our dedication to the neighbourhood, we support and take part in 
                                pet-friendly events in the area. These gatherings provide a lively and welcoming environment for pet owners to mingle, exchange stories,
                                 and form lasting relationships.
                               </p>
                               <p>
                                Through our adoption drives and foster programmes, we actively encourage pet adoption. In order to showcase pets in need of loving homes, 
                                our business works with neighbourhood foster families and shelters. We help families locate the perfect match by streamlining the adoption process.
                               </p>
    </section>
</body>
</html>