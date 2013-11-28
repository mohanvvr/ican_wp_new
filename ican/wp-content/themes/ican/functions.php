<?php

include(TEMPLATEPATH . '/functions/widget_cat_posts.php');

include(TEMPLATEPATH . '/functions/breadcrumb.php');

//include(TEMPLATEPATH . '/functions/gallery.php');

//include(TEMPLATEPATH . '/functions/meta-box.php');

//Some simple code for our widget-enabled sidebar

if ( function_exists('register_sidebar') )

    register_sidebar(array('name' => 'Homepage Sidebar'));

	if ( function_exists('register_sidebar') ) {

register_sidebar(array(

'name' => 'Blog Sidebar',

'id' => 'blog-sidebar',

'description' => 'This sidebar only shows in Blog page',

'before_widget' => '<div id="%1$s" class="blogwidget %2$s">',

'after_widget'  => '</div>',

'before_title'  => '<h4 class="widgettitle"><span>',

'after_title'   => '</span></h4>'

));

register_sidebar(array(

'name' => 'Blog Single Page Sidebar',

'id' => 'blog-singlesidebar',

'description' => 'This sidebar only shows in Blog Single page',

'before_widget' => '<div id="%1$s" class="blogwidget %2$s">',

'after_widget'  => '</div>',

'before_title'  => '<h4 class="widgettitle"><span>',

'after_title'   => '</span></h4>'

));

}



//Add support for WordPress 3.0's custom menus

add_action( 'init', 'register_my_menu' );



//Register area for custom menu

function register_my_menu() {

	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );

}



//Code for custom background support

add_custom_background();



//Enable post and comments RSS feed links to head

add_theme_support( 'automatic-feed-links' );



// Enable post thumbnails

add_theme_support('post-thumbnails');

set_post_thumbnail_size(650, 225, true);

$defaults = array(

	'default-image'          => '',

	'random-default'         => false,

	'width'                  => 650,

	'height'                 => 225,

	'flex-height'            => false,

	'flex-width'             => false,

	'default-text-color'     => '',

	'header-text'            => true,

	'uploads'                => true,

	'wp-head-callback'       => '',

	'admin-head-callback'    => '',

	'admin-preview-callback' => '',

);

add_theme_support( 'custom-header', $defaults );



add_action('admin_menu', 'footertext');



function footertext() {

	add_submenu_page( 'themes.php', 'Footer Text', 'Footer Text', 'edit_theme_options', 'footer_text', 'footermenu' ); 

	add_action('admin_init','register_optsettings');

}

function register_optsettings(){

	register_setting('footer_dytext','footer_option_txt');

	register_setting('footer_dytext','copyrights');

}

function footermenu() { ?>

	<div class="wrap"><h2>Footer Text</h2>

<form method="post" action="options.php">

    <?php settings_fields( 'footer_dytext' ); ?>

    <?php //do_settings( 'baw-settings-group' ); ?>

    <table class="form-table">

        <tr valign="top">

        <th scope="row"><b>Copy Rights Text:</b></th>

        <td><input type="text" size="100" name="copyrights" value="<?php echo get_option('copyrights')?>"></td></td>

        </tr>         

          </table>    

    <?php submit_button(); ?>

</form>

</div>

<?php }



add_action('admin_menu', 'sociallinks');

function sociallinks() {

	add_submenu_page( 'themes.php', 'Social Links,Phone No. & Address', 'Social Links,Phone No. & Address', 'edit_theme_options', 'social_links', 'socialmenu' ); 

	add_action('admin_init','register_snssettings');

}

function register_snssettings(){

	register_setting('sns_dytext','facebook');
	
	register_setting('sns_dytext','twitter');

	register_setting('sns_dytext','linkedin');

	register_setting('sns_dytext','phonenumber');

	register_setting('sns_dytext','address');


}

function socialmenu() { ?>

	<div class="wrap"><h2>Social Networking Sites</h2>

<form method="post" action="options.php">

    <?php settings_fields( 'sns_dytext' ); ?>

    <?php //do_settings( 'baw-settings-group' ); ?>

    <table class="form-table">

       

		<tr valign="top">

        <th scope="row"><b>FaceBook:</b></th>

        <td>

		<input type="text"  size="70" name="facebook" value="<?php echo get_option('facebook')?>"></td>

		</tr>

		<tr valign="top">

        <th scope="row"><b>Twitter:</b></th>

        <td>

		<input type="text"  size="70" name="twitter" value="<?php echo get_option('twitter')?>"></td>

		</tr>

		

		<tr valign="top">

		<th scope="row"><b>Linked In:</b></th>

        <td>

		<input type="text" size="70" name="linkedin" value="<?php echo get_option('linkedin')?>"></td>

		</tr>

		

        <tr valign="top">

		<th scope="row"><b>Phone Number:</b></th>

        <td>

		<input type="text" size="70" name="phonenumber" value="<?php echo get_option('phonenumber')?>"></td>

        </tr> 

        <tr valign="top">

		<th scope="row"><b>Address:</b></th>

        <td>

		<input type="text" size="70" name="address" value="<?php echo get_option('address')?>"></td>

        </tr>          

          </table>    

    <?php submit_button(); ?>

</form>

</div>

<?php } 
//add_theme_support('post-thumbnails');
function create_post_type() {
	register_post_type( 'ican_programs',
		array(
			'labels' => array(
				'name' => __( 'Programs' ),
				'singular_name' => __( 'Program' )
			),
		'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'programs'),
		'supports' => array('title','editor','thumbnail')
		)
	);
}

add_action( 'init', 'create_post_type' );

    /*function movie_taxonomy() {
       register_taxonomy(
        'movie_review',
        'mysite_reviews',
        array(
            'label' => 'Movie Review',
            'query_var' => true,
            'rewrite' => array('slug' => 'movie-reviews')
        )
    );
    }
    
    add_action('init', 'movie_taxonomy' );*/

?>