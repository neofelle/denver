
      <section class="banner-footer">
        <div class="row banner-footer-container">
          <div class="wrap_content">
            <div class="bg-banner-footer-1" style="width:100%;">
              <div class="wrapper-banner">
                <span class="header">Are you looking for a way to keep your wine collection organized so that you can show your prized vintages off to guests?</span>
                <br/>
                <span class="sub-header">Show your authority over your hobby. Learn how to organize your treasured wine collection so that entertaining your family and friends can turn into an engaging and lively experience!</span>
                <br class="clearr"/>
                <a href="#">Be one step closer to owning your one-of-a-kind wine cellar</a>
              </div>
            </div>
          </div>

          <br class="clear"/>

          <div class="wrap_content" style="margin-top:50px;">

            <div class="footer-a left">
              <div class="footer-block">
                <span class="header">GET STARTED TODAY</span>
                <?php
                  $v = 0;
                  $menuargs = array(
                    "theme_location" => "primary",
                    "menu_class" => "s-menu",
                    "menu_id" => "MAIN-MENU",
                  );
                  $items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
                ?>
                <ul class="footer-menu">
                  <?php foreach( $items as $item ){ ?>
                    <li class="left-menu-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="footer-b left">
              <div class="footer-block">
                <span class="header">PROJECT FEATURES</span>
                <ul class="project-list">
                  <li><a href="#">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</a></li>
                  <li><a href="#">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</a></li>
                  <li><a href="#">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</a></li>
                </ul>
              </div>
            </div>

            <div class="footer-c left">
              <div class="footer-block">
                <span class="header">STAY IN TOUCH</span>
                <br/>
                <span class="content"><img class="icon-footer left" src="<?php bloginfo('template_directory'); ?>/images/denver-home/gps-icon.png"> 2127 S Vasco Road Suite A
Livermore, CA 94550</span>
                <br/>
                <span class="content"><img class="icon-footer left" src="<?php bloginfo('template_directory'); ?>/images/denver-home/phone.png"> (123) 456 7890</span>
                <br/>
                <span class="content"><img class="icon-footer left" src="<?php bloginfo('template_directory'); ?>/images/denver-home/message-icon.png"> info@website.com</span>
            </div>
          </div>

          <div class="footer-d left">
            <div class="footer-block">
              <span class="header">RECEIVE OUR 3D DESIGN REQUEST</span>
              <br/>
              <span class="content">We are sure we can impress you with our expertise and low price</span>
              <br/>
              <input type="text" placeholder="Email Address" />
              <br/>
              <a class="email-submit" href="#">SUBMIT</a>
            </div>
          </div>

          <br class="clear"/>
          </div>
        </div>
      </section>

      <section class="copyright">
        <div class="col-md-12 copyright-container">
          <div class="wrap_content">
            <hr class="divider">
            <span class="copyright center">Copyright All Rights Reserved © 2017</span>
          </div>
        </div>
      </section>


    </div>

  <!-- footer-->
  </div> <!-- footer-container -->
<script>
$(function() {
  var pull    = $('#pull');
    menu    = $('.mobiletop ul');
    menuHeight  = menu.height();

  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
  $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
    });
});
</script>
<?php wp_footer();?>
</body>
</html> 