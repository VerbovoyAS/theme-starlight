<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
if (isset($atts['dismissing']) && ((bool)$atts['dismissing']) === true){
    $dismissing = true;
}
?>
<div class="alert alert-<?php echo esc_attr($atts['type']); ?> <?php echo !empty($dismissing) ? ' alert-dismissible fade show' : ''; ?>" role="alert">
	<?php
    // Реализовать иконки позже
//	switch ( $atts['type'] ) {
//		case 'success' :
//			echo '<i class="fa fa-check-circle alert-icon"></i>';
//			echo '<strong>' . __('congratulations!', 'fw') . '</strong> ';
//			break;
//		case 'info' :
//			echo '<i class="fa fa-exclamation-circle alert-icon"></i>';
//			echo '<strong>' . __('Information!', 'fw') . '</strong> ';
//			break;
//		case 'warning' :
//			echo '<i class="fa fa-warning alert-icon"></i>';
//			echo '<strong>' . __('Alert!', 'fw') . '</strong> ';
//			break;
//		case 'danger' :
//			echo '<i class="fa fa-times-circle alert-icon"></i>';
//			echo '<strong>' . __('Error!', 'fw') . '</strong> ';
//			break;
//	}
	echo $atts['message'];
	?>
    <?php if (isset($dismissing) && $dismissing):?>
        <button type="button" class="btn-close my-2" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php endif;?>
</div>