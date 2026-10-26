<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
  // google fonts
  wp_register_style(
    'google-fonts_style',
    'https://fonts.googleapis.com/css2?family=Arizonia&family=Shippori+Mincho&family=Zen+Kaku+Gothic+New&family=Zen+Old+Mincho:wght@400;700&display=swap',
    array(),
    '1.0'
  );

  // main style
  wp_enqueue_style(
    'main_style',
    get_template_directory_uri() . '/css/style.css',
    array('google-fonts_style'),
    '1.0'
  );
}

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{

  // デフォルトのjQueryを削除
  wp_deregister_script('jquery');


  // jquery
  wp_register_script(
    'jquery_script',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
    array(),
    '1.0',
    true
  );

  // main.js
  wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script'),
    '1.0',
    true
  );
}

// Contact Form 7 の <p> と <br> の自動挿入を止める
add_filter('wpcf7_autop_or_not', '__return_false');