<?php
require 'config.php';
?>
<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $site_name; ?> | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="images/apple-touch-icon.png" type="images/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- customizer style css -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="sweetalert.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    
    <div class="wrapper white-bg">
        <!--header section start-->
        <!--header section start-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row mobile-items-center">
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-left">
                                <div class="call-center">
                                    <p><i class="zmdi zmdi-phone"></i><a href="tel:<?= $phone_number; ?>"><?= $phone_number; ?></a></p>
                                </div>
                                <div class="mail-address">
                                    <p><i class="zmdi zmdi-email"></i><a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-icons">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="mgea-full-width">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-sm-9 xs-3">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-8 d-none d-lg-block">
                                <div class="menu">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="index#top">Home</a>
                                            </li>
                                            <li>
                                                <a href="index#contestants">Contestants</a>
                                            </li>
                                            <li>
                                                <a href="about-us.html">about</a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu start -->
                <div class="mobile-menu-area d-lg-none">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                                <ul>
                                    <li>
                                        <a href="#top">Home</a>
                                    </li>
                                    <li>
                                        <a href="#contestants">Contestants</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">about</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>
         </div>
        <!--header section end-->