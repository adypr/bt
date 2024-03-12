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
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
	</header><!-- .entry-header -->
	<div class="content-post__container">
		<?php btartp_post_thumbnail(); ?>
		<div class="entry-content">
			<?php
			the_excerpt(  );
			?>
		</div>
	</div>
	

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
