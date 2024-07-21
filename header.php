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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="site-navigation" class="main-navigation">
            <div class="burger">
                <span></span>
            </div>
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
        </div><!-- #site-navigation -->
        <nav id="menu" class="main-menu">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/Image_logo_en_paralax.png'; ?>" alt="logo">
        <a class="animationTitre" href="#story"><span>Histoire</span></a>
        <a class="animationTitre" href="#characters"><span>Personnages</span></a>
        <a class="animationTitre" href="#place"><span>Lieu</span></a>
        <a class="animationTitre" href="#studio-top"><span>Studio</span> <span>Koukaki</span></a>
        <img class="koukaki_logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/studio_koukaki.svg'; ?>" alt="Studio Koukaki">
        <img class="cat_orange float" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/cat_orange.png'; ?>" alt="chat orange">
        <img class="cat_blue float" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/cat_blue.png'; ?>" alt="chat bleu"> 
        <img class="cat_black float" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/cat_black.png'; ?>" alt="chat noir"> 
        <img class="flower-orchid rotation" src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?>" alt="Orchidée">
        <img class="flower rotation" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>" alt="Fleur">
        <img class="sunflower rotation" src="<?php echo get_template_directory_uri() . '/assets/images/sunflower.png'; ?>" alt="Tournesol">
        <img class="random_flower rotation" src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="Fleur diverse">
        <img class="hibiscus rotation" src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="hibiscus">
        </nav>
	</header><!-- #masthead -->
