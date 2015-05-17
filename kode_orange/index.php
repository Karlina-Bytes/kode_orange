<?php
/**
 * index.php 
 * Updated by Karlina Beringer on 8 May 2015.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
get_header(); ?>

<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">
    
      <!-- Title and Site Banner -->
      <h2>Science <span class="grayRoundBullet">&bull;</span> Tech <span class="grayRoundBullet">&bull;</span> Philosophy</h2>
      <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/home_banner.jpg" class="img-resources" width="100%">
           
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