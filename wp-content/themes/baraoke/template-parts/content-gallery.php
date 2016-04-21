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
<!--
<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center">Наши кабинки</h1>
	<article class="article-cabinka">
		<h2 class="gallery-page-title2 uk-text-left">Кабинка 1</h2>
		<div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
			<a href="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" data-uk-lightbox="{group:'my-group'}" title=""><img src="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" alt="" class="article-cabinka-thumb"></a>
			<div class="article-cabinka-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae consequuntur eos minus natus! Aliquid animi architecto at, atque, beatae doloremque eos fugiat labore nihil officiis quae voluptatibus. Alias aliquid aspernatur aut dicta dignissimos doloremque excepturi fuga illo impedit ipsa iure laboriosam libero, maxime nihil odio perspiciatis porro provident qui quisquam rerum sed suscipit tempora unde velit voluptas. Accusamus, accusantium aliquam aliquid, aspernatur beatae, dolor dolorum eum exercitationem ipsum mollitia neque nobis quis quod repellendus repudiandae rerum sed tempore voluptatem! A at, cupiditate deserunt dolorem et hic ipsum laboriosam laborum nesciunt nobis numquam odit quas quidem repudiandae soluta totam velit?
			</div>
		</div>
		<ul class="uk-hidden-small uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
			<li><a href="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" data-uk-lightbox="{group:'my-group'}" title=""><img src="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" alt=""></a></li>
			<li><a href="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" data-uk-lightbox="{group:'my-group'}" title=""><img src="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" alt=""></a></li>
			<li><a href="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" data-uk-lightbox="{group:'my-group'}" title=""><img src="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" alt=""></a></li>
			<li><a href="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" data-uk-lightbox="{group:'my-group'}" title=""><img src="http://getuikit.com/docs/images/placeholder_800x600_1.jpg" alt=""></a></li>
		</ul>
	</article>
</section>

<section class="slide-section gallery-page comments">
	<h1 class="slide-section-title uk-text-center">Меню</h1>
	<article class="menu-page">
		<ul class="switcher-header" data-uk-switcher="{connect:'#my-id', animation: 'slide-right'}">
			<li><a href="">ПЕРВЫЕ БЛЮДА</a></li>
			<li><a href="">ВТОРЫЕ БЛЮДА</a></li>
			<li><a href="">ЗАКУСКИ</a></li>
			<li><a href="">АЛКОГОЛЬНЫЕ НАПИТКИ</a></li>
			<li><a href="">БЕЗАЛКОГОЛЬНЫЕ НАПИТКИ</a></li>
		</ul>

		<ul id="my-id" class="switcher-content uk-switcher">
			<li>
				<h3 class="uk-text-center">ПЕРВЫЕ БЛЮДА</h3>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
				</div>
			</li>
			<li>
				<h3 class="uk-text-center">ВТОРЫЕ БЛЮДА</h3>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
					<p>Название блюда <span class="uk-float-right">1000тг</span></p>
				</div>
			</li>
			<li>
				<h3 class="uk-text-center">ЗАКУСКИ</h3>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
					<p>Название закуски <span class="uk-float-right">1000тг</span></p>
				</div>
			</li>
			<li>
				<h3 class="uk-text-center">АЛКОГОЛЬНЫЕ НАПИТКИ</h3>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
				</div>
			</li>
			<li>
				<h3 class="uk-text-center">БЕЗАЛКОГОЛЬНЫЕ НАПИТКИ</h3>
				<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
					<p>Название напитка <span class="uk-float-right">1000тг</span></p>
				</div>
			</li>
		</ul>
	</article>
</section>

-->