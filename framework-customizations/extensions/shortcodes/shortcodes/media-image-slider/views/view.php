<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
if ( empty( $atts['image'] ) ) {
	return;
}
//var_dump($atts);die();

$grid_class = !empty($atts['grid']) ? "{$atts['grid']}" : '';
?>

<div id="sliderNews" class="block block-news mb-3 p-0">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner rounded-3 shadow">

            <?php
            $indx = 0;
            foreach ($atts['image'] as $img):
                ?>
                <?php
                $img_url = $img['url'] ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
                $indx++;
                ?>
                <div class="carousel-item <?= $indx === 1 ? 'active' : ''?>">
                    <img class="d-block w-100" src="<?= $img_url;?>" alt="Первый слайд">
                </div>
            <?php endforeach;?>


        </div>
        <?php if ($atts['toggle'] == '1'):?>
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i < count($atts['image']); $i++):?>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i;?>" class="<?= $i === 0 ? 'active': '';?>"></li>
            <?php endfor;?>
        </ol>
        <?php endif;?>
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
