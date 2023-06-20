<?php
    function restaurant_assets() {
        wp_enqueue_style( 'restaurant-bootstrap', get_template_directory_uri() . '/dist/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-fonts', get_template_directory_uri() . '/dist/assets/fonts/google-fonts/stylesheet.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-flex-slider', get_template_directory_uri() . '/dist/assets/css/flex-slider.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-font-awesome', get_template_directory_uri() . '/dist/assets/css/font-awesome.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-lightbox', get_template_directory_uri() . '/dist/assets/css/lightbox.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-owl-carousel', get_template_directory_uri() . '/dist/assets/css/owl-carousel.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'restaurant-stylesheet', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'restaurant-scripts-popper', get_template_directory_uri() . '/dist/assets/js/popper.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-bootstrap', get_template_directory_uri() . '/dist/assets/js/bootstrap.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-owl-carousel', get_template_directory_uri() . '/dist/assets/js/owl-carousel.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-accordions', get_template_directory_uri() . '/dist/assets/js/accordions.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-datepicker', get_template_directory_uri() . '/dist/assets/js/datepicker.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-scrollreveal', get_template_directory_uri() . '/dist/assets/js/scrollreveal.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-waypoints', get_template_directory_uri() . '/dist/assets/js/waypoints.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-jquery.counterup', get_template_directory_uri() . '/dist/assets/js/jquery.counterup.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-imgfix', get_template_directory_uri() . '/dist/assets/js/imgfix.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-slick', get_template_directory_uri() . '/dist/assets/js/slick.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-lightbox', get_template_directory_uri() . '/dist/assets/js/lightbox.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts-isotope', get_template_directory_uri() . '/dist/assets/js/isotope.js', array(), '1.0.0', true);
        wp_enqueue_script( 'restaurant-scripts', get_template_directory_uri() . '/dist/assets/js/custom.js', array('jquery'), '1.0.0', true);
    }

    add_action( 'wp_enqueue_scripts', 'restaurant_assets');