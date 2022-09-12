<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
	'list_style' => array(
		'type'  => 'switch',
		'value' => 'hello',
		'label' => __('Добавить стили списку', 'fw'),
		'desc'  => __('Добавление стилей списков', 'fw'),
		'help'  => 'Если включить этот параметр, тогда у списков появятся звёзды',
	),
    'block_style' => array(
        'type'  => 'switch',
        'value' => 'hello',
        'label' => __('Добавить стили блоку', 'fw'),
        'desc'  => __('Добавление стилей блоку', 'fw'),
        'help'  => 'Если включить этот параметр, тогда у блока будет белый фон и закругленные края',
    )
);
