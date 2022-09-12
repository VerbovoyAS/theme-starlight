<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$classes = '';
/**
 * Стили для рамок внутри секции
 */
if ( !empty($atts['list_style']) && ((boolean)$atts['list_style']) ) {
	$classes .= ' bg-body stars ';
}
/**
 * @var array $atts
 */
?>
<div class="mb-3 <?php echo esc_attr($classes); ?>">
    <label for="inputSearch" class="form-label"><? echo $atts['text_search'] ?? ''; ?></label>
    <input type="text" id="inputSearch" class="form-control" placeholder="Поиск.." title="Что вы хотите найти?">
</div>
