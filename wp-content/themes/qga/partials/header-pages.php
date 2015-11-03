<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Anne Grundhoefer" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">


    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>


    <!-- Document Title
    ============================================= -->
    <title>Quina Grundhoefer Architects</title>

</head>

<body class="stretched page">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67849115-9', 'auto');
  ga('send', 'pageview');

</script>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">


<header id="header" class="full-header" data-sticky-class="not-dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="interior">
                        <a href="<?php echo site_url(); ?>" class="standard-logo" data-dark-logo="<?php bloginfo('template_url'); ?>/images/color.svg"><img src="<?php bloginfo('template_url'); ?>/images/color.svg" alt="Canvas Logo"></a>
                        <a href="<?php echo site_url(); ?>" class="retina-logo" data-dark-logo="<?php bloginfo('template_url'); ?>/images/color.svg"><img src="<?php bloginfo('template_url'); ?>/images/color.svg" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="style-3">

                        <?php wp_nav_menu(); ?>

                    </nav><!-- #primary-menu end -->
                </div>

            </div>

        </header><!-- #header end -->