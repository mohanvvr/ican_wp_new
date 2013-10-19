<!-- FOOTER -->

<footer>
  <div class="stripe clearfix">
    <div class="twitter"> </div>
  </div>
  <div class="mail">
    <div> <span class="element rightElement"></span> </div>
  </div>
  <div id="footerContent" >
    <section>
      <div class="clearfix">
        <div class="links column c-40 clearfix ">
          <h3>Links</h3><?php 
	  $mainmenu=array( 'sort_column' => 'menu_order', 'container' => false ,'menu_class' => 'footermenu', 'menu' => 'footermenu' );	  
	  wp_nav_menu($mainmenu); ?>           
        </div>
        <div class="news column c-30 clearfix">
          <h3>Locations</h3>
          <div class="clearfix">
            <div class="post clearfix"> <img src="<?php bloginfo('template_url');?>/img/other/map1.png" alt="">
              <div class="info">
                <p>Unit 4, 279 Queen St E Brampton,</p>
                <p>Ontario L6W 2C2</p>
                <p>Phone: 289 752 7141</p>
              </div>
            </div>
            <div class="post clearfix "> <img src="<?php bloginfo('template_url');?>/img/other/map2.png" alt="">
              <div class="info">
                <p>Unit 201, 3034 Palstan Road,</p>
                <p>Mississauga,Ontario L4Y 2Z6, </p>
                <p>Phone: 905-232-6400</p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact column c-30 clearfix ">
		
          <h3>Contact Form</h3>
           <?php echo do_shortcode("[contact-form-7 id='78' title='Contact form 1']") ?> 
        </div>
      </div>
      <div id="bottomFooter">
        <p>© <?php echo get_option('copyrights')?></p>
        <div>
          <ul id="social">
            <li><a id="finalFacebook" href="<?php echo get_option('facebook')?>" title="facebook">facebook</a></li>
            <li><a href="<?php echo get_option('twitter')?>" id="finalTwitter" title="twitter">twitter</a></li>
          </ul>
		  <?php 
	  $mainmenu=array( 'sort_column' => 'menu_order', 'container' => false ,'menu_id' => 'legal', 'menu' => 'legalmenu' );	  
	  wp_nav_menu($mainmenu); ?>          
        </div>
      </div>
    </section>
  </div>
</footer>

<!-- END SITE CONTENT --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/jquery.flexslider-min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/lightbox.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
</body>
</html>
