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
<div class="main-slider uk-slidenav-position" data-uk-slideshow="{autoplay: false, animation: 'fold'}">
	<ul class="uk-slideshow">
		<?php  $slider=get_gall('slider'); print_r($slider); foreach ($slider as $key=> $value): ?>
		<li class="<?php if (!$key) :?>uk-active"<?php endif; ?>">
			<img src="<?php echo $value['path'];?>" width="" height="" alt="">
			<?php if (!$key) :?>
			<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-hidden-small">
				<div class="overlay-content">
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem commodi perspiciatis sint. Aperiam aspernatur culpa cum distinctio dolore ea eveniet fugit, id sit velit.</p>
						<button type="button" class="uk-button uk-button-danger uk-button-large" data-uk-modal="{target:'#place-modal', center:true}">Забронировать кабинку</button>
					</div>
				</div>
			</div>
			<?php endif; ?>
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
					<li><a style="color: #fff;" href="<?php echo $value->guid;?>"><?php echo $value->post_title; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section><!-- Food Menu end -->

<!-- Callback -->
<section class="callback-section">
	<div class="uk-grid">
		<form class="uk-form uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2">
			<div>
				<label>Обратная связь</label>
				<div class="uk-form-row">
					<input type="text" name="ФИО" placeholder="ФИО">
				</div>
				<div class="uk-form-row">
					<input type="text" name="Телефон" placeholder="Телефон">
				</div>
				<div class="uk-form-row">
					<input type="submit" value="Отправить">
				</div>
			</div>
		</form>
	</div>
</section><!-- Callback -->

<!-- Comments -->
<section class="slide-section comments">
	<h1 class="slide-section-title uk-text-center">Отзывы</h1>
	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-3">
		<article class="comments-article">
			<img src="public/img/comments-img.png" alt="">
			<p class="name">Имя</p>
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eligendi
				inventore magnam porro. Accusantium at consectetur, dolor, exercitationem id laborum maiores
				mollitia odit officia officiis quidem ratione sed temporibus ut.</p>
		</article>
		<article class="comments-article">
			<img src="public/img/comments-img.png" alt="">
			<p class="name">Имя</p>
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eligendi
				inventore magnam porro. Accusantium at consectetur, dolor, exercitationem id laborum maiores
				mollitia odit officia officiis quidem ratione sed temporibus ut.</p>
		</article>
		<article class="comments-article">
			<img src="public/img/comments-img.png" alt="">
			<p class="name">Имя</p>
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eligendi
				inventore magnam porro. Accusantium at consectetur, dolor, exercitationem id laborum maiores
				mollitia odit officia officiis quidem ratione sed temporibus ut.</p>
		</article>
	</div>
</section><!-- Comments end -->

<!-- News -->
<section class="slide-section news comments">
	<h1 class="slide-section-title uk-text-center">Новости</h1>
	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
		<article class="news-article">
			<p class="time">18 февраля 2016</p>
			<div>
				<img src="public/img/news-bg.png" alt="">
				<p class="news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eligendi molestias odio vel velit? Adipisci animi deserunt eum fuga ipsa, laborum modi molestiae nesciunt non odit perferendis sed ullam, voluptate.</p>
			</div>
		</article>
		<article class="news-article">
			<p class="time">18 февраля 2016</p>
			<div>
				<img src="public/img/news-bg.png" alt="">
				<p class="news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eligendi molestias odio vel velit? Adipisci animi deserunt eum fuga ipsa, laborum modi molestiae nesciunt non odit perferendis sed ullam, voluptate.</p>
			</div>
		</article>
	</div>
	<div class="uk-text-center uk-hidden-small">
		<a href="" class="more-news uk-button uk-button-large">Все новости</a>
	</div>
</section><!-- News end -->
