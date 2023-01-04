<?php if (!defined('FW')) {
    die('Forbidden');
}


/** Подключение OWL карусели */
$path = get_template_directory_uri() . '/assets/owl-carousel/';

if( !wp_script_is( 'custom-script-owl-jquery' ) ){
    wp_enqueue_script(
        'custom-script-owl-jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js'
    );
}

if( ! wp_script_is( 'custom-script-owl-lightgallery' ) ){
    wp_enqueue_script(
        'custom-script-owl-lightgallery',
        $path . 'js/owl.carousel.min.js'
    );
}

if( ! wp_style_is( 'custom-style-owl-carousel' ) ){
    wp_enqueue_style(
        'custom-style-owl-carousel',
        $path . 'css/owl.carousel.min.css',
    );
}

if( ! wp_style_is( 'custom-style-owl-theme-default' ) ){
    wp_enqueue_style(
        'custom-style-owl-theme-default',
        $path . 'css/owl.theme.default.min.css',
    );
}
