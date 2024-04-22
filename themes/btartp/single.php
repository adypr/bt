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
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h2 class="entry-title single-title"><?php the_title(); ?></h2>
				</header>
				<div class="entry-content">
					<?php
					the_content();
					?>
				</div>
			</article>
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
