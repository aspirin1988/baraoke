<!-- News -->
<section class="slide-section news-page comments">
	<h1 class="slide-section-title uk-text-center"><?php the_title(); ?></h1>
	<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1">
		<?php $cat=get_category_by_slug('news');
		$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>20)); ?>
		<?php foreach($post as $key=>$value): ?>
		<article class="news-article-page">
			<p class="title"><a style="color: #fff;" href="<?php echo $value->guid;?>"> <?php echo $value->post_title;?></a></p>
			<div>
				<img src="<?php echo get_the_post_thumbnail_url($value->ID); ?>" alt="">
				<p class="time"><?php echo $value->post_date;?></p>
				<p class="news-content"><?php echo $value->post_content;?></p>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</section><!-- News end -->