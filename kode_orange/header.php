<?php
/**
 * header.php 
 * Updated by Karlina Beringer on 16 May 2015.
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

<!-- Set up the page title and favicon. -->
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/KB_Favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/KB_Favicon.ico" type="image/x-icon" />
<title><?php wp_title(''); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<!-- Display a fixed navigation bar at the top of the screen -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <span>
            <img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/KB_Logo.png" width="30" height="30">
            Karlina Bytes
          </span>
      </a>
    </div><!--/.navbar-header-->
    <div id="navbarCollapse" class="collapse navbar-collapse">
    
      <!-- Display links to site pages -->
      <ul class="nav navbar-nav"><li><?php wp_list_pages(array('title_li' => '')); ?></li></ul>
          
      <!-- Display a search form --> 
      <div class="col-md-4 navSearch">
        <?php get_search_form(); ?>
      </div>
              
    </div><!--/.collapse-->
  </div><!--/.container-->
</nav><!--/.navbar-->

<div id="content" class="site-content">