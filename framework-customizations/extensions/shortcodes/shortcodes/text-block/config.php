<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Text Block', 'fw' ),
	'description' => __( 'Add a Text Block', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
    'title_template' => "<b>{{- title }}:</b> {{- o.text.replace(/<\/?[^>]+>/gi, '').substring(0,20) }} ",
);
