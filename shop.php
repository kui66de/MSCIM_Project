<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IT Star Phone & Repair Shop</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/resources/Logo.png" sizes="32x32">

</head>

<body>

    <!--Start mainmenu area-->
    <section class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li style="width: 230px; border: none;"><img style="margin-top: 15px; width: 200px; height: 40px" src="images/resources/shop_name.png" alt="Awesome Logo"></li>
                                <li class=""><a href="index.html">Home</a></li>
                                <li class="dropdown current"><a href="./shop.html">Products</a></li>
                                <li class="dropdown"><a href="./shopping-cart.html">Cart</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="customer-care pull-left">
                        <div class="icon-holder" style="top: 13px; font-weight: 700;">
                            <a href="./login.html">LOGIN</a>
                        </div>
                    </div>
                    <div class="top-search-box pull-right">
                        <a href="./appoinement.html"><button style="width: auto; padding-left: 6px; padding-right: 6px;">Book a Reapir</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Shop</h1>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start breadcrumb bottom area-->
    <section class="breadcrumb-botton-area">
        <div class="container">
            <div class="left pull-left">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                    <li>Shop</li>
                </ul>
            </div>
            <div class="right pull-right">
                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
            </div>
        </div>
    </section>
    <!--End breadcrumb bottom area-->

    <!--Start blog area-->
    <section id="shop-area" class="main-shop-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="shop-content">
                        <div class="row showing-result-shorting">
                            <div class="col-md-12">
                                <div class="showing pull-left">
                                    <p>Showing 1-12 of 15 results</p>
                                </div>
                                <div class="shorting pull-right">
                                    <select class="selectmenu">
                                        <option selected="selected">Default Sorting</option>
                                        <option>Default Sorting one</option>
                                        <option>Default Sorting Two</option>
                                        <option>Default Sorting Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row1">
                            <?php
                            include ('./php/db_connection.php'); // Make sure this points to your SQLite connection setup

                            try {
                                $sql = "SELECT * FROM products";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();

                                // Fetch all products
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="img-holder">
                                                <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Awesome Product Image">
                                                <div class="overlay-box">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a class="thm-btn bg-1" href="shop-single.php?id=<?php echo intval($row['id']); ?>">Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-holder">
                                                <div class="top clearfix">
                                                    <div class="product-title pull-left">
                                                        <a href="shop-single.html">
                                                            <h5><?php echo htmlspecialchars($row['name']); ?></h5>
                                                        </a>
                                                    </div>
                                                    <div class="review-box pull-right">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4>€<?php echo htmlspecialchars($row['price']); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            } catch (PDOException $e) {
                                echo 'Query failed: ' . $e->getMessage();
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!--Start sidebar Wrapper-->
                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sidebar-title">
                                <h1>Categories</h1>
                            </div>
                            <ul class="categories clearfix">
                                <li>
                                    <a href="#">
                                        Smart Phones
                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Desktop & Mac
                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Game Console
                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Safety & Security
                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Uncategorized
                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sidebar-title">
                                <h1>Filter By Price</h1>
                            </div>
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <input class="thm-btn bg-1" type="submit" value="Filter">
                                    <span>Price:</span>
                                    <input type="text" readonly class="min">
                                    <span>-</span>
                                    <input type="text" readonly class="max">
                                </div>
                            </div>

                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sidebar-title">
                                <h1>Latest Products</h1>
                            </div>
                            <ul class="latest-product">
                                <li>
                                    <div class="img-holder">
                                        <img src="images/shop/hoco_plug.png" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="#">
                                            <h4>Hoco 20W Dual USB PD charger</h4>
                                        </a>
                                        <h5>€19.99</h5>
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/shop/hoco_carholder.png" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="#">
                                            <h4>Magnetic Car Phone Holder</h4>
                                        </a>
                                        <h5>€14.99</h5>
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </section>
    <!--End blog area-->


    <!--Start footer area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                    <div class="single-footer-widget pd-bottom">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/footer/footer-logo.png" alt="Awesome Footer Logo">
                            </a>
                        </div>
                        <div class="repairplus-info">
                            <p class="top">Repairplus brings 41 years of Digital Repairs experience right to your Device. Our Texhnicians are equipped to help you that work best.</p>
                            <p>Our commitment to bring professionalism, good service & trust to the Phone repair service & maintenance business.</p>
                            <p>We are a one-stop shop for all your repair needs. We are here to help you get your device back to working order.</p>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                        <div class="row">
                            <!--Start single footer widget-->
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="single-footer-widget">
                                    <div class="title">
                                        <h3>Our Services</h3>
                                    </div>
                                    <ul class="services-list">
                                        <li><a href="smartphone-repair.html">Smart Phone Repair</a></li>
                                        <li><a href="tablet-repair.html">Tablets & iPad Repair</a></li>
                                        <li><a href="desktop-repair.html">Desktop & Laptop</a></li>
                                        <li><a href="game-repair.html">Game System Repair</a></li>
                                        <li><a href="lcd-repair.html">LCD & LED TV Repair</a></li>
                                        <li><a href="mp3-repair.html">MP3 & MP4 Player</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Start single footer widget-->
                            <!--Start single footer widget-->
                            <div class="col-lg-5 col-md-4 col-sm-12">
                                <div class="single-footer-widget subscribe-form-widget">
                                    <div class="title">
                                        <h3>Subscribe US</h3>
                                    </div>
                                    <div class="subscribe-form">
                                        <p>Subscribe to our newsletter!</p>
                                        <form action="#">
                                            <input name="email" placeholder="Enter Your Email..." type="text">
                                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </form>
                                        <h4>We don’t do mail to spam and your mail id is confidential.</h4>
                                    </div>
                                    <div class="footer-social-links">

                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="single-footer-widget contact-info-widget">
                                    <div class="title">
                                        <h3>Contact Info</h3>
                                    </div>
                                    <ul class="footer-contact-info">
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-home-page"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h5><span>Unit 23D</span><br>Wilton Shopping Center, Co Cork</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-call-answer"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h5><span>Call Us</span><br>+353 087 2397 688</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-envelope"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h5><span>Mail Us</span><br>phonecampus.wilton@gmail.com</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-clock"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h5><span>Opening Time</span><br>Mon - Sat: 09.30am to 18.30pm</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single footer widget-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Start footer botton-->
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <div class="copyright-text pull-left">
                            <p>Copyrights © 2024</p>
                        </div>

                    </div>
                </div>
            </div>
            <!--End footer botton-->
        </div>
    </footer>
    <!--End footer area-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- thm custom script -->
    <script src="js/custom.js"></script>
    <script src="./js/cart.js"></script>

</body>

</html>