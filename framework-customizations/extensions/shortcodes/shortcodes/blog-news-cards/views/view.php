<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $atts
 */

if (!is_numeric($atts['amount_news']) || !isset($atts['amount_news'])) {
    $atts['amount_news'] = 6;
}

if (!is_numeric($atts['amount_news_screens']) || !isset($atts['amount_news_screens'])) {
    $atts['amount_news_screens'] = 3;
}

$i = rand(1, 100);
?>

<?php $query = new WP_Query(['category_name' => $atts['category'], 'posts_per_page' => $atts['amount_news']]); ?>


<section class="pt-2 pb-3">
    <div class="row">
        <div id="carouselExampleControlsNoTouching-<?= $i; ?>" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="row">
                <div class="col-6 text-right">
                    <h3 class="mb-3 ms-2"><?= $atts['headers'] ?? ''; ?> </h3>
                </div>
                <div class="col-6 d-grid gap-2 d-flex justify-content-end">
                    <a class="btn btn-outline-secondary mb-3 mr-1"
                       data-bs-target="#carouselExampleControlsNoTouching-<?= $i; ?>" role="button"
                       data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-outline-secondary mb-3 me-2"
                       data-bs-target="#carouselExampleControlsNoTouching-<?= $i; ?>" role="button"
                       data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-inner">
                <?php
                $active = 'active';
                if ($query->have_posts()) : foreach (
                    array_chunk(
                        $query->get_posts(),
                        $atts['amount_news_screens']
                    ) as $chunk
                ) : $query->the_post();
                    ?>
                    <div class="carousel-item <?= $active; ?>">
                        <div class="row row-cols-1 row-cols-md-<?= $atts['amount_news_screens']; ?> g-4">
                            <?php
                            $active = '';
                            /** @var WP_Post $WPost */
                            foreach ($chunk as $WPost):
                                $img_url = get_the_post_thumbnail_url(
                                    $WPost
                                ) ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
                                ?>
                                <div class="col">
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
                <?php endforeach; ?>

                <?php else: ?>
                    <div class="col">
                        <p>Нет записей для категории: <?= $atts['category'] ?? '' ?></p>
                    </div>

                <?php endif; ?>
            </div>

        </div>

</section>
