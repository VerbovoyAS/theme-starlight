<?php if (!defined('FW')) {
    die('Forbidden');
}

$cfg = [];

$cfg['page_builder'] = [
    'title'          => __('Image Box', 'fw'),
    'description'    => __('Add an Image Box', 'fw'),
    'tab'            => __('Content Elements', 'fw'),
    'title_template' => '<b>{{- title }}:</b> {{- o.title }}'
];
