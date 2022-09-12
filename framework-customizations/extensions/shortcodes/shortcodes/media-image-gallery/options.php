<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'multi-upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
    'grid'  => array(
        'label'   => __( 'Button Color', 'fw' ),
        'desc'    => __( 'Choose a color for your button', 'fw' ),
        'type'    => 'select',
        'choices' => array(
            'col-xl-3 col-lg-4 col-md-6 col-sm-12' => __( '4 столбца', 'fw' ),
            'col-xl-4 col-lg-6 col-md-6 col-sm-12'  => __( '3 столбца', 'fw' ),
            'col-xl-6 col-lg-6 col-md-6 col-sm-12' => __( '2 столбца', 'fw' ),
            'col-xl-12 col-lg-12 col-md-12 col-sm-12' => __( '1 столбца', 'fw' ),
        )
    ),
);

