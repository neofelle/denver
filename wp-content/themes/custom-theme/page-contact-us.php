<?php
/**
Template Name: Homepage
 */
?>
<?php get_header('pages'); ?>
	<!-- container -->
	<div class="page-container">
		<div class="bg-container">
			<section class="header">
				<div class="row r-1 bg-block-content-1" style="padding-bottom: 0px;">
					<div class="wrap_content menu-desktop">
						<div class="col-md-4 left" style="position: relative;top: 0px;">
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
					<div class="menu-mobile clear">
						<div class="ft-4 left">
							<a href="<?php echo get_option('home'); ?>">
								<?php the_custom_logo(); ?>
							</a>
						</div>
						<div class="ft-8 left" style="padding: 0px;">
							<a href="#" id="pull" style="width: 100%;display: block;text-align: right;"><img style="height: 99px;" src="<?php bloginfo('template_directory'); ?>/images/denver-home/mobile-menu.jpg" alt="Menu"></a>
						</div>
					</div>
					<div class="wrap_content contact-mobile " style="padding-top:15px;padding-bottom:15px;background-color: #e0d6ab;">
						<div class="col-md-12 left">
							<span class="mobile-text">Call us to receive your custom quote</span>
							<a class="mobile-text-big" href="#">(123) 456-7890</a>
						</div>
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="wrap_content_pages page-menu" style="padding-bottom: 0px;">
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
							<ul class="left-menu-pages">
								<?php foreach( $items as $item ){ ?>
									<li class="left-menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-md-9 left page-content-right">
						<article id="post-5" class="post-5 page type-page status-publish hentry">
							<div class="col-md-12">
								<header class="entry-header">
									<h1 class="entry-title">Contact Us</h1>
								</header>
								<div class="col-md-7 left" style="padding-left:0px;">
									<img src="http://localhost/tim/wordpress/denver/wp-content/uploads/2018/04/map.jpg"/>
									<br/><br/>
									<div class="col-md-5 left">
										Holistic Web Presence®
										<br/>
										258 South 700 East, Salt Lake City, Utah 84102
										<br/>
										+1 (801) 349 8226
									</div>
									<div class="col-md-7 left">
										<div style="float:right;">
											Follow Us
											<br/>
											<table>
												<tr>
													<td><a href="#"><img class="social-media" src="http://localhost/tim/wordpress/denver/wp-content/uploads/2018/04/facebook.png"></td>
													<td><a href="#"><img class="social-media" src="http://localhost/tim/wordpress/denver/wp-content/uploads/2018/04/twitter.png"></a></td>
													<td><a href="#"><img class="social-media" src="http://localhost/tim/wordpress/denver/wp-content/uploads/2018/04/google.png"></a></td>
													<td><a href="#"><img class="social-media" src="http://localhost/tim/wordpress/denver/wp-content/uploads/2018/04/linkedin.png"></a></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-md-5 left">
									<div class="form container">
										<span class="white-header">How can we help you?</span>
										<div class="contact-container">
											<?php echo do_shortcode( '[contact-form-7 id="81" title="Contact Us"]' ); ?>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>

<?php get_footer(); ?>