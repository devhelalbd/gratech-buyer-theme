<?php

/*

Template Name: Template Service

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">IT Services</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT Services</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-inner-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image1.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Database Security</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image2.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon2.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">IT Consultancy</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image3.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon3.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">App Development</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image4.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon4.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Cyber Security</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image5.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon5.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">UI/UX Design</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/service/service-image6.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="assets/images/icon/service-two-icon6.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">IT Management</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
    </main>

    <!-- Footer area start here -->
    <?php get_footer(); ?>