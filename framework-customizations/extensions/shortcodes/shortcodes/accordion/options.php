<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'tabs' => [
        'type'          => 'addable-popup',
        'label'         => __('Tabs', 'fw'),
        'popup-title'   => __('Add/Edit Tabs', 'fw'),
        'desc'          => __('Create your tabs', 'fw'),
        'size'          => 'large',
        'template'      => '{{=tab_title}}',
        'popup-options' => [
            'tab_title'     => [
                'type'  => 'text',
                'label' => __('Title', 'fw')
            ],
            'tab_content'   => [
                'type'        => 'wp-editor',
                'label'       => __('Content', 'fw'),
                'size'        => 'large',
                'wpautop'     => true,
                'editor_type' => false,
            ],
            'group_gallery' => [
                'type'    => 'popup',
                'title'   => 'Добавить галерею',
                'options' => [
                    'gallery' => [
                        'type'  => 'switch',
                        'value' => 'hello',
                        'label' => __('Отобразить галерею', 'fw'),
                        'desc'  => __('Галерея отобразится под текстом таба', 'fw'),
                        'help'  => 'Если включить этот параметр, тогда под текстом появится галерея',
                    ],
                    'image'   => [
                        'type'  => 'multi-upload',
                        'label' => __('Choose Image', 'fw'),
                        'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw')
                    ],
                    'grid'    => [
                        'label'   => __('Количество элементов', 'fw'),
                        'desc'    => __('Количество отображаемых элементов', 'fw'),
                        'type'    => 'select',
                        'value'   => 'col-xl-12 col-lg-12 col-md-12 col-sm-12',
                        'choices' => [
                            'col-xl-3 col-lg-4 col-md-6 col-sm-12'    => __('4 столбца', 'fw'),
                            'col-xl-4 col-lg-6 col-md-6 col-sm-12'    => __('3 столбца', 'fw'),
                            'col-xl-6 col-lg-6 col-md-6 col-sm-12'    => __('2 столбца', 'fw'),
                            'col-xl-12 col-lg-12 col-md-12 col-sm-12' => __('1 столбца', 'fw'),
                        ]
                    ],
                ],
            ],
        ]
    ]
];
