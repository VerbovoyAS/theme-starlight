<?php if (!defined('FW')) {
    die('Forbidden');
}

$cfg = [];

$cfg['page_builder'] = [
    'title'          => __('Special Heading', 'fw'),
    'description'    => __('Add a Special Heading', 'fw'),
    'tab'            => __('Content Elements', 'fw'),
    'title_template' => '<b>{{- title }}:</b> {{- o.title }} <b>Размер:</b> {{- o.heading }}',
];