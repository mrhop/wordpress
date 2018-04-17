<?php

/**
 * erzen functions and definitions
  @package Erzen
 *
 */
function erzen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'erzen_content_width', 980 );
}
add_action( 'after_setup_theme', 'erzen_content_width', 0 );
 

 
if( ! function_exists( 'erzen_theme_setup' ) ) {

	function erzen_theme_setup() {
		
	   load_theme_textdomain( 'erzen', get_template_directory() . '/languages' );
	   
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 		

		// Add default logo support		
        add_theme_support( 'custom-logo' );	
		
		// To use additional css
 	      add_editor_style( 'css/editor-style.css' );
		
		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );
	    
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		add_theme_support('post-thumbnails');
		
		
		add_image_size('erzen-photo-360-240', 360, 240, true);
		add_image_size('erzen-photo-240-240', 300, 300, true);
		add_image_size('erzen-photo-800-500', 800, 500, true);
		add_image_size('erzen-page-thumbnail',738,423, true);
		add_image_size('erzen-blog-front-thumbnail',370,225, true);
		add_image_size('erzen-slider-thumbnail',1350,600, true);
		
		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );
		
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	   
		// Menus
		add_theme_support( 'menus' );
        register_nav_menus(array(
       'primary' => esc_html__('Primary Menu', 'erzen')
       ));		

	}
	add_action( 'after_setup_theme', 'erzen_theme_setup' );
}


 	

  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');
/**
 * Customizer additions.
 */

require get_template_directory(). '/inc/customizer.php';
require get_template_directory(). '/inc/extras.php';



/**
 * Enqueue CSS stylesheets
 */
 
 
if( ! function_exists( 'erzen_enqueue_styles' ) ) {
	function erzen_enqueue_styles() {		
		wp_enqueue_style('g-font', get_template_directory_uri() . '/css/erzen-font-family.css', array(), '', 'all');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6', 'all');
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0', 'all');
		wp_enqueue_style('slider-style', get_template_directory_uri() . '/css/owl.carousel.css', array(), '', 'all');
		wp_enqueue_style('hover-style', get_template_directory_uri() . '/css/hover.css', array(), '2.0.1', 'all');
		wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.css', array(), '3.5.1', 'all');
		// main style
		wp_enqueue_style( 'erzen-style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'erzen_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */

if( ! function_exists( 'erzen_enqueue_scripts' ) ) {
	function erzen_enqueue_scripts() {   
		wp_enqueue_script('jquery');
		wp_enqueue_script('erzen_verdor-js', get_template_directory_uri() . '/js/verdor.js', array(), '', true);
		wp_enqueue_script('erzen_sticky-js', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.0.4', true);
		wp_enqueue_script('erzen_active-js', get_template_directory_uri() . '/js/active.js', array(), '', true);	
	}
	add_action( 'wp_enqueue_scripts', 'erzen_enqueue_scripts' );
}


/**
 * Register sidebars for erzen
*/

function erzen_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => esc_html__( 'Blog Sidebar', "erzen"),
		'id' => 'blog-sidebar',
		'description' => esc_html__( 'Sidebar on the blog layout.', "erzen"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));

   	

	// Footer Sidebar
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 1', "erzen"),
		'id' => 'erzen-footer-widget-area-1',
		'description' => esc_html__( 'The footer widget area 1', "erzen"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 2', "erzen"),
		'id' => 'erzen-footer-widget-area-2',
		'description' => esc_html__( 'The footer widget area 2', "erzen"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 3', "erzen"),
		'id' => 'erzen-footer-widget-area-3',
		'description' => esc_html__( 'The footer widget area 3', "erzen"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 4', "erzen"),
		'id' => 'erzen-footer-widget-area-4',
		'description' => esc_html__( 'The footer widget area 4', "erzen"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));		
}

add_action( 'widgets_init', 'erzen_sidebars' );




/*
* TGM plugin activation register hook 
*/

require_once get_template_directory() . '/extras/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/extras/theme-default-setup.php';

/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */

require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/class-customize.php' ); 


/**
 * Filter the except length to 12 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function erzen_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'erzen_custom_excerpt_length', 999 ); 

/**
 * Comment layout
 */
function erzen_comments( $comment, $args, $depth ) { ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('comment-box'); ?>>
		 <?php if ($comment->comment_approved == '0') : ?>
			<div class="alert alert-info">
			  <p><?php esc_html_e( 'Your comment is awaiting moderation.', 'erzen' ) ?></p>
			</div>
		  <?php endif; ?>
		 <div class="media wow fadeInUp">
			<div class="media-left">
			<a href="#"><?php echo get_avatar( $comment,60, null,'comments user', array( 'class' => array( 'media-object','' ) )); ?></a>
				
			  </div>	
			 
			  <div class="media-body">
				<h4 class="media-heading">
					<?php 
					/* translators: '%1$s %2$s: edit term */
					printf(esc_html__( '%1$s %2$s', 'erzen' ), get_comment_author_link(), edit_comment_link(esc_html__( '(Edit)', 'erzen' ),'  ','') ) ?>
        		</h4>
				<span><time datetime="<?php echo comment_time('Y-m-j'); ?>"><?php comment_time(__( 'F jS, Y', 'erzen' )); ?></time></span>
				<p><?php comment_text() ?></p>
				<p class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
			  </div>
		</div>
       
      
<?php
} 

if ( !function_exists( 'erzen_breadcrumb' ) ) :
////////////////////////////////////////////////////////////////////
// Breadcrumbs
////////////////////////////////////////////////////////////////////
	function erzen_breadcrumb() {
		global $post, $wp_query;

		$home		 = esc_html_x( 'Home', 'breadcrumb', 'erzen' );
		$delimiter	 = esc_html__( ' /' , 'erzen');
		$homeLink	 = esc_url(home_url());
		if ( is_home() || is_front_page() ) {

			// no need for breadcrumbs in homepage
		} else {
			echo '<div id="breadcrumbs" >';
			echo '<div class="breadcrumbs-inner text-right">';

			// main breadcrumbs lead to homepage

			echo '<span><a href="' . esc_url( $homeLink ) . '">' . '<i class=""></i><span>' . $home . '</span>' . '</a></span>' . $delimiter . ' ';

			// if blog page exists

			if ( 'page' == get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) ) {
				echo '<span><a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '">' . '<span>' . esc_html__( 'Blog', 'erzen' ) . '</span></a></span>' . $delimiter . ' ';
			}

			if ( is_category() ) {
				$thisCat = get_category( get_query_var( 'cat' ), false );
				if ( $thisCat->parent != 0 ) {
					$category_link = get_category_link( $thisCat->parent );
					echo '<span><a href="' . esc_url( $category_link ) . '">' . '<span>' . get_cat_name( $thisCat->parent ) . '</span>' . '</a></span>' . $delimiter . ' ';
				}

				
				echo '<span>' . '<span>' . get_the_archive_title() . '</span>' . '</span>';
			} elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type	 = get_post_type_object( get_post_type() );
					$link		 = get_post_type_archive_link( get_post_type() );
					if ( $link ) {
						printf( '<span><a href="%s">%s</a></span>', esc_url( $link ), $post_type->labels->name );
						echo ' ' . $delimiter . ' ';
					}
					echo get_the_title();
				} else {
					$category = get_the_category();
					if ( $category ) {
						foreach ( $category as $cat ) {
							echo '<span><a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . '<span>' . $cat->name . '</span>' . '</a></span>' . $delimiter . ' ';
						}
					}
                    echo '<span>';
					echo get_the_title();
					echo '</span>';
				}
			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() && !is_search() ) {
				$post_type = get_post_type_object( get_post_type() );
				echo $post_type->labels->singular_name;
			} elseif ( is_attachment() ) {
				$parent = get_post( $post->post_parent );
				echo '<span><a href="' . esc_url( get_permalink( $parent ) ) . '">' . '<span>' . $parent->post_title . '</span>' . '</a></span>';
				echo ' ' . $delimiter . ' ' . get_the_title();
			} elseif ( is_page() && !$post->post_parent ) {
				echo '<span><a href="' . esc_url( get_permalink() ) . '">' . '<span>' . get_the_title() . '</span>' . '</a></span>';
			} elseif ( is_page() && $post->post_parent ) {
				$parent_id	 = $post->post_parent;
				$breadcrumbs = array();
				while ( $parent_id ) {
					$page			 = get_post( $parent_id );
					$breadcrumbs[]	 = '<span><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . '<span>' . get_the_title( $page->ID ) . '</span>' . '</a></span>';
					$parent_id		 = $page->post_parent;
				}

				$breadcrumbs = array_reverse( $breadcrumbs );
				for ( $i = 0; $i < count( $breadcrumbs ); $i++ ) {
					echo $breadcrumbs[ $i ];
					if ( $i != count( $breadcrumbs ) - 1 )
						echo ' ' . $delimiter . ' ';
				}

				echo $delimiter . '<span><a href="' . esc_url( get_permalink() ) . '">' . '<span>' . the_title_attribute( 'echo=0' ) . '</span>' . '</a></span>';
			}
			elseif ( is_tag() ) {
				

				echo '<span>' . '<span>' . get_the_archive_title() . '</span>' . '</span>';
			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata( $author );
				echo '<span><a href="' . esc_url( get_author_posts_url( $userdata->ID ) ) . '">' . '<span>' . $userdata->display_name . '</span>' . '</a></span>';
			} elseif ( is_404() ) {
				echo esc_html__( 'Error 404', 'erzen' );
			} elseif ( is_search() ) {
				echo esc_html__( 'Search results for', 'erzen' ) . ' ' . get_search_query();
			} elseif ( is_day() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . '<span>' . get_the_time( 'F' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ) . '">' . '<span>' . get_the_time( 'd' ) . '</span>' . '</a></span>';
			} elseif ( is_month() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . '<span>' . get_the_time( 'F' ) . '</span>' . '</a></span>';
			} elseif ( is_year() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>';
			}

			if ( get_query_var( 'paged' ) ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
					echo ' (';
				echo esc_html__( 'Page', 'erzen' ) . ' ' . get_query_var( 'paged' );
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
					echo ')';
			}

			echo '</div></div>';
		}
	}


endif;

?>