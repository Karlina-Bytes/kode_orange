<?php
/**
 * 404.php 
 * Updated by Karlina Beringer on 10 May 2015.
 *
 * The template for displaying 404 pages (not found).
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */

get_header(); ?>
	
<div class="row">
  <div id="main" class="col-md-8">
    <div id="primary" class="content-area">

    <!-- Display page title -->
    <h2>
      <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kode_orange' ); ?>
    </h2>
    <hr>

    <!-- A friendly message with suggestions for finding what the user is looking for -->
    <p><?php esc_html_e( "It looks like nothing was found at this location. Maybe the search box or links below can help you find what you're looking for.", 'kode_orange' ); ?></p>
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

  </div><!-- #primary -->
  </div><!-- #main -->
  <div id="secondary" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div><!-- #row -->
<?php get_footer(); ?>