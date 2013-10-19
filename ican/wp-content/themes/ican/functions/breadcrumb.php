<?php 
// WooCommerce Compatable Breadcrumbs
function limelight_breadcrumbs()
{
global $post, $wp_query;
if ( ! $home ) $home = __( 'Home', 'limelight' );
$home_link = home_url();
$delimiter = ' | ';
$currentBefore = '<span class="current">';
$currentAfter = '</span>';
$wrap_before = ' <div id="breadcrumb">';
$wrap_after = '</div> ';

if ( get_option('woocommerce_prepend_shop_page_to_urls') == "yes" && woocommerce_get_page_id( 'shop' ) && 	get_option( 'page_on_front' ) !== woocommerce_get_page_id( 'shop' ) )
$prepend = '<a href="' . get_permalink( woocommerce_get_page_id('shop') ) . '">' . get_the_title( woocommerce_get_page_id('shop') ) . '</a> ' . $delimiter;
else $prepend = '';

if ( ( ! is_home() && ! is_front_page() && ! ( is_post_type_archive() && get_option( 'page_on_front' ) == woocommerce_get_page_id( 'shop' ) ) ) || is_paged() ) {

	echo $wrap_before . '<a class="home" href="' . $home_link . '">' . $home . '</a> ' . $delimiter ;

	if ( is_category() ) {

		$cat_obj = $wp_query->get_queried_object();
		$this_category = get_category( $cat_obj->term_id );

		if ( $this_category->parent != 0 ) {
			$parent_category = get_category( $this_category->parent );
			echo get_category_parents($parent_category, TRUE, $delimiter );
		}

		echo $currentBefore . single_cat_title( '', false ) . $currentAfter;

	} elseif ( is_tax('product_cat') ) {

		echo $prepend;
		$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

		$parents = array();
		$parent = $term->parent;
		while ( $parent ) {
			$parents[] = $parent;
			$new_parent = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ) );
			$parent = $new_parent->parent;
		}

		if ( ! empty( $parents ) ) {
			$parents = array_reverse( $parents );
			foreach ( $parents as $parent ) {
				$item = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ));
				echo '<a href="' . get_term_link( $item->slug, 'product_cat' ) . '">' . $item->name . '</a>' . $delimiter;
			}
		}

		$queried_object = $wp_query->get_queried_object();
		echo $currentBefore . $queried_object->name . $currentAfter;

	} elseif ( is_tax('product_tag') ) {

		$queried_object = $wp_query->get_queried_object();
		echo $prepend . $currentBefore . __('Products tagged &ldquo;', 'limelight') . $queried_object->name . '&rdquo;' . $currentAfter;

} elseif ( is_search() ) {

		echo $currentBefore . __( 'Search results for &ldquo;', 'limelight' ) . get_search_query() . '&rdquo;' . $currentAfter;

	} elseif ( is_day() ) {

		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $delimiter;
		echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $delimiter;
		echo $currentBefore . get_the_time('d') . $currentAfter;

	} elseif ( is_month() ) {

		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $delimiter;
		echo $currentBefore . get_the_time('F') . $currentAfter;

	} elseif ( is_year() ) {

		echo $currentBefore . get_the_time('Y') . $currentAfter;

	} elseif ( is_post_type_archive('product') && get_option('page_on_front') !== woocommerce_get_page_id('shop') ) {

		$_name = woocommerce_get_page_id( 'shop' ) ? get_the_title( woocommerce_get_page_id( 'shop' ) ) : ucwords( get_option( 'woocommerce_shop_slug' ) );

		if ( is_paged() ) {

			echo $currentBefore . '<a href="' . get_post_type_archive_link('product') . '">' . $_name . '</a>' . $currentAfter;

		} else {

			echo $currentBefore . $_name . $currentAfter;

		}

	} elseif ( is_single() && !is_attachment() ) {

		if ( get_post_type() == 'product' ) {

			echo $prepend;

			if ( $terms = wp_get_object_terms( $post->ID, 'product_cat' ) ) {
				$term = current( $terms );
				$parents = array();
				$parent = $term->parent;

				while ( $parent ) {
					$parents[] = $parent;
					$new_parent = get_term_by( 'id', $parent, 'product_cat' );
					$parent = $new_parent->parent;
				}

				if ( ! empty( $parents ) ) {
					$parents = array_reverse($parents);
					foreach ( $parents as $parent ) {
						$item = get_term_by( 'id', $parent, 'product_cat');
						echo '<a href="' . get_term_link( $item->slug, 'product_cat' ) . '">' . $item->name . '</a>' . $delimiter;
					}
				}

				echo '<a href="' . get_term_link( $term->slug, 'product_cat' ) . '">' . $term->name . '</a>' . $delimiter;

			}

			echo $currentBefore . get_the_title() . $currentAfter;

		} elseif ( get_post_type() != 'post' ) {

			$post_type = get_post_type_object( get_post_type() );
			$slug = $post_type->rewrite;
				echo $currentBefore . '<a href="' . get_post_type_archive_link( get_post_type() ) . '">' . $post_type->labels->singular_name . '</a>' . $currentAfter . $delimiter;
			echo $currentBefore . get_the_title() . $currentAfter;

		} else {

			$cat = current( get_the_category() );
			echo get_category_parents( $cat, true, $delimiter );
			echo $currentBefore . get_the_title() . $currentAfter;

		}

	} elseif ( is_404() ) {

		echo $currentBefore . __( 'Error 404', 'limelight' ) . $currentAfter;

	} elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' ) {

		$post_type = get_post_type_object( get_post_type() );

		if ( $post_type )
			echo $currentBefore . $post_type->labels->singular_name . $currentAfter;

	} elseif ( is_attachment() ) {

		$parent = get_post( $post->post_parent );
		$cat = get_the_category( $parent->ID );
		$cat = $cat[0];
		echo get_category_parents( $cat, true, '' . $delimiter );
		echo $currentBefore . '<a href="' . get_permalink( $parent ) . '">' . $parent->post_title . '</a>' . $currentAfter . $delimiter;
		echo $currentBefore . get_the_title() . $currentAfter;

	} elseif ( is_page() && !$post->post_parent ) {

		echo $currentBefore . get_the_title() . $currentAfter;

	} elseif ( is_page() && $post->post_parent ) {

		$parent_id  = $post->post_parent;
		$breadcrumbs = array();

		while ( $parent_id ) {
			$page = get_page( $parent_id );
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title( $page->ID ) . '</a>';
			$parent_id  = $page->post_parent;
		}

		$breadcrumbs = array_reverse( $breadcrumbs );

		foreach ( $breadcrumbs as $crumb )
			echo $crumb . '' . $delimiter;

		echo $currentBefore . get_the_title() . $currentAfter;

	} elseif ( is_tag() ) {

			echo $currentBefore . __( 'Posts tagged &ldquo;', 'limelight' ) . single_tag_title('', false) . '&rdquo;' . $currentAfter;

	} elseif ( is_author() ) {
                global $author;
		$userdata = get_userdata($author);
		echo $currentBefore . __( 'Author:', 'limelight' ) . ' ' . $userdata->display_name . $currentAfter;

	}

	if ( get_query_var( 'paged' ) )
		echo ' (' . __( 'Page', 'limelight' ) . ' ' . get_query_var( 'paged' ) . ')';

	echo $wrap_after;

}
}
?>