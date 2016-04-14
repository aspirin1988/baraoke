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
		<?php $cat=get_category_by_slug('core services');  $post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>4, 'order'=>'ASC', )); ?>
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
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</section><!-- Main content end -->
