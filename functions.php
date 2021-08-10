<?php

add_action('wp_enqueue_scripts', function () {
    wp_register_style('font_awesome',  get_template_directory_uri() . '/assets/icons/css/all.css', [], '5.15.4');
    wp_register_script('wow_js', get_template_directory_uri() . '/node_modules/wow.js/dist/wow.js');
    wp_register_style('wow_css', get_template_directory_uri() . '/node_modules/wow.js/css/libs/animate.css');
    wp_register_style('css', get_template_directory_uri() . '/assets/css/portner.dev.min.css', [], '1.0.2');
    wp_register_script('js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.1', true);
    wp_enqueue_style('font_awesome');
    wp_enqueue_script('wow_js');
    wp_enqueue_style('wow_css');
    wp_enqueue_style('css');
    wp_enqueue_script('js');
});

add_action('admin_enqueue_scripts', function () {
    wp_register_style('font_awesome',  get_template_directory_uri() . '/assets/icons/css/all.css', [], '5.15.4');
    wp_enqueue_style('font_awesome');
    wp_register_style('css', get_template_directory_uri() . '/assets/css/admin.min.css', [], '1.0.0');
    wp_enqueue_style('css');
});

add_action('init', function () {
    setlocale(LC_TIME, 'de_CH.utf8');
    register_nav_menu('main-navigation', 'Header Navigation');
});

// theme support
add_theme_support('custom-logo');


require_once 'blocks.php';