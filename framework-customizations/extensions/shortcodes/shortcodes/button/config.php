<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Button', 'fw' ),
	'description' => __( 'Add a Button', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'popup_size' => 'small',
    'title_template' => '<b>{{- title }}:</b> {{- o.label.substring(0,20) }} <b>Цвет:</b> {{- o.color }}',
);
