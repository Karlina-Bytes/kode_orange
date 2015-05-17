<?php
/**
 * search.php 
 * Updated by Karlina Beringer on 10 May 2015.
 *
 * The template for displaying search results pages.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
get_header(); ?>

<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">
       <?php if ( have_posts() ) : ?>
       
         <!-- Display a page title: "Search Results for: <search_term>" -->
         <h2>
           <?php printf( __( 'Search Results for: %s', 'kode_orange' ), '<span>' . get_search_query() . '</span>' ); ?>
         </h2>
         <!-- Display an image banner -->
         <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/home_banner.jpg" class="img-resources" width="100%">
         <hr>
         
         <!-- Content -->
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
        
        	<!-- Display the title, date, excerpt, and categories for each post -->
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <h4 class="dateText"><?php the_time('F j, Y'); ?></h4>
               <p><?php the_excerpt(); ?></p>
               <p class="categoryLink"><?php the_category(' | '); ?></p>
               <hr>

	<?php endwhile; ?>

	        <!-- Link(s) to Next and/or Previous pages -->
        	<div class="row" align="center">
          	<p class="nextPreviousLink"><?php posts_nav_link( ' | ', '<< Previous', 'Next >>' ); ?></p>
        	</div>

	<?php else : ?>
       
         	<!-- Display a page title for empty search results. -->
         	<h2>
         	  <?php printf( __( 'Search Results for: %s', 'kode_orange' ), '<span>' . get_search_query() . '</span>' ); ?>
         	</h2>
         	<!-- Display an image banner -->
         	<img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/home_banner.jpg" class="img-resources" width="100%">
         	<hr>	
         	
         	<!-- A friendly message with suggestions for finding what the user is looking for -->
    		<p>Your search returned no results. Maybe you should use different search terms or try the links below.</p>
    		<hr>

    		<!-- Display a search form --> 
    		<div class="row">
    		  <div class="col-md-6">
      		    <?php get_search_form(); ?> 
      		  </div>
   		</div>
  
    		<!-- Display recent posts -->
    		<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
      		<?php if ( kode_orange_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
        	<div class="widget widget_categories">
          	  <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'kode_orange' ); ?></h2>
	     		<ul><?php wp_list_categories( array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => 1,
				'title_li'   => '',
				'number'     => 10,
			) ); ?></ul>
      		</div><!-- .widget -->
   		<?php endif; ?>   
    		<hr>
    
    		<!-- Information on how to contact the webmaster -->
    		<p>If you have any questions or comments, please email Karlina at <a href="mailto:karlina.beringer@gmail.com" target="_top">karlina.beringer@gmail.com</a>.</p>	

		<?php endif; ?>

    </div><!-- #primary -->
  </div><!-- #main -->
  <div id="secondary" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div><!-- #row -->
<?php get_footer(); ?>