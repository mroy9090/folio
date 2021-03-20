<?php
session_start();
$db_select = "SELECT * FROM services WHERE status='active' ORDER BY id DESC";
$db_connect = mysqli_connect("localhost", "root", "", "student");
$db_query = mysqli_query($db_connect, $db_select);
$facts_select = "SELECT fact_icon, fact_title, fact_description FROM facts";
$facts_db = mysqli_connect("localhost", "root", "", "student");
$fact_query = mysqli_query($facts_db, $facts_select);
$brand_select = "SELECT brand_icon FROM brand WHERE status='active'";
$brand_query = mysqli_query($db_connect, $brand_select);

$work_db_select = "SELECT * FROM works WHERE status='active'";
$work_db = mysqli_connect("localhost", "root", "", "student");
$work__db_query = mysqli_query($work_db, $work_db_select);

$education_db_select = "SELECT * FROM educations WHERE status='active'";
$education_db = mysqli_connect("localhost", "root", "", "student");
$education_db_query = mysqli_query($education_db, $education_db_select);

$setting_name_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_name'";
$setting_db_query = mysqli_query($db_connect, $setting_name_db_select);
$setting_name = mysqli_fetch_assoc($setting_db_query);

$setting_bio_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_bio'";
$setting_db_query = mysqli_query($db_connect, $setting_bio_db_select);
$setting_bio = mysqli_fetch_assoc($setting_db_query);

$setting_about_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_about'";
$setting_db_query = mysqli_query($db_connect, $setting_about_db_select);
$setting_about = mysqli_fetch_assoc($setting_db_query);

$setting_address_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_address'";
$setting_db_query = mysqli_query($db_connect, $setting_address_db_select);
$setting_address = mysqli_fetch_assoc($setting_db_query);

$setting_phone_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_phone'";
$setting_db_query = mysqli_query($db_connect, $setting_phone_db_select);
$setting_phone = mysqli_fetch_assoc($setting_db_query);

$setting_email_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_email'";
$setting_db_query = mysqli_query($db_connect, $setting_email_db_select);
$setting_email = mysqli_fetch_assoc($setting_db_query);

$fb_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_fb_link'";
$fb_query = mysqli_query($db_connect, $fb_db_select);
$fb_link = mysqli_fetch_assoc($fb_query)['setting_value'];

$tw_db_select = "SELECT setting_value FROM settings WHERE setting_name='owner_tw_link'";
$tw_query = mysqli_query($db_connect, $tw_db_select);
$tw_link = mysqli_fetch_assoc($tw_query)['setting_value'];
?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?= $setting_address['setting_value'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?= $setting_phone['setting_value'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?= $setting_email['setting_value'] ?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $setting_name['setting_value'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $setting_bio['setting_value'] ?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li class="<?= $fb_link ? "" : "d-none" ?>"><a href="<?= $fb_link ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="<?= $tw_link ? "" : "d-none" ?>"><a href="<?= $tw_link ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="img/banner/portfolio.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?= $setting_about['setting_value'] ?></p>
                            <h3>Experties:</h3>
                        </div>

                        <!-- Education Item -->
                        <?php foreach ($education_db_query as $education) : ?>
                            <div class="education">

                                <div class="year"><?= $education['area_year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $education['area_name'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $education['area_percentage'] ?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <!-- End Education Item -->

                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($db_query as $services) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $services['service_icon'] ?>"></i>
                                <h3><?= $services['service_title'] ?></h3>
                                <p>
                                    <?= $services['service_description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($work__db_query as $work) : ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="work_image/thumbnail/<?= $work['work_icon'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $work['work_title'] ?></span>
                                    <h4>Best Work</h4>
                                    <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php foreach ($fact_query as $fact) : ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">

                                    <div class="fact-icon">
                                        <i class="<?= $fact['fact_icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $fact['fact_title'] ?></span></h2>
                                        <span><?= $fact['fact_description'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>



                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="img/images/testi_avatar.png" alt="img">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5>tonoy jakson</h5>
                                        <span>head of idea</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="img/images/testi_avatar.png" alt="img">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5>tonoy jakson</h5>
                                        <span>head of idea</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->



        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container" style="height:10%;">

                <div class="row brand-active">
                    <?php foreach ($brand_query as $brand) : ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="brand_image/image/<?= $brand['brand_icon'] ?>" alt="img">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        <!-- brand-area-end -->



        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                            <h5>OFFICE IN <span>NEW YORK</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $setting_address['setting_value'] ?></li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $setting_phone['setting_value'] ?></li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $setting_email['setting_value'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="contact.php" method="POST">
                                <?php if (isset($_SESSION['contact'])) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $_SESSION['contact'] ?>
                                    </div>
                                <?php endif;
                                unset($_SESSION['contact']); ?>

                                <input type="text" placeholder="your name *" name="contact_name">
                                <input type="email" placeholder="your email *" name="contact_email">
                                <textarea name="message" id="message" placeholder="your message *"></textarea>
                                <button class="btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>