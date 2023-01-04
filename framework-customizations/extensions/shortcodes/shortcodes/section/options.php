<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
	'custom_style' => array(
		'type'  => 'switch',
		'value' => 'hello',
		'label' => __('Добавить стили', 'fw'),
		'desc'  => __('Добавление стилей для столбцов', 'fw'),
		'help'  => 'Если включить этот параметр, тогда внутри секции ячейка добавятся стили',
	),
    'owl_style' => array(
        'type'  => 'switch',
        'value' => false,
        'label' => __('Карусель из элементов', 'fw'),
        'desc'  => __('Сделать карусель из элементов', 'fw'),
    ),
    'owl_items'        => [
    'label'   => __('ПК версия', 'fw'),
    'desc'    => __('Количество отображаемых элементов в ПК версии', 'fw'),
    'type'    => 'select',
    'value'   => '4',
    'choices' => [
        '1' => __('1', 'fw'),
        '2' => __('2', 'fw'),
        '3' => __('3', 'fw'),
        '4' => __('4', 'fw'),
        '5' => __('5', 'fw'),
        '6' => __('6', 'fw'),
    ]
],
    'owl_items-table'  => [
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
    'owl_items-mobile' => [
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
);
