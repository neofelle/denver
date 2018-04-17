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
				<div class="wrap_content_pages page-menu" style="padding-bottom: 0px;padding-right:1px;padding-left:1px;">
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
					<div class="col-md-9 left page-content-right" style="padding-right:1px;padding-left:1px;">
						<div class="col-md-12" style="padding-left:0px;">
						<header class="entry-header">
							<h1 class="entry-title">Blogs</h1>
						</header>
		                 <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;                    
		                       $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4, 'paged' => $paged)); ?>
		                    <?php if ( $wpb_all_query->have_posts() ) : ?>
		                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
									<div class="blog-block">
										<div class="col-md-3 left">
			                                <?php if(has_post_thumbnail()){ ?>
			                                    <?php the_post_thumbnail(); ?>
			                                <?php }else{ ?>
			                                	<img class="img-blog" src="<?php bloginfo('template_directory'); ?>/images/pages/blog.png">
			                                <?php } ?>
										</div>
										<div class="col-md-9 left">
											<h1><?php the_title(); ?></h1>
											<span class="blog-txt"><?php echo get_post_meta( get_the_ID(), 'short_desc', true); ?></span>
											<br/><br/>
											<a href="<?php the_permalink(); ?>" class="blog-read">READ MORE</a>
										</div>
										<br class="clear">
									</div>
	                        <?php endwhile; ?>
	                    <?php endif; ?>


		                <br style="clear:both;">
		                <div style="margin-top: 20px;text-align: center;padding-bottom: 40px;">
		                    <div>   
		                        <?php
		                            $big = 999999999; // need an unlikely integer
		                            echo paginate_links(array(
		                                'base' => str_replace($big,'%#%', get_pagenum_link($big)),
		                                'format' => '?paged=%#%',
		                                'current' => max( 1, get_query_var('paged') ),
		                                'total' => $wpb_all_query->max_num_pages
		                            ));
		                        ?>
		                        <?php  wp_reset_postdata(); ?>  
		                    </div>
		                </div>


						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>