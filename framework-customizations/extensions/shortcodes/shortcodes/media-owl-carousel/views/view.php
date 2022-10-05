<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
if (empty($atts['image'])) {
    return;
}

$items = (int)$atts['items'] ?? 5;
$itemsTable = (int)$atts['items_table'] ?? 3;
$itemsMobile = (int)$atts['items_mobile'] ?? 1;
?>


<div class="owl-carousel owl-theme">
    <?php
    foreach ($atts['image'] as $img):
        $img_url = $img['url'] ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
        ?>
        <div class="item">
            <img class="" src="<?= $img_url; ?>">
        </div>
    <?php endforeach; ?>
</div>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
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


