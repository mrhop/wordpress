<?php
/**
 * Template part - AboutUs Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Erzen
 */

$erzen_about_title =  get_theme_mod('erzen-about_title');  
$erzen_aboutus_section     = get_theme_mod( 'erzen_aboutus_section_hideshow','hide');

$about_no        = 1;
$about_pages      = array();
for( $i = 1; $i <= $about_no; $i++ ) {
	$about_pages[]    =  get_theme_mod( "erzen_about_page_$i", 1 );
}
$about_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $about_pages ),
	'posts_per_page' => absint($about_no),
	'orderby' => 'post__in'
   
); 

$about_query = new   wp_Query( $about_args );

if( $erzen_aboutus_section == "show" && $about_query->have_posts() ) :
?>

<!-- 05. about_area -->
<div class="about_area section-space-88-64 cbb">
	<div class="container">
		<div class="row  section_title wow fadeInUp">
			<div class="col-md-12  text-center">
				<?php if($erzen_about_title != "")
					{?>
						<h2><?php echo esc_html(get_theme_mod('erzen-about_title')); ?></h2>
						<div class="section-seprater"> <span class="section-style"></span></div>
						<?php 
					}?>	
				<p><?php echo  esc_html(get_theme_mod('erzen-about_subtitle')); ?></p>
			</div>
		</div>
		<div class="row about">
			<?php 
				while($about_query->have_posts()) :
				$about_query->the_post();
				?>
			<div class="single_about col-md-12 col-sm-12 wow fadeInUp">
				<div class="col-md-12 mb-30">
					<div class="col-md-6">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array('class'=> 'img-responsive')); ?></a>
					</div>
					<div class="col-md-6">
						<div class="about_content">
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
				
			</div>   
			<?php
				 
				endwhile;
				wp_reset_postdata();
				?>
		</div>
	</div>
</div>
  <?php
    endif;
?>
<!-- 05. /about_area -->