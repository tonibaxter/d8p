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

  // Convert Email for less spam.
  function convert_email_adr($email) {
    $pieces = str_split(trim($email));
    $new_mail = '';
    foreach ($pieces as $val) {
      $new_mail .= '&#'.ord($val).';';
    }
    return $new_mail;
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

	function clean_footer_menu() {
		$menu_name = 'footer-menu';
		
		if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
			$menu = wp_get_nav_menu_object($locations[$menu_name]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);

			$menu_list = "<ul>\n";
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$label = $menu_item->attr_title;
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

	// Check Social Media
	function get_social_media() {
		$social_list = "<ul>\n";
    $type = 'company';
    $args=array(
      'post_type' => $type,
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'caller_get_posts'=> 1,
      'order' => 'asc'
      );

    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post();
				if (get_field('company_email')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="mailto:'. convert_email_adr(get_field('company_email')) .'" rel="nofollow">Email</a>' . "\n";
					$social_list .= "              </li>\n";
				}
				
				if (get_field('company_facebook')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_facebook') .'" target="_blank">Facebook</a>' . "\n";
					$social_list .= "              </li>\n";
				}
				
				if (get_field('company_google')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_google') .'" target="_blank">Google+</a>' . "\n";
					$social_list .= "              </li>\n";
				}
				
				if (get_field('company_imdb')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_imdb') .'" target="_blank">IMDB</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_instagram')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_instagram') .'" target="_blank">Instagram</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_myspace')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_myspace') .'" target="_blank">MySpace</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_pinterest')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_pinterest') .'" target="_blank">Pinterest</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_tumblr')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_tumblr') .'" target="_blank">Tumblr.</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_twitter')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_twitter') .'" target="_blank">Twitter</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_vimeo')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_vimeo') .'" target="_blank">Vimeo</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_vine')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_vine') .'" target="_blank">Vine</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_youtube')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_youtube') .'" target="_blank">YouTube</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				if (get_field('company_yelp')) {
					$social_list .= "              <li>\n";
					$social_list .= '                <a href="'. get_field('company_yelp') .'" target="_blank">Yelp</a>' . "\n";
					$social_list .= "              </li>\n";
				}

				$social_list .= "            </ul>\n";

				echo $social_list;
	    endwhile;
		}

    wp_reset_query();
	}

  function vimeo_videos($num) {
    $vimeo = simplexml_load_file('http://vimeo.com/digital8productions/videos/rss');
    $v = 0;

    foreach ($vimeo->channel->item as $video):
      $vimeo_title=$video->title;
      $date=$video->pubDate;
      $timedate = strtotime($date);
      $cleandate = date('F j, Y', $timedate);

      $vimeo_date = $cleandate;
      $link=$video->link;
      $vimeo_id = explode('http://vimeo.com/', $link);

      if($v==$num) break;

	    if ($num <= 1) {
		    $video_list = '<p>Vimeo Post (' . $vimeo_date . ")</p>\n";
		    $video_list .= '<p><a href="' . $link . '" target="_blank">' . $vimeo_title . '</a></p>' . "\n";
	    } else {
		    $video_list = "              <li>\n";
		    $video_list .= '                <div class="video">' . "\n";
		    $video_list .= '                  <iframe src="//player.vimeo.com/video/' . $vimeo_id[1] . '?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>' . "\n";
		    $video_list .= "                </div><!-- .video -->\n";
		    $video_list .= '                <div class="video-info">' . "\n";
		    $video_list .= '                  <h4>' . $vimeo_title . "</h4>\n";
		    $video_list .= '                  <p class="video-date">' . $vimeo_date . "</p>\n";
		    $video_list .= '                  <p class="video-link"><a href="' . $link . '">View on Vimeo</a></p>' . "\n";
		    $video_list .= "                </div><!-- .video-info -->\n";
		    $video_list .= "              </li>\n";
			}

	    echo $video_list;

	    $v++;
    endforeach;
  };

  function instagram_photos($num) {
    // Instagram Parameters
    $userid = "1073653000";
    $accessToken = "541336691.d80f275.a9423f4c60864701a03e1e0fb2797bf9";
    $i = 0;

    // Get Instagram Data
    function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch); 
      return $result;
    }

    // Parse Instagram Data
    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
    $result = json_decode($result);

    // Loop Instagram Data
    foreach ($result->data as $post):
      if($i==$num) break;

      $photo_list = "              <li>\n";
      $photo_list .= '                <a href="' . $post->link . '" target="_blank">' . "\n";
      $photo_list .= '                  <div class="img-container img-instagram">' . "\n";
      $photo_list .= '                    <img src="' . $post->images->standard_resolution->url . '" alt="Instagram photo by @' . $post->caption->from->username . '">' . "\n";
      $photo_list .= "                  </div><!-- .img-instagram -->\n\n";
      $photo_list .= '                  <div class="info">' . "\n";
      $photo_list .= '                    <p><span></span>' . $post->likes->count . "</p>\n";
      $photo_list .= '                  </div><!-- .info -->' . "\n";
      $photo_list .= '                </a>' . "\n";
      $photo_list .= "              </li>\n";
      echo $photo_list;

      $i++;
    endforeach;
  };
?>