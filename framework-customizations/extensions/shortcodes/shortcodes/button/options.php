<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => __( 'Button Label', 'fw' ),
		'desc'  => __( 'This is the text that appears on your button', 'fw' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'   => array(
		'label' => __( 'Button Link', 'fw' ),
		'desc'  => __( 'Where should your button link to', 'fw' ),
		'type'  => 'text',
		'value' => '#'
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'fw' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'fw'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'fw'),
		),
	),
	'color'  => array(
		'label'   => __( 'Button Color', 'fw' ),
		'desc'    => __( 'Choose a color for your button', 'fw' ),
		'type'    => 'select',
		'choices' => array(
            'primary' => __( 'Primary', 'fw' ),
            'secondary'  => __( 'Secondary', 'fw' ),
            'success' => __( 'Success', 'fw' ),
            'danger'   => __( 'Danger', 'fw' ),
            'warning'   => __( 'Warning', 'fw' ),
            'info'   => __( 'Info', 'fw' ),
            'light'   => __( 'Light', 'fw' ),
            'dark'   => __( 'Dark', 'fw' ),
		)
	),
);