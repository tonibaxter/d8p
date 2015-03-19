<?php
  /*
  Template Name: Projects
  */

  get_header();
?>
          <h2><?= the_field('page_description') ?></h2>

          <section id="vimeo">
            <h3>Videos</h3>

            <ul>
<?php if (function_exists(vimeo_videos(4))) vimeo_videos(4); ?>
            </ul>
          </section><!-- #vimeo -->

          <section id="instagram">
            <h3 class="divider"><span class="img-container"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/divide-insta.png" alt="Instagram Below"></span></h3>

            <ul>
<?php if (function_exists(instagram_photos(10))) instagram_photos(10); ?>
            </ul>
          </section><!-- #instagram -->
<?php get_footer(); ?>