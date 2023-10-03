<?php

function red_acre_load_scripts()
{
    wp_enqueue_style('red-acre-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'red_acre_load_scripts');
