<!-- Footer -->
<footer class="main-footer">
	<div class="wrapper">
		<section class="uk-grid" data-uk-margin>
			<?php  if (get_the_title()!='Контакты') : ?>
			<aside class="footer-contacts uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2 wow slideInLeft">
				<p><?php the_field('address',4); ?></p>
				<p>Телефоны: <a href="tel:<?php the_field('phone1',4);?>"><?php the_field('phone1',4); ?></a>&nbsp;<a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a></p>
				<p>E-mail: <a href="mailto:<?php the_field('e-mail',4); ?>"><?php the_field('e-mail',4); ?></a></p>
			</aside>
			<aside class="map uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2 wow slideInRight">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=NUbI47ZOmtzBBW1EjFupGNhN551YYPYd&width=100%&height=180&lang=en_US&sourceType=constructor"></script>
			</aside>
			<?php endif; ?>
			<div class="uk-text-center ul-width-1-1 uk-width-medium-1-1 uk-width-large-1-1">
				<p class="copyright">© 2016 Автоэлит (Казахстан)
					Разработано компанией <a href="https://b-link.kz"><br>«B-link.kz»</a></p>
			</div>
		</section>
	</div>
</footer><!-- Footer end -->

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/uikit/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/uikit/js/components/grid.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/uikit/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/public/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/public/js/app.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); }, function(error) {});
</script>
</body>
</html>