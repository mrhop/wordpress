<?php
/**
 * shanyue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shanyue
 */

if ( ! function_exists( 'shanyue_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shanyue_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shanyue, use a find and replace
		 * to change 'shanyue' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shanyue', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'shanyue' ),
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


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'shanyue_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shanyue_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shanyue_content_width', 640 );
}

add_action( 'after_setup_theme', 'shanyue_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shanyue_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shanyue' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shanyue' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'shanyue_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shanyue_scripts() {
	wp_enqueue_style( 'shanyue-style', get_stylesheet_uri() );

	wp_enqueue_style( 'shanyue-vendors-css', get_template_directory_uri() . '/assets/css/vendors.css' );

	wp_enqueue_script( 'shanyue-initial-js', get_template_directory_uri() . '/assets/js/initial.js', array(), '', true );
	wp_enqueue_script( 'shanyue-common-js', get_template_directory_uri() . '/assets/js/common.js', array(), '', true );
	wp_enqueue_script( 'shanyue-vendors-js', get_template_directory_uri() . '/assets/js/vendors.js', array(), '', true );
	wp_enqueue_script( 'shanyue-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'shanyue_scripts' );


/**
 * Enqueue admin scripts and styles.
 */
function shanyue_admin_theme_style() {
	wp_enqueue_style( 'shanyue-admin-css', get_template_directory_uri() . '/assets/css/admin.css' );
}

add_action( 'admin_enqueue_scripts', 'shanyue_admin_theme_style' );

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
 * add_theme_support post-formats
 **/
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'audio',
	'quote',
	'link',
	'gallery',
) );
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// for custom page parts
require get_template_directory() . '/inc/customizer-page-section.php';


