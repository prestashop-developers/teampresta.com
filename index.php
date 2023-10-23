<?php
//echo phpinfo();
?>

<!DOCTYPE html>

<head>
    <title>TEAMPRESTA.COM - PrestaShop Laravel Wordpress themes - CMS ADDONS and PREMIUM SUPPORT, , <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?></title>
    <meta charset="utf-8">
    <meta name="description" content="Premium themes, EXCLUSIVE ADDONS and Web SUPPORT - Prestashop Wordpress Laravel, <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <meta name="keywords"
        content="wordpress themes, prestashop addons, wordpress plugins, wordpress responsive, theme builder, prestashop support, seo, prestashop custom,prestashop agency, prestashop email template; web hosting, prestashop vps, prestashop shared,prestashop premium themes, wordpress exclusive themes, <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <meta name="author" content="TeamPresta">
    <meta rel="canonical" href="https://teampresta.com<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <link rel="shortcut icon" href="https://www.prestashop.com/images/favicon.ico?v=2" />
    <meta name="msvalidate.01" content="E7265AF0DB2F209D64054FD000956E34" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <link rel="stylesheet" type="text/css" href="/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="/css/modules.css">
    <link rel="stylesheet" type="text/css" href="/css/widgets-styles.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Plugins styles-->
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <!--Styles for RTL-->
    <!--<link rel="stylesheet" type="text/css" href="/css/rtl.css">-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <style type="text/css">
        #popup {
            position: fixed;
            margin: 0 auto;
            top: 51%;
            left: 20%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y1ZEJ8R55Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-Y1ZEJ8R55Z');
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            //select the POPUP FRAME and show it
            $("#popup").hide().fadeIn(5000);

            //close the POPUP if the button with id="close" is clicked
            $("#close").on("click", function (e) {
                e.preventDefault();
                $("#popup").fadeOut(1000);
            });
        });
    </script>

    <script>
        function showModal() {
            document.getElementById("pageContent").style.opacity = "0.5";
        }

        function overlay() {
            $("#loader").removeClass("off").addClass("on");
            $("#black_overlay_loader").removeClass("off").addClass("on");
        }
    </script>
</head>

<body>

    <!-- Header -->

    <!-- let's call the following div as the POPUP FRAME -->
    <div id="popup">

        <!-- and here comes the image -->
        <a href="https://teampresta.com/templatemonster/evrika/index.html"><img
                src="https://teampresta.com/img/boxbg2.png" alt="popup"></a>

        <!-- Now this is the button which closes the popup-->
        <button id="close">Close POPOP Button!</button>

        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
    </div>

    <header class="header" id="site-header">
        <div class="container">
            <div class="header-content-wrapper">

                <div class="logo">
                    <a href="/index.html" class="full-block-link"></a>
                    <img src="/img/logo-eye.png" alt="TeamPresta">
                    <div class="logo-text">
                    </div>
                </div>

                <div id="google_translate_element"></div>
                <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
                        }
                </script>
                <script type="text/javascript"
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <nav id="primary-menu" class="primary-menu">

                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span class="mob-menu--title">Menu</span>
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD"
                                    d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800">
                                </path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF"
                                    d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200">
                                </path>
                            </svg>
                        </span>
                    </a>

                    <!-- menu-icon-wrapper -->

                    <ul class="primary-menu-menu">
                        <li class="menu-item-has-children">
                            <a href="/index.html">Home</a>
                        </li>

                        <li class="">
                            <a href="/prestashop-themes-1.7.html">CMS Themes</a>
                            <ul class="dropdown">
                                <li class="megamenu-item-info">
                                    <h5 class="megamenu-item-info-title">List of Services</h5>
                                    <p class="megamenu-item-info-text">Choose a Service</p>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/prestashop-themes-1.7.html"><i class="seoicon-pin-map"></i>
                                        PRESTASHOP THEMES
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/07_service_email_marketing.html"><i class="seoicon-mail-send"></i>
                                        PRESTASHOP ADDONS
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/22_contacts.html"><i class="seoicon-chat-comment"></i>
                                        PRESTASHOP CUSTOM
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="/04_service_detail_seo.html">
                                        <i class="seoicon-search"></i>
                                        PRESTASHOP Optimization
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/22_contacts.html"><i class="seoicon-button"></i>
                                        PRESTASHOP PROMO
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="/22_contacts.html">
                                        <i class="seoicon-pie-graph-split"></i>
                                        PRESTASHOP SUPPORT
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="/#">Services</a>
                            <ul class="dropdown">
                                <li class="">
                                <li class="megamenu-item-info">
                                    <h5 class="megamenu-item-info-title">List of Services</h5>
                                    <p class="megamenu-item-info-text">Choose a Service</p>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/webdesign.html"><i class="seoicon-pin-map"></i>
                                        Web Design
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/webdesign.html"><i class="seoicon-pin-map"></i>
                                        Video Editing
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/07_service_email_marketing.html"><i class="seoicon-mail-send"></i>
                                        Email Marketing
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/06_service_detail.html"><i class="seoicon-chat-comment"></i>
                                        Social Media Marketing
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="/04_service_detail_seo.html">
                                        <i class="seoicon-search"></i>
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="/08_service_ppc_management.html"><i class="seoicon-button"></i>
                                        Pay Per Click Management
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="/03_services.html">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Services Promo List
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="https://teampresta.com/video-edit.html">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Video Editing Portfolio
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="https://teampresta.com/flyers-psd.html">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Flyers Portfolio
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-megamenu menu-item-has-children">
                            <a href="https://teampresta.com/htmlbuilder/build/">HTML Builder</a>
                        </li>
                        <li class="">
                            <a href="https://teampresta.com/abouts.html">About us</a>
                            <ul class="dropdown">
                                <li class="">
                                <li class="megamenu-item-info">
                                </li>

                                <li class="menu-item-has-children hover-ver2">
                                    <a href="https://teampresta.com/blog">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/22_contacts.html">Contacts</a>
                        </li>
                        <li class="short-line">
                            <a href="https://teampresta.com/ico/">ICO WWP</a>
                        </li>
                    </ul>
                </nav>

                <div class="user-menu open-overlay">
                    <a href="/#" class="user-menu-content  js-open-aside">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>

        </div>

    </header>
    <!-- ... End Header -->


    <!-- Right-menu -->
    <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="popup right-menu">
            <div class="right-menu-wrap">
                <div class="user-menu-close js-close-aside">
                    <a href="/#" class="user-menu-content  js-clode-aside">
                        <span></span>
                        <span></span>
                    </a>
                </div>

                <div class="logo">
                    <a href="/index.html" class="full-block-link"></a>
                    <img src="/img/logo-eye.png" alt="TEAMPRESTA">
                    <div class="logo-text">
                        <div class="logo-title">PRESTASHOP THEMES</div>
                    </div>
                </div>

                <p class="text">We are a team of superhero developers, and our job is to make Ecommerce safe, accessible
                    and affordable.
                    With our superhero powers, we create super themes and addons.
                </p>
            </div>

            <div class="widget contacts">
                <h4 class="contacts-title">Get In Touch</h4>
                <p class="contacts-text">One of our greatest superpower is the power of SUPPORT.
                    We are committed to offering the right level of superpower support to all our members.
                    The second superpower is fast communication reply.
                    So if you have projects, do not hesitate to send us a message.
                </p>

                <div class="contacts-item">
                    <img src="/img/contact4.png" alt="phone">
                    <div class="content">
                        <a href="/#" class="title">0040771215609</a>
                        <p class="sub-title">Mon-Fri 9am-6pm</p>
                    </div>
                </div>

                <div class="contacts-item">
                    <img src="/img/contact5.png" alt="phone">
                    <div class="content">
                        <a href="/#" class="title">office@teampresta.com</a>
                        <p class="sub-title">online support</p>
                    </div>
                </div>

                <div class="contacts-item">
                    <img src="/img/contact6.png" alt="phone">
                    <div class="content">
                        <a href="/#" class="title">Cluj Napoca, Romania</a>
                        <p class="sub-title">Artarilor 30 420136</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ... End Right-menu -->

    <div class="content-wrapper">
        <div class="header-spacer"></div>
        <!-- Main Slider -->

        <div class="container-full-width">
            <div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide bg-border-color">

                        <div class="container">
                            <div class="row table-cell">

                                <div class="col-lg-12">

                                    <div class="slider-content align-center">

                                        <h1 class="slider-content-title" data-swiper-parallax="-100">Premium Prestashop
                                            Themes!
                                        </h1>
                                        <h5 class="slider-content-text c-gray" data-swiper-parallax="-200">Discover More
                                            About
                                            Our Themes Club!</h5>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="/prestashop-themes-1.7.html"
                                                class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">Get acces to all only 150$</span>
                                                <span class="semicircle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="slider-thumb" data-swiper-parallax="-400"
                                        data-swiper-parallax-duration="600">
                                        <img src="/img/slider1.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">

                        <div class="container table full-height">
                            <div class="row table-cell">

                                <div class="col-lg-5 table-cell">
                                    <div class="slider-content">
                                        <h3 class="slider-content-title" data-swiper-parallax="-100"><span
                                                class="c-dark">Local SEO</span>
                                            is about bringing
                                            customers through
                                            your doors.</h3>
                                        <h6 class="slider-content-text" data-swiper-parallax="-200">Local SEO is getting
                                            more difficult for many businesses. With us is all sunshine and rainbows.
                                        </h6>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="/05_service_details_localseo.html"
                                                class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">learn more</span>
                                                <span class="semicircle"></span>
                                            </a>

                                            <a href="/05_service_details_localseo.html"
                                                class="btn btn-small btn--primary" data-swiper-parallax="-300">
                                                <span class="text">Our Services</span>
                                                <i class="seoicon-right-arrow"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-7 table-cell">
                                    <div class="slider-thumb" data-swiper-parallax="-300"
                                        data-swiper-parallax-duration="500">
                                        <img src="/img/slider2.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-secondary-color main-slider-bg-dark">

                        <div class="container table full-height">
                            <div class="row table-cell">
                                <div class="col-lg-6 table-cell">

                                    <div class="slider-content">

                                        <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Social
                                            Media
                                            Marketing Services
                                        </h3>

                                        <h5 class="slider-content-text" data-swiper-parallax="-200">An effective social
                                            strategy
                                            can help you grow your
                                            business, maintain your social presence and engage with the audience.
                                        </h5>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="/06_service_detail.html"
                                                class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">learn more</span>
                                                <span class="semicircle"></span>
                                            </a>

                                            <a href="/06_service_detail.html" class="btn btn-medium btn-border">
                                                <span class="text">GET STARTED</span>
                                                <span class="semicircle"></span>
                                            </a>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-6 table-cell">
                                    <div class="slider-thumb" data-swiper-parallax="-300"
                                        data-swiper-parallax-duration="500">
                                        <img src="/img/slider3.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-orange-color main-slider-bg-dark">
                        <div class="container table full-height">
                            <div class="row table-cell">

                                <div class="col-lg-12">

                                    <div class="slider-content align-center">
                                        <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Email
                                            Marketing</h3>
                                        <h5 class="slider-content-text" data-swiper-parallax="-200">We create tailored
                                            marketing
                                            campaigns for each segment
                                            of your audience to help advertise products and services in efforts to
                                            efficiently
                                            and effectively engage new customers.
                                        </h5>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="/07_service_email_marketing.html"
                                                class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">learn more</span>
                                                <span class="semicircle"></span>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="slider-thumb" data-swiper-parallax="-400"
                                        data-swiper-parallax-duration="600">
                                        <img src="/img/slider4.png" alt="slider">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-green-color main-slider-bg-dark">

                        <div class="container table full-height">
                            <div class="row table-cell">

                                <div class="col-lg-6 table-cell">
                                    <div class="slider-content">

                                        <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Pay Per
                                            Click
                                            (PPC)
                                            Management
                                        </h3>

                                        <h5 class="slider-content-text" data-swiper-parallax="-200">Pay Per Click has an
                                            instant
                                            impact and gives
                                            your brand a much larger reach and exposure as a result of first page
                                            exposure on
                                            major search engines.
                                        </h5>

                                        <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                            <a href="/08_service_ppc_management.html"
                                                class="btn btn-medium btn--dark btn-hover-shadow">
                                                <span class="text">learn more</span>
                                                <span class="semicircle"></span>
                                            </a>

                                            <a href="/08_service_ppc_management.html"
                                                class="btn btn-medium btn-border btn-hover-shadow">
                                                <span class="text">GET STARTED</span>
                                                <span class="semicircle"></span>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 table-cell">
                                    <div class="slider-thumb" data-swiper-parallax="-300"
                                        data-swiper-parallax-duration="500">
                                        <img src="/img/slider5.png" alt="slider">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Prev next buttons-->

                <svg class="btn-next btn-next-black">
                    <use xlink:href="#arrow-right"></use>
                </svg>

                <svg class="btn-prev btn-prev-black">
                    <use xlink:href="#arrow-left"></use>
                </svg>

                <!--Pagination tabs-->

                <div class="slider-slides">
                    <a href="/#" class="slides-item bg-border-color main-slider-bg-light">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title"> THEMES CLUB</h4>
                            </div>
                            <div class="slides-number">01</div>
                        </div>
                    </a>

                    <a href="/#" class="slides-item bg-primary-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Local SEO</h4>
                                <div class="slides-sub-title">Ranking & beyond!</div>
                            </div>
                            <div class="slides-number">02</div>
                        </div>
                    </a>

                    <a href="/#" class="slides-item bg-secondary-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Social Media Marketing</h4>
                            </div>
                            <div class="slides-number">03</div>
                        </div>
                    </a>

                    <a href="/#" class="slides-item bg-orange-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Email Marketing</h4>
                            </div>
                            <div class="slides-number">04</div>
                        </div>
                    </a>

                    <a href="/#" class="slides-item bg-green-color">
                        <div class="content">
                            <div class="text-wrap">
                                <h4 class="slides-title">Pay Per Click Management</h4>
                            </div>
                            <div class="slides-number">05</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- ... End Main Slider -->


        <div class="container">
            <div class="container-fluid">
                <div class="row pt120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="heading align-center pb120">
                                    <h4 class="h1 heading-title">Exclusive Framework and addons
                                        Through Your Doors</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="local-seo">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="/img/local-seo1.jpg" alt="local-seo">
                                    <img src="/img/local-seo2.jpg" alt="local-seo">
                                    <img src="/img/local-seo-main.jpg" alt="local-seo" class="shadow-image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row medium-padding120 bg-border-color">
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="h5 c-gray pt100">We are an experienced team that specializes in making
                                    clean, unique and exclusive themes and addons.
                                    Easily configure, manage and costomize your theme using powerful and user-friendly
                                    theme editor and premium addons.
                                </div>

                                <a href="/prestashop-themes-1.7.html">
                                    <div class="btn btn-medium btn--blue btn-hover-shadow mt60">
                                        <span class="text"> All Prestashp Themes</span>
                                        <span class="semicircle"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SEO-Score -->

        <div class="container-fluid">
            <div class="row">
                <div class="seo-score scrollme">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                                <div class="seo-score-content align-center">

                                    <div class="heading align-center">
                                        <h4 class="h1 heading-title">Your SHOP Seo Score?</h4>
                                        <p class="heading-text">Check your website’s SEO problems for free!</p>
                                    </div>

                                    <div class="contact-form">

                                        <form class="seo-score-form input-inline" action="https://teampresta.com/sendemail/?seo=1" method="POST">
                                            <div class="row">
                                                <div class="col-lg-8 no-padding col-md-12 col-xs-12 col-sm-12">
                                                    <input class="input-dark site" required="required"
                                                        placeholder="Type in your Website URL">
                                                </div>
                                                <div class="col-lg-4 no-padding col-md-12 col-xs-12 col-sm-12">
                                                    <input class="input-dark e-mail" required="required"
                                                        placeholder="Your Email" type="email">
                                                </div>
                                            </div>

                                            <button class="btn btn-medium btn--green btn-hover-shadow">
                                                <span class="text">Check Up!</span>
                                                <span class="semicircle"></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="images">
                        <img src="/img/seoscore1.png" alt="image">
                        <img src="/img/seoscore2.png" alt="image">
                        <img src="/img/seoscore3.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- ... End SEO-Score -->


        <!-- Offers -->
        <div class="container">
            <div class="row medium-padding120">
                <div class="col-lg-12">
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">We Offer a Full Range of
                                        Services!</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <p class="heading-text">We are specialized in Web CMSs.
                                    </p>
                                </div>

                                <ul class="list list--secondary">
                                    <li>
                                        <i class="seoicon-check"></i>
                                        <a href="/#"> Exclusive Themes & Addons developement</a>
                                    </li>
                                    <li>
                                        <i class="seoicon-check"></i>
                                        <a href="/#">CUSTOM WORK and PREMIUM SUPPORT</a>
                                    </li>
                                    <li>
                                        <i class="seoicon-check"></i>
                                        <a href="/#">SEARCH ENGINE OPTIMIZATION</a>
                                    </li>
                                    <li>
                                        <i class="seoicon-check"></i>
                                        <a href="/#">SEARCH ENGINE MARKETING</a>
                                    </li>
                                </ul>

                                <a href="/03_services.html" class="btn btn-medium btn-border c-primary">
                                    <span class="text">Learn More</span>
                                    <span class="semicircle"></span>
                                </a>

                                <a href="https://www.fiverr.com/sasmarian/install-and-customize-prestashop-wordpress-or-other-cms"
                                    class="btn btn-medium btn--primary btn-hover-shadow">
                                    <span class="text">Get a Quote</span>
                                    <span class="semicircle"></span>
                                </a>

                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="offers-thumb">
                                    <img src="/img/offers1.png" alt="offers">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ... End Offers -->


        <!-- Our-video -->
        <div class="container-fluid">
            <div class="row">
                <div class="our-video js-equal-child">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
                        <div class="video theme-module">
                            <div class="video-thumb">
                                <div class="overlay"></div>
                                <a href="https://www.youtube.com/watch?v=C6cwOkhvE8I&t=1s"
                                    class="video-control js-popup-iframe">
                                    <img src="/svg/video-control.svg" alt="go">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding">
                        <div class="content theme-module centered-on-mobile medium-padding100">
                            <div class="heading">
                                <h4 class="h1 heading-title">Watch Our Video</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">Our agency actively contributes to the eCommerce platforms
                                    evolution through developing innovative tools and new functionalities to meet our
                                    clients’ ever-growing needs.
                                    We are always happy to help and support our products in the best way possible.

                                </p>
                            </div>
                            <a href="/abouts.html" class="btn btn-medium btn--secondary">
                                <span class="text">About Us</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ... End Offers -->


        <!-- Background-mountains -->

        <div class="container-fluid">
            <div class="row">
                <div class="background-mountains medium-padding120 scrollme">

                    <div class="images">
                        <img src="/img/mountain1.png" alt="mountain">
                        <img src="/img/mountain2.png" alt="mountain">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="heading align-center">
                                    <h4 class="h1 heading-title">Affordable SEO Services Packages</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                    <p class="heading-text">We provide monthly affordable SEO packages & best services
                                        pricing plans.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="info-box--standard-centered">
                                    <div class="info-box-image">
                                        <img src="/img/info-box7.png" alt="image">
                                    </div>
                                    <div class="info-box-content">
                                        <h4 class="info-box-title">Objective</h4>
                                        <p class="text">A professional SEO business
                                            offers different types of SEO packages to suit the requirements of different
                                            types of businesses. You have to choose the exact package to support your
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="info-box--standard-centered">
                                    <div class="info-box-image">
                                        <img src="/img/info-box8.png" alt="image">
                                    </div>
                                    <div class="info-box-content">
                                        <h4 class="info-box-title">Strategy</h4>
                                        <p class="text">For an incredibly low investment, you’ll receive manual SEO
                                            services that serve as a foundation for the rest of your content marketing,
                                            PPC Management, and link-building strategy.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="info-box--standard-centered">
                                    <div class="info-box-image">
                                        <img src="/img/info-box9.png" alt="image">
                                    </div>
                                    <div class="info-box-content">
                                        <h4 class="info-box-title">Technology</h4>
                                        <p class="text">Full On-page Optimization
                                            Radius-Targeted Content Distribution
                                            A dedicated SEO Consultant
                                            Ranking Reports
                                            More Traffic & More Sales
                                            A Service That Pays For Itself
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="info-box--standard-centered">
                                    <div class="info-box-image">
                                        <img src="/img/info-box10.png" alt="image">
                                    </div>
                                    <div class="info-box-content">
                                        <h4 class="info-box-title">Analytics</h4>
                                        <p class="text">Campaign Monitoring
                                            With just one login you can monitor your marketing efforts for every client
                                            in your agency. Integrate social media accounts to build social media
                                            reports and schedule posts.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-center">
                            <div class="btn-block">
                                <a href="/03_services.html" class="btn btn-medium btn--dark">
                                    <span class="text">More Info</span>
                                    <span class="semicircle"></span>
                                </a>
                                <a href="/03_services.html" class="btn btn-medium btn--breez">
                                    <span class="text">Get Started!</span>
                                    <span class="semicircle"></span>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <!-- End Background-mountains -->


        <!-- Counters -->

        <div class="container-fluid">
            <div class="row bg-green-color">
                <div class="container">
                    <div class="row">
                        <div class="counters">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="counter-item">
                                    <div class="counter-numbers counter">
                                        <span data-speed="2000" data-refresh-interval="3" data-to="96"
                                            data-from="2">96%</span>
                                        <div class="units">%</div>
                                    </div>
                                    <span class="counter-title">Client Retention</span>
                                    <div class="counter-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="counter-item">
                                    <div class="counter-numbers counter">
                                        <span data-speed="2000" data-refresh-interval="3" data-to="12"
                                            data-from="0">12</span>
                                    </div>
                                    <span class="counter-title">Years of Service</span>
                                    <div class="counter-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="counter-item">
                                    <div class="counter-numbers counter">
                                        <span data-speed="2000" data-refresh-interval="3" data-to="70"
                                            data-from="2">230+</span>
                                        <div class="units">+</div>
                                    </div>
                                    <span class="counter-title">Professionals</span>
                                    <div class="counter-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="counter-item">
                                    <div class="counter-numbers counter">
                                        <span data-speed="2000" data-refresh-interval="3" data-to="690"
                                            data-from="400">690+</span>
                                        <div class="units">+</div>
                                    </div>
                                    <span class="counter-title">Satisfied Clients</span>
                                    <div class="counter-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counters -->


        <!-- Clients -->
        <div class="section">
            <div class="client-carousel medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <div class="heading align-center">
                                <h4 class="h1 heading-title">Our Valuable Partners</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">We gratefully thanking you, for existing. </p>
                            </div>
                        </div>
                    </div>

                    <div class="theme-module clients-slider-module">

                        <div class="swiper-container pagination-bottom" data-show-items="4">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide client-item">
                                    <a href="https://www.templatemonster.com/vendors/teampresta/" class="client-image">
                                        <img src="/img/tm1.png" alt="templatemonster logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.mojomarketplace.com/store/teampresta" class="client-image">
                                        <img src="/img/1s.png" alt="mojomarketplace logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.freelancer.co.ro/u/sascristian.html" class="client-image">
                                        <img src="/img/2s1.png" alt="freelancer logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://themeforest.net/user/TeamPresta" class="client-image">
                                        <img src="/img/3s.png" alt="themeforest logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://apartner.pro/user/TeamPresta" class="client-image">
                                        <img src="/img/WWP.png" alt="Team prestashop logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.codester.com/TEAMPRESTA" class="client-image">
                                        <img src="/img/codester.png" alt="codester logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.guru.com/freelancers/teampresta" class="client-image">
                                        <img src="/img/4s.png" alt="guru logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.fantero.com/User/Teampresta" class="client-image">
                                        <img src="/img/7s.png" alt="fantero logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://flippa.com/users/1353536" class="client-image">
                                        <img src="/img/11s.png" alt="flippa logo" class="hover">
                                    </a>
                                </div>
                                <div class="swiper-slide client-item">
                                    <a href="https://www.upwork.com/fl/sasc2" class="client-image">
                                        <img src="/img/5s.png" alt="upwork logo" class="hover">
                                    </a>
                                </div>

                                <div class="swiper-slide client-item">
                                    <!-- Put this code anywhere in the body of your page where you want the badge to show up. -->

                                    <div itemscope itemtype='https://schema.org/Person' class='fiverr-seller-widget'
                                        style='display: inline-block;'>
                                        <a itemprop='url' href=https://www.fiverr.com/sasmarian rel="nofollow"
                                            target="_blank" style='display: inline-block;'>
                                            <div class='fiverr-seller-content'
                                                id='fiverr-seller-widget-content-903b3145-d3df-4599-8795-fb772cef6db5'
                                                itemprop='contentURL' style='display: none;'></div>
                                            <div id='fiverr-widget-seller-data' style='display: none;'>
                                                <div itemprop='name'>sasmarian</div>
                                                <div itemscope itemtype='https://schema.org/Organization'><span
                                                        itemprop='name'>Fiverr</span></div>
                                                <div itemprop='jobtitle'>Seller</div>
                                                <div itemprop='description'>We are a team of superhero developers, and
                                                    our job is to make Ecommerce safe, accessible and affordable.
                                                    With our super hero powers, we create super CMS themes and addons.
                                                    One of our greatest superpower is the power of SUPPORT.
                                                    We are committed to offering the right level of superpower support
                                                    to all our members.
                                                    The second superpower is fast Communication reply.
                                                    So if you have projects, do not hesitate to send us a message.</div>
                                            </div>
                                        </a>
                                    </div>

                                    <script id='fiverr-seller-widget-script-903b3145-d3df-4599-8795-fb772cef6db5'
                                        src='https://widgets.fiverr.com/api/v1/seller/sasmarian?widget_id=903b3145-d3df-4599-8795-fb772cef6db5'
                                        data-config='{"category_name":"Programming \u0026 Tech"}' async='true'
                                        defer='true'></script>
                                </div>
                            </div>

                            <!--Prev Next Arrows-->
                            <svg class="btn-next">
                                <use xlink:href="#arrow-right"></use>
                            </svg>

                            <svg class="btn-prev">
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clients -->


        <!-- Recent-case -->
        <div class="container">
            <div class="row medium-padding120">
                <div class="recent-case align-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="heading align-center">
                                    <h4 class="h1 heading-title">Recent vendor releases</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                    <p class="heading-text"> Access most recent online marketing resources here.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="case-item-wrap">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="/img/case1.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title"><a href="/#">Prestashop Theme Evrika 1.2 </a></h6>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="/img/case2.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title">Shopify Yoda Theme</h6>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled"
                                            data-offset="5">
                                            <img src="/img/case3.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title">Psd 3D Box Generator</h6>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled"
                                            data-offset="5">
                                            <img src="/img/case4.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title">Yoda Html Template </h6>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled"
                                            data-offset="5">
                                            <img src="/img/case5.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title">Newslater Email Template</h6>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled"
                                            data-offset="5">
                                            <img src="/img/case6.jpg" alt="our case">
                                        </div>
                                        <h6 class="case-item__title">A.I. IOT Artificial intelligence based on Raspberry
                                            Pi</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a href="/11_case_studies.html" class="btn btn-medium btn--dark">
                            <span class="text">All Projects</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Recent-case -->


        <!-- Pricing table -->
        <div class="container-fluid">
            <div class="row">
                <div class="pricing-tables medium-padding120 bg-border-color">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="heading align-center">
                                    <h4 class="h1 heading-title">Our Pricing Packages</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                    <p class="heading-text">We are always happy to help and support our products in the
                                        best way possible.
                                        When you joined in our Themes Clubs, you get full gain access to collection of
                                        our Premium Themes and addons.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="pricing-tables-wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                    <div class="pricing-tables-item">
                                        <div class="pricing-tables-icon">
                                            <img src="/img/pricing1.png" alt="personal">
                                        </div>
                                        <a href="/#" class="pricing-title">Personal</a>
                                        <ul class="pricing-tables-position">
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                Prestashop themes
                                            </li>
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                addons
                                            </li>
                                            <li class="position-item">
                                                <span class="count">6</span>
                                                months free updates
                                            </li>
                                            <li class="position-item">
                                                2 DOMAINS /USE
                                            </li>

                                            <li class="position-item">
                                                Installation not included
                                            </li>

                                            <li class="position-item">
                                                SSD Hosting not included
                                            </li>

                                            <li class="position-item">
                                                <span class="count">$10.00</span>
                                                Renewal Discount
                                            </li>
                                        </ul>
                                        <h4 class="rate">$70.00</h4>
                                        <a href="/20_checkout.html" class="btn btn-medium btn--dark">
                                            <span class="text">Order Now!</span>
                                            <span class="semicircle"></span>
                                        </a>
                                        <img src="/img/pricing-dots.png" class="dots" alt="dots">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="pricing-tables-item">
                                        <div class="pricing-tables-icon">
                                            <img src="/img/pricing2.png" alt="personal">
                                        </div>
                                        <a href="/#" class="pricing-title">Webmaster</a>
                                        <ul class="pricing-tables-position">
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                themes
                                            </li>
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                addons
                                            </li>
                                            <li class="position-item">
                                                <span class="count">12</span>
                                                months free updates
                                            </li>
                                            <li class="position-item">
                                                10 DOMAINS /USE
                                            </li>

                                            <li class="position-item">
                                                Installation included
                                            </li>
                                            <li class="position-item">
                                                SSD Hosting not included
                                            </li>

                                            <li class="position-item">
                                                <span class="count">$15.00</span>
                                                Renewal Discount
                                            </li>
                                        </ul>
                                        <h4 class="rate">$99.99</h4>
                                        <a href="/20_checkout.html" class="btn btn-medium btn--dark">
                                            <span class="text">Order Now!</span>
                                            <span class="semicircle"></span>
                                        </a>

                                        <img src="/img/pricing-dots.png" class="dots" alt="dots">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="pricing-tables-item">
                                        <div class="pricing-tables-icon">
                                            <img src="/img/pricing3.png" alt="personal">
                                        </div>
                                        <a href="/#" class="pricing-title">Professional</a>
                                        <ul class="pricing-tables-position">
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                themes
                                            </li>
                                            <li class="position-item">
                                                <span class="count">All</span>
                                                addons
                                            </li>
                                            <li class="position-item">
                                                <span class="count">12</span>
                                                months free updates
                                            </li>
                                            <li class="position-item">
                                                10 DOMAINS /USE
                                            </li>

                                            <li class="position-item">
                                                Installation included
                                            </li>
                                            <li class="position-item">
                                                SSD Hosting included
                                            </li>

                                            <li class="position-item">
                                                <span class="count">$15.00+</span>
                                                Renewal Discount
                                            </li>
                                        </ul>
                                        <h4 class="rate">$1069.99</h4>
                                        <a href="/20_checkout.html" class="btn btn-medium btn--dark">
                                            <span class="text">Order Now!</span>
                                            <span class="semicircle"></span>
                                        </a>

                                        <img src="/img/pricing-dots.png" class="dots" alt="dots">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pricing table -->

        <!-- Post-slider -->
        <div class="container">
            <div class="recent-post-slider medium-padding120">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h4 class="h1 heading-title">Latest From the Blog</h4>
                            <a href="/14_blog.html" class="read-more">Read Our Blog
                                <i class="seoicon-right-arrow"></i>
                            </a>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="theme-module news-slider-module">
                    <div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="hentry post">
                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>
                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">How to Make a SEO Friendly Website</a>
                                        </h2>
                                        <p class="post__text">HAPTER 1 KEYWORD RESEARCH If you want to run an effective
                                            ecommerce SEO campaign, make sure to kick things off with keyword research.
                                            Why?</p>
                                    </div>
                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author1.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article class="hentry post">
                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>
                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">Why SEO is Important for Your Business</a>
                                        </h2>
                                        <p class="post__text">While SEO has been painted as some sort of black-magic
                                            secret that requires an internet illuminati membership to learn the ways of,
                                            at its core, it is a marketing method.</p>
                                    </div>
                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author2.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article class="hentry post">
                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>
                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">SEO tips for better indexing google
                                                optimization</a>
                                        </h2>
                                        <p class="post__text">So your online store only appears on the 20th page of
                                            Google results ? It’s not the end of the world if you follow our 10 tips.
                                            You’ll soon see your e-store move into pole position ! </p>
                                    </div>
                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author3.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article class="hentry post">
                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>
                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">The Ultimate On-Site SEO Guide for Your
                                                Online Store</a>
                                        </h2>
                                        <p class="post__text"> As bloggers and Store Owners we want to make our websites
                                            appeal to both search engines and users.</p>
                                    </div>
                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author1.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article class="hentry post">
                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>
                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">10 Ways To Get 100 Extra Visitors To Your
                                                Website Today!</a>
                                        </h2>
                                        <p class="post__text"> Sometimes it seems extremely hard to get those first 100
                                            visitors to your articles and it can be frustrating when this happens;
                                            especially when you are new to the world of Internet Marketing</p>
                                    </div>
                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author2.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article class="hentry post">

                                    <time class="post__date published " datetime="2023-01-30 12:00:00">
                                        January 30, 2023
                                    </time>

                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">SEO KEYWORD RESEARCH Amazon Suggest</a>
                                        </h2>

                                        <p class="post__text">CHAPTER 1 KEYWORD RESEARCH If you want to run an effective
                                            ecommerce SEO campaign, make sure to kick things off with keyword research.
                                            Why?</p>

                                    </div>

                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author3.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>

                                </article>
                            </div>



                            <div class="swiper-slide">
                                <article class="hentry post">

                                    <time class="post__date published " datetime="2016-01-30 12:00:00">
                                        January 30, 2016
                                    </time>

                                    <div class="post__content">
                                        <h2 class="post__title entry-title">
                                            <a href="/15_blog_details.html">Traffic Exchange Blog</a>
                                        </h2>

                                        <p class="post__text">We help you to increase your rank and traffic in your
                                            website. Visit <a href="https://apartner.pro/?s=traffic">apartner.pro</a> for trade traffic exchange. No install
                                            need, no tricks all are real traffic like you friend, if you see somebody
                                            page that somebody will see your page.</p>

                                    </div>

                                    <div class="post__author author vcard">
                                        <div class="post-avatar">
                                            <img src="/img/post-author2.png" alt="author">
                                        </div>
                                        <span class="post__author-name fn"> Posted by <a href="/#"
                                                class="post__author-link">Admin</a></span>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post-slider -->


        <!-- Subscribe Form -->
        <div class="container-fluid bg-green-color">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="subscribe scrollme">
                            <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                                <h4 class="subscribe-title">Email Newsletters!</h4>
                                <form class="subscribe-form" method="post" action="/sendemail/">
                                    <input class="email input-standard-grey input-white" name="email"
                                        required="required" placeholder="Your Email Address" type="email">
                                    <button class="subscr-btn">subscribe
                                        <span class="semicircle--right"></span>
                                    </button>
                                </form>
                                <div class="sub-title">Sign up for new TeamPresta content, updates, surveys & offers.</div>

                            </div>

                            <div class="images-block">
                                <img src="/img/subscr-gear.png" alt="gear" class="gear">
                                <img src="/img/subscr1.png" alt="mail" class="mail">
                                <img src="/img/subscr-mailopen.png" alt="mail" class="mail-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Subscribe Form -->
    </div>


    <!-- Footer -->

    <footer class="footer js-fixed-footer" id="site-footer">
        <div class="container">
            <div class="row">

                <div class="info">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="heading">
                            <h3 class="heading-title">TEAMPRESTA</h3>

                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">We are a team of superhero developers, and our job is to make
                                E-commerce safe, accessible and affordable.
                                With our superhero powers, we create super themes and addons.
                                One of our greatest superpower is the power of SUPPORT.
                                We are committed to offering the right level of superpower support to all our members.
                                The second superpower is fast communication reply.
                                So if you have projects, do not hesitate to send us a message.
                                Regards!
                            </p>
                        </div>

                        <div class="socials">
                            <a href="https://facebook.com/teampresta" class="social__item">
                                <img src="/svg/circle-facebook.svg" alt="facebook">
                            </a>
                            <a href="/" class="social__item">
                                <img src="/svg/twitter.svg" alt="twitter">
                            </a>
                            <a href="/" class="social__item">
                                <img src="/svg/google.svg" alt="google">
                            </a>
                            <a href="https://www.youtube.com/channel/UCmFn0bV92QO2Lfz21Q69uNQ" class="social__item">
                                <img src="/svg/youtube.svg" alt="youtube">
                            </a>
                            <a href="/" class="social__item">
                                <img src="/svg/rss.svg" alt="rss">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="services">
                            <div class="heading">
                                <h3 class="heading-title">Services Provided</h3>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <ul class="list list--primary">
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/prestashop-themes-1.7.html">Prestashop Themes</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/webdesign.html">Custom Web Design</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://teampresta.com/htmlbuilder/build/">Free HTML Builder</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/video-edit.html">Video Creations</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/video-edit.html">Flyers Creations</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/07_service_email_marketing.html">Email Marketing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/08_service_ppc_management.html">Pay-per-click</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/06_service_detail.html">Social Media</a>
                                </li>
                            </ul>

                            <ul class="list list--primary">
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/#">Android Applications</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/#">iOS Applications</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://apartner.pro">Free prestashop themes and modules</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://shop.apartner.pro">Virtual Marketing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://roman.matviy.pp.ua" title="Hire Fullstack developer Prestashop Laravel
                                    WordPress PHP VUE SQL">
                                        Hire Fullstack developer Prestashop Laravel WordPress PHP VUE SQL
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/#">Email Marketing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/#">Keyword Analytics</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://apartner.pro/?s=wordpress_themes">Wordpress themes</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://apartner.pro/?s=magento_themes">Magento themes</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="https://apartner.pro/?s=shopify_themes">Shopify themes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="contacts">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <div class="icon js-animate-icon">
                                <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64"
                                    xml:space="preserve" xmlns="https://www.w3.org/2000/svg">
                                    <path
                                        d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z"
                                        fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                    <path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2"
                                        fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                    <path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2" />
                                    <path
                                        d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0"
                                        fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                    <path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33"
                                        fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="content">
                                <a href="/#" class="title">0040771215609</a>
                                <p class="sub-title">Mon-Fri 9am-6pm</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <div class="icon js-animate-icon">
                                <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64"
                                    xml:space="preserve" xmlns="https://www.w3.org/2000/svg">
                                    <polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2" />
                                    <line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36" />
                                    <path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5"
                                        fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                    <circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2" />
                                    <path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none"
                                        stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2" />
                                    <g>
                                        <circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9" />
                                        <path
                                            d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z"
                                            fill="#f15b26" />
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <a href="/#" class="title">office@teampresta.com</a>
                                <p class="sub-title">online support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <div class="icon js-animate-icon">
                                <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64"
                                    xml:space="preserve" xmlns="https://www.w3.org/2000/svg">
                                    <polygon fill="none"
                                        points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   "
                                        stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-width="2"></polygon>
                                    <circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                                    <path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                    <path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                    <path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                    <path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="content">
                                <a href="/#" class="title">Cuj Napoca, Romania</a>
                                <p class="sub-title">Artarilor 30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <span>
                            Copyright © 2018 <a href="https://teampresta.com" class="sub-footer__link">TEAMPRESTA,</a>
                            Designed by <a href="https://apartner.pro/user/TeamPresta">TEAMPRESTA</a>
                        </span>

                        <span>Developed by <a href="https://apartner.pro/user/TeamPresta">TEAMPRESTA</a></span>
                        <span>Only on <a href="https://apartner.pro/user/TeamPresta">APARTNER.PRO TEAMPRESTA</a></span>

                        <span>
                            <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/113809713712195127888" data-rel="author"></div>
                            <a href="https://www.dmca.com/Protection/Status.aspx?ID=288a4ec3-cd8a-4c89-90f3-e45e739fc9e4"
                            rel="nofollow noopener noindex"
                            target="_blank"
                            title="DMCA.com Protection Status" 
                            class="dmca-badge"> <img
                            src="//images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=288a4ec3-cd8a-4c89-90f3-e45e739fc9e4"
                            alt="DMCA.com Protection Status"></a>
                            <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                        </span>
                        <a class="back-to-top" href="#">
                            <svg class="back-to-top">
                                <use xlink:href="#to-top"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <svg style="display:none;">
        <symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
            <path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
		c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
		c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
		l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
		l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
		c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
		c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
		C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
            <path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
		c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
        </symbol>
        <symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
            <path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
		c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
		c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
		l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
		l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
		c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
		c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
		C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
            <path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
		c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
        </symbol>
        <symbol id="to-top" viewBox="0 0 32 32">
            <path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
            L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
            C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
            L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
            L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z"
                id="cloud-upload"></path>
        </symbol>
    </svg>

    <!-- Overlay Search -->
    <div class="overlay_search">
        <div class="container">
            <div class="row">
                <div class="form_search-wrap">
                    <form>
                        <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                        <a href="/#" class="overlay_search-close">
                            <span></span>
                            <span></span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overlay Search -->

    <!-- JS Script -->
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/crum-mega-menu.js"></script>
    <script src="/js/swiper.jquery.min.js"></script>
    <script src="/js/theme-plugins.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/form-actions.js"></script>

    <script src="/js/velocity.min.js"></script>
    <script src="/js/ScrollMagic.min.js"></script>
    <script src="/js/animation.velocity.min.js"></script>
    <!-- end JS Script -->

</body>

</html>