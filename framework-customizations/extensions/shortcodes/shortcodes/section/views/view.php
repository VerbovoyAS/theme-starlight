<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}



$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'container-fluid' : 'container';

/** OWL карусель для элементов внутри секции */
$items =  $atts['owl_items'] ?? 4;
$itemsTable = $atts['owl_items-table'] ??  3;
$itemsMobile = $atts['owl_items-mobile'] ?? 1;
$owl_class = '';
if(!empty($atts['owl_style'])) {
    $owl_class = 'owl-carousel owl-theme';
}

/**
 * Стили для рамок внутри сексии
 */
if ( !empty($atts['custom_style']) && ((boolean)$atts['custom_style']) ) {
	$section_extra_classes .= ' px-1 block-style';
	$container_class = ' container-fluid ';
}
?>
<section class="main-row <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
	<div class="p-0 <?php echo esc_attr($container_class); ?> <?php echo esc_attr($owl_class); ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoHeight:true,
        responsive: {
            0: {
                items: <?= $itemsMobile ?>
            },
            600: {
                items: <?= $itemsTable ?>
            },
            1000: {
                items: <?= $items ?>
            }
        }
    })
</script>