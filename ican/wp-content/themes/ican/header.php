<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>Tutoring in Brampton and Mississauga - ICANEducation.ca</title>
<meta name="subject" content="I Can Education"/>
<meta name="language" content="english"/>
<meta name="rating" content="General"/>
<meta name="robots" content="all"/>
<meta name="revisit-after" content="7 days"/>
<meta name="resource-type" content="document"/>
<meta name="distribution" content="global"/>
<meta name="coverage" content="worldwide"/>
<meta name="identifier-url" content="http://www.icaneducation.ca"/>
<meta name="Keywords" content="tutoring in Brampton, tutoring in Mississauga, english tutoring brampton, kids learning program"/>

<meta name="Description" content="ICAN Education is a learning center that provides tutoring services for kids in Brampton and Mississauga. It provides an English learning program & summer camp activities among others."/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/custom.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.png" />

<!--[if lt IE 9]>
         <script src="<?php bloginfo('template_url');?>/js/html5shiv.js"></script>
        <![endif]-->

</head><body>

<!-- SITE CONTENT -->

<header>
  <div class="parentContainer">
    <div id="socialButtons">
       <?php $defaults = array(
  'theme_location'  => '',
  'menu'            => 'toplink', 
  'menu_class'      => 'toplink' 
  
); 
 wp_nav_menu($defaults); ?>
      <!-- <a href="#" id="linked">
                        <p>Connect width linked </p> 
                        <span>linked </span>
                    </a>--> 
      <a href="#" id="search">
      <p>Search</p>
      </a>
      <div id="linked"><span><a class="in" href="<?php echo get_option('linkedin')?>" title="linkedIn">linkedin</a></span></div>
      <div id="facebook"> <span><a class="fb" href="<?php echo get_option('facebook')?>" title="facebook">facebook</a></span></div>
    </div>
  </div>
  <div>
    <div id="menu">
      <section> <a href="index.html"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt=""></a>
	  <?php 
	  $mainmenu=array( 'sort_column' => 'menu_order', 'container' => false ,'menu_class' => 'clearfix', 'theme_location' => 'primary-menu' );	  
	  wp_nav_menu($mainmenu); ?>       
      </section>
    </div>
    <div id="tagline" class="submenu">
      <section>
		<?php 
	  $mainmenu=array( 'sort_column' => 'menu_order', 'container' => false ,'menu_class' => 'submenu-franchise', 'menu' => 'submenu' );	  
	  wp_nav_menu($mainmenu); ?> 
      </section>
    </div>
    <div id="info">
      <section>
        <div> <img src="<?php bloginfo('template_url');?>/img/phone.png" alt="">
          <h2><?php echo get_option('phonenumber')?></h2>
          <h4><?php echo get_option('address')?></h4>
        </div>
        <span class="element leftElement"></span> <span class="triangle">triangle</span> </section>
    </div>
  </div>
</header>

<!-- CONTENT -->

