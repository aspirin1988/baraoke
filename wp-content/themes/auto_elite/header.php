<?php include_once ("gallery.php");?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bower_components/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bower_components/uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/public/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/public/css/app.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="all-content" class="hidden">
	<!-- Header -->
	<header class="main-header uk-hidden-small">
		<div class="wrapper">
			<div class="uk-grid" data-uk-grid-margin>
				<div class="header-left-bar uk-width-1-1 uk-width-medium-1-1 uk-width-large-2-6 wow bounceInLeft">
					<a href="/"><img src="<?php the_field('logo',4); ?>" alt="Logo" class="logo"></a>
				</div>
				<div class="header-center-bar uk-width-1-1 uk-width-medium-1-1 uk-width-large-2-6 wow bounceInDown">
					<h3><?php bloginfo('description'); ?></h3>
				</div>
				<div class="header-right-bar uk-width-1-1 uk-width-medium-1-1 uk-width-large-2-6 wow bounceInRight">
					<p><img src="<?php bloginfo('template_directory'); ?>/public/img/phone-icon.png" alt="phone-icon"><a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a></p>
					<p><img src="<?php bloginfo('template_directory'); ?>/public/img/phone-icon.png" alt="phone-icon"><a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone2',4); ?></a></p>
				</div>
			</div>
		</div>
	</header><!-- Header end -->

	<!-- Navigation -->
	<div class="wrapper">
		<nav class="main-navigation uk-navbar wow fadeIn">
			<ul class="uk-navbar-nav uk-visible-large">
				<?php $menu=wp_get_nav_menu_items('main'); foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='uk-active';} ?>
					<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
				<?php }}?>
			</ul>
			<a href="#mobile-nav" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>
			<a href="#" class="uk-navbar-brand uk-navbar-center uk-visible-small">AutoElite</a>
		</nav>
	</div><!-- Navigation end -->

	<!-- Mobile Navigation -->
	<div id="mobile-nav" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas">
				<?php $menu=wp_get_nav_menu_items('main'); foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='uk-active';} ?>
					<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
				<?php }}?>
			</ul>
		</div>
	</div><!-- Mobile Navigation end -->