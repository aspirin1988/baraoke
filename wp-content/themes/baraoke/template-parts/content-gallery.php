<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center">Галерея</h1>
	<?php $gl_cat=get_galls(); foreach($gl_cat as $val): if($val['gallerey']!='slider'): ?>
	<h2 class="gallery-page-title2"><?php echo $val['gallerey']; ?></h2>
	<ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
		<?php  $gal=get_gall($val['gallerey']); foreach($gal as $val1): ?>
		<li><a href="<?=$val1['path']?>" data-uk-lightbox="{group:'<?php echo $val['gallerey'];?>'}" title="<?=$val1['img_title'];?>"><img src="<?=$val1['path']?>" alt=""></a></li>
		<?php endforeach; endif; ?>

	</ul>
	<?php endforeach; ?>
</section>