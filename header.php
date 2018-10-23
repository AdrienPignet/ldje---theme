<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ldje
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700" rel="stylesheet">
	<?php wp_head(); ?>
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css">
</head>
<body <?php body_class(); ?>>
<header>
	<div class="center-mobile">
		<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-logo.svg" alt=""></a>
	</div>
	<div class="ldje-topbar">
		<div class="left">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    		<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<?php endif; ?>
			<p class="ldje-search"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-search.svg" alt=""></p>
		</div>
		<div class="center">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-logo.svg" alt=""></a>
		</div>
		<div class="right">
			<!-- <?php //if(get_locale() == 'fr_FR'){ ?> -->
				<a href="<?php echo wc_get_cart_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-cart.svg" alt="panier"><span class="cart-item"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
			<?php // } ?>
			<span class="menu-toggle"><i class="fas fa-bars"></i></span>
		</div>
	</div> <!-- end .ldje-topbar -->
	<div class="ldje-menu-desktop">
		<?php echo do_shortcode('[menu name="main menu"]'); ?>
	</div> <!-- end .ldje-menu-desktop -->
	<div class="ldje-menu-mobile">
		<?php echo do_shortcode('[menu name="main menu"]'); ?>
	</div> <!-- end .ldje-menu-desktop -->
</header>
<div class="ldje-search-container">
	<div class="close"></div>
	<div class="ldje-form-container">
		<?php echo do_shortcode('[yith_woocommerce_ajax_search]');?>
	</div>
</div>
