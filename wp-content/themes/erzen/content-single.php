<div class="article_inner">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post_img wow fadeInUp">
			<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('erzen-page-thumbnail', array('class' => 'img-responsive')); ?>
			<?php endif; ?>
		</div>
		<div class="entry_header wow fadeInUp">
			<div class="entry_date"> 
				<?php the_time('F j, Y'); ?> 
			</div>
			<div><?php echo esc_html__('Posted By', 'erzen' ); ?>
				<a class="cPrimary" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" >
					<?php the_author(); ?>
				</a>
			</div>
			
			<div class="tags "><span> <?php the_tags(); ?> </span> </div>
		</div>
		<div class="post_content wow fadeInUp">
			<div class="h3"><?php the_title(); ?></div>
			<p><?php the_content(); ?></p>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages: ', 'erzen' ),
					'after'  => '</div>',
				) );
			?>
		</div>
    </div>
</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
