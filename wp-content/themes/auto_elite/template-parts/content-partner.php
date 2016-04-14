<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auto_elite
 */

?>

<section class="homepage-advertise uk-hidden-small">
	<div class="wrapper">
		<?php $cat=get_category_by_slug('core services');  $post=get_posts($args1 = array(  'category'=> $cat->cat_ID ,'post_parent'=>0 ,'numberposts'=>4, 'order'=>'ASC' )); ?>
		<section>
			<?php /*print_r($post);*/ foreach($post as $key=>$value ): ?>
				<article class="wow fadeInLeft" style="background-image: url('<?php echo get_the_post_thumbnail_url($value->ID,'full')?>');">
					<div class="bottom-yellow">
						<a href="<?php echo $value->guid;?>" ><p><?php echo $value->post_title;?></p></a>
					</div>
				</article>
			<?php endforeach; ?>
		</section>
	</div>
</section>

<!-- Main content -->
<section class="main-content">
	<div class="wrapper">
		<h2 class="mct uk-text-center wow slideInLeft"><?php the_field('title',4); ?></h2>
		<div class="content uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
			<div>
				<?php the_content(); ?>
			</div>
			<form class="partners-form uk-form blink-mailer">
				<legend>Заполните форму</legend>
				<div class="uk-form-row"><input type="text" name="ФИО" placeholder="ФИО"></div>
				<div class="uk-form-row"><input type="text" name="Телефон" placeholder="Телефон"></div>
				<div class="uk-form-row"><input type="text" name="mail" placeholder="E-mail"></div>
				<div class="uk-form-row"><input type="submit" value="Отправить"></div>
				<input type="hidden" name="title" value="Связаться с нами">
			</form>
		</div>
	</div>
</section><!-- Main content end --
