<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'tabs'      => [
        'type'          => 'addable-popup',
        'label'         => __('Tabs', 'fw'),
        'popup-title'   => __('Add/Edit Tab', 'fw'),
        'desc'          => __('Create your tabs', 'fw'),
        'template'      => '{{=tab_title}}',
        'popup-options' => [
            'tab_title'   => [
                'type'  => 'text',
                'label' => __('Title', 'fw')
            ],
            'tab_content' => [
                'type'  => 'textarea',
                'label' => __('Content', 'fw')
            ]
        ],
    ],
    'tab_style' => [
        'label'   => __('Стили табов', 'fw'),
        'desc'    => __('Выбирете как отображать табы', 'fw'),
        'type'    => 'select',
        'choices' => [
            ''              => __('обычные табы', 'fw'),
            'nav-fill'      => __('заполнить табы', 'fw'),
            'nav-justified' => __('выровнить табы', 'fw'),
        ]
    ],
];