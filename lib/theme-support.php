<?php
    function restaurant_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumnails');
        add_theme_support( 'custom-logo', array(
            'height' => 200,
            'width' => 600,
            'flex-width' => true,
            'flex-height' => true,
        ) );
    }

    add_action( 'after_setup_theme', 'restaurant_theme_support' );