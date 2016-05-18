<footer id="Контакты" class="main-footer">
	<section class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
		<aside class="footer-contacts">
			<div class="uk-visible-large">
				<a href="/"><img src="<?php the_field('logo',4); ?>" alt="" class="logo-footer"></a>
				<div class="footer-contacts-info">
					<div>
						<img src="<?php bloginfo('template_directory');?>/public/img/marker.png" alt=""><br>
						<p><?php the_field('address',4); ?></p>
						<img src="<?php bloginfo('template_directory');?>/public/img/phone.png" alt=""><br>
						<p><a style="color: #fff;" href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a><br><a style="color: #fff;" href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a></p>
					</div>
				</div>
			</div>
			<div class="footer-icons uk-text-center uk-visible-large">
				<a href="<?php the_field('url-fb',4); ?>" class="uk-icon-facebook"></a>
				<a href="<?php the_field('url-vk',4); ?>" class="uk-icon-vk"></a>
				<a href="<?php the_field('url-inst',4); ?>" class="uk-icon-instagram"></a>
			</div>
			<div class="uk-hidden-large">
				<div class="footer-contacts-info" style="text-align: center; width: 100%;">
					<p style="color: #fff;"><?php the_field('address',4); ?></p>
					<p><a style="color: #fff;" href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a><br><a style="color: #fff;" href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a></p>
				</div>
			</div>
		</aside>
		<aside class="footer-map">
			<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0utW_99EzAKVxPbNNZquKhR8qnvW661l&width=100%&height=350&lang=en_US&sourceType=constructor"></script>
		</aside>
	</section>
</footer><!-- Footer end -->
</div>

<!-- Slider modal -->
<div id="place-modal" class="form-modal uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<form action="" class="modal-form blink-mailer">
			<input style="display: none" type="text" name="title" value="Бронь кабинки">
			<legend>Бронь кабинки</legend>
			<div class="uk-form-row">
				<input type="text" name="ФИО" placeholder="ФИО">
			</div>
			<div class="uk-form-row">
				<input type="text" name="Телефон" placeholder="Телефон">
			</div>
			<!--<div class="uk-form-row">
				<input type="text" name="Почта" placeholder="E-mail">
			</div>-->
			<div class="uk-form-row">

				<select name="Номер кабинки" placeholder="Номер кабинки" >
					<?php $gl_cat=explode(',',get_field('gallery',73)); foreach($gl_cat as $val): ?>
					<option value="<?=$val?>"><?=$val?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="uk-form-row">
				<input type="text" name="Дата" data-uk-datepicker="{format:'DD.MM.YYYY'}" placeholder="Дата">
			</div>
			<div class="uk-form-row">
				<input type="time" name="Время"  placeholder="Время HH:MM">
			</div>
			<div class="uk-form-row">
				<input type="submit" value="Отправить">
			</div>
		</form>
	</div>
</div><!-- Slider modal end -->

<a class="scroll-to" href="#header"><div class="top-btn" ><p>^</p></div></a>

</div>


<!-- Scripts -->
<!--<script src="--><?php //bloginfo('template_directory');?><!--/bower_components/jquery/dist/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slideshow-fx.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/datepicker.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/timepicker.js"></script>
<script src="<?php bloginfo('template_directory');?>/public/js/app.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); }, function(error) {});

	$('.scroll-to').click(function() {
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);

		return false;
	});

	$(document).scroll(function(){
		if ($('*').is('.hr')) {
			if ($(document).scrollTop() >= $('.hr')[0].offsetTop+250) {
				$('.top-btn').show();
			}
			else {
				$('.top-btn').hide();
			}
		}
	});

</script>
<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
</body>
</html>