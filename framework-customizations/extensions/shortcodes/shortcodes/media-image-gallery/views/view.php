<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
if ( empty( $atts['image'] ) ) {
	return;
}

$grid_class = !empty($atts['grid']) ? "{$atts['grid']}" : '';
?>

<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
    <?php foreach ($atts['image'] as $img):?>

    <?php
        $srcFull = wp_get_attachment_image_url( $img['attachment_id'], 'full' );
        $description = wp_get_attachment_caption($img['attachment_id']) ?? '';
        $alt = get_post_meta($img['attachment_id'], '_wp_attachment_image_alt', true);
    ?>

    <div class="<?php echo esc_attr($grid_class); ?> my-1">
        <a href="<?= $srcFull; ?>" data-sub-html="<?= $description; ?>">
            <img class="img-fluid img-thumbnail mx-auto d-block" src="<?= $srcFull; ?>" alt="<?= $alt; ?>">
        </a>
    </div>
    <?php endforeach;?>
</div>
