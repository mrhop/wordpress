<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shanyue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shanyue' ); ?></a>

    <header id="masthead" class="site-header container">
		<?php
		$shanyue_header_section = get_theme_mod( 'shanyue_header_section_hideshow' );
		if ( $shanyue_header_section == 'show' ) {
			?>
            <div class="top-info row">
                <div class="col col-md-4 welcome"><?php echo get_theme_mod( 'shanyue_header_welcome' ); ?></div>
                <div class="col col-md-8 contact">
                    <div class="email">
						<?php
						$shanyue_header_email_value = get_theme_mod( 'shanyue_header_email_value' );
						if ( $shanyue_header_email_value != '' ) {
							?>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:<?php echo $shanyue_header_email_value ?>"><?php echo $shanyue_header_email_value ?></a>
						<?php } ?>
                    </div>
                    <div class="phone">
						<?php
						$shanyue_header_phone_value = get_theme_mod( 'shanyue_header_phone_value' );
						if ( $shanyue_header_phone_value != '' ) { ?>
                            <i class="fa fa-phone"></i><?php echo $shanyue_header_phone_value ?>
						<?php } ?>
                    </div>
                    <div class="wechat">
						<?php
						$shanyue_header_wechat_value = get_theme_mod( 'shanyue_header_wechat_value' );
						if ( $shanyue_header_wechat_value != '' ) {
							?>
                            <i class="fa fa-wechat"></i>
							<?php echo __( 'QRcode', 'shanyue' ) ?>
                            <img src="<?php echo $shanyue_header_wechat_value ?>"/>
						<?php } ?>
                    </div>
                    <div class="facebook">
						<?php
						$shanyue_header_facebook_value = get_theme_mod( 'shanyue_header_facebook_value' );
						if ( $shanyue_header_facebook_value != '' ) {
							?>
                            <i class="fa fa-facebook"></i>
                            <a href="<?php echo $shanyue_header_facebook_value ?>" target="_blank">
								<?php echo __( 'Access Facebook', 'shanyue' ) ?></a>
						<?php } ?>
                    </div>
                </div>
            </div>
		<?php } ?>
        <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
				?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                         rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$shanyue_description = get_bloginfo( 'description', 'display' );
			if ( $shanyue_description || is_customize_preview() ) :
				?>
                <p class="site-description"><?php echo $shanyue_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shanyue' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
