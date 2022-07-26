<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<!DOCTYPE html>
<html>
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css" />
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<!--/main-header-->
<!--/banner-section-->
<div id="demo-1" data-zs-src='["<?= SITE_TEMPLATE_PATH ?>/images/2.jpg", "<?= SITE_TEMPLATE_PATH ?>/images/1.jpg", "<?= SITE_TEMPLATE_PATH ?>/images/3.jpg","<?= SITE_TEMPLATE_PATH ?>/images/4.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="/"><span>M</span>ovies <span>P</span>ro</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Action</a></li>
                                                <li><a href="genre.html">Biography</a></li>
                                                <li><a href="genre.html">Crime</a></li>
                                                <li><a href="genre.html">Family</a></li>
                                                <li><a href="horror.html">Horror</a></li>
                                                <li><a href="genre.html">Romance</a></li>
                                                <li><a href="genre.html">Sports</a></li>
                                                <li><a href="genre.html">War</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Adventure</a></li>
                                                <li><a href="comedy.html">Comedy</a></li>
                                                <li><a href="genre.html">Documentary</a></li>
                                                <li><a href="genre.html">Fantasy</a></li>
                                                <li><a href="genre.html">Thriller</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Animation</a></li>
                                                <li><a href="genre.html">Costume</a></li>
                                                <li><a href="genre.html">Drama</a></li>
                                                <li><a href="genre.html">History</a></li>
                                                <li><a href="genre.html">Musical</a></li>
                                                <li><a href="genre.html">Psychological</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="series.html">tv - series</a></li>
                            <li><a href="news.html">news</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Asia</a></li>
                                                <li><a href="genre.html">France</a></li>
                                                <li><a href="genre.html">Taiwan</a></li>
                                                <li><a href="genre.html">United States</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">China</a></li>
                                                <li><a href="genre.html">HongCong</a></li>
                                                <li><a href="genre.html">Japan</a></li>
                                                <li><a href="genre.html">Thailand</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Euro</a></li>
                                                <li><a href="genre.html">India</a></li>
                                                <li><a href="genre.html">Korea</a></li>
                                                <li><a href="genre.html">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="list.html">A - z list</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <!--//header-w3l-->
        <!--/banner-info-->
        <div class="baner-info">
            <h3>Latest <span>On</span>Line <span>Mo</span>vies</h3>
            <h4>In space no one can hear you scream.</h4>
            <a class="w3_play_icon1" href="#small-dialog1">
                Watch Trailer
            </a>
        </div>
        <!--/banner-ingo-->
    </div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="col-md-6 wthree_agile_login">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
                <li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Login</a></li>
                <li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Register</a></li>

            </ul>
        </div>
        <div class="col-md-6 wthree_share_agile">

            <div class="single-agile-shar-buttons">
                <ul>
                    <li>
                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                    </li>
                    <li>
                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                    </li>
                    <li class="news-twitter">
                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                    <li>
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium"></div>

                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--//banner-bottom-->