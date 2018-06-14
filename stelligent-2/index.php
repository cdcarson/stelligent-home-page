<?php
get_header();
?>



	<?php
	if ( is_home() && ! is_paged() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>




	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header class="entry-header">
						<div class="entry-header-wrapper">
							<h1 class="entry-title"><?php single_post_title(); ?></h1>
						</div><!-- .entry-header-wrapper -->
					</header>

				<?php
				endif;

				get_template_part( 'parts/list' );

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
