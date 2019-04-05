<?php
/**
 * premio-compliance functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package premio-compliance
 */

if ( ! function_exists( 'premio_compliance_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function premio_compliance_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on premio-compliance, use a find and replace
		 * to change 'premio-compliance' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'premio-compliance', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'premio-compliance' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'premio_compliance_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'premio_compliance_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function premio_compliance_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'premio_compliance_content_width', 640 );
}
add_action( 'after_setup_theme', 'premio_compliance_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function premio_compliance_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'premio-compliance' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'premio-compliance' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'premio_compliance_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function premio_compliance_scripts() {
	wp_enqueue_style( 'premio-compliance-style', get_stylesheet_uri() );

	wp_enqueue_script( 'premio-compliance-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'premio-compliance-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'premio_compliance_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function my_assets() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Droid+Sans', false );

	//CSS FILES
	wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array(), '', 'all' );

	wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '', 'all' );

	wp_enqueue_style( 'bootstrap4-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all' );

	wp_enqueue_style( 'fontawesome-css', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), '', 'all' );

	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/pc-styles.css', array(), '', 'all' );
	//

	// JS FILES
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.3.1.js', array(), '', true );

	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'fancybox-js', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap4-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	if(is_page('Home')){
		wp_enqueue_script( 'home-js', get_stylesheet_directory_uri() . '/assets/js/home-js.js', array( 'jquery' ), '', true );
	}
	//
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

