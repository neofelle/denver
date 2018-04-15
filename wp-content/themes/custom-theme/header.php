<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>

    <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/normalize.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/bootstrap.min.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/768.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/mobile.css' media='all' />
    <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/mobile-menu.css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/menu-style.css' media='all' />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.mousewheel.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.requestAnimationFrame.js'></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<?php wp_head(); ?>
	<style>
		.bg-1 {
			background:url("<?php bloginfo('template_directory'); ?>/images/home/ribbon-red-bg.jpg") no-repeat;
			background-position: center 50px;
		}
		.bg-block-content-2-mobile {
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/mobile-banner.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-3-mobile {
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/mobile-banner-2.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-1 {
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/repeat-bg.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-2 {
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/bg-mid.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-link-1 {
			border:1px solid white;
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/link-1.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-link-2 {
			border:1px solid white;
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/link-2.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-block-link-3 {
			border:1px solid white;
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/link-3.jpg") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.bg-banner-footer-1 {
			border: 2px solid white;
			background:url("<?php bloginfo('template_directory'); ?>/images/denver-home/footer-banner.png") no-repeat;
			background-size: cover;
			background-position: center center;
		}
		.face-1 {
			background:url("<?php bloginfo('template_directory'); ?>/images/home/face-bg.png") no-repeat;
		    background-position: -0.8vw -0.2vw;
		    background-size: auto;
		}
	</style>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
	<?php
		$v = 0;
		$menuargs = array(
			"theme_location" => "primary",
			"menu_class" => "s-menu",
			"menu_id" => "MAIN-MENU",
		);
		$items_mobile = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
	?>
	<nav class="mobiletop">
		<ul id="menu-footer-menu" class="menu">
			<?php foreach( $items_mobile as $item ){ ?>
				<li class="menu-item "><a class="text-caps" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
			<?php } ?>
		</ul>
	</nav>
