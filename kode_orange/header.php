<?php
/**
 * header.php 
 * Updated by Karlina Beringer on 3 June 2015.
 *
 * This file defines the head code and HTML above the main site contente.
 * For example, this file includes the favicon and navigation bar.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--================================================================-->
<!-- A tag YouTube required me to add to prove that I own this site -->
<!--================================================================-->
<meta name="google-site-verification" content="rCOMt6pSBoCyUFrvFDccWMB8osntwF0FhN-9EXYLcFA" />
<meta name="google-site-verification" content="G_u7SvgOaOT6c4wGjEkHuMquWy0K43Tt0bwXAtKJBPE" />

<!--====================================-->
<!-- Set up the page title and favicon. -->
<!--====================================-->
<link rel="icon" href="http://www.karlina-bytes.com/wp-content/uploads/2015/04/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.karlina-bytes.com/wp-content/uploads/2015/04/favicon.ico" type="image/x-icon" />
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<!--==========================================================-->
<!-- Display a fixed navigation bar at the top of the screen. -->
<!--==========================================================-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--=================================================================-->
      <!-- When viewed from a mobile device, a three-bar icon will appear. -->
      <!-- Click on this button to show or hide a drop-down menu of links. -->
      <!--=================================================================-->
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <!--=================================================================-->
      <!-- Display an image logo that links to the home page when clicked. -->
      <!--=================================================================-->
      <a href="<?php echo site_url(); ?>">
        <span class="navbar-brand navbar-logo">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/kb_logo.png" width="200">
          <img src="http://www.karlina-bytes.com/wp-content/uploads/2015/04/kb_logo_hover.png" width="200">
        </span>
      </a>
    </div><!--/.navbar-header-->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <!--==============================================================-->
      <!-- Display a list of site page links. Iterate through the list. -->
      <!--==============================================================-->
      <ul class="nav navbar-nav"><li><?php wp_list_pages(array('title_li' => '')); ?></li></ul> 
      
      <!--===================================================================-->
      <!-- Display a search bar (pull-right on desktop, pull-left on mobile) -->
      <!--===================================================================-->
      <div class="navbar-search">
        <div class="pull-right">
          <?php get_search_form(); ?> 
        </div>
        <div class="pull-left">
          <?php get_search_form(); ?>
        </div>
      </div><!--/.navbar-search-->
      
    </div><!--/.collapse-->
  </div><!--/.container-->
</nav><!--/.navbar-->

<!--============================-->
<!-- Beginning of body content. -->
<!--============================-->
<div id="content" class="site-content">