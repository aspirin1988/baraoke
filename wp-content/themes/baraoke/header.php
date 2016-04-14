<?php include_once ("gallery.php");?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/app.css">
</head>
<body>
<div class="wrapper">
	<!-- Header -->
	<header class="main-header uk-visible-large">
		<section class="uk-grid">
			<div class="uk-text-right uk-width-1-1">
				<ul class="header-contacts">
					<li>
						<img src="<?php bloginfo('template_directory');?>/public/img/marker.png" alt="">
						<p>г. Алматы, ул. Навои, 310а</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/public/img/phone.png" alt="">
						<p>
							<a href="">+7 727 228 19 88</a>
							<a href="">+7 747 975 10 22</a>
						</p>
					</li>
				</ul>
			</div>
		</section>
	</header><!-- Header end -->

	<!-- Navigation -->
	<nav class="main-navigation uk-navbar">
		<a href="" class="brand-icon uk-navbar-brand uk-visible-large"><img src="<?php the_field('logo',4); ?>" alt=""></a>
		<ul class="uk-navbar-nav uk-visible-large">
			<?php $menu=wp_get_nav_menu_items('main'); foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='uk-active';} ?>
				<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
			<?php }}?>
		</ul>
		<a href="#mobile-nav" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>
		<a href="<?php echo get_home_url(); ?>" class="uk-navbar-brand uk-navbar-center uk-hidden-large"><?php echo basename(get_home_url()); ?></a>
	</nav><!-- Navigation end -->

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