<?php
/**
 * single.php 
 * Updated by Karlina Beringer on 8 June 2015.
 *
 * The template for displaying individual blog posts.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
get_header(); ?>

<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <!-- Display the title of the blog post -->
        <h2><?php the_title(); ?></h2>
        
        <!-- Display the date in which the blog post was published -->
        <h4><?php the_date(); ?></h4>
        <br>
        
        <!-- Display the actual blog content here -->
        <?php the_content(); ?>
        
        <!-- Display the blog post categories -->
        <hr>
        <h3>Categories</h3>
        <p><?php the_category(' | '); ?></p>
        
        <!-- Display the comments section -->
        <?php // If comments are open or we have at least one comment, load up the comment template
  if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
        
        
      <!-- If the blog post cannot be found, display an appropriate message -->
      <?php endwhile; else: ?>
        <?php _e('<h2>Not Found</h2><p>Sorry, the post you are looking for could not be found.</p>'); ?>
      <?php endif; ?>
      
    </div><!-- #primary -->
  </div><!-- #main -->
  <div id="secondary" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div><!-- #row -->
<?php get_footer(); ?>