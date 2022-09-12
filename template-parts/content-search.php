<?php
/**
 * Template part for displaying results in search pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package hashtag
 */


$defaultImg = 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';

$postImg = get_the_post_thumbnail_url(get_the_ID());
$truePostImg = $postImg ?: $defaultImg;

?>

<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4 d-flex align-items-center">
            <img src="<?= $truePostImg; ?>" class="img-fluid rounded-start" alt="<?= the_title();?>">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <?php the_title(
                        sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
                        '</a></h2>'
                    ); ?>
                </h5>
                <?php if ('post' === get_post_type()) : ?>
                    <p class="card-text">
                        <small class="text-muted">
                            <?php
                            hashtag_posted_on();
                            hashtag_posted_by();
                            ?>
                        </small></p><!-- .entry-meta -->
                <?php endif; ?>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <p class="card-text"><?php hashtag_entry_footer(); ?></p>
            </div>
        </div>
    </div>
</div>

