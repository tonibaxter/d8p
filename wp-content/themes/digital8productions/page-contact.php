<?php
  /*
  Template Name: Contact
  */

  $title = strtolower(get_the_title());
  $map_center = urlencode('28.543831,-81.373616');
  $map_zoom = urlencode('11');
  $map_format = urlencode('png');
  $map_sensor = urlencode('false');
  $map_size = urlencode('340x340');
  $map_type = urlencode('roadmap');
  $map_element = urlencode('element:geometry|hue:0xF9EBC5');
  $map_feature = urlencode('feature:road|hue:0x0B3851');
  $map_link = $map_center . urlencode(',13z');

  function contactFriendly() {
    if ( have_posts() ) : while( have_posts() ) : the_post();
      the_content();
    endwhile; endif;
  }

  function getForm() {
    do_shortcode( '[contact-form-7 id="54" title="Contact"]' );
  };

  get_header();
?>

          <h2><?= the_field('page_description') ?></h2>
          <section id="contact-form">
            <div class="left">
<?= contactFriendly() ?>

              <span id="logo" class="img-container"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/blue-logo.png" alt="Digital 8 Logo"></span>
            </div><!-- .left -->

            <div class="right">
<?= do_shortcode( '[contact-form-7 id="54" title="Contact"]' ); ?>
            </div><!-- .right -->
          </section><!-- #contact-form -->

          <section id="other-contact">
              <h3 class="divider"><span class="img-container"><img src="assets/img/divide-mail.png" alt="Contact Information"></span></h3>

              <div class="third">
                  <ul>
                      <li><span>Email:</span><a href="<?=convert_email_adr('mailto:info@digital8productions.com')?>" rel="nofollow"><?=convert_email_adr('info@digital8productions')?></a></li>
                      <li><span>Location:</span><a href="http://maps.google.com/?q=<?=$map_center?>" target="_blank">Orlando, Florida, USA</a></li>
                  </ul>
              </div><!-- .third 
              --><div class="third map">
                  <div>
                      <a href="http://www.google.com/maps/place/@<?=$map_link?>" target="_blank" class=" img-container">
                      <?php
                          echo '<img src="http://maps.googleapis.com/maps/api/staticmap?center=' . $map_center . '&zoom=' . $map_zoom . '&format=' . $map_format . '&sensor=' . $map_sensor . '&size=' . $map_size . '&maptype=' . $map_type . '&style=' . $map_element . '&style=' . $map_feature . '" alt="Google Map of Orlando, Florida">';
                      ?>
                      </a>
                  </div>
              </div><!-- .third 
              --><div class="third">
                  <ul>
                      <li><span>Twitter:</span><a href="https://twitter.com/Digital8Creates" target="_blank">@Digital8Creates</a></li>
                      <li><span>Facebook:</span><a href="https://www.facebook.com/digital8productions" target="_blank">/Digital8Productions</a></li>
                      <li><span>Vimeo:</span><a href="http://vimeo.com/digital8productions" target="_blank">/Digital8Productions</a></li>
                      <li><span>Instagram:</span><a href="https://instagram.com/Digital8Creates" target="_blank">@Digital8Creates</a></li>
                      <!-- <li><span>Google+:</span><a href="https://plus.google.com/115102331729937117292" target="_blank">+115102331729937117292</a></li> -->
                  </ul>
              </div><!-- .third -->
          </section><!-- #other-contact -->

<?php get_footer(); ?>