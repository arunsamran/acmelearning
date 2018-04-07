<?php
function education_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri(), 'style.css');

}
add_action('wp_enqueue_scripts', 'education_styles');