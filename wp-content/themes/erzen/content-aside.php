<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry_header">
        <div class="entry_date"> 
			<?php 
		$date_format =  get_option( 'date_format' );
		the_time($date_format); ?> 
		</div>
        <div><?php echo esc_html__('Posted by', 'erzen' ); ?>
			<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
				<?php the_author(); ?>
			</a>
		</div>
		<div><?php echo esc_html__('in', 'erzen' ); ?>
			<a href="<?php the_permalink(); ?>" class=""><?php the_category(''); ?></a>
		</div>
		<div class="tags "><span> <?php the_tags(); ?> </span> </div>		
    </div>
    <div class="post_content">
        <a class="h3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p>  <?php the_excerpt(); ?></p>
		<a href="<?php the_permalink() ?>" class="button-2"><?php echo esc_html__('Continue Reading', 'erzen' ); ?><i class="fa fa-angle-right"></i></a>
    </div>
</div>					
							

							
							
							
							
							
							
							
