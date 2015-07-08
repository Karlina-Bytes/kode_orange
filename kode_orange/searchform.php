<?php
/**
 * searchform.php
 * Updated on 7 July 2015 by Karlina Beringer.
 *
 * The search form.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
?>

<form class="form-group" style="display:inline;" role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
      <div class="input-group">
      
        <!-- The search term box -->
        <input class="form-control" id="searchBox" type="text" placeholder="<?php echo esc_attr( 'Search...', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        
        <!-- The submit button -->
        <span class="input-group-addon">
          <button type="submit" id="search-submit"><span class="glyphicon glyphicon-search"></span></button>
        </span>
        
    </div><!-- #input-group -->
  </div><!-- #search-wrap -->
</form>
