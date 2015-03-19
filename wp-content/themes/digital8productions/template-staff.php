<?php
  /*
  Template Name: Staff
  */

  get_header();
?>
          <h2><?= the_field('page_description') ?> PAGE DESCRIPTION MISSING</h2>

          <section id="intro">
            <h3>Digital 8 Creatives</h3>

            <div class="intro-img img-container">
              <img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/nick.png" alt="Nick Floyd">
            </div>
          </section><!-- #intro -->

          <section id="creatives">
            <ul>
<?php
    // $type = 'staff';
    // $args=array(
    //   'post_type' => $type,
    //   'post_status' => 'publish',
    //   'posts_per_page' => -1,
    //   'caller_get_posts'=> 1,
    //   'order' => 'asc'
    //   );

    // $my_query = null;
    // $my_query = new WP_Query($args);
    // if( $my_query->have_posts() ) {
    //   while ($my_query->have_posts()) : $my_query->the_post();
    //     $staff_member = "              <li>\n";
    //     $staff_member .= '                <h3 class="divider">' . get_the_title() . "</h3>\n\n";
    //     $staff_member .= '                <div class="user-info">' . "\n";
    //     $staff_member .= '                  <div class="table-left">' . "\n";
    //     $staff_member .= '                    <div class="img-container">' . "\n";

    //     if ( get_field('staff_image') ) {
    //       $staff_member .= '                      <img src="' . get_field('staff_image') . '" alt="' . get_the_title() . ' Bio Image">' . "\n";
    //     } else {
    //       $staff_member .= '                      <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/user.png" alt="Bio Image Not Found">' . "\n";
    //     }

    //     $staff_member .= '                    </div>' . "\n";
    //     $staff_member .= '                  </div>' . "\n\n";
    //     $staff_member .= '                  <div class="table-right bio">' . "\n";
    //     $staff_member .= "                    <p><span>" . get_field('staff_title') . "</span></p>\n\n";
    //     $staff_member .= '                    <div class="next">' . "\n";
    //     $staff_member .= get_the_content() . "\n";
    //     $staff_member .= '                    </div><!-- .next -->' . "\n\n";
    //     $staff_member .= '                    <ul class="social">' . "\n";

    //     if( get_field('staff_facebook') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_facebook') . '" target="_blank">Facebook</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_facebook') . '" target="_blank" class="img-container">' . "\n";
    //       // // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/facebook.png" alt="' . get_the_title() . ' Facebook">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/facebook.png" alt="' . get_the_title() . ' Facebook">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_google') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_google') . '" target="_blank">Google+</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_google') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/google.png" alt="' . get_the_title() . ' Google+">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_imdb') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_imdb') . '" target="_blank">IMDB</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_imdb') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/imdb.png" alt="' . get_the_title() . ' IMDB">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_instagram') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_instagram') . '" target="_blank">Instagram</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_instagram') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/instagram.png" alt="' . get_the_title() . ' Instagram">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_pinterest') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_pinterest') . '" target="_blank">Pinterest</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_pinterest') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/pinterest.png" alt="' . get_the_title() . ' Pinterest">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_tumblr') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_tumblr') . '" target="_blank">Tumblr.</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_tumblr') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/tumblr.png" alt="' . get_the_title() . ' Tumblr.">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_twitter') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_twitter') . '" target="_blank">Twitter</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_twitter') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/twitter.png" alt="' . get_the_title() . ' Twitter">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_vimeo') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_vimeo') . '" target="_blank">Vimeo</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_vimeo') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/vimeo.png" alt="' . get_the_title() . ' Vimeo">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_vine') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_vine') . '" target="_blank">Vine</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_vimeo') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/vimeo.png" alt="' . get_the_title() . ' Vimeo">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }

    //     if( get_field('staff_youtube') ) {
    //       $staff_member .= "                      <li>\n";
    //       $staff_member .= '                        <a href="' . get_field('staff_youtube') . '" target="_blank">YouTube</a>' . "\n";
    //       // $staff_member .= '                        <a href="' . get_field('staff_youtube') . '" target="_blank" class="img-container">' . "\n";
    //       // $staff_member .= '                          <img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/social/youtube.png" alt="' . get_the_title() . ' YouTube">' . "\n";
    //       // $staff_member .= '                        </a>' . "\n";
    //       $staff_member .= "                      </li>\n";
    //     }
        
    //     $staff_member .= '                    </ul><!-- .social -->' . "\n";
    //     $staff_member .= '                  </div><!-- .bio -->' . "\n";
    //     $staff_member .= "                </div><!-- .user-info -->\n";
    //     $staff_member .= "              </li>\n";
    //     echo $staff_member;
    //   endwhile;
    // }
    // wp_reset_query();
?>
              <li id="possibly-you">
                <h3 class="divider">You?</h3>

                <div class="user-info">
                  <div class="table-left">
                    <div class="img-container">
                      <img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/user.png" alt="Default Bio Image">
                    </div>
                  </div>

                  <div class="table-right bio">
                    <p>This could be you! Interested in working with Digital 8 Productions, LLC? Below is a list of current positions. We are always open to hear from creative minds.</p>

                    <ul>
                      <li>Director</li>
                      <li>Cinematographer</li>
                      <li>Writer</li>
                      <li>Editor</li>
                      <li>Animator</li>
                      <li>Media Manager</li>
                    </ul>

                    <p>If you are interested in any of our positions, please send us an email <a href="contact.php">here</a>.</p>
                  </div><!-- .bio -->
                </div><!-- .user-info -->
              </li>
            </ul>
          </section><!-- #creatives -->
<?php get_footer(); ?>