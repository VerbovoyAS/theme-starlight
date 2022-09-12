<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package hashtag
 */

/** Счетчик количества просмотров страницы */
setPostViews(get_the_ID());

get_header();

$defaultImg = 'https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg';

/** @var WP_Post $nextPost */
//$nextPost = get_next_post();
//$getPrevPostImg = get_the_post_thumbnail_url($nextPost->ID);
//$nextPostImg = $getPrevPostImg ? $getPrevPostImg : $defaultImg;
/** @var WP_Post $prevPost */
//$prevPost = get_previous_post();
//$getPrevPostImg = get_the_post_thumbnail_url($prevPost->ID);
//$prevPostImg = $getPrevPostImg ? $getPrevPostImg : $defaultImg;
?>
    <div class="container ">
        <div class="row">
            <div class="col px-0">
                <div class="card bg-dark text-white mb-2">
                    <img src="https://creativo.one/lessons/les5669/01.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title"><?php the_title(); ?></h1>
                        <p class="card-text"><?php the_excerpt(); ?></p>
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
        <div class="col-12 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="row w-100">
                <div class="col-9">
                        <span class="d-flex align-items-center justify-content-end ms-3 text-muted"
                              title="<?php the_time('l, j F Y'); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                 class="me-2 bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <?php the_time('j F Y'); ?>
                        </span>
                </div>
                <div class="col-3">
                        <span class="d-flex align-items-center justify-content-end ms-3 text-muted" title="Просмотров ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                 class="me-2 bi bi-eye" viewBox="0 0 16 16">
                              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                            <?php echo getPostViews(get_the_ID()); ?>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12 col-lg-8">
    <div class="row">
        <div class="col shadow mb-2 p-3 bg-body rounded-3"><?php the_content(); ?></div>
    </div>
    <hr>
    <div class="row">
    <div class="col-12 col-md-6">
        <h4 class="text-center text-md-start">Предыдущая запись</h4>
        <?php
        /** @var WP_Post $prevPost */
        $prevPost = get_previous_post();
        if (!empty($prevPost)) :
        $getPrevPostImg = get_the_post_thumbnail_url($prevPost->ID);
        $prevPostImg = $getPrevPostImg ?: $defaultImg;
        ?>
        <div class="col">
            <div class="d-flex row g-0">
                <div class="col-md-4 d-flex align-items-start p-1">
                    <a href="">
                        <img src="<?php echo esc_html($prevPostImg); ?>" alt="..."
                             class="img-fluid rounded d-inline-block">
                    </a>
                </div>
                <div class="col-md-8 p-1">
                    <div class="pb-2">
                        <a class="text-decoration-none link-secondary" href="<?php echo get_permalink($prevPost); ?>">
                            <h5 class="card-title text-center text-md-start"><?php echo esc_html(
                                    $prevPost->post_title
                                ); ?></h5>
                        </a>
                        <div class="d-flex justify-content-between flex-column">
                            <p class="card-text text-center text-md-start"><small
                                        class="text-muted"><?php echo esc_html(
                                        wp_date('j F Y', strtotime($prevPost->post_date))
                                    ); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>

    </div>

    <div class="col-12 col-md-6">
        <h4 class="text-center text-md-end">Следующая запись</h4>
        <?php
        /** @var WP_Post $nextPost */
        $nextPost = get_next_post();
        if (!empty($nextPost)) :
            $getPrevPostImg = get_the_post_thumbnail_url($nextPost->ID);
            $nextPostImg = $getPrevPostImg ? $getPrevPostImg : $defaultImg;
            ?>
        <div class="col">
            <div class="d-flex row g-0">
                <div class="col-md-8 p-1">
                    <div class="pb-2">
                        <a class="text-decoration-none link-secondary" href="<?php echo get_permalink($nextPost); ?>">
                            <h5 class="card-title text-center text-md-end"><?php echo esc_html(
                                    $nextPost->post_title
                                ); ?></h5>
                        </a>
                        <div class="d-flex justify-content-between flex-column">
                            <p class="card-text text-center text-md-end"><small class="text-muted"><?php echo esc_html(
                                        wp_date('j F Y', strtotime($nextPost->post_date))
                                    ); ?></small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-end p-1">
                    <a href="">
                        <img src="<?php echo esc_html($nextPostImg); ?>" alt="..."
                             class="img-fluid rounded d-inline-block">
                    </a>
                </div>
            </div>
        </div>
        <?php endif;?>

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

    <?php
    get_footer();

