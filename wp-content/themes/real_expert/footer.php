	<!--НАЧАЛО contacts-->
	<footer id="contacts">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-10 logo-container">
					<a href="/"><img class="logo" src="<?=get_field('logo-f',4)?>" alt="Лого"></a>
				</div>
				<div class=" uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-5-10 map-container">
					<?=get_field('map',4)?>
				</div>
				<div class=" uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-10 contacts-container">
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
<script src="<?php bloginfo('template_directory') ?>/public/js/countUp.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.waypoints.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>

	<script>

		$(document).ready(function () {
			console.log('1');
			$('.border-match').each(function (i) {
				$(this).css('min-height',520)
			})
		}
		)
	</script>

<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input').hide(); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('p.success-mail-text').html(success);  }, function(error) {console.log((error))});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>
	<?=get_field('google',4)?>
	<?=get_field('yandex',4)?>
<?php wp_footer(); ?>
</body>
</html>