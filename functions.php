<?php


function wmt_enqueue_styles()
{
  wp_register_style('main', get_template_directory_uri() . '/style.css', false, null);
  wp_enqueue_style('main');

  wp_register_style('phone', get_template_directory_uri() . '/css/phone-style.css', false, null);
  wp_enqueue_style('phone');

  wp_register_style('menu', get_template_directory_uri() . '/css/css-menu/menu-style.css', false, null);
  wp_enqueue_style('menu');
}
add_action('wp_enqueue_scripts', 'wmt_enqueue_styles', 100);


function wmt_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "wmt_jquery_enqueue", 11);


function wmt_enqueue_scripts()
{
  wp_register_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery'));
  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'wmt_enqueue_scripts', 100);

