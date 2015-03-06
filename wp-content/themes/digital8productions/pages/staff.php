<?php
  function staffMembers() {
    $type = 'staff';
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
        $staff_member = "              <li>\n";
        $staff_member .= '                <h3 class="divider">' . get_the_title() . "</h3>\n\n";
        $staff_member .= '                <div class="user-info">' . "\n";
        $staff_member .= '                  <div class="table-left">' . "\n";
        $staff_member .= '                    <div class="img-container">' . "\n";
        $staff_member .= '                      <img src="' . get_field('staff_image') . '" alt="' . get_the_title() . ' Bio Image">' . "\n";
        $staff_member .= '                    </div>' . "\n";
        $staff_member .= '                  </div>' . "\n\n";
        $staff_member .= '                  <div class="table-right bio">' . "\n";
        $staff_member .= "                    <p><span>" . get_field('staff_title') . "</span></p>\n\n";
        $staff_member .= '                    <div class="next">' . "\n";
        $staff_member .= get_the_content() . "\n";
        $staff_member .= '                    </div><!-- .next -->' . "\n\n";
        $staff_member .= '                    <ul class="social">' . "\n";

        if( get_field('staff_facebook') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_facebook') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/facebook.png" alt="' . get_the_title() . ' Facebook">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_google') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_google') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/google.png" alt="' . get_the_title() . ' Google+">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_imdb') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_imdb') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/imdb.png" alt="' . get_the_title() . ' IMDB">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_instagram') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_instagram') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/instagram.png" alt="' . get_the_title() . ' Instagram">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_pinterest') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_pinterest') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/pinterest.png" alt="' . get_the_title() . ' Pinterest">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_tumblr') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_tumblr') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/tumblr.png" alt="' . get_the_title() . ' Tumblr.">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_twitter') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_twitter') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/twitter.png" alt="' . get_the_title() . ' Twitter">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_vimeo') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_vimeo') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/vimeo.png" alt="' . get_the_title() . ' Vimeo">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_vine') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_vimeo') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/vimeo.png" alt="' . get_the_title() . ' Vimeo">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }

        if( get_field('staff_youtube') ) {
          $staff_member .= "                      <li>\n";
          $staff_member .= '                        <a href="' . get_field('staff_youtube') . '" target="_blank" class="img-container">' . "\n";
          $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/youtube.png" alt="' . get_the_title() . ' YouTube">' . "\n";
          $staff_member .= '                        </a>' . "\n";
          $staff_member .= "                      </li>\n";
        }
        
        $staff_member .= '                    </ul><!-- .social -->' . "\n";
        $staff_member .= '                  </div><!-- .bio -->' . "\n";
        $staff_member .= "                </div><!-- .user-info -->\n";
        $staff_member .= "              </li>\n";
        echo $staff_member;
      endwhile;
    }
    wp_reset_query();
  };
?>