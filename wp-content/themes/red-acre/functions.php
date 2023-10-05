<?php

function red_acre_load_scripts()
{
    // Styles
    wp_enqueue_style('red-acre-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.3.2', 'all');
    wp_enqueue_script('red-acre-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.3.2', true);

    // Scripts
    wp_enqueue_style('red-acre-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'red_acre_load_scripts');

function red_acre_config()
{
    $textdomain = 'red-acre';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'red-acre'),
            'footer_1'  => esc_html__('Footer 1 menu', 'red-acre'),
            'footer_2'  => esc_html__('Footer 2 menu', 'red-acre'),
            'footer_3'  => esc_html__('Footer 3 menu', 'red-acre'),
            'footer_4'  => esc_html__('Footer 4 menu', 'red-acre'),
            'footer_5'  => esc_html__('Footer 5 menu', 'red-acre'),
            'footer_6'  => esc_html__('Footer 6 menu', 'red-acre'),
            'legal'  => esc_html__('Legal menu', 'red-acre'),
        )
    );

    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action('after_setup_theme', 'red_acre_config', 0);
