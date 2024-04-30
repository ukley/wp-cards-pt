<?php

// Incluir arquivos CSS no cabeçalho
function incluir_css() {
    wp_enqueue_style('swipper', get_template_directory_uri(). '/assets//vendor/swiper/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('choice', get_template_directory_uri() . '/assets/vendor/choices.js/public/assets/styles/choices.css', array(), '1.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('blue', get_template_directory_uri()   .  '/assets/css/style.lightblue.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'incluir_css');

function incluir_scripts() {
    // Bootstrap
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);

    // Waypoints
    wp_enqueue_script('waypoints', get_template_directory_uri()        .'/assets/vendor/waypoints/lib/noframework.waypoints.js', array(), '4.0.1', true);

    // Swiper
    wp_enqueue_script('swiper', get_template_directory_uri()           .'/assets/vendor/swiper/swiper-bundle.min.js', array(), '6.10.4', true);

    // Choices.js
    wp_enqueue_script('choices', get_template_directory_uri()          .'/assets/vendor/choices.js/public/assets/scripts/choices.js', array(), '10.0.0', true);

    // Theme.js
}

add_action('wp_enqueue_scripts', 'incluir_scripts');

function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}

add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema


