<?php
/**
 * Template part - Service Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Erzen
 */
  $erzen_services_title = get_theme_mod('erzen-services_title');
  $erzen_services_section     = get_theme_mod( 'erzen_services_section_hideshow','hide');
  $col_layout         = get_theme_mod( 'erzen_service_col_layout', '' );
   
   $erzen_service_no_excerpt = get_theme_mod('erzen_service_no_excerpt');
   
    $services_no        = 6;
    $services_pages      = array();
    $services_icons     = array();
    for( $i = 1; $i <= $services_no; $i++ ) {
        $services_pages[]    =  get_theme_mod( "erzen_service_page_$i", 1 );
		$services_icons[]    = get_theme_mod( "erzen_page_service_icon_$i", '' );
    }
	$services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $services_pages ),
        'posts_per_page' => absint($services_no),
        'orderby' => 'post__in'
	   
    ); 
	
$services_query = new   wp_Query( $services_args );
if( $erzen_services_section == "show" && $services_query->have_posts() ) :
?>
<!-- service_area -->
    <div class="service_area sp">
        <div class="container">
            <div class="row  section_title wow fadeInUp">
                <div class="col-md-12  text-center">
					<?php if($erzen_services_title != "")
					{?>
						<h2><?php echo esc_html(get_theme_mod('erzen-services_title')); ?></h2>
						<div class="section-seprater"> <span class="section-style"></span></div>
					<?php }?>
					<p><?php echo  esc_html(get_theme_mod('erzen-services_subtitle')); ?></p>
                </div>
            </div>	
			<div class="row text-center">
				<?php
				$count = 0;
				while($services_query->have_posts()) :
				$services_query->the_post();
				?>
				<div class="col-lg-<?php echo esc_html($col_layout); ?> col-md-<?php echo esc_html($col_layout); ?>">
					<div class="inner-header-wraper">
						<?php if($services_icons[$count] !="")
						{?>
							<a href="<?php the_permalink(); ?>"><i class="fa <?php echo esc_html($services_icons[$count]); ?> icon-circle" aria-hidden="true"></i></a>
						    <?php 
						} ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
				</div>
				<?php
				$count = $count + 1;
				endwhile;
				wp_reset_postdata();
				?>	
			</div>
        </div>
    </div>
    <!--  /service_area -->
<?php
    endif;
?>
<!--  /service_area -->