<?php
function gadgetplus_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
function gadgetplus_enqueue_scripts() {
    wp_enqueue_script(
        'gadgetplus-script',
        get_template_directory_uri() . '/js/scripts.js',
        array(), 
        '1.0',
        true 
    );
}

add_action('wp_enqueue_scripts', 'gadgetplus_enqueue_styles');
add_action('wp_enqueue_scripts', 'gadgetplus_enqueue_scripts');

function gadgetplus_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'gadgetplus_theme_setup');
