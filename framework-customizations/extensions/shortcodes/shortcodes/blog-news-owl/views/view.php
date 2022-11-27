<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

if (!is_numeric($atts['amount_news'])) {
    $atts['amount_news'] = 6;
}
$items =  $atts['items'] ?? 4;
$itemsTable = $atts['items-table'] ??  3;
$itemsMobile = $atts['items-mobile'] ?? 1;
$query = new WP_Query( [ 'category_name' => $atts['category'], 'posts_per_page' => $atts['amount_news'] ] );
?>

<style>
    .owl-item,
    .owl-stage {
        height: 100%;!important;
    }
</style>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="owl-carousel owl-theme">
        <?php
        foreach ($query->get_posts() as $WPost):
            $img_url = get_the_post_thumbnail_url(
                $WPost
            ) ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
            ?>
            <div class="col h-100">
                <div class="card h-100">
                    <img src="<?= $img_url; ?>" class="card-img-top"
                         alt="<?= $WPost->post_title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $WPost->post_title ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

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
