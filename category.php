<?php
/**
 * The template for displaying archive pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package hashtag
 */

get_header();
?>
<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

    <header class="page-header">
        <?php
        //                				the_archive_title( '<h1 class="page-title">', '</h1>' );
        //                				the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    //            while ( have_posts() ) :
    //                the_post();

    /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
    //                get_template_part( 'template-parts/content', get_post_type() );
    //
    //            endwhile;

    //			the_posts_navigation();

    //        else :
    //
    //            get_template_part( 'template-parts/content', 'none' );
    //
    //        endif;
    ?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
?>

<div class="container ">
    <div class="row">
        <div class="col px-0">
            <div class="card bg-dark text-white mb-2">
                <img src="https://creativo.one/lessons/les5669/01.jpg" class="card-img" alt="...">
                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                    <h1 class="card-title"><?php the_archive_title(); ?></h1>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row">
        <div class="col-12 col-lg-8 text-muted">
            <!-- Breadcrumbs -->
            <?php if (function_exists('fw_ext_breadcrumbs')) {
                fw_ext_breadcrumbs();
            } ?>
            <!-- /breadcrumb -->

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <?php

                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content-post', get_post_type());
                        endwhile;
                        the_posts_navigation();
                        else :
                            get_template_part('template-parts/content', 'none');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="row ms-lg-1">
                <div class="col shadow mb-2 p-3 bg-body rounded-3 stars">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

</div>
