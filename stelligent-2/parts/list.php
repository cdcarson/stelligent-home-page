<div class="post-list">
  <?php
  /* Start the Loop */
  while ( have_posts() ) : the_post();
  ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="stelligent-article-header">
      <a class="stelligent-article-header-link" href="<?php the_permalink();?>" <?php shoreditch_background_image(); ?>>
        <h2>
          <?php the_title()?>
        </h2>
      </a>
      <div class="stelligent-article-header-meta">
        Posted on <?php the_date() ?> by <?php the_author() ?>
        |
        <?php
        comments_popup_link( esc_html__( 'Leave a comment', 'shoreditch' ), esc_html__( '1 Comment', 'shoreditch' ), esc_html__( '% Comments', 'shoreditch' ) );
        ?>
      </div>
    </header>
  	<div class="hentry-wrapper">
  		<div class="entry-content">
  			<?php
  			the_excerpt();

  			?>
  		</div><!-- .entry-content -->
  	</div><!-- .hentry-wrapper -->
  </article><!-- #post-## -->


  <?php
  endwhile;
  ?>
</div>
