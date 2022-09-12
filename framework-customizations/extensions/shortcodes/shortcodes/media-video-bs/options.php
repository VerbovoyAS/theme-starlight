<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'url'    => [
        'type'  => 'text',
        'label' => __('Insert Video URL', 'fw'),
        'desc'  => __('Insert Video URL to embed this video', 'fw')
    ],
    'format' => [
        'type'    => 'select',
        'value'   => 'ratio-16x9',
        'label'   => __('Формат видео', 'fw'),
        'desc'    => __('Выберите один из форматов видео: 16x9, 4x3, 1x1, 21x9', 'fw'),
        'choices' => [
            'ratio-16x9' => __('16x9', 'fw'),
            'ratio-4x3'  => __('4x3', 'fw'),
            'ratio-1x1'  => __('1x1', 'fw'),
            'ratio-21x9' => __('21x9', 'fw'),

        ],
    ]
];
