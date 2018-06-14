<?php
/**
 * Template Name: Home Page Template
 *
 */

get_header(); ?>



  <div class="home-jumbotron">
    <div class="home-jumbotron-clip">
      <video loop="true" autoplay="autoplay" muted="muted">
        <source src="<?php echo get_stylesheet_directory_uri()?>/videos/stelligent_homepage_banner_bkgrnd.webm" type="video/webm">
        <source src="<?php echo get_stylesheet_directory_uri()?>/videos/stelligent_homepage_banner_bkgrnd.mp4" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri()?>/videos/stelligent_homepage_banner_bkgrnd.ogv" type="video/ogv">
      </video>
      <div class="home-jumbotron-content">
          <div class="home-jumbotron-headline">
            Continuous <br> Delivery on AWS
            <div class="prompt"><a class="brand-prompt" href="https://stelligent.com/services/">Learn More</a></div>
          </div>
      </div>
    </div>
  </div>
  <div class="stelligent-home-page">
  	<div class="inner">
	  <?php the_content();?>
	</div>
  </div>
<?php
get_sidebar( 'footer' );
get_footer();
