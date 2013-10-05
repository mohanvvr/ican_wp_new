<?php
/**
 * The Header for Customizr.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrapper">
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>                          
<!--<![endif]-->
	<?php do_action( '__head' ); ?>

	<body>

	   	<header>
        <div class="parentContainer">
            <div id="socialButtons">
              <ul>
                <li> <a href="#">contact us </a></li>
                <li><a href="#">locations </a></li>
              </ul>
              <!-- <a href="#" id="linked">
                                <p>Connect width linked </p> 
                                <span>linked </span>
                            </a>--> 
              <a href="#" id="search">
              <p>Search</p>
              </a>
              <div id="linked"><span></span></div>
              <div id="facebook"><span></span></div>
            </div>
          </div>
		<div>
    <div id="menu">
      <section> <?php 
	            	do_action( '__logo_title' );
				?>	
                <?php 
					do_action( 'before_menu' );
					do_action ( '__menu' ); 
				?>
      </section>
    </div>
    <div id="tagline" class="submenu">
      <section>
        <ul class="submenu-franchise">
          <li><a href="about.html" class="active">My location</a></li>
          <li><a href="features.html">Our Team</a></li>
          <li><a href="features.html">Testimonials</a></li>
          <li><a href="features.html">Events</a></li>
          <li><a href="features.html">Book a Free Asssessment</a></li>
        </ul>
       </section>
    </div>
    <div id="info">
      <section>
        <div> <img src="<?php echo TC_BASE_URL ?>inc/img/phone.png" alt="">
          <h2>1-800-643-4300</h2>
          <h4>E104  Dharti II, Ahmedabad,Gujarat, India.</h4>
        </div>
        <span class="element leftElement"></span> <span class="triangle">triangle</span> </section>
    </div>
  </div>
</header>
<!-- CONTENT -->
	<div id="contentBk">
	  		<?php do_action ( '__slider' ) ?>
