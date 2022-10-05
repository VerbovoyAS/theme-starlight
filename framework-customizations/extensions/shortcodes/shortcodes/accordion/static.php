<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_script(
	'fw-shortcode-accordion',
	$shortcodes_extension->get_declared_URI('/shortcodes/accordion/static/js/scripts.js'),
	array('jquery-ui-accordion'),
	false,
	true
);
wp_enqueue_style(
	'fw-shortcode-accordion',
	$shortcodes_extension->get_declared_URI('/shortcodes/accordion/static/css/styles.css')
);

// Стили для галереи
$path = '/framework-customizations/extensions/shortcodes/shortcodes/accordion/static/';

wp_enqueue_script(
    'custom-accordion-gallery-libscripts',
    get_template_directory_uri() . $path . 'js/libscripts.bundle.js',
    array(),
    false,
    true
);

wp_enqueue_script(
    'custom-accordion-gallery-lightgallery-all',
    get_template_directory_uri() . $path . 'js/lightgallery-all.js',
    array(),
    false,
    true
);

wp_enqueue_script(
    'custom-accordion-gallery-image-gallery',
    get_template_directory_uri() . $path . 'js/image-gallery.js',
    array(),
    false,
    true
);

wp_enqueue_style(
    'custom-accordion-gallery-lightgallery',
    get_template_directory_uri() . $path . 'css/lightgallery.css',
);
