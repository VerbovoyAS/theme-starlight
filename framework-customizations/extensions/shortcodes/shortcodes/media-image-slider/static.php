<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_script(
    'custom-gallery-libscripts',
    get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/media-image-gallery/static/js/libscripts.bundle.js',
    array(),
    false,
    true
);

wp_enqueue_script(
    'custom-gallery-lightgallery',
    get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/media-image-gallery/static/js/lightgallery-all.js',
    array(),
    false,
    true
);

wp_enqueue_script(
    'custom-gallery-image-gallery',
    get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/media-image-gallery/static/js/image-gallery.js',
    array(),
    false,
    true
);

wp_enqueue_style(
    'custom-gallery-lightgallery',
    get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/media-image-gallery/static/css/lightgallery.css',
);