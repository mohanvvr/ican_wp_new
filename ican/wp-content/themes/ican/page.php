<?php get_header(); ?>

	<div id="main-bg-top"></div>
    <div id="main-bg">
   		<!-- Main -->
      <div id="main">
        <!-- Main-inner -->
        <div class="main-inner">
          <!-- content -->
		 <div id="content">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h1><?php

   $html_title = get_post_meta($post->ID, "nj_html_text", true);

   if ($html_title) { ?>
                
      <?php echo $html_title; ?>
                
   <?php } else { ?>
                
      <?php the_title(); ?>
                    
<?php } ?></h1>


			<div class="entry">
			<?php the_content(); ?>

<p> <?php edit_post_link('Edit', '', ''); ?>
				</p>

			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>	
<?php get_footer(); ?>