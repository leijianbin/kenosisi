<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Load all the css files and lib -->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?echo get_stylesheet_directory_uri()?>/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?echo get_stylesheet_directory_uri()?>/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?echo get_stylesheet_directory_uri()?>/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?echo get_stylesheet_directory_uri()?>/css/creative.css" type="text/css">
    <link rel="stylesheet" href="<?echo get_stylesheet_directory_uri()?>/css/styles.css" type="text/css">
    

<!-- Load all the js files and lib -->
    <?php wp_get_archives('type=monthly&format=link'); ?>

    <?php //comments_popup_script(); // off by default ?>

    <?php wp_head(); ?>

</head>

<body id="page-top" data-gr-c-s-loaded="true">

<nav id="" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><p>KENOSIS</p> <img class="logosvg" src="<?echo get_stylesheet_directory_uri()?>/images/logoi.svg"> <span>亚马逊培训</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>  
                        <a class="page-scroll" href="" style="font-weight: normal;">咨询热线： 6768865659</a>
                </li>
                <li>
                        <a class="page-scroll" href="<?echo get_site_url() ?>/index.php">首页</a>
                    </li>
                   <!-- <li>
                        <a class="page-scroll" href="#about">关于我们</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="/index.php#train">美国亚马逊培训</a>
                    </li>
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">美国亚马逊代理 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="kaihu.php">开户代理</a></li>
                <li><a href="tuiguang.php">推广代理</a></li>
                <li><a href="zhanghao.php">账户代理</a></li>
                <li><a href="chanping.php">产品代理</a></li>
                
              </ul>
            </li>
                    <li>
                        <a class="page-scroll" href="teacher.php">讲师介绍</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?echo get_site_url() ?>/contact-us">联系我们</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>