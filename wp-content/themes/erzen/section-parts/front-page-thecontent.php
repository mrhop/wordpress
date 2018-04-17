<?php 
// To display The Content section on front page
?>

<?php if(have_posts()) : 
	 while(have_posts()) : the_post();  
	 if(get_the_content()!= "")
	 {?>
		<div class="news_area sp">
			<div class="container">
				<div class="row">
						<?php the_content(); ?> 
				</div>
			</div> 
		</div> 
	 <?php }	
endwhile;
endif; ?>	

