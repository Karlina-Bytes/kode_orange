<?php
/**
 * page.php 
 * Updated by Karlina Beringer on 10 May 2015.
 *
 * The template for displaying site pages.
 * For example, this file describes the format of the About page.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
get_header(); ?>

<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <h2>Not Found</h2>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div><!-- #primary -->
  </div><!-- #main -->
  <div id="secondary" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div><!-- #row -->
<?php get_footer(); ?>