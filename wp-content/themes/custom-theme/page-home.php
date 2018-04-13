<?php
/**
Template Name: Homepage
 */
?>
	<!-- container -->
	<div class="page-container">
		<div class="bg-container bg-block-content-1">
			<section class="header">
				<div class="row" style="padding-top:30px;">

					<div class="wrap_content">
						<div class="col-md-4 left">
							<a href="<?php echo get_option('home'); ?>">
								<?php the_custom_logo(); ?>
							</a>
						</div>
						<div class="col-md-8 right">
							<span class="white right"><img src="<?php bloginfo('template_directory'); ?>/images/denver-home/phone.png"> Call us to receive your custom quote (xxx) xxx-xxxx</span>
							<br class="clear">
							<hr class="line-default">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
					</div>

					<br class="clear"/>

					<div class="wrap_content" style="margin-top:25px;padding-bottom:45px;">
						<div class="col-md-3 left">
							<div class="left_menu">
								<?php
									$v = 0;
									$menuargs = array(
										"theme_location" => "primary",
										"menu_class" => "s-menu",
										"menu_id" => "LEFT-MENU",
									);
									$items = wp_get_nav_menu_items( 'LEFT-MENU', $menuargs);
								?>
								<ul class="left-menu">
									<?php foreach( $items as $item ){ ?>
										<li class="left-menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-md-9 left">
							<img src="<?php bloginfo('template_directory'); ?>/images/denver-home/home-banner.jpg">
						</div>
					</div>

					<br class="clear"/>
				</div>
				<div class="bg-container bg-block-content-2" style="height:300px;">
					<div class="col-md-3 left"></div>
					<div class="col-md-9 left txt-banner-container">
						<span class="header">Do you want a residential wine cellar design that enhances your home’s interior decor in the most elegant way ?</span>
						<br>
						<span class="sub-text">The inclusion of an exquisite wine cellar is sure to lead to an increase in the value of your residential home while creating unforgettable memories. </span>
						<br><br/>
						<a class="red-btn" href="#">GET STARTED TODAY</a>
						<br><br>
						<span class="sub-text underline">Custom Wine Cellars Denver can help you through the steps of building an exceptionally unique wine cellar that is tailored to your aesthetic goals</span>
					</div>
				</div>
			</section>

			<section class="links-section">
				<div class="row link-container">
					<div class="wrap_content">

						<div class="col-md-4 link-block left">
							<div class="bg-block-link-1 img-link">
								<span>Link 1</span>
							</div>
						</div>
						<div class="col-md-4 link-block left">
							<div class="bg-block-link-2 img-link">
								<span>Link 2</span>
							</div>
						</div>
						<div class="col-md-4 link-block left">
							<div class="bg-block-link-3 img-link">
								<span>Link 3</span>
							</div>
						</div>

						<div class="col-md-4 left text-link-block">
							<span>Looking to create a positive emotional experience for your customers while dramatically increasing sales?</span>
							<a href="#">Call us</a>
						</div>
						<div class="col-md-4 left text-link-block">
							<span>Do you want to work with a wine cellar builder who is as passionate about your wine collection as you are?</span>
							<a href="#">Request 3D Design</a>
						</div>
						<div class="col-md-4 left text-link-block">
							<span>Do you have a problem with your existing wine cellar? Is your wine cellar's refrigeration systems on the fritz?</span>
							<a href="#">Email us</a>
						</div>
					</div>
				</div>
			</section>

<?php get_header(); ?>
<?php get_footer(); ?>