<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'message'    => [
        'label' => __('Message', 'fw'),
        'desc'  => __('Notification message', 'fw'),
        'type'  => 'text',
        'value' => __('Message!', 'fw'),
        'template'      => '{{=message}}',
    ],
    'type'       => [
        'label'   => __('Type', 'fw'),
        'desc'    => __('Notification type', 'fw'),
        'type'    => 'select',
        'choices' => [
            'primary'   => 'Primary',
            'secondary' => 'Secondary',
            'success'   => 'Success',
            'info'      => 'Information',
            'warning'   => 'Warning',
            'danger'    => 'Danger',
            'light'     => 'Light',
            'dark'      => 'Dark',
        ]
    ],
    'dismissing' => [
        'type'  => 'switch',
        'value' => false,
        'label' => __('Добавить кнопку закрытия', 'fw'),
        'desc'  => __('Добавление кнопки закрытия уведомления', 'fw'),
    ]
];