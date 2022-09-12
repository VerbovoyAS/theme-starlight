<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$classes = '';
$id = '';
/**
 * Стили для списков
 */
if ( !empty($atts['list_style']) && ((boolean)$atts['list_style']) ) {
	$classes .= ' stars';
    $id .= 'stars';
}

/**
 * Стили для рамок блока
 */
if ( !empty($atts['block_style']) && ((boolean)$atts['block_style']) ) {
    $classes .= ' shadow p-3 mb-2 bg-body rounded-3';
}

/**
 * @var array $atts
 */
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>
