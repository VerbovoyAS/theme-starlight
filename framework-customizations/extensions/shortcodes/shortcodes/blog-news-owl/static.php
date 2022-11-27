<?php if (!defined('FW')) {
    die('Forbidden');
}

$path = '/framework-customizations/extensions/shortcodes/shortcodes/blog-news-cards/static/';

wp_enqueue_script(
    'custom-script-owl-jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js'
);

wp_enqueue_script(
    'custom-script-owl-lightgallery',
    get_template_directory_uri() . $path . 'js/owl.carousel.min.js'
);

wp_enqueue_style(
    'custom-style-owl-carousel',
    get_template_directory_uri() . $path . 'css/owl.carousel.min.css',
);

wp_enqueue_style(
    'custom-style-owl-theme-default',
    get_template_directory_uri() . $path . 'css/owl.theme.default.min.css',
);
