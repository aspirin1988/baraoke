<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baraoke
 */

?>

<!-- Slider -->
<div class="main-slider uk-slidenav-position" data-uk-slideshow="{autoplay: false, animation: 'random-fx'}">
	<ul class="uk-slideshow uk-overlay-active">
		<?php  $slider=get_gall('slider'); /*print_r($slider);*/ foreach ($slider as $key=> $value): ?>
		<li class="<?php if (!$key) :?>uk-active"<?php endif; ?>">
			<img src="<?php echo $value['path'];?>" width="" height="" alt="">
			<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom uk-hidden-small">
				<div class="overlay-content">
					<p><?php the_field('silder-text') ?></p>
					<button type="button" class="uk-button uk-button-danger uk-button-large" data-uk-modal="{target:'#place-modal', center:true}">Забронировать кабинку</button>
				</div>
			</div>
		</li>
		<?php endforeach; ?>
	</ul>
	<ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-left">
		<?php $slider=get_gall('slider'); foreach ($slider as $key=> $value): ?>
		<li data-uk-slideshow-item="<?=$key?>"><a href=""></a></li>
		<?php endforeach; ?>
	</ul>
</div>
<!-- Slider end -->

<!-- About -->
<?php $cat=get_category_by_slug('about');
$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>1)); ?>
<section class="about-section" style="background-image: url(<?php echo get_the_post_thumbnail_url($post[0]->ID);?>)">
	<div class="uk-grid">
		<article class="uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2 uk-push-1-2 uk-text-right">
			<h2><?php echo  $post[0]->post_title?></h2>
			<p><?php echo $post[0]->post_content?></p>
		</article>
	</div>
</section><!-- About end -->

<!-- Food Menu -->
<?php $cat=get_category_by_slug('menu');
$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>20, 'order'=> 'ASC'));?>
<section class="food-menu-section" style="background-image: url(<?php the_field('food',4); ?>)" >
	<div class="uk-grid">
		<div class="uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2">
			<ul class="uk-list">
				<li>Меню</li>
				<?php foreach($post as $key=>$value): ?>
					<li><a style="color: #fff;" href="<?php echo $value->guid;?>"><?php echo $value->post_title; ?><span></span></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section><!-- Food Menu end -->

<!-- Callback -->
<section class="callback-section" style="background-image: url(<?php the_field('recall',4); ?>)">
	<div class="uk-grid">
		<form class="uk-form uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2 blink-mailer">
			<div>
				<label>Обратная связь</label>
				<div class="uk-form-row">
					<input type="text" name="ФИО" placeholder="ФИО">
				</div>
				<div class="uk-form-row">
					<input type="text" name="Телефон" placeholder="Телефон">
				</div>
				<input style="display: none" type="text" name="title" value="ОБРАТНАЯ СВЯЗЬ">
				<div class="uk-form-row">
					<input type="submit" value="Отправить">
				</div>
			</div>
		</form>
	</div>
</section><!-- Callback -->

<!-- Comments -->
<?php $cat=get_category_by_slug('comments');
$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>3));?>
<section id="coments" class="slide-section comments">
	<h1 class="slide-section-title uk-text-center">Отзывы</h1>
	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1">
		<div class="uk-slidenav-position" data-uk-slider>
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid-width-medium-1-4">
					<?php foreach($post as $key=>$value): ?>
						<li class="comments-article">
							<img src="<?php echo get_the_post_thumbnail_url($value->ID); ?>" alt="">
							<p class="name"><?php echo $value->post_title; ?></p>
							<p class="comment"><?php echo $value->post_content; ?></p>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
		</div>
	</div>
</section><!-- Comments end -->

<!-- News -->
<?php $cat=get_category_by_slug('news');
$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>2));?>
<section class="slide-section news comments">
	<h1 class="slide-section-title uk-text-center">Новости</h1>
	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
		<?php foreach($post as $key=>$value): ?>
		<article class="news-article">
			<a href="<?php echo $value->guid; ?>"><p class="time"><?php echo $value->post_date; ?></p></a>
			<div>
				<img src="<?php echo get_the_post_thumbnail_url($value->ID); ?>" alt="">
				<p class="news-content"><?php echo mb_substr($value->post_content,0,128).'...'; ?></p>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
	<div class="uk-text-center uk-hidden-small">
		<a href="/news" class="more-news uk-button uk-button-large">Все новости</a>
	</div>
</section><!-- News end -->
