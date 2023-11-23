<?php
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

function load_styles_and_scripts()
{
  wp_enqueue_style('style-main', get_template_directory_uri() . '/dist/styles/theme.css', array(), '1.3.2', 'all');
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', false, '1.2.0', true);
}
