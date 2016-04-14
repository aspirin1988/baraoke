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
		<div class="content contacts-page">
			<p class="cp-text uk-text-center">НАШ   АДРЕС  <br><?php the_field('region',4); ?> <?php the_field('address',4); ?></p>

			<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=NUbI47ZOmtzBBW1EjFupGNhN551YYPYd&width=100%&height=300&lang=en_US&sourceType=constructor"></script>

			<p class="cp-text uk-text-center">КОНТАКТЫ <br>Телефоны:  <a href="tel:<?php the_field('phone1',4);?>"><?php the_field('phone1',4); ?></a> &nbsp;/&nbsp;<a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a> <br>E-mail:<a href="mailto:<?php the_field('e-mail',4); ?>"><?php the_field('e-mail',4); ?></a></p>
			<br>
			<p class="cp-text uk-text-center">НАПИШИТЕ НАМ</p>
			<div class="contacts-form">
				<form class="uk-form uk-grid blink-mailer" data-uk-margin>
					<div class="uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2">
						<div class="uk-form-row">
							<label>Имя</label>
							<input type="text" id="Имя" name="Имя" placeholder="" class="uk-width-1-1">
						</div>
						<div class="uk-form-row">
							<label>Телефон</label>
							<input type="text" id="Телефон" name="Телефон" placeholder="" class="uk-width-1-1">
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-2">
						<div class="uk-form-row">
							<label>Сообщение</label>
							<textarea id="Сообщение" name="Сообщение" class="uk-width-1-1"></textarea>
						</div>
						<div class="uk-form-row uk-text-right">
							<input type="submit" value="Отправить" class="uk-width-1-2">
						</div>
						<input type="hidden" name="title" value="Связаться с нами">
					</div>
				</form>
			</div>
		</div>
	</div>
</section><!-- Main content end -->
