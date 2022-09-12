<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

if (!is_numeric($atts['amount_news'])) {
    $atts['amount_news'] = 4;
}
?>

<?php $query = new WP_Query( [ 'category_name' => $atts['category'], 'posts_per_page' => $atts['amount_news'] ] );?>

<div class="row row-cols-1 row-cols-xl-2 ">
	<?php
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
            $img_url = get_the_post_thumbnail_url() ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
    ?>

	<div class="col">
			<div class=" d-flex row g-0">
				<div class="col-md-4 d-flex align-items-start p-1">
					<img src="<?= $img_url;?>" alt="..." class="img-fluid rounded d-inline-block">
				</div>
				<div class="col-md-8 p-1">
					<div class="pb-2">
						<a class="text-decoration-none link-secondary" href="<?php the_permalink();?>">
							<h5 class="card-title"><?php the_title();?></h5>
						</a>
						<div class="d-flex justify-content-between flex-column">
						<p class="card-text"><small class="text-muted"><?php the_time('j F Y'); ?></small></p>
						<!-- <p><a href="<?php the_permalink();?>" class="btn btn-outline-secondary btn-sm">Читать</a></p> -->
						</div>
					</div>
				</div>
			</div>
	</div>
		
	<?php endwhile;?>  


	<?php else:?>
    <div class="col">
		<p>TEST</p>
    </div>

        <?php endif;?>
</div>
