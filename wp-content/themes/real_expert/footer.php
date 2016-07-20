	<!--НАЧАЛО contacts-->
	<footer id="contacts">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-3-10 logo-container">
					<a href="/"><img class="logo" src="<?=get_field('logo-f',4)?>" alt="Лого"></a>
					<p class="slogan uk-hidden-small"><?=get_field('slogan-2',4)?></p>
				</div>
				<div class="uk-width-medium-5-10 map-container">
					<?=get_field('map',4)?>
				</div>
				<div class="uk-width-medium-2-10 contacts-container">
					<h3>Контакты</h3>

					<p>
						<?=get_field('address',4)?>
					</p>

					<p><a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a> <br>
						<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
						<a href="tel:<?=get_field('phone-3',4)?>"><?=get_field('phone-3',4)?> <?=get_field('phone-3-name',4)?></a> <br>
						<a href="tel:<?=get_field('phone-4',4)?>"><?=get_field('phone-4',4)?> <?=get_field('phone-4-name',4)?></a>
					</p>

					<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--КОНЕЦ contacts-->


<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
	<script src="https://bsh.su/client/script/GET/"></script>
	<script>
		var submitSMG = new BMModule();
		submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Получить консультацию'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('p.success-mail-text').html(success); /*$('.blink-mailer').hide(500); */ /*$('.success-mail-text').show(500); */ }, function(error) {console.log((error))});
	</script>
	<script>
		var el = document.querySelector('input[type="tel"]');
		console.log();
		VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
	</script>
<?php //wp_footer(); ?>
</body>
</html>