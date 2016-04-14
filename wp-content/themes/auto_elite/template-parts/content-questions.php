<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auto_elite
 */
?>
<!-- Main content -->
<section class="homepage-advertise uk-hidden-small">
	<div class="wrapper">

		<?php $cat=get_category_by_slug('core services');  $post=get_posts($args1 = array(  'category'=> $cat->cat_ID ,'post_parent'=>0 ,'numberposts'=>4, 'order'=>'ASC')); ?>
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
<?php $cat=get_category_by_slug('questions');  $post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>4, )); ?>
<div class="gallery-imgs">
	<section class="main-content questions-section">
		<div class="wrapper">
			<h2 class="mct uk-text-center wow slideInLeft">Часто задоваемые вопросы</h2>
		<?php /*print_r($post);*/ foreach($post as $key=>$value ): ?>
			<div class="uk-panel uk-panel-box ">
				<h3 class="uk-panel-title"><?=$value->post_title;?></h3>
				<?=$value->post_content;?>
			</div>
			</br>
		<?php endforeach; ?>
		</div>
	</section>
</div>

