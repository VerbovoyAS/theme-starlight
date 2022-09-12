<?php if (!defined('FW')) die('Forbidden');



$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$class2 = '';
if ($atts['custom_style']){
    $class2 .= ' shadow p-3 mb-2 bg-body rounded-3';
}

?>
<div class=" px-2 <?php echo esc_attr($class); ?>">
	<div class="<?php echo esc_attr($class2); ?>">
	<?php echo do_shortcode($content); ?>
	</div>
</div>
