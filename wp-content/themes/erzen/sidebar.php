<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Erzen
 */
if (is_active_sidebar('blog-sidebar')) 
      { ?>
	    <?php dynamic_sidebar('blog-sidebar'); ?>
<?php } ?>
