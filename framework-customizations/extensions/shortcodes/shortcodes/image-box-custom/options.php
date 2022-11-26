<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'image'   => [
        'type'  => 'upload',
        'label' => __('Choose Image', 'fw'),
        'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw')
    ],
    'link'   => [
        'type'  => 'text',
        'label' => __('Link', 'fw'),
    ],
    'title'   => [
        'type'  => 'text',
        'label' => __('Title of the Box', 'fw'),
    ],
    'content' => [
        'type'  => 'textarea',
        'label' => __('Content', 'fw'),
        'desc'  => __('Enter the desired content', 'fw'),
    ],
];
