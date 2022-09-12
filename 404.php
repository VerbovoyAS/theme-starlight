<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hashtag
 */

get_header();
?>

	<main id="primary" class="container p-0 mt-1">

		<section class="error-404 not-found">
            <div class="card text-center">
                <div class="card-header">
                    404
                </div>
                <div class="card-body">
                    <h5 class="card-title">Страница не найдена</h5>
                    <p class="card-text">Страницы не существует</p>
                    <a href="#" class="btn btn-primary">На Главную страницу</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
