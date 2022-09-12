<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hashtag
 */

$imgUrl = get_the_post_thumbnail_url() ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';
?>


    <div class="col">
        <div class="card h-100 shadow mb-2 p-3 bg-body rounded-3">
<!--            <img src="--><?php //echo $img_url = get_the_post_thumbnail_url() ?: 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';?><!--" class="card-img-top" alt="...">-->
                <a href="<?php the_permalink(); ?>"><div class="rounded-3" style='min-height:150px; background-color: #D3D3D3; background-size: cover; background-position: center; background-image: url("<?php echo $imgUrl; ?>")' ></div></a>
            <div class="pt-3 ">
                <a class="text-decoration-none link-secondary" href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                <a class="text-decoration-none link-secondary" href="<?php the_permalink(); ?>"><p class="card-text"><?php the_excerpt(); ?></p></a>
            </div>
        </div>
    </div>

