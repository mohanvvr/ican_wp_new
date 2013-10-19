<?php add_action("admin_init", "images_init");
add_action('save_post', 'save_images_link');
function images_init(){
          $post_types = get_post_types();
          foreach ( $post_types as $post_type ) {
                add_meta_box("my-images", "Pictures", "images_link", $post_type, "normal", "low");
          }
        }
function images_link(){
        global $post;
        $custom  = get_post_custom($post->ID);
        $link    = $custom["_link"][0];
        $count   = 0;
        echo '<div class="link_header">';
        $query_images_args = array(
                'post_type' => 'attachment',
                'post_mime_type' =>array(
                                'jpg|jpeg|jpe' => 'image/jpeg',
                                'gif' => 'image/gif',
                                'png' => 'image/png',
                                ),
                'post_status' => 'inherit',
                'posts_per_page' => -1,
                );
        $query_images = new WP_Query( $query_images_args );
        $images = array();
        echo '<div class="frame">';
        $thelinks = explode(',', $link);
        foreach ( $query_images->posts as $file) {
           if(in_array($images[]= $file->ID, $thelinks)){
              echo '<div class="njthumpimg"><label><input type="checkbox" group="images" value="'.$images[]= $file->ID.'" checked /><img src="'.$images[]= $file->guid.'" width="170" height="79" /><span>'.$images[]=$file->post_title.'</span></label></div>';
                 }else{
              echo '<div class="njthumpimg"><label><input type="checkbox" group="images" value="'.$images[]= $file->ID.'" /><img src="'.$images[]= $file->guid.'" width="170" height="79" /></label><span>'.$images[]=$file->post_title.'</span></div>';
                 }
                $count++;
        }
        echo '<br /><br /></div></div>';
        echo '<input type="hidden" name="link" class="field" value="'.$link.'" />';
        echo '<div class="images_count"><span>Files: <b>'.$count.'</b></span> <div class="count-selected"></div></div>';
}
function save_images_link(){
        global $post;
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){ return $post->ID; }
        update_post_meta($post->ID, "_link", $_POST["link"]);
}
add_action( 'admin_head-post.php', 'images_css' );
add_action( 'admin_head-post-new.php', 'images_css' );
function images_css() {
        echo '<style type="text/css">
		.njthumpimg{
			float:left;
			width:200px;
		}
		.njthumpimg span{
		margin:10px 0px 0px 10px;
		 
		}
        #my-images .inside{padding:0px !important;margin:0px !important;}
        .frame{
                width:100%;
                height:320px;
                overflow:auto;
                background:#e5e5e5;
                padding-bottom:10px;
                }
        .field{width:800px;}
        #results {
                width:100%;
                overflow:auto;
                background:#e5e5e5;
                padding:0px 0px 10px 0px;
                margin:0px 0px 0px 0px;
                }
        #results img{
                border:solid 5px #FDD153;
                -moz-border-radius:3px;
                margin:10px 0px 0px 10px;
                }
        .frame label{
                margin:8px 0px 0px 8px;
                padding:5px;
                background:#fff;
                -moz-border-radius:3px;
                border:solid 1px #B5B5B5;
                height:79px;
                display:block;
                float:left;
                overflow:hidden;
                }
        .frame label:hover{
                background:#74D3F2;
                }
        .frame label.checked{background:#FDD153 !important;}
        .frame label input{
                opacity:0.0;
                position:absolute;
                top:-20px;
                }
        .images_count{
                font-size:10px;
                color:#666;
                text-transform:uppercase;
                background:#f3f3f3;
                border-top:solid 1px #ccc;
                position:relative;
                }
        .selected_title{border-top:solid 1px #ccc;}
        .images_count span{
                color:#666;
                padding:10px 6px 6px 12px;
                display:block;
                }
        .count-selected{
                font-size:9px;
                font-weight:bold;
                text-transform:normal;
                position:absolute;
                top:10px;
                right:10px;
                }
                </style>';
}
add_action( 'admin_head-post.php', 'images_js' );
add_action( 'admin_head-post-new.php', 'images_js' );
function images_js(){?>
<script type="text/javascript">
jQuery(document).ready(function($){
  $('.frame input').change(function() {
        var values = new Array();
        $("#results").empty();
        var result = new Array();
        $.each($(".frame input:checked"), function() {
                result.push($(this).attr("value"));
                $(this).parent().addClass('checked');
        });
        $('.field').val(result.join(','));
        $('.count-selected').text('Selected: '+result.length);
        $.each($(".frame input:not(:checked)"), function() {
                $(this).parent().removeClass('checked');
        });
  });
        var result = new Array();
        $.each($(".frame input:checked"), function() {
                result.push($(this).attr("value"));
                $(this).parent().addClass('checked');
        });
        $('.field').val(result.join(','));
        $('.count-selected').text('Selected: '+result.length);
        $.each($(".frame input:not(:checked)"), function() {
                $(this).parent().removeClass('checked');
        });
});
</script>
<?}
function wps_thumbnails_list(){
           global $post;
           $image = get_post_meta($post->ID, '_link', true);
		   
           $image = explode(",", $image);		   
		   if (!empty($image[0])){  ?>
		   <div class="widget" id="gallery">
                           <h3>Gallery</h3>
              <ul>
           <? foreach($image as $images){ $url = wp_get_attachment_image_src($images, 1, 1);?>
				<li>
                  <div class="img">
                    <a rel="lightbox]" href="<?php echo $url[0];?>" title="<? echo get_the_title($images);?>"><img width="170" height="79" alt="<? echo get_the_title($images);?>" src="<?php echo $url[0];?>"></a>
                  </div>
                  <p><? echo get_the_title($images);?></p>
                </li>
                <?php }?></ul></div>
				
<? } }?>