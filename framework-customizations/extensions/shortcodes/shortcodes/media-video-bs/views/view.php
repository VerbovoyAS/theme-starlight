<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
global $wp_embed;
$iframe = $wp_embed->run_shortcode( '[embed]' . trim( $atts['url'] ) . '[/embed]' );
?>
<div class="ratio <?= $atts['format']?>">
    <?= $iframe?>
</div>