<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hashtag
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<?php wp_head();?>

    <title>!NEW2020</title>
</head>

<body>

<header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
			<a class="navbar-brand" href="#">Fixed navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

				<?php 
					wp_nav_menu(
						[
							'container_class' => 'collapse navbar-collapse justify-content-md-center',
							'container_id'    => 'navbarCollapse',
							'theme_location' => 'header-menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav ml-auto stars-img">%3$s</ul>',
							'fallback_cb'       => 'Hashtag_Header_Menu_Walker::fallback',
								'walker'            =>  new Hashtag_Header_Menu_Walker()
						]
					);
				?>

            </div>
          </nav>
    </header>

	<script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("nav");
            header.classList.toggle("bg-dark", window.scrollY > 100)
        })
    </script>