<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'multi-upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
    'toggle' => array(
        'type'  => 'switch',
        'label'   => __( 'Кнопки навигации', 'fw' ),
        'desc'    => __( 'На слайдере появятся кнопки навигации по слайдеру', 'fw' ),
        'right-choice' => array(
            'value' => 1,
            'label' => __('вкл', 'fw'),
        ),
        'left-choice' => array(
            'value' => 0,
            'label' => __('выкл', 'fw'),
        ),
    ),
);

