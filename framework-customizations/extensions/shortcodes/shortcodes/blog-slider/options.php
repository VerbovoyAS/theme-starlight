<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'category' => array(
        'label'   => 'Категории',
        'desc'    => 'Выберете категорию для отображения',
        'type'    => 'select',
        'choices' => FW_Shortcode_Blog_Slider::getPostCategories()
    ),
    'amount_news' => array(
        'type'  => 'text',
        'value' => '4',
        'label' => __('Количество выводимых новостей', 'fw'),
        'desc'  => __('Сколько новостей хотите отобразить?', 'fw'),
        'help'  => 'Укажите сколько новостей хотите отобразить на странице',
    )
);
