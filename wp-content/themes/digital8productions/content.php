<?php
/**
 * Used for both single and index/archive/search.
 */

$title = trim(wp_title('', false));

$author_id = the_author_meta( 'ID' );
$author_twitter = get_field('user_twitter_handle', 'user_' . $author_id );
echo $author_twitter . 'content.php';

if ($title == 'Staff') {
	echo 'hi';
	get_post(7);
}
?>

<article>
	<header>
		<?php
			if ( is_single() ) :
		?>
		
		<h2><?= the_title() ?></h2>
		<p><span>by</span> <?= get_the_author() ?></p>
		<p><?= $author_twitter ?></p>

		<?php
			endif;
		?>



	</header>

	<div class="entry-content">
		<?php
			// /* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading %s', 'twentyfifteen' ),
			// 	the_title( '<span class="screen-reader-text">', '</span>', false )
			// ) );

			// wp_link_pages( array(
			// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
			// 	'after'       => '</div>',
			// 	'link_before' => '<span>',
			// 	'link_after'  => '</span>',
			// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
			// 	'separator'   => '<span class="screen-reader-text">, </span>',
			// ) );
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			// get_template_part( 'author-bio' );
		endif;
	?>

<!-- 	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
 -->
</article><!-- #post-## -->
