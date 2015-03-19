<?php
  /*
  Template Name: Home
  */

  get_header()
?>
          <section id="intro">
            <h1 class="img-container"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/index-logo.png" alt="Digital 8 Productions, LLC"></h1>
            
            <h2><?= the_field('page_description') ?></h2>

            <p><?= the_field('blurb') ?></p>
          </section>

          <section id="cta">
            <h3>Featured Video</h3>
            
            <div class="video">
              <iframe src="//player.vimeo.com/video/<?= the_field('video_id') ?>?title=0&amp;byline=0&amp;portrait=0" width="1024" height="575"></iframe>
            </div><!-- .video -->
          </section><!-- #cta -->

          <section id="recent">
            <h3 class="divider"><span>News</span></h3>

            <article>
<?php
  $args = array( 'posts_per_page' => 1, 'order'=> 'DESC', 'orderby' => 'date' );
  $postslist = get_posts( $args );
  foreach ( $postslist as $post ) :
    setup_postdata( $post ); ?>
              <header>
                <h3><a href="<?= wp_get_shortlink() ?>"><?= the_title() ?></a></h3>

                <p><?= the_date() ?></p>
              </header>

              <div>
                <?= the_content() ?>
              </div>

              <ul class="share-link">
                <li>Share this post via:</li>

                <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?= urlencode(wp_get_shortlink()) ?>" target="_blank">Facebook</a></li>

                <li><a href="http://twitter.com/share?url=<?= urlencode(wp_get_shortlink()) ?>&amp;text=<?= urlencode(get_the_title()) ?>&amp;via=Digital8Creates" target="_blank">Twitter</a></li>

                <li><a href="https://plus.google.com/share?url=<?= urlencode(wp_get_shortlink()) ?>" target="_blank">Google+</a></li>

                <li><a href="http://www.linkedin.com/shareArticle?url=<?= urlencode(wp_get_shortlink()) ?>&amp;title=<?= urlencode(get_the_title()) ?>&amp;summary=<?= urlencode(get_the_excerpt()) ?>&amp;source=<?= urlencode(get_home_url()) ?>" target="_blank">LinkedIn</a></li>

                <li><a href="http://www.tumblr.com/share/link?url=<?= urlencode(wp_get_shortlink()) ?>&amp;name=<?= urlencode(get_the_title()) ?>&amp;description=<?= urlencode(get_the_excerpt()) ?>" target="_blank">Tumblr.</a></li>

                <li><a href="http://reddit.com/submit?url=<?= urlencode(wp_get_shortlink()) ?>&amp;title=<?= urlencode(get_the_title()) ?>" target="_blank">Reddit</a></li>

                <li><a href="mailto:?subject=Post from Digital 8 Productions, LLC.&amp;body=<?= get_the_title() ?>%0D%0A%0A<?= get_the_excerpt() ?>%0D%0A%0ARead full article at <?= urlencode(wp_get_shortlink()) ?>">Email</a></li>
              </ul>
<?php
  endforeach;
  wp_reset_postdata();
?>
            </article>
          </section><!-- #recent -->
<?php get_footer(); ?>