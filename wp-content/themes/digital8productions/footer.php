<?php
    $start_year = 2011;
    
    if ($start_year == date("Y")) {
        $business = $start_year;
    } else {
        $business = $start_year."-".date("Y");
    }
?>
        </div><!-- #page -->
      </div><!-- .content -->
      
      <div id="sticky-footer"></div>
    </div><!-- #sticky-container -->

    <footer id="footer">
      <div id="footer-top">
        <div class="content">
          <div>
            <h4>Browse</h4>

            <?php if (function_exists(clean_footer_menu())) clean_footer_menu(); ?>
          </div><div>
            <h4>Connect</h4>
            
            <?php if (function_exists(get_social_media())) get_social_media(); ?>
          </div><div id="footer-recent">
            <h4>Recent</h4>

            <ul>
              <li>
                <?php
                  $args = array( 'posts_per_page' => 1, 'order'=> 'DESC', 'orderby' => 'date' );
                  $postslist = get_posts( $args );
                  
                  foreach ( $postslist as $post ) : setup_postdata( $post );
                    echo '<p>Blog Post (' . get_the_date() . ')</p>' . "\n";
                    echo '<a href="' . wp_get_shortlink() . '">' . get_the_title() . '</a>' . "\n";
                  endforeach; 
                  wp_reset_postdata();
                ?>
              </li>
              <li>
                <?php if (function_exists(vimeo_videos(1))) vimeo_videos(1); ?>
              </li>
              <li id="tweet-foot"></li>
            </ul>
          </div>
        </div><!-- .content -->
      </div><!-- #footer-top -->

      <div id="footer-bottom">
        <div class="content">
          <p>&copy; <?=$business ?> Digital 8 Productions, LLC</p>
        </div><!-- .content -->
      </div><!-- #footer-top -->
    </footer>
  </div><!-- #container -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-2.1.1.min.js"%3E%3C/script%3E'))</script>
  <script src="<?= esc_url( get_template_directory_uri() ) ?>/assets/js/tweetie.min.js"></script>
  <script src="<?= esc_url( get_template_directory_uri() ) ?>/private/assets/js/core.min.js"></script>

  <!-- <?php include_once("analyticstracking.php") ?> -->
	<?php wp_footer(); ?>
	</body>
</html>