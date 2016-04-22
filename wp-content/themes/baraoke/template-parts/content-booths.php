
<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center"><?=get_the_title()?></h1>
	<?php $gl_cat=explode(',',get_field('gallery')); foreach($gl_cat as $val): if($val!='slider'): ?>
	<article class="article-cabinka">
		<h2 class="gallery-page-title2 uk-text-left"><?php echo $val; ?></h2>
		<div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
			<a href="<?=get_the_post_thumbnail_url()?>" data-uk-lightbox="{group:'<?php echo $val;?>'}" title=""><img src="<?=get_the_post_thumbnail_url()?>" alt="" class="article-cabinka-thumb"></a>
			<div class="article-cabinka-content">
				<?php the_content() ?>
			</div>
		</div>
		<?php  $gal=get_gall($val); foreach($gal as $val1): ?>
		<ul class="uk-hidden-small uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
			<li><a href="<?=$val1['path']?>" data-uk-lightbox="{group:'<?php echo $val;?>'}" title="<?=$val1['img_title'];?>"><img src="<?=$val1['path']?>" alt=""></a></li>
		<?php endforeach; endif; ?>
		</ul>
	</article>
	<?php endforeach; ?>
</section>
