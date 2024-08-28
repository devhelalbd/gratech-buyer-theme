<?php

/*

Template Name: Case

 */

get_header(); ?>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </a>
        <div class="sidebar__search mb-30">
            <input type="text" placeholder="Search...">
            <i class="fa-regular fa-magnifying-glass"></i>
        </div>
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:+208-6666-0112">+208-6666-0112</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info@example.com</a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fullscreen search area end here -->

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Case Study 01</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                        01</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Cause area start here -->
        <section class="case-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-image1.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Technology</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">Platform
                                        Integration</a></h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-image2.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Technology</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">IT Management</a></h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-image3.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Solution</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">Web Development</a>
                                </h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-image4.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Security</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">Network Security</a>
                                </h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-two-image1.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">DEVELOPMENT</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">Product Design</a></h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="assets/images/case/case-two-image4.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Design</span>
                                <h3><a href="case-details.html" class="text-white primary-hover">UI/UX Design</a></h3>
                            </div>
                            <a href="case-details.html" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cause area end here -->
    </main>

    <!-- Footer area start here -->
    <?php get_footer(); ?>