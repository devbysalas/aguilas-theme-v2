<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aguilas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <style>

        .site-header-full-viewport {
                background:linear-gradient(0deg,rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(<?php echo get_theme_mod('home_hero_mobile_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>) center no-repeat;
                background-size: 100%;
        }

        @media (min-width: 576px) {
            .site-header-full-viewport {
                background:linear-gradient(0deg,rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(<?php echo get_theme_mod('home_hero_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>) center no-repeat;
                background-size: 100%;
            }
        }
    </style>

</head>

<body <?php body_class(); ?>>
<div class="nav-container">

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aguilas' ); ?></a>

    <header id="masthead" class="site-header-full-viewport">

        <nav id="menu" class="navbar fixed-top navbar-expand-lg navbar-light" role="navigation">

            <div class="container site-branding navbar-brand">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            </div><!-- .site-branding -->

            <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-text-menu">MENU</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu([
                    'menu'					=>	'primary',
                    'theme_location'		=>	'primary',
                    'container'				=>	'div',
                    'container_id'			=>	'bs4navbar',
                    'container_class'		=>	'collapse navbar-collapse',
                    'menu_id'				=>	'main-menu',
                    'menu_class' 			=>	'navbar-nav ml-auto',
                    'depth'					=>	2,
                    'fallback_cb'			=>	'bs4navwalker::fallback',
                    'walker'				=>	new bs4navwalker()
                ]);
            ?>
        </nav>
        <div class="hero-content">
            <h1 class="white hero-heading"><?php echo get_theme_mod('home_hero_heading', 'YAY I build a theme'); ?></h1>
            <h3 class="white hero-text"><?php echo get_theme_mod('home_hero_text', 'The official WordPress theme for Aguilas Centro Familiar Cristiano.'); ?></h3>
        </div>
        <div class="social">
            <a href="<?php echo get_theme_mod('social1_url'); ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="<?php echo get_theme_mod('social2_url'); ?>" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="<?php echo get_theme_mod('social3_url'); ?>" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo get_theme_mod('social4_url'); ?>" target="_blank">
                <i class="fa fa-youtube"></i>
            </a>
            <a href="<?php echo get_theme_mod('social5_url'); ?>" target="_blank">
                <i class="fa fa-globe"></i>
            </a>
        </div>
    </header><!-- #masthead -->
</div>
