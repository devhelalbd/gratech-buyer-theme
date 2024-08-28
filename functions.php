<?php 


function gra_theme(){

     // Main Style
     wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', false );
     // Nice select css
     wp_enqueue_style( 'nice-css', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all' );
     // Animate css
     wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
     // Magnigic popup css
     wp_enqueue_style( 'magnigic-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
     // Swiper bundle min css
     wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0.0', 'all' );
     // All min css
     wp_enqueue_style( 'all-min-css', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all' );
     // Mean menu css
     wp_enqueue_style( 'mean-menu-css', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all' );
     // Bootstarp min css
     wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );

     // Main Stylesheet CSS
     wp_enqueue_style('style', get_stylesheet_uri() );

     // Jquery 3.7.0 Min Js
     wp_enqueue_script( 'jquery-min-script', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '1.0.0', true );
     // Bootstrap min Js
     wp_enqueue_script( 'bootstrap-min-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
     // Mean menu Js
     wp_enqueue_script( 'mean-menu-script', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '1.0.0', true );
     // Swiper bundle min Js
     wp_enqueue_script( 'swiper-bundle-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );
     // Counterup min Js
     wp_enqueue_script( 'counterup-min-script', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true );
     // Wow min Js
     wp_enqueue_script( 'wow-min-script', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
     // Pace min Js
     wp_enqueue_script( 'pace-min-script', get_template_directory_uri() . '/assets/js/pace.min.js', array(), '1.0.0', true );
     // Magnific popup min Js
     wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0.0', true );
     // Nice select min Js
     wp_enqueue_script( 'nice-select-script', get_template_directory_uri() . '/assets/js/nice-select.min.js', array(), '1.0.0', true );
     // Isotope pkgd min Js
     wp_enqueue_script( 'isotope-min-script', get_template_directory_uri() . '/aassets/js/isotope.pkgd.min.js', array(), '1.0.0', true );
     // Waypoints Js
     wp_enqueue_script( 'waypoints-script', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array(), '1.0.0', true );
     // Script Js
     wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
     

}

add_action('wp_enqueue_scripts', 'gra_theme');


?>