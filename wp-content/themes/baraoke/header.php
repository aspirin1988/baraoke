<?php include_once ("gallery.php");?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<?php $current_object=get_queried_object(); $field=get_option($current_object->taxonomy.'_'.$current_object->term_taxonomy_id) ?>
	<title>Бараоке | <?php
		if (is_tax()||is_category()){
			$_title=$field['meta-title'];
			if ($_title){
				echo $_title;
			} else{
				if (get_field('meta-title')){
					the_field('meta-title');
				}else{
					wp_title();}
			}
		}else{
			if (get_field('meta-title')){
				the_field('meta-title');
			}else{
				the_title();}
		}?>
	</title>
	<meta name="description" content="<?php if (is_tax()){ echo $field['meta-description'];}else{ the_field('meta-description');}?>"/>
	<link rel="shortcut icon" href="<?=get_field('icon',4)?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?=get_field('icon',4)?>" type="image/x-icon"/>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/datepicker.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/app.css">
</head>
<body>
<div class="onload" >
<div class="wrapper">
	<!-- Header -->
	<header id="header" class=" main-header uk-visible-large">
		<section class="uk-grid">
			<div class="uk-text-right uk-width-1-1">
				<ul class="header-contacts">
					<li>
						<h4 style=" color: white; text-align: left; line-height: 1.5; padding: 0; margin: 0;">Режим работы:</h4>
						<p style="margin: 0; padding: 0; text-align: left;"><?php the_field('schedule',4); ?></p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/public/img/marker.png" alt="">
						<p><?php the_field('address',4); ?></p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/public/img/phone.png" alt="">
						<p>
							<a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a>
							<a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a>
						</p>
					</li>
				</ul>
			</div>
		</section>
	</header><!-- Header end -->

	<!-- Navigation -->
	<nav class="main-navigation uk-navbar">
		<a href="/" class=" hr brand-icon uk-navbar-brand uk-visible-large"><img src="<?php the_field('logo',4); ?>" alt=""></a>
		<ul class="uk-navbar-nav uk-visible-large">
			<?php $menu=wp_get_nav_menu_items('main'); foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='uk-active';} ?>
				<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
			<?php }}?>
			<li><a class="scroll-to" href="/#coments">Отзывы</a></li>
			<li><a class="scroll-to" href="/#Контакты">Контакты</a></li>
		</ul>
		<a id="menu-nav" href="#mobile-nav" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>
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
	</div>
	
	<div id="mobile-menu" class="uk-offcanvas">
		<div class="uk-offcanvas-bar uk-offcanvas-bar-flip menu-page">
			<?php $cat=wp_get_nav_menu_items('menu'); ?>
			<ul class="switcher-header" data-uk-switcher="{connect:'#my-id', animation: 'slide-right'}">
			<?php foreach($cat as $key=>$value): ?>
			<li id="<?=$key?>" ><a   href=""><?=$value->title?></a></li>
			<?php endforeach; ?>
		</ul>
		</div>
	</div>