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
<section class="main-content">
	<div class="wrapper">
		<div class="content uk-grid" data-uk-margin>

			<aside class="uk-width-1-1 uk-width-medium-1-4 uk-width-large-1-4">
				<ul id="gallery-selector" class="uk-list uk-subnav">
					<li data-uk-filter="" class="uk-active"><a href="">Все</a></li>
					<?php $gl_cat=get_galls(); foreach($gl_cat as $val): ?>
					<li data-uk-filter="<?=$val['gallerey']?>"><a href=""><?=$val['gallerey']?></a></li>
					<?php endforeach; ?>
				</ul>
			</aside>
			<aside class="uk-width-1-1 uk-width-medium-3-4 uk-width-large-3-4">
				<div data-uk-grid="{controls: '#gallery-selector'}">
				<?php $gl_cat=get_galls(); foreach($gl_cat as $val): ?>
					<div class="gallery-imgs" data-uk-filter="<?=$val['gallerey']?>">
						<?php $gal=get_gall($val['gallerey']); foreach($gal as $val1): ?>
						<!--<img src="<?/*=$val1['path']*/?>" alt="">-->
						<a href="<?=$val1['path']?>" data-uk-lightbox="{group:'<?=$val['gallerey']?>'}" class="gallery-img" style="background-image: url(<?=$val1['path']?>);"></a>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>
				</div>
			</aside>
		</div>
	</div>
</section><!-- Main content end -->

