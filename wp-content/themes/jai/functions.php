<?php
/** Theme bootstrap. */
function jai_setup() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('style', 'script'));
}
add_action('after_setup_theme', 'jai_setup');

function jai_assets() {
    wp_enqueue_style('jai-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'jai_assets');
