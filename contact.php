<?php
    require_once('php/mainLogCheck.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia</title>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
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
    <script>"contact.js/scripts"</script>

</head>

<body>
    <header>
        <!--Logo-->
        <div class="logo-container" href="index.php"><img src="assets/logo.png" alt=""></div>

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
            <!--Login Button-->
            <?php
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
                <li><a href="advice.html">Advice</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <div class="mobile-bottom-nav">
                    <!--Login Button-->
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
                    <!--Shoppiung Basket Button-->
                    <a href="" class="basket-link">
                        <div class='basket-button bx bx-basket'></div>
                    </a>
                </div>
            </ul>
        </nav>
        <!--Mobile Hamburger-->
        <div id="hamburger-button" class='bx bx-menu'></div>
    </header>

    <main>

        <section class="hero-banner">
            <div class="hero-banner-image"><img src="assets/Homepage/hero-banner2.jpg" alt=""></div>

            <div class="hero-banner-left">

                <div class="hero-banner-content">
                    <h2>Contact us</h2>
                    <p>Get in touch with our team</p>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-bottom">
                <!--Left Box-->
                <div class="left-contact">

                    <!--Title Etc...-->
                    <h2 class="contact-h2">Contact Us</h2>
                    <h3 class="contact-h3">Ask anything you wish!</h3>
                    <h4 class="contact-h4">Have questions, comments, or just want to say hello? Drop us a message below
                        and let's start the conversation!
                    </h4>

                    <!--Contact Form-->
                    <form id="contact-form" action="form.php" method="post" name="contact-form">
                        <!--Name Input Container-->
                        <div class="input-container">
                            <label for="contact-name">Your Name<span style="color: red;">*</span></label>
                            <input type="text" id="contact-name" name="contact-name" class="name-input"
                                placeholder="Name" required />
                            <i class='bx bxs-user'></i>
                        </div>
                        <!--Email Input Container-->
                        <div class="input-container">
                            <label for="contact-email">Your Email<span style="color: red;">*</span></label>
                            <input type="email" id="contact-email" name="contact-email" class="email-input"
                                placeholder="Email" required />
                            <i class='bx bxs-envelope'></i>
                        </div>

                        <!--Message Input Container-->
                        <div class="input-container-textarea">
                            <label for="contact-message">Your Message<span style="color: red;">*</span></label>
                            <textarea id="contact-message" name="contact-message" class="message-input"
                                placeholder="Enter message here..." required></textarea>
                        </div>

                        <!--Checkbox Input Container-->
                        <div class="input-container-checkbox">
                            <input type="checkbox" id="contact-agree" name="contact-agree" required>
                            <label for="contact-agree">Don't show your email address</label>
                        </div>

                        <!--Contact Button-->
                        <button type="submit" class="contact-btn">Send Now</button>
                        <input type="hidden" name="submit-contact" value="TRUE" />
                    </form>

                </div>

                <!--Right Box-->
                <div class="right-contact">
                    <div class="contact-image-container">
                        <img src="assets/Contactpage/Envelopes.png" alt="">
                    </div>
                    <div class="contact-information-container">
                        <!--Contact Information Row (Location)-->
                        <div class="contact-row">
                            <!--Contact Icon-->
                            <div class="circle-contact">
                                <i class='bx bx-current-location'></i>
                            </div>
                            <!--Contact Text-->
                            <p class="contact-text">Aston St, Birmingham B4 7ET</p>
                        </div>

                        <!--Contact Information Row (Phone Number)-->
                        <div class="contact-row">
                            <!--Contact Icon-->
                            <div class="circle-contact">
                                <i class='bx bxs-phone'></i>
                            </div>
                            <!--Contact Text-->
                            <p class="contact-text">+44 71 2345 6789 </p>
                        </div>

                        <!--Contact Information Row (Email)-->
                        <div class="contact-row">
                            <!--Contact Icon-->
                            <div class="circle-contact">
                                <i class='bx bxs-envelope'></i>
                            </div>
                            <!--Contact Text-->
                            <p class="contact-text">contact-us@petopia.co.uk</p>
                        </div>
                    </div>

                    <!--Social Media-->
                    <div class="contact-social-media-container">
                        <!--Social Media (LinkedIn)-->
                        <div class="contact-social-background linkedin-color">
                            <a href="#" class='bx bxl-linkedin'></a>
                        </div>

                        <!--Social Media (twitter)-->
                        <div class="contact-social-background twitter-color">
                            <a href="#" class='bx bxl-twitter'></a>
                        </div>

                        <!--Social Media (facebook)-->
                        <div class="contact-social-background facebook-color">
                            <a href="#" class='bx bxl-facebook'></a>
                        </div>

                    </div>


                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>Copyright © Petopia 2023</p>
    </footer>


</body>