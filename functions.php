<?php
/**
 * hashtag functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 * @package hashtag
 */

//  require_once get_template_directory() . '/Hashtag_Header_Menu_Walker.php';

/* START ПОДКЛЮЧЕНИЕ СТИЛЕЙ ДЛЯ КОРРЕКТНОГО МЕНЮ BOOTSTRAB */
require_once(get_template_directory() . '/Hashtag_Header_Menu_Walker.php');
/* /END ПОДКЛЮЧЕНИЕ СТИЛЕЙ ДЛЯ КОРРЕКТНОГО МЕНЮ BOOTSTRAB */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hashtag_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on hashtag, use a find and replace
        * to change 'hashtag' to the name of your theme in all the template files.
        */
    load_theme_textdomain('hashtag', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        [
            'header-menu' => esc_html__('Главное меню', 'hashtag'),
        ]
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'hashtag_custom_background_args',
            [
                'default-color' => 'ffffff',
                'default-image' => '',
            ]
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]
    );
}

add_action('after_setup_theme', 'hashtag_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hashtag_content_width()
{
    $GLOBALS['content_width'] = apply_filters('hashtag_content_width', 640);
}

add_action('after_setup_theme', 'hashtag_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hashtag_widgets_init()
{
    register_sidebar(
        [
            'name'          => esc_html__('Sidebar', 'hashtag'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'hashtag'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title text-center">',
            'after_title'   => '</h3>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__('Sidebar footer 1', 'hashtag'),
            'id'            => 'sidebar-footer-1',
            'description'   => esc_html__('Add widgets here.', 'hashtag'),
            'before_widget' => '<div id="%1$s" class="col-12 col-lg-3 offset-lg-1 mb-3 widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__('Sidebar footer 2', 'hashtag'),
            'id'            => 'sidebar-footer-2',
            'description'   => esc_html__('Add widgets here.', 'hashtag'),
            'before_widget' => '<div id="%1$s" class="col-12 col-lg-4 mb-3 widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__('Sidebar footer 3', 'hashtag'),
            'id'            => 'sidebar-footer-3',
            'description'   => esc_html__('Add widgets here.', 'hashtag'),
            'before_widget' => '<div id="%1$s" class="col-12 col-lg-4 mb-3 widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ]
    );
}

add_action('widgets_init', 'hashtag_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hashtag_scripts()
{
    wp_enqueue_style('hashtag-style', get_stylesheet_uri(), [], _S_VERSION);
    wp_style_add_data('hashtag-style', 'rtl', 'replace');

    wp_enqueue_style(
        'hashtag-style-boostrap-5',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
    );
    wp_enqueue_style(
        'hashtag-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'
    );
    wp_enqueue_style('hashtag-style-main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('hashtag-style-menu-css', get_template_directory_uri() . '/assets/css/style-menu.css');

    wp_enqueue_script('hashtag-navigation', get_template_directory_uri() . '/js/navigation.js', [], _S_VERSION, true);

    wp_enqueue_script(
        'hashtag-paralax-js',
        'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js',
        [],
        '',
        true
    );
    wp_enqueue_script(
        'hashtag-boostrap-5-bundle-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
    );
    // wp_enqueue_script('hashtag-boostrap-5-popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], '', true);

     wp_enqueue_script('hashtag-boostrap-5-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [], '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'hashtag_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * @param $postID
 * @return string
 */
function getPostViews($postID): string
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

/**
 * @param $postID
 * @return void
 */
function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Remove issues with prefetching adding extra views
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

