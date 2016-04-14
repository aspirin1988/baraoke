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
		<?php $cat=get_category_by_slug('core services');  $post=get_posts($args1 = array( 'category'=> $cat->cat_ID ,'post_parent'=>0 ,'numberposts'=>4, 'order'=>'ASC' )); ?>
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
		<?php $cat=get_category_by_slug('index-left');  $post=get_posts($args1 = array( 'category'=> $cat->cat_ID ,'numberposts'=>4, )); ?>
		<section class="cs uk-grid" data-uk-grid-margin>
			<!-- Main content left side -->
			<aside class="csl uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-3 wow slideInLeft">
				<?php foreach($post as $key=>$value ): ?>
					<article class="csla">
					<div class="points"><i></i><i></i><i></i><i></i></div>
					<div class="bg-cover"></div>
					<div class="bg-img" style="background-image: url('<?php echo get_the_post_thumbnail_url($value->ID,'full')?>');"></div>
					<a href="<?php echo $value->guid;?>"><p><?php echo $value->post_title;?></p></a>
				</article>
				<?php endforeach; ?>
			</aside><!-- Main content left side end -->

			<!-- Main content right side -->
			<aside class="csr uk-width-1-1 uk-width-medium-1-1 uk-width-large-2-3 wow slideInRight">
				<article class="csra">
						<p>
						<?php the_content(); ?>
						</p>
						<div class="images-box" data-uk-margin>
						<?php  $cat=get_category_by_slug('extra services'); /*print_r($cat);*/  $post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>4, )); ?>
							<?php foreach($post as $key1=>$value1 ): ?>
							<div class="image-box" style="background-image: url(<?php echo get_the_post_thumbnail_url($value1->ID,'full')?>);">
								<p><a href="<?php echo $value1->guid;?>"><?php echo $value1->post_title;?></a></p>
							</div>
							<?php endforeach; ?>
						</div>
				</article>
				<div class="socials">
					<p>МЫ В СОЦСЕТЯХ</p>
					<a href="<?php the_field('url_vk',4); ?>"><img src="<?php the_field('logo_vk',4); ?>" alt="VK"></a>
					<a href="<?php the_field('url_fb',4); ?>"><img src="<?php the_field('logo_fb',4); ?>" alt="FB"></a>
				</div>
			</aside><!-- Main content right side end-->

		</section>
	</div>
</section><!-- Main content end -->
