<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

?>

<li id="news-<?php the_ID(); ?>">
    <!-- .entry-header -->
    <i class="fa fa-file-text"></i>
    <a href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_title(); ?>
    </a><?php
	$time_string = '<time class="entry-date published" datetime="%1$s"> -- %2$s</time>';
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date( 'Y-m-d H:i' ) )
	);
	echo $time_string; ?>
</li>
