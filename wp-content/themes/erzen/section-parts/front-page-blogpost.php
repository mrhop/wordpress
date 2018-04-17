<?php 
// To display Blog Post section on front page
?>
<?php  
$erzen_blog_title =  get_theme_mod('erzen_blog_title');  
$erzen_blog_section = get_theme_mod('erzen_blog_section_hideshow','show');
if ($erzen_blog_section =='show') { 
?>
<!-- 13. news_area -->
    <div class="news_area sp">
        <div class="container">
			<div class="row  section_title wow fadeInUp">
                <div class="col-md-12 text-center">
					<?php if($erzen_blog_title !="")
					{?>
						<h2><?php echo esc_html(get_theme_mod('erzen_blog_title')); ?></h2>
						<div class="section-seprater"> <span class="section-style"></span></div>
						<?php 
					} ?>
					<p><?php echo esc_html(get_theme_mod('erzen_blog_subtitle')); ?></p>
                </div>
            </div>
			 <div class="row">
			<?php 
			   $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
			   if ( $latest_blog_posts->have_posts() ) : 
			   while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
			?>
		   
                <div class="col-md-4 col-sm-6 col-xs-12  single_news wow fadeInUp">
                    <span>
                     
						<a class="news_img" href="<?php the_permalink() ?>"><?php the_post_thumbnail('erzen-blog-front-thumbnail',array('class'=>'img-responsive')); ?>
						</a>
                        <span class="news_content">
                            <span class="entry-date">
                                <?php 
								$date_format =  get_option( 'date_format' );
								echo esc_html( get_the_time($date_format) ); ?>
                            </span>
							<br>
                            <a class="h3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				        </span>
                    </span>
                </div>
            
			<?php endwhile; 
			endif; ?>
			</div>
        </div>
    </div>
    <!-- 13. /news_area -->
	
<?php } ?>
<!-- 13. /news_area -->
