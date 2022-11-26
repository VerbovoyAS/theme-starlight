<?php if (!defined('FW')) die('Forbidden');
$path = '/framework-customizations/extensions/shortcodes/shortcodes/image-box-custom/static/';

wp_enqueue_style(
    'fw-shortcode-icon-box-custom',
    get_template_directory_uri() . $path . 'css/styles-box-custom.css',
);
