<?php if (!defined('FW')) die('Forbidden');

//var_dump(FW_Shortcode_Widget_Area::get_sidebars());die();

$options = array(
	'sidebar' => array(
		'label'   => __( 'Sidebar', 'fw' ),
		'desc'    => '',
		'type'    => 'select',
		'choices' => FW_Shortcode_Widget_Area::get_sidebars()
	)
);