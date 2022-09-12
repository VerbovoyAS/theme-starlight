<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts ;
 * @var string $content ;
 * @var string $tag ;
 */
?>
<div class="shortcode-widget-area shadow p-3 mb-2 bg-body rounded-3 stars widget-title"><?php dynamic_sidebar( $atts['sidebar'] ); ?></div>
