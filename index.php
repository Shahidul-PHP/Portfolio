<?php
session_start();
require 'db.php';
//LOGO COMMAND
$select_logo = "SELECT * FROM logos WHERE status = 1";
$select = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select);
// BANNER COMMAND
$select_banner = "SELECT * FROM banner";
$select_banner_result = mysqli_query($db_connect, $select_banner);
$after_assoc_banner = mysqli_fetch_assoc($select_banner_result);
//BANNER IMG
$select_banner_img = "SELECT * FROM banner_img WHERE status=1";
$select_bannerImg_result = mysqli_query($db_connect, $select_banner_img);
$after_assoc_bannerImg = mysqli_fetch_assoc($select_bannerImg_result);
// SOCIAL ICON
$select_banner_icon = "SELECT * FROM social WHERE status=1";
$select_bannerIcon_result = mysqli_query($db_connect, $select_banner_icon);
// SIDE ADDRESS
$select_side = "SELECT * FROM side_address";
$result = mysqli_query($db_connect, $select_side);
$after = mysqli_fetch_assoc($result);
//ABOUT SECTION
$about = "SELECT * FROM about";
$result2 = mysqli_query($db_connect, $about);
$after2 = mysqli_fetch_assoc($result2);
// ABOUT IMAGE
$select_status = "SELECT * FROM about_img WHERE status=1";
$make_status_query = mysqli_query($db_connect, $select_status);
$after_assoc = mysqli_fetch_assoc($make_status_query);
//SKILLS 
$select_status_skills = "SELECT * FROM skills WHERE status=1";
$make_skills_query = mysqli_query($db_connect, $select_status_skills);
//SERVICES'S
$select_services = "SELECT * FROM service_list";
$make_serv_query = mysqli_query($db_connect, $select_services);
//WORKS 
$select_works = "SELECT * FROM works";
$make_works_query = mysqli_query($db_connect, $select_works);
// FEATURES
$select_feat = "SELECT * FROM feature";
$make_feat_query = mysqli_query($db_connect, $select_feat);
$assoc = mysqli_fetch_assoc($make_feat_query);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <style>
        .line {
            margin-left: 78px;
        }
    </style>
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
                                <a href="index.html" class="navbar-brand logo-sticky-none"><img width="80" src="uploads/logo/<?= $after_assoc_logo['logo'] ?>" alt="Logo"></a>


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
                                        <li class="nav-item"><a class="nav-link" href="login.php" target="_blank">Login</a></li>

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
                    <p><?= $after['address'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?= $after['phone'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?= $after['email'] ?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <?php foreach ($select_bannerIcon_result as $iconn) { ?>
                    <a target="_blank" href="<?= $iconn['link'] ?>"><i class="<?= $iconn['icon'] ?>"></i></a>
                <?php } ?>
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
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?= $after_assoc_banner['sub_title'] ?></h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $after_assoc_banner['title'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $after_assoc_banner['desp'] ?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <?php foreach ($select_bannerIcon_result as $icon) { ?>
                                        <li><a target="_blank" href="<?= $icon['link'] ?>"><i class="<?= $icon['icon'] ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="uploads/banner/<?= $after_assoc_bannerImg['img'] ?>" alt="">
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
                            <img src="uploads/about_image/<?= $after_assoc['img'] ?>" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?= $after2['about'] ?></p>
                            <h3>My Skill's:</h3>
                        </div>
                        <!-- Education Item -->
                        <?php foreach ($make_skills_query as $skill) { ?>
                            <div class="education">
                                <div class="year"><?= $skill['title_sk'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skill['desp_sk'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skill['percentage'] ?>%;" aria-valuenow="<?= $skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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
                    <?php foreach ($make_serv_query as $boltu) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i style="font-family:fontawesome;" class="<?= $boltu['icon'] ?>"></i>

                                <h3><?= $boltu['service_title'] ?></h3>
                                <p>
                                    <?= $boltu['service_detail'] ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
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
                    <?php foreach ($make_works_query as $shown) { ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="uploads/work/thumb/<?= $shown['thumb_img'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $shown['category'] ?></span>
                                    <h4><a href="portfolio-single.html"><?= $shown['sub_title'] ?></a></h4>
                                    <a href="portfolio-single.php?id=<?= $shown['id'] ?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php foreach ($make_feat_query as $fact) { ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class=""><?= $fact['count'] ?></span></h2>
                                        <span><?= $fact['title'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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
                                    <h4><span>???</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>???</span></h4>
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
                                    <h4><span>???</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>???</span></h4>
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
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
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
                            <p>You can contact me Via using this information which is given below</p>
                            <h5>OFFICE IN <span>NARAYANGANJ</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address </span>
                                        <p><?= $after['address'] ?></p>

                                    </li>
                                    <li><i class="fas fa-headphones"></i><span>Phone </span>
                                        <p><?= $after['phone'] ?></p>

                                    </li>
                                    <li><i class="fas fa-globe-asia">

                                        </i><span>e-mail </span>
                                        <p><?= $after['email'] ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="#">
                                <input type="text" placeholder="your name *">
                                <input type="email" placeholder="your email *">
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
                            <p>Copyright?? <span>Shahdiul Islam Khan</span> | All Rights Reserved</p>
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

</html>