<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package art-project
 */

get_header();
?>



	<main id="primary" class="site-main">
		<div class="wrapper">
	<?php
		while ( have_posts() ) :
			the_post();
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content();
	?>
		</div>
	</main><!-- #main -->
	<div class="wrapper post-nav">
	<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'btartp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'btartp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	?>
	</div>
	<?php	endwhile; // End of the loop.
		
get_sidebar();
get_footer();
