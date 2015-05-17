<?php
/**
 * sidebar.php 
 * Updated by Karlina Beringer on 16 May 2015.
 *
 * This file defines the content that will go in the sidebar.
 * The sidebar will display "widgets" like post category links.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
?>

<div id="primary-sidebar" class="sidebar primary-sidebar widget-area" role="complementary">
  
  <!-- Display social media icons (Facebook, YouTube, GitHub, Twitter) -->
  <h2 class="sideBarText">Connect with Karlina</h2>
  <table>
    <tr>
    
      <!-- A link to the Karlina Bytes Facebook page -->
      <td class="socialMediaIcons">
        <a href="https://www.facebook.com/karlinabytes" target="_blank">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/facebook.png" class="img-responsive">
        </a>
      </td>
      
      <!-- A link to the Karlina Bytes YouTube channel -->
      <td class="socialMediaIcons">
        <a href="https://www.youtube.com/c/KarlinabytesChannel" target="_blank">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/youtube.png" class="img-responsive">
        </a>
      </td>
      
      <!-- A link to the Karlina Bytes GitHub profile -->
      <td class="socialMediaIcons">
        <a href="https://github.com/Karlina-Bytes" target="_blank">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/github.png" class="img-responsive">
        </a>
      </td>
      
      <!-- A link to the Karlina Bytes Twitter page -->
      <td class="socialMediaIcons">
        <a href="https://twitter.com/Karlina_Bytes" target="_blank">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/twitter.png" class="img-responsive">
        </a>
      </td>
      
    </tr>
  </table>
  <hr>
    
  <!-- Display an email subscribe form (using the Jetpack pluggin) -->
  <div class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div><!-- .widget-area -->
  <hr>
  
  <!-- Display blog post categories -->
  <h2 class="sideBarText">Post Categories</h2>
  <ul class="categoryListStyle">
    <?php wp_list_categories( 'show_count=1&style=list&title_li=&hide_empty=0' ); ?>
  </ul>
  <hr>
    
  <!-- Display blog archives in an expandable list -->
  <h2 class="sideBarText">Blog Archives</h2>
  <select class="dropDownStyle" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php echo esc_attr( __( 'Select Month &#9660;' ) ); ?></option> 
    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
  </select>

</div>