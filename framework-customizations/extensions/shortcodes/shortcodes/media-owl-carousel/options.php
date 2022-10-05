<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'image'        => [
        'type'  => 'multi-upload',
        'label' => __('Choose Image', 'fw'),
        'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw')
    ],
    'items'        => [
        'label'   => __('ПК версия', 'fw'),
        'desc'    => __('Количество отображаемых элементов в ПК версии', 'fw'),
        'type'    => 'select',
        'value'   => '5',
        'choices' => [
            '1' => __('1', 'fw'),
            '2' => __('2', 'fw'),
            '3' => __('3', 'fw'),
            '4' => __('4', 'fw'),
            '5' => __('5', 'fw'),
        ]
    ],
    'items-table'  => [
        'label'   => __('Версия для планшета', 'fw'),
        'desc'    => __('Количество отображаемых элементов в версии для планшета', 'fw'),
        'type'    => 'select',
        'value'   => '3',
        'choices' => [
            '1' => __('1', 'fw'),
            '2' => __('2', 'fw'),
            '3' => __('3', 'fw'),
            '4' => __('4', 'fw'),
            '5' => __('5', 'fw'),
        ]
    ],
    'items-mobile' => [
        'label'   => __('Мобильная версия', 'fw'),
        'desc'    => __('Количество отображаемых элементов в мобильной версии', 'fw'),
        'type'    => 'select',
        'value'   => '1',
        'choices' => [
            '1' => __('1', 'fw'),
            '2' => __('2', 'fw'),
            '3' => __('3', 'fw'),
            '4' => __('4', 'fw'),
            '5' => __('5', 'fw'),
        ]
    ],
];
