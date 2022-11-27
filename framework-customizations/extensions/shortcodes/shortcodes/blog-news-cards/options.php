<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = [
    'category'    => [
        'label'   => 'Категории',
        'desc'    => 'Выберете категорию для отображения',
        'type'    => 'select',
        'choices' => FW_Shortcode_Blog_Slider::getPostCategories()
    ],
    'headers'     => [
        'type'  => 'text',
        'label' => __('Заголовок', 'fw'),
        'desc'  => __('Заголовок для отображения', 'fw'),
    ],
    'amount_news' => [
        'type'  => 'text',
        'value' => '4',
        'label' => __('Количество выводимых новостей', 'fw'),
        'desc'  => __('Сколько новостей хотите отобразить?', 'fw'),
        'help'  => 'Укажите сколько новостей хотите отобразить на странице',
    ],
    'amount_news_screens' => [
        'type'  => 'text',
        'value' => '3',
        'label' => __('Количество записей в одной карусели', 'fw'),
        'desc'  => __('Сколько новостей хотите отобразить?', 'fw'),
        'help'  => 'Укажите сколько новостей хотите отобразить на странице',
    ]
];
