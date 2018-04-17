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
                <div class="wrap_content page-menu" style="padding-bottom: 0px;">
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
                        <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/page/content', 'page' );
                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </section>

<?php get_footer(); ?>