
<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center">Галерея</h1>
	<?php $gl_cat=explode(',',get_field('gallery')); foreach($gl_cat as $val): ?>
	<h2 class="gallery-page-title2"><?php echo $val; ?></h2>
	<ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
		<?php  $gal=get_gall($val); foreach($gal as $val1): ?>
		<li><a href="<?=$val1['path']?>" data-uk-lightbox="{group:'<?php echo $val;?>'}" title="<?=$val1['img_title'];?>"><img src="<?=$val1['path']?>" alt=""></a></li>
		<?php endforeach; ?>
	</ul>

	<?php endforeach; ?>
</section>