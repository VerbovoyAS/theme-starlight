<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Notification', 'fw' ),
	'description' => __( 'Add a Notification Box', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
    'title_template' => '<b>{{- title }}:</b> {{- o.message.substring(0,20) }}',

);