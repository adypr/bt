<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
	</main><!-- #main -->

<?php

if (!is_account_page()) {
	get_sidebar();
}

?>
<div class="wrapper">
	<section class="upsails">
		<h3>Popular works</h3>
		<?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
	</section>
</div>



<?php
get_footer();
