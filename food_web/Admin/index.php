<?php include("Manage/menu.php"); ?>
<!-- Main Section Start -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>full website design</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" 10 href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/ css2?family=Poppins: wght@100;200; 300;400; 500; 600; 700; 800; 900&display-swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logo">Foodie Dash</a>
        <div class="bx-bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#contact"></a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </header>

    <!-- Home Section Start -->

    <section class="home" id="home">
        <div class="home-text">
            <h1>Full Website</h1>
            <h2>Food The <br> Most Precious Things </h2>
            <a href="#" class="btn">Today's Menu</a>
        </div>

        <div class="home-img">
            <img src="images/home.png">
        </div>
    </section>

        <!-- About Section End -->
        <section class="about" id="about">
        <div class="about-img">
            <img src="/images/about.png">
        </div>

        <div class="about-text">
            <span>About Us</span>
            <h2>We speak the good <br> Food language</h2>
            <p> There are many variation passages of Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem est
                velit ab veritatis minus possimus asperiores, voluptatem aut quibusdam magnam repudiandae. </p>
            <a href="#" class="btn">Today's Menu</a>
        </div>
    </section>


    <!-- Menu Section Start -->

    <section class="menu" id="menu">
        <div class="heading">
            <span>Food Menu</span>
            <h2>Fresh taste and great price </h2>
        </div>
        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="images/food1.png">
                </div>
                <h2>Chicken Burger </h2>
                <h3>Tasty food</h3>
                <span>$11.00</span>
                <i class="bx-bx-cart-alt"></i>
            </div>

            div class="box">
                <div class="box-img">
                    <img src="images/food2.png">
                </div>
                <h2>Chicken Burger </h2>
                <h3>Tasty food</h3>
                <span>$11.00</span>
                <i class="bx-bx-cart-alt"></i>
            </div>

            div class="box">
                <div class="box-img">
                    <img src="images/food3.png">
                </div>
                <h2>Chicken Burger </h2>
                <h3>Tasty food</h3>
                <span>$11.00</span>
                <i class="bx-bx-cart-alt"></i>
            </div>
        </div>
    </section>

    <!-- Services Section Start -->

    <section class="services" id="services">
        <div class="heading">
            <span>Our Services</span>
            <h2>We provide the best <br> Food</h2>
        </div>

        <div class="services-container">
            <div class="s-box">
                <img src="images/s1.png">
                <h3>Order</h3>
                <p>There are many variations of passages of lorem ipsum available but majority have suffered injected
                humour</p>
            </div>

            <section class="services-container">
                <div class="s-box">
                    <img src="images/s2.png">
                    <h3>Shipping</h3>
                    <p>There are many variations of passages of lorem ipsum available but majority have suffered
                    injected humour</p>
                </div>

                <div class="services-container">
                    <div class="s-box">
                        <img src="images/s3.png">
                        <h3>Delivered</h3>
                        <p>There are many variations of passages of lorem ipsum available but majority have suffered
                        injected humour</p>
                    </div>
                </div>
            </section>
        </section>

    <section class="contact" id="contact">
                <div class="footer">
                    <div class="main">
                        <div class="col">
                            <h4>Menu Links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Our Services</h4>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Project Management</a></li>
                                <li><a href="#">Graphics Design</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Contact Us</h4>
                            <div class="social">
                                <a href="#"><i class="bx bxl-facebook"></i></a>
                                <a href="#"><i class="bx bxl-instagram"></i></a>
                                <a href="#"><i class="bx bxl-twitter"></i></a>
                                <a href="#"><i class="bx bxl-youtube"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

</body>

</html>
<!-- Menu Section End -->
<?php include("Manage/footer.php"); ?>
</body>

</html>