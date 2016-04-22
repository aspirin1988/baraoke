
<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center"><?=get_the_title()?></h1>
	<?php $cat=wp_get_nav_menu_items('menu'); ?>
	<article class="menu-page">
		<ul class="switcher-header" data-uk-switcher="{connect:'#my-id', animation: 'slide-right'}">
			<?php foreach($cat as $key=>$value): ?>
			<li><a href=""><?=$value->title?></a></li>
			<?php endforeach; ?>

		</ul>

		<ul id="my-id" class="switcher-content uk-switcher">
			<?php foreach($cat as $key=>$value): ?>
			<li>
				<div class="uk-text-center" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)  ?>); padding: 5% 0; background-size: cover;">
					<div style="padding: 20px; background: rgba(0,0,0,0.7); display: inline-block;"><h3 style=" margin: 0; line-height: 1.2;" class="uk-text-center"><?=$value->title?></h3></div>
				</div>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<?php $args = array( 'cat'=> $value->object_id ,'numberposts'=>20); $post=get_posts($args); foreach($post as $key1=>$value1): ?>
					<p><?=$value1->post_title?><span class="uk-float-right"><?=get_field('price',$value1->ID)?></span></p>
					<?php endforeach; ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>

</section>