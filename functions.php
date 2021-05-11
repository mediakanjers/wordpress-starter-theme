<?php

add_filter( 'gform_confirmation_anchor', '__return_true' );

function load_scss()
{
    wp_register_style('scss', get_stylesheet_directory_uri() . '', array(), false, 'all' );
    wp_enqueue_style('scss');
}
add_action('wp_enqueue_scripts', 'load_scss');