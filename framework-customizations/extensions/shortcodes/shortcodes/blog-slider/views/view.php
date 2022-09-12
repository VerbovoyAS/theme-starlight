<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if (!is_numeric($atts['amount_news'])) {
    $atts['amount_news'] = 4;
}
$query = new WP_Query( [ 'category_name' => $atts['category'], 'posts_per_page' => $atts['amount_news'] ] );
?>

            <div id="sliderNews" class="block block-news mb-3 p-0">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php for ($i = 0; $i < $atts['amount_news']; $i++):?>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i;?>" class="<?= $i === 0 ? 'active': '';?>"></li>
                        <?php endfor;?>
                    </ol>
                    <div class="carousel-inner rounded-3 shadow">

                        <?php
                        $indx = 0;
                        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                        ?>
                        <?php
                            $img_url = get_the_post_thumbnail_url() ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
                            $indx++;
                        ?>
                        <div class="carousel-item <?= $indx === 1 ? 'active' : ''?>">
                            <img class="d-block w-100" src="<?= $img_url;?>" alt="Первый слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <a class="text-decoration-none link-light shadow" href="<?php the_permalink();?>">
                                    <h3 ><?php the_title();?></h3>
                                </a>
                                <p>добавить описание</p>
                            </div>
                        </div>
                        <?php endwhile;?>

                        <?php else:?>
                            <div class="col">
                                <p>В данной категории нет записей</p>
                            </div>
                        <?php endif;?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
