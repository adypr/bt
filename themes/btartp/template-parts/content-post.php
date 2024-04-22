<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package art-project
 */

?>

<div class="wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class('content-post'); ?>>
	<header class="post-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="post-title">', '</h3>' );
		else :
			the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;?>
	</header>
	<div class="content-post__container">
		<?php btartp_post_thumbnail(); ?>
		<div class="post-content">
			<?php
			the_excerpt(  );
			?>
		</div>
	</div>
	

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
