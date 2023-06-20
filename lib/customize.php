<?php
    function restaurant_customize_register($wp_customize) {
        $wp_customize->add_section('restaurant_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options from here.'
        ));
        $wp_customize->add_setting('restaurant_footer_bg', array(
            'default' => 'red'
        ));
        $wp_customize->add_control('restaurant_footer_bg', array(
            'type' => 'select',
            'label' => 'Footer Background',
            'choices' => array(
                'red' => 'Red',
                'blue' => 'Blue'
            ),
            'section' => 'restaurant_footer_options'
        ));
    }
add_action( 'customize_register', 'restaurant_customize_register' );