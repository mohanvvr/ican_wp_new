<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
?>
		 </div><!--/#main-wrapper"-->

		 <!-- FOOTER -->
		<footer id="footer">

		 	<?php 
				do_action( '__sidebar' , 'footer' );

		 		do_action( '__footer' );//display template, you can hook here
		 	?>
		 </footer>

		<?php wp_footer(); //do not remove, used by the theme and many plugins?>
        <script type="text/javascript" src="<?php echo TC_BASE_URL ?>inc/js/jquery.flexslider-min.js"></script>
        <script src="<?php echo TC_BASE_URL ?>inc/js/scripts.js"></script>

	</body>

</html>