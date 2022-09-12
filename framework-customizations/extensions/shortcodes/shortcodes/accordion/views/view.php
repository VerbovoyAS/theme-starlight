<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$grid_class = isset($atts['grid']) ? "{$atts['grid']}" : "";
?>

<?php $i = 1; ?>
<!-- accordions -->
<div class="accordion" id="accordionExample">
    <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) : ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= $i ?>">
                <button class="accordion-button <?php echo $i === 1 ? '': 'collapsed';?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i; ?>" aria-expanded="<?php echo $i === 1 ? 'true': 'false';?>" aria-controls="collapse<?= $i; ?>">
                    <?php echo $tab['tab_title']; ?>
                </button>
            </h2>
            <div id="collapse<?= $i ?>" class="accordion-collapse collapse <?php echo $i === 1 ? 'show': '';?>" aria-labelledby="heading<?= $i; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                     <?php echo do_shortcode( $tab['tab_content'] ); ?>
                    <?php if (isset($tab['gallery']) && $tab['gallery'] == true):?>
                    <!-- Галерея -->
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        <?php foreach ($tab['image'] as $img):
                            $srcFull = wp_get_attachment_image_url($img['attachment_id'], 'full');
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
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>
<!-- /accordion -->