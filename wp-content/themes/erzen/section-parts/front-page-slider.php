
<?php
/**
 * Template part - Features Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Erzen
 */

    $erzen_slider_section     = get_theme_mod( 'erzen_slider_section_hideshow','hide');
    
    $slider_no        = 3;
    $slider_pages      = array();
    for( $i = 1; $i <= $slider_no; $i++ ) {
        $slider_pages[]    =  get_theme_mod( "erzen_slider_page_$i", 1 );
        $erzen_slider_btntxt[]    =  get_theme_mod( "erzen_slider_btntxt_$i", 1 );
        $erzen_slider_btnurl[]    =  get_theme_mod( "erzen_slider_btnurl_$i", 1 );
	}
	$slider_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $slider_pages ),
        'posts_per_page' => absint($slider_no),
        'orderby' => 'post__in'
	   
    ); 
	
$slider_query = new   wp_Query( $slider_args );

if ($erzen_slider_section =='show' && $slider_query->have_posts() ) { ?>
    <!-- 02. home_area -->
    <div class="home_area">
        <div class="slider_preloader flex_center">
           <div class="slider_preloader_inner"></div>
        </div>
        <div class="home_slider">
		<?php
			$count = 0;
			while($slider_query->have_posts()) :
			$slider_query->the_post();
			?>
			<div class="single_slide overlay" style="background-image: url(<?php the_post_thumbnail_url('erzen-slider-thumbnail', array('class' => 'img-responsive')); ?>)">
			
            	
			<div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="home_content">
                                <div class="cell">
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php echo the_content(); ?></p>
                                    <a href="<?php echo esc_url($erzen_slider_btnurl[$count]); ?>" class="button hvr-bounce-to-right home_btn"><?php echo esc_attr($erzen_slider_btntxt[$count]); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
			?>	
        </div>
    </div>
    <!-- 02. /home_area -->
<?php } ?>
