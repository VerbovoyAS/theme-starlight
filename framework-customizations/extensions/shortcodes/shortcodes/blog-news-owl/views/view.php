<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

if (!is_numeric($atts['amount_news'])) {
    $atts['amount_news'] = 6;
}
$i = rand(1,100);
$items =  4;
$itemsTable =  3;
$itemsMobile =  1;
?>

<style>
    .owl-item,
    .owl-stage {
        height: 100%;!important;
    }
</style>

<?php $query = new WP_Query( [ 'category_name' => $atts['category'], 'posts_per_page' => $atts['amount_news'] ] );?>

<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="owl-carousel owl-theme">
    <?php
    foreach ($query->get_posts() as $WPost):
        $img_url = get_the_post_thumbnail_url($WPost) ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
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


<!--<section class="pt-2 pb-3">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div id="carouselExampleControlsNoTouching---><?//= $i; ?><!--" class="carousel slide" data-bs-touch="false"-->
<!--                 data-bs-interval="false">-->
<!--                <div class="row">-->
<!--                    <div class="col-6 text-right">-->
<!--                        <h3 class="mb-3 ms-2">--><?//= $atts['headers'] ?? ''; ?><!-- </h3>-->
<!--                    </div>-->
<!--                    <div class="col-6 d-grid gap-2 d-flex justify-content-end">-->
<!--                        <a class="btn btn-outline-secondary mb-3 mr-1"-->
<!--                           data-bs-target="#carouselExampleControlsNoTouching---><?//= $i; ?><!--" role="button"-->
<!--                           data-bs-slide="prev">-->
<!--                            <i class="fa fa-arrow-left"></i>-->
<!--                        </a>-->
<!--                        <a class="btn btn-outline-secondary mb-3 me-2"-->
<!--                           data-bs-target="#carouselExampleControlsNoTouching---><?//= $i; ?><!--" role="button"-->
<!--                           data-bs-slide="next">-->
<!--                            <i class="fa fa-arrow-right"></i>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="carousel-inner">-->
<!--                    --><?php
//                    $active = 'active';
//                    if ($query->have_posts()) : foreach (array_chunk($query->get_posts(), 3) as $chunk) : $query->the_post();
//                        ?>
<!--                        <div class="carousel-item px-2 --><?//= $active; ?><!--">-->
<!--                            <div class="row row-cols-1 row-cols-md-3 g-4">-->
<!--                                --><?php
//                                $active = '';
//                                /** @var WP_Post $WPost */
//                                foreach ($chunk as $WPost):
//                                    $img_url = get_the_post_thumbnail_url(
//                                        $WPost
//                                    ) ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
//                                    ?>
<!--                                    <div class="col">-->
<!--                                        <div class="card h-100">-->
<!--                                            <img src="--><?//= $img_url; ?><!--" class="card-img-top"-->
<!--                                                 alt="--><?//= $WPost->post_title ?><!--">-->
<!--                                            <div class="card-body">-->
<!--                                                <h5 class="card-title">--><?//= $WPost->post_title ?><!--</h5>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //endforeach; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //endforeach; ?>
<!---->
<!--                    --><?php //else: ?>
<!--                        <div class="col">-->
<!--                            <p>TEST</p>-->
<!--                        </div>-->
<!---->
<!--                    --><?php //endif; ?>
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->
<!---->
