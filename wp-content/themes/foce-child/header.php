<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site"> -->
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header>
        <div class="home-bar">
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <button class="nav-toggler" type="button" aria-label="toggle curtain navigation">
                <span class="line l1"></span>
                <span class="line l2"></span>
                <span class="line l3"></span>
            </button>
        </div>
        <nav id="nav">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_no_studio.png'; ?>" alt="">
        <ul>
            <li><a href="#story">Histoire</a></li>
            <li><a href="#characters">Personnages</a></li>
            <li><a href="#place">Lieu</a></li>
            <li><a href="#studio">Studio Koukaki</a></li>
        </ul>
        <a href="#">STUDIO KOUKAKI</a>
        <div class="nav__images">
            <img class="nav__images-absolute nav__images-1 nav__images-flowers" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-2 nav__images-cats floating-Y" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/kawaneko_little.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-3 nav__images-cats floating-Y" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/orenjiiro_little.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-4 nav__images-cats floating-Y" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Jaakuna_little.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-5 nav__images-flowers" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-6 nav__images-flowers" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-7 nav__images-flowers" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>" alt="">
            <img class="nav__images-absolute nav__images-8 nav__images-flowers" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="">
            
        </div>
    </nav>
</div>
</header>
    <!-- #site-navigation -->
    <!-- #masthead -->
