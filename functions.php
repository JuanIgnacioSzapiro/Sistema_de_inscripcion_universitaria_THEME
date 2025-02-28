<?php
function cargar_css()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), false, 'all');

    wp_register_style('general_css', get_template_directory_uri() . '/css/general.css', array('bootstrap'), false, 'all');
    wp_enqueue_style('general_css');
}
add_action('wp_enqueue_scripts', 'cargar_css');

function cargar_js()
{
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);

    wp_enqueue_script('general_js', get_template_directory_uri() . '/js/general.js', array('bootstrap'), false, true);
    wp_enqueue_script('general_js');
}
add_action('wp_enqueue_scripts', 'cargar_js');

function my_theme_setup() {
    add_theme_support('my-plugin-styles');
}
add_action('after_setup_theme', 'my_theme_setup');