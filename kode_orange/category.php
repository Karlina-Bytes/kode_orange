<?php
/**
 * category.php 
 * Updated by Karlina Beringer on 9 May 2015.
 *
 * Display a list of blog posts per category.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
get_header(); ?>

<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">
    
      <!-- Title and Site Banner (Title varies per category) -->
      <h2>Category: <?php single_cat_title(); ?></h2>
      <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/home_banner.jpg" class="img-resources" width="100%">
      
      <!-- Display the blog category description -->
      <hr>
      <p><?php echo category_description( $category_id ); ?></p>
           
      <!-- Display blog posts in a table -->
      <table>
        <!-- Query all blog posts from newest to oldest -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <!-- There shall be one post per row of the table -->
          <tr>
            <td>
              <hr>
              <!-- Display the title, date, excerpt, and categories for each post -->
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <h4 class="dateText"><?php the_time('F j, Y'); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <p class="categoryLink"><?php the_category(' | '); ?></p>
              
            </td>
          </tr> 
        <?php endwhile; else: ?>
          <h3>
            <?php _e('Sorry, there are no posts.'); ?>
          </h3>
        <?php endif; ?>
        </table>
        
        <!-- Link(s) to Next and/or Previous pages -->
        <hr>
        <div class="row" align="center">
          <p class="nextPreviousLink"><?php posts_nav_link( ' | ', '<< Previous', 'Next >>' ); ?></p>
        </div>

    </div><!-- #primary -->
  </div><!-- #main -->
  <div id="secondary" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div><!-- #row -->
<?php get_footer(); ?>