<?php

/**
 * Sathisoft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sathisoft
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('sathi_soft_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sathi_soft_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sathisoft, use a find and replace
		 * to change 'sathi-soft' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('sathi-soft', get_template_directory() . '/languages');

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
			array(
				'primary' => esc_html__('Primary', 'sathi-soft'),
				'footer1' => esc_html__('Footer Menu 1', 'sathi-soft'),
				'footer2' => esc_html__('Footer Menu 2', 'sathi-soft'),
				'footer3' => esc_html__('Footer Menu 3', 'sathi-soft'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_post_type_support('page', 'excerpt');

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sathi_soft_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'sathi_soft_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sathi_soft_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sathi_soft_content_width', 640);
}
add_action('after_setup_theme', 'sathi_soft_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sathi_soft_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sathi-soft'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sathi-soft'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__('Footer 1', 'sathi-soft'),
			'id'            => 'footer-1',
			'description'   => esc_html__('Add widgets here.', 'sathi-soft'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title footer__heading">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 2', 'sathi-soft'),
			'id'            => 'footer-2',
			'description'   => esc_html__('Add widgets here.', 'sathi-soft'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title footer__heading">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 3', 'sathi-soft'),
			'id'            => 'footer-3',
			'description'   => esc_html__('Add widgets here.', 'sathi-soft'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title footer__heading">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 4', 'sathi-soft'),
			'id'            => 'footer-4',
			'description'   => esc_html__('Add widgets here.', 'sathi-soft'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title footer__heading">',
			'after_title'   => '</h4>',
		)
	);
}
add_action('widgets_init', 'sathi_soft_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sathi_soft_scripts()
{
	wp_enqueue_style('sathisoft-botstrap-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', '20152215', true);
	wp_enqueue_style('sathi-soft-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sathi-soft-style', 'rtl', 'replace');

	// vendor styles 
	wp_enqueue_style('sathisoft-glider', get_template_directory_uri() . '/assets/css/vendor/glider.min.css', '20151215', true);
	wp_enqueue_style('sathisoft-slick', get_template_directory_uri() . '/assets/css/vendor/slick.css', '20151216', true);
	wp_enqueue_style('sathisoft-slick-theme', get_template_directory_uri() . '/assets/css/vendor/slick-theme.css', '20151217', true);
	wp_enqueue_style('sathisoft-slick-lightbox', get_template_directory_uri() . '/assets/css/vendor/slick-lightbox.css', '20151218', true);

	// vendor scripts. only uncomment if you have files in assets/js/vendor 
	wp_enqueue_script('sathisoft-vendor-scripts', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '20151215', true);
	//Library Scripts
	wp_enqueue_script('sathisoft-fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js', array(), '20161215', false);
	// custom sathisoft_scripts
	wp_enqueue_script('sathisoft-custom-scripts', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sathi_soft_scripts');


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


require get_template_directory() . '/inc/kirki/kirki.php';

require get_template_directory() . '/inc/kirki/config.php';
require get_template_directory() . '/inc/custom-post-types.php';


/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
	require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


function pre($data = '')
{

	echo '<pre>';
	print_r($data);
	echo '</pre>';
}


function custom_excerpt_more($excerpt)
{
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//pagination
function pagination($pages = '', $range = 3)
{
	$showitems = ($range * 2) + 1;

	global $paged;
	if (empty($paged)) $paged = 1;

	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	}

	if (1 != $pages) {
		echo "<div class=\"pagination_name\">";
		if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>&laquo; First</a>";
		if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo; Previous</a>";

		for ($i = 1; $i <= $pages; $i++) {
			if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				echo ($paged == $i) ? "<span class=\"current_name\">" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a href=\"" . get_pagenum_link($paged + 1) . "\">Next &rsaquo;</a>";
		if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) . "'>Last &raquo;</a>";
		echo "</div>\n";
	}
}

/*login page logo*/

function custom_login_logo()
{

	$logo_login = get_theme_mod('logo_img', '');

?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url('<?php echo $logo_login; ?>');
			padding-bottom: 0px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: contain;
			line-height: 4;
			width: 100%;
			height: 100%;
		}
	</style>
<?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');

add_filter('login_headerurl', 'custom_loginlogo_url');
function custom_loginlogo_url($url)
{
	$urll = home_url();
	return $urll;
}

/*hide "Category" from archive*/
function prefix_category_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'prefix_category_title');


add_theme_support('responsive-embeds');

function wpsites_disable_self_pingbacks(&$links)
{
	foreach ($links as $l => $link)
		if (0 === strpos($link, get_option('home')))
			unset($links[$l]);
}

add_action('pre_ping', 'wpsites_disable_self_pingbacks');



/*time ago format*/
function k99_relative_time()
{
	$post_date = get_the_time('U');
	$delta = time() - $post_date;
	if ($delta < 60) {
		echo '1 minute ago';
	} elseif ($delta > 60 && $delta < 120) {
		echo 'About a minute ago';
	} elseif ($delta > 120 && $delta < (60 * 60)) {
		echo strval(round(($delta / 60), 0)), ' minutes ago';
	} elseif ($delta > (60 * 60) && $delta < (120 * 60)) {
		echo 'About an hour ago';
	} elseif ($delta > (120 * 60) && $delta < (24 * 60 * 60)) {
		echo strval(round(($delta / 3600), 0)), ' hours ago';
	} elseif ($delta > (120 * 60 * 60) && $delta < (24 * 60 * 60 * 30)) {
		echo strval(round(($delta / 86400), 0)), ' Days ago';
	} else {
		echo the_time('j\<\s\u\p\>S\<\/\s\u\p\> M y g:i a');
	}
}


/*gallery*/
/*add_filter( 'render_block', function( $block_content, $block ) {
    if ( 'core/gallery' !== $block['blockName'] || ! isset( $block['attrs']['ids'] ) ) {
           return $block_content;
    }
    $li = '';
    foreach( (array) $block['attrs']['ids'] as $id ) {
        $li .= sprintf( '<li>%s</li>', wp_get_attachment_image( $id, 'large' ) );
    }
    return sprintf( '<ul>%s</ul>', $li ); 
}, 10, 2 );*/


/*count number of images inside post*/





/*for category single page*/


add_filter('single_template', 'themeslug_single_template');

/**
 * Add category considerations to the templates WordPress uses for single posts
 *
 * @global obj $post The default WordPress post object. Used so we have an ID for get_post_type()
 * @param string $template The currently located template from get_single_template()
 * @return string The new locate_template() result
 */
function themeslug_single_template($template)
{
	global $post;

	$categories = get_the_category();

	if (!$categories)
		return $template; // no need to continue if there are no categories

	$post_type = get_post_type($post->ID);

	$templates = array();

	foreach ($categories as $category) {

		$templates[] = "single-{$post_type}-{$category->slug}.php";

		$templates[] = "single-{$post_type}-{$category->term_id}.php";
	}

	// remember the default templates

	$templates[] = "single-{$post_type}.php";

	$templates[] = 'single.php';

	$templates[] = 'index.php';

	/**
	 * Let WordPress figure out if the templates exist or not.
	 *
	 * @see http://codex.wordpress.org/Function_Reference/locate_template
	 */
	return locate_template($templates);
}



/*menu classes*/

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

function wpse156165_menu_add_class($atts, $item, $args)
{
	$class = 'nav-link'; // or something based on $item
	$atts['class'] = $class;
	return $atts;
}

add_filter('nav_menu_css_class', 'v123_nav_class', 10, 2);
function v123_nav_class($classes, $item)
{
	if (in_array('menu-item-has-children', $classes)) {
		$classes[] = 'dropdown menu-has-children';
	}
	return $classes;
}
