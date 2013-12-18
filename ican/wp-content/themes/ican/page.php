<?php get_header(); ?>
<!-- CONTENT -->
<div id="contentBk" class="clearfix">
<div id="content">
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
    <div class="topImg clearfix"> <img src="<?php bloginfo('template_url');?>/img/headers/header_1.jpg" alt="About Us">
	<p><?php

   $html_title = get_post_meta($post->ID, "ican_html_text", true);

   if ($html_title) { ?>
                
      <?php echo $html_title; ?>
                
   <?php } else { ?>
                
      <?php the_title(); ?>
                    
<?php } ?></p>
      
    </div>
    <div class="wrapper">
      <div class="column c-67 clearfix">
        <div class="box">
        <?php the_content(); ?>
		</div>
      </div>	
<?php endwhile; ?>	  
	<?php endif; ?>
	<?php if(is_page(17)){?>
	<div class="column c-33 last  clearfix">
                        <div class="box contactUs">
                            <h4><span>We are here</span></h4>
                            <div class="boxInfo">
                                <p>Lorem ipsum doloreiusmod tempor dolorei doloreiusmod tempor usmod tempordolor eiusmod tempor...</p>
                                <p>E104 Dharti II,<br> Ahmedabad <br>Gujarat, India <br><br><strong><a href="#">behappy@tmail.com</a><br> +91 123 456 7890</strong></p>
                            </div>
                        </div>
                    </div>
					<div class="clear"></div>

                    <div class="column c-67 clearfix">
                        <div class="box contactUs ">
                            <h4><span>Get in touch</span></h4>
                                <div class="boxInfo contactForm">
                                     <?php echo do_shortcode("[contact-form-7 id='109' title='Contact_page']") ?> 
                                <p id="contactSuccess" class="hidden">Your message was successfuly sent! Please wait up to 24hrs until we can contact you back!</p>
                                <p id="contactError" class="hidden">Please complete all the required fields properly!</p>
                            </div>
                        </div>
                    </div>
	
	<?php }else{?>
      <div class="links column c-33 clearfix">
        <h3>Quick Links</h3>
        <ul class="cContent clearfix">
          <li class="iStart"><a href="#">iStart Learning (Age 3 to 6)</a></li>
          <li class="iAchieve"><a href="#">iAchieve (Grade 1 To 8)</a></li>
          <li class="iExcel"><a href="#">iExcel - (High School)</a></li>
          <li class="iLearnFrench"><a href="#">iLearn French - (French Program)</a></li>
          <li class="iamDetermined"><a href="#">iam Determined - (Special Education)</a></li>
          <li class="iGoBeyond"><a href="#">iGo Beyond - (IB Program)</a></li>
          <li class="iComplete"><a href="#">iComplete - (Homework Help)</a></li>
          <li class="iSATChallenge"><a href="#">SAT Challenge</a></li>
          <li class="adultPrograms"><a href="#">Adult Programs</a></li>
        </ul>
      </div>
      <div class="featured column c-33 clearfix">
        <h3>Parents Testimonials</h3>
        <div class="cContent"> <!--<img class="imgBorder" src="img/professors/1st.jpg" alt="">-->
          <div>
            <h5>Alicia</h5>
            <p>We had our daughter start with math program 
              she did really well</p>
            <a href="#" class="submit">Read more</a> </div>
        </div>
      </div>
	  
      <!--<div class="searchCourse column c-33 clearfix">
        <p>Search Course</p>
        <form>
          <select class="focus input">
            <option>Course Name</option>
            <option>Business Law</option>
            <option>Cost Accounting</option>
            <option>Auditing</option>
            <option>Micro Application</option>
          </select>
          <input class="focus input" type="text" value=" Fill your keywords" />
          <select class="focus input">
            <option>Course Length</option>
            <option>One year</option>
            <option>Two years</option>
            <option>Three years</option>
          </select>
          <select class="focus input">
            <option>Select Nearest College Location</option>
            <option>Mobile Campus</option>
            <option>Little Rock Campus</option>
            <option>Orlando Campus</option>
            <option>Honolulu Campus</option>
          </select>
          <input class="submit" type="submit" value="Search"/>
        </form>
      </div>-->
      <div class="clear"></div>
      <div class="column c-33 clearfix">
        <div class="box">
          <h4>Principal:<strong> Jasson Wilss</strong></h4>
          <div class="boxInfo"> <img class="fwidth" src="img/professors/p1.jpg" alt="">
            <h6>Maths professor</h6>
            <p>Lorem ipsum doloreiusmod tempor dolorei doloreiusmod tempor usmod tempordolor eiusmod tempor...</p>
          </div>
        </div>
      </div>
      <div class="column c-33 clearfix">
        <div class="box">
          <h4>Professor:<strong> Jasson Wilss</strong></h4>
          <div class="boxInfo"> <img class="fwidth" src="img/professors/p2.jpg" alt="">
            <h6>Chemestry professor</h6>
            <p>Lorem ipsum doloreiusmod tempor dolorei doloreiusmod tempor usmod tempordolor eiusmod tempor...</p>
          </div>
        </div>
      </div>
      <div class="column c-33 clearfix">
        <div class="box">
          <h4>Professor:<strong> Jasson Wilss</strong></h4>
          <div class="boxInfo"> <img class="fwidth" src="img/professors/p3.jpg" alt="">
            <h6>Communication professor</h6>
            <p>Lorem ipsum doloreiusmod tempor dolorei doloreiusmod tempor usmod tempordolor eiusmod tempor...</p>
          </div>
        </div>
      </div>
	  <?php }?>
    </div>
  </div>
</div>
<?php //get_sidebar(); ?>	
<?php get_footer(); ?>
