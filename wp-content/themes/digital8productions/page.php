<?php
  $title = strtolower(get_the_title());

	get_header();
?>

          <h2><?=the_field('page_description')?></h2>
          <?php
          	// Start Projects
            if ($title == 'projects') {
              include 'pages/projects.php';
          ?>

          <section id="vimeo">
            <h3>Videos</h3>

            <ul>
<?= vimeoVideos() ?>
            </ul>
          </section><!-- #vimeo -->

          <section id="instagram">
            <h3 class="divider"><span class="img-container"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/divide-insta.png" alt="Instagram Below"></span></h3>

            <ul>
<?= instagramPhotos() ?>
            </ul>
          </section><!-- #instagram -->

          <?php
            } // END projects
            // Start staff
            if ($title == 'staff') {
              include 'pages/staff.php';
          ?>

          <section id="intro">
            <h3>Digital 8 Creatives</h3>
            
            <div class="intro-img img-container">
              <img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/nick.png" alt="Nick Floyd">
            </div>
          </section><!-- #intro -->

          <section id="creatives">
            <ul>
<?= staffMembers() ?>
            </ul>
          </section><!-- #creatives -->

          <?php
            } // END staff
          ?>


          <?php
          	echo $title;
          ?>

					<?php
					// // Start the loop.
					// while ( have_posts() ) : the_post();

					// 	// Include the page content template.
					// 	get_template_part( 'content', 'page' );

					// 	// If comments are open or we have at least one comment, load up the comment template.
					// 	if ( comments_open() || get_comments_number() ) :
					// 		comments_template();
					// 	endif;

					// // End the loop.
					// endwhile;
					?>

<?php get_footer(); ?>
