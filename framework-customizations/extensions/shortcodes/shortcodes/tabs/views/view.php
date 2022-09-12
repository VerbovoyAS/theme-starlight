<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php

$tab_style = !empty($atts['tab_style']) ? $atts['tab_style'] : '';
?>

<ul class="nav nav-tabs m-0 <?php echo esc_attr($tab_style); ?>" id="myTab" role="tablist">
    <?php foreach (fw_akg( 'tabs', $atts, array() ) as $key => $tab) : ?>
    <li class="nav-item" role="presentation">
        <button class="nav-link <?php echo  $key === 0 ? 'active': '';?>" id="tab-<?= ($key + 1)?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?= ($key + 1)?>" type="button" role="tab" aria-controls="tab-<?= ($key + 1)?>" aria-selected="<?php echo  $key === 0 ? 'true': 'false';?>"><?php echo $tab['tab_title']; ?></button>
    </li>
    <?php endforeach; ?>
</ul>
<div class="tab-content" id="myTabContent">
    <?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
    <div class="tab-pane fade <?php echo  $key === 0 ? 'show active': '';?>" id="tab-<?= ($key + 1)?>" role="tabpanel" aria-labelledby="tab-<?= ($key + 1)?>-tab">
        <?php echo do_shortcode( $tab['tab_content'] ) ?>
    </div>
    <?php endforeach; ?>
</div>


