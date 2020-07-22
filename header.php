<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169762068-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-169762068-1');
	</script>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;0,700;1,400;1,700&family=IBM+Plex+Sans:ital,wght@0,400;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <!-- Site Icons -->
    <link rel="shortcut icon" href="lib/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/lib/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/lib/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/lib/images/apple-touch-icon.png">
    <script>
//       jQuery(document).ready(function(){
//         jQuery(".menu-button-class").click(function(){
//           jQuery("#menuId").toggle();
//         });
//       });
    </script>
</head>
<body <?php body_class(); ?>>

<div class="main-wrapper">
<div class="css-grid" id="mainHeaderId">
  <header class="main-header-class">

    <div class="header-child">
      <h1 title="<?php bloginfo( 'site_title' ); ?>" alt="<?php bloginfo( 'site_title' ); ?>" class="header-h1-class">
        <?php
          minimalistWP_site_logo();
        ?>
    </h1>
    </div>

    <div class="header-child" id="taglineId">
      <span class="site-tagline" alt="<?php bloginfo( 'description' ); ?>" title="<?php bloginfo( 'description' ); ?>"><?php bloginfo( 'description' ); ?></span>
    </div>

    <div class="header-child hide-mobile">

    </div>

    <div class="header-child" id="menuButtonDivId">
      <span class="menu-button" id="menuButtonId" title="Menu" alt="Menu">
      Menu
      </span>
    </div>

  </header>
</div><!-- Close CSS Grid -->

    <!-- Menu -->
    <div class="nav-grid" id="navGridId">

        <span class="close-button-container">
          <span class="close-button-class" id="closeButtonId" alt="Close Menu" title="Close Menu">X</span>
        </span>

        <nav class="side-nav-class main-menu-class" id="menu">
          <div id="search"><?php get_search_form(); ?></div>
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>

    </div>
