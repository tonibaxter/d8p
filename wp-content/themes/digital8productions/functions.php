<?php
	// Add Staff Post Type
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	  register_post_type( 'staff',
	    array(
	      'labels' => array(
	        'name' => __( 'Staff' ),
	        'singular_name' => __( 'Member' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	    )
	  );

	  register_post_type( 'company',
	    array(
	      'labels' => array(
	        'name' => __( 'Company Info' ),
	        'singular_name' => __( 'Info' )
	      ),
	      'public' => true
	    )
	  );
	}

	// Remove Admin Bar
	if (!current_user_can(‘edit_posts’)) {
		show_admin_bar(false);
	}

	// Set Custom Menus
	register_nav_menus( array(
    'left-menu' => __( 'Left Main Menu' ),
    'right-menu' => __( 'Right Main Menu' ),
    'footer-menu' => __( 'Footer Navigation' ),
    'social-menu' => __( 'Social Media' )
	) );

// Clean Social Media Footer Menu
function clean_social_menu() {
	$menu_name = 'social-menu';
	
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "  <ul>\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$label = $menu_item->attr_title;
			$menu_list .= "            <li>\n";
			$menu_list .= '              <a href="'. $url .'" target="_blank" class="img-container">' . "\n";
			$menu_list .= '                <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/' . $title .'.png" alt="' . $label . '">' . "\n";
			$menu_list .= "              </a>\n";
			$menu_list .= "            </li>\n";
		}
		$menu_list .= "          </ul>\n";
	}
	echo $menu_list;
}

// Clean Main Menu
function clean_left_menu() {
	$menu_name = 'left-menu';
	
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "<ul>\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "              <li>\n";
			$menu_list .= '                <a href="'. $url .'">' . $title . "</a>\n";
			$menu_list .= "              </li>\n";
		}
		$menu_list .= "            </ul>\n";
	}
	echo $menu_list;
}

function clean_right_menu() {
	$menu_name = 'right-menu';
	
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "<ul>\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "              <li>\n";
			$menu_list .= '                <a href="'. $url .'">' . $title . "</a>\n";
			$menu_list .= "              </li>\n";
		}
		$menu_list .= "            </ul>\n";
	}
	echo $menu_list;
}

// Get the post slug
function get_the_slug() {
	global $post;

	if ( is_single() || is_page() ) {
		return $post->post_name;
	} else {
		return "";
	}
}
?>