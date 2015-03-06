<?= get_header() ?>
                        <section id="intro">
                            <h1 class="img-container"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/index-logo.png" alt="Digital 8 Productions, LLC"></h1>
                            
                            <h2>A creatively collaborative company.</h2>

                            <p>Founded in October of 2010, Digital 8 Productions LLC, is an innovative and independently owned production company specializing in creating/producing unique and captivating original content.</p>
                        </section>

                        <section id="cta">
                            <div class="video">
                                <iframe src="//player.vimeo.com/video/113956039?title=0&amp;byline=0&amp;portrait=0" width="1024" height="575" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div><!-- .video -->
                        </section><!-- #cta -->

                        <section id="recent">
                            <h3 class="divider"><span>News</span></h3>

                            <section id="blog-list">
                                <article>

                                <?php
                                  $args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
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

                                        <li><a href="http://twitter.com/share?url=<?= wp_get_shortlink() ?>&text=Post: <?= the_title() ?>&via=Digital8Creates" target="_blank">Twitter</a>
                                        
                                        <li><a href="https://plus.google.com/share?url=<?= wp_get_shortlink() ?>" target="_blank">Google+</a>
                                        
                                        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?= wp_get_shortlink() ?>" target="_blank">Facebook</a>
                                        
                                        <li><a href="http://www.stumbleupon.com/submit?url=<?= wp_get_shortlink() ?>&title=<?= the_title() ?>" target="_blank">StumbleUpon</a>

                                        <li><a href="http://reddit.com/submit?url=<?= wp_get_shortlink() ?>&title=<?= the_title() ?>" target="_blank">Reddit</a>
                                        
                                        <li><a href="http://www.linkedin.com/shareArticle?url=<?= wp_get_shortlink() ?>&title=<?= the_title() ?>&summary=<?= the_excerpt() ?>&source=<?=$source_url?>" target="_blank">LinkedIn</a>
                                        
                                        <li><a href="mailto:?subject=Post from Digital 8 Productions, LLC.&body=<?= the_title() ?>%0D%0A%0A<?= get_the_excerpt() ?>%0D%0A%0ARead full article at <?= wp_get_shortlink() ?>">Email</a>
                                    </ul>
                                  <?php
                                  endforeach; 
                                  wp_reset_postdata();

                                ?>
                                </article>
                            </section><!-- #blog-list -->

<!--                            <section id="blog-social">
                                <aside>
                                    <h3>Tweets</h3>

                                    <div id="tweet-list"><div class="tweet"></div></div>
                                </aside>
                            </section><!-- #blog-social -->
                        </section><!-- #recent -->

<?php get_footer(); ?>