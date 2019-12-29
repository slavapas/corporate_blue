<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!--    <link href="css/styles.css" rel="stylesheet">-->
    <!--	<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet">-->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper container">
    <header>
        
        <a class="logo" href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Whitesquare logo"></a>
	    <?php get_search_form(); ?>
        <!--        <form name="search" action="#" method="get" class="form-inline form-search pull-right">-->
<!--            <div class="input-group">-->
<!--                <label class="sr-only" for="searchInput">Search</label>-->
<!--                <input class="form-control" id="searchInput" type="text" name="search" placeholder="Search">-->
<!--                <div class="input-group-btn">-->
<!--                    <button type="submit" class="btn btn-primary">GO</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
    </header>
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
	        <?php wp_nav_menu(
		        array(
			        'theme_location'=>'top-menu',
			        'menu'=>'Top Menu'
		        )
	        ); ?>
<!--            <li><a href="/home/">Home</a></li>-->
<!--            <li class="active"><a href="/about/">About us</a></li>-->
<!--            <li><a href="/services/">Services</a></li>-->
<!--            <li><a href="/partners/">Partners</a></li>-->
<!--            <li><a href="/customers/">Customers</a></li>-->
<!--            <li><a href="/projects/">Projects</a></li>-->
<!--            <li><a href="/careers/">Careers</a></li>-->
<!--            <li><a href="/contact/">Contact</a></li>-->
        </ul>
    </nav>

