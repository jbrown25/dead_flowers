<?php
/**
 * dead_flowers functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dead_flowers
 */

define('THEMEROOT', get_stylesheet_directory_uri());



if ( ! function_exists( 'dead_flowers_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dead_flowers_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dead_flowers, use a find and replace
	 * to change 'dead_flowers' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dead_flowers', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'dead_flowers' ),
		'footer' => esc_html__('Footer Menu', 'dead_flowers')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dead_flowers_custom_background_args', array(
		'default-color' => '000000',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'dead_flowers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dead_flowers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dead_flowers_content_width', 640 );
}
add_action( 'after_setup_theme', 'dead_flowers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function dead_flowers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dead_flowers' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name' => esc_html__('Frontpage_1', 'dead_flowers'),
		'id' => 'frontpage-1',
		'description' => 'First front page widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 wow animated fadeInUp" data-wow-delay=".2s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => esc_html__('Frontpage_2', 'dead_flowers'),
		'id' => 'frontpage-2',
		'description' => 'Second front page widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 wow animated fadeInUp" data-wow-delay=".4s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => esc_html__('Frontpage_3', 'dead_flowers'),
		'id' => 'frontpage-3',
		'description' => 'Third front page widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 wow animated fadeInUp" data-wow-delay=".6s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => esc_html__('Footer_1', 'dead_flowers'),
		'id' => 'footer-1',
		'description' => 'Footer widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4 wow animated fadeIn" data-wow-delay=".1s">',
		'after_widget' => '</div>',
	));
}
add_action( 'widgets_init', 'dead_flowers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dead_flowers_scripts() {
	wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Oswald', false);

	wp_enqueue_style('bootstrap-css', THEMEROOT . '/css/bootstrap.min.css');

	wp_enqueue_style('font-awesome-css', THEMEROOT . '/css/font-awesome.css');

	wp_enqueue_style('animate-css', THEMEROOT . '/css/animate.min.css');

	wp_enqueue_style( 'dead_flowers-style', get_stylesheet_uri() );

	wp_enqueue_script( 'dead_flowers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'dead_flowers-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script('bootstrap-js', THEMEROOT . '/js/bootstrap.min.js', array('jquery'), false, true);

	wp_enqueue_script('wow-js', THEMEROOT . '/js/wow.js', array('jquery'), false, true);

	wp_enqueue_script('dead_flowers-js', THEMEROOT . '/js/dead_flowers.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dead_flowers_scripts' );

if(!function_exists('html5_shiv')){
	function html5_shiv(){
		?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<?php
	}

	add_action('wp_head', 'html5_shiv');
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require_once get_template_directory() . '/inc/theme-functions.php';


require_once get_template_directory() . '/inc/init-widgets.php';
