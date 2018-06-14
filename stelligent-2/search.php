<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Shoreditch
 */

get_header(); ?>

	<div class="site-content-wrapper">

		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<header class="entry-header">
					<div class="entry-header-wrapper">
						<h1 class="entry-title">
							<?php
							printf( esc_html__( 'Search Results for: %s', 'shoreditch' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</div><!-- .entry-header-wrapper -->
				</header>
			<?php
			if ( have_posts() ) : ?>


				<?php
				get_template_part( 'parts/list' );
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
