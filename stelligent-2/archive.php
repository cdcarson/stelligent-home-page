<?php
get_header();
?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

			<header class="entry-header">
				<div class="entry-header-wrapper">
					<?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					?>
				</div><!-- .entry-header-wrapper -->
			</header>



				<?php
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
