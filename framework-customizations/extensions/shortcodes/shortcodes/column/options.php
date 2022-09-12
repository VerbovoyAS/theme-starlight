<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'custom_style' => array(
		'type'  => 'switch',
		'value' => 'hello',
		'label' => __('Добавить стили', 'fw'),
		'desc'  => __('Добавление стилей для столбцов', 'fw'),
		'help'  => 'Если включить этот параметр, тогда внутри секции ячейка добавятся стили',
	)
);
