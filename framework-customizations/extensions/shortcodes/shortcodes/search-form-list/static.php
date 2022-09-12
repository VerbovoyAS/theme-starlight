<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_script(
    'custom-search-form-list',
    get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/search-form-list/static/js/custom-search-form-list.js',
    array(),
    false,
    true
);
