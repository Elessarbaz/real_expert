
	<!--НАЧАЛО блока "Начало"-->
    <style>

        @media screen and (min-width: 1220px) {
            .home {
                background: 50% 100%/cover url('<?=get_the_post_thumbnail_url()?>') no-repeat;
            }
        }
    </style>
	<div id="home" class="home">
		<div class="uk-container uk-container-center">
			<div class="logo_and_phone_col">
				<img src="<?=get_field('logo',4)?>" alt="Лого">
				<div class="phone-numbers">
					<h3>Контакты</h3>
					<p>
						<img src="<?php bloginfo('template_directory') ?>/public/img/telephone-little.png" alt="Телефон"><br>
						<a href="tel:<?= get_field('phone-1', 4) ?>"><?= get_field('phone-1', 4) ?></a><br>
						<a href="tel:<?= get_field('phone-2', 4) ?>"><?= get_field('phone-2', 4) ?></a><br><br>

						<img src="<?php bloginfo('template_directory') ?>/public/img/smartphone-little.png"
							 alt="Телефон"><br>
						<a href="tel:<?= get_field('phone-3', 4) ?>"><?= get_field('phone-3', 4) ?></a>
					</p>
				</div>
			</div>
			<form class="blink-mailer">
				<input type="hidden" name="title" value="Обратня связь">
				<img src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="Телефон">
				<p class="success-mail-text"><?=get_field('racall-title',4)?></p>
				<input type="text" placeholder="Имя" name="Имя">
				<input type="tel" placeholder="Телефон" name="Телефон">
				<input type="submit" value="Получить консультацию">
			</form>
			<div>
				<h1 class="slogan"><?= get_field('slogan-1', 4) ?></h1>
			</div>
		</div>
	</div>
	<!--КОНЕЦ блока "Начало"-->

	<!--НАЧАЛО блока "services"-->
	<div id="services" class="services uk-container uk-container-center">
		<?php $services=get_posts(array('category_name'=>'services','nuberposts'=>4 ,'order'=>'ASC','orderby'=>'id')) ?>
		<h2>Наши услуги по оценке имущества</h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
			<?php foreach ($services as $post): setup_postdata($post); ?>
			<li>
				<div class="border">
					<img src="<?= get_the_post_thumbnail_url() ?>">
					<h2><a href="#"><?= get_the_title() ?></a></h2>
					<?php the_content() ?>
					<div class="blink-cb-open-popup">
						<a class="search-blink-cb-module-btn btn" href="#recall">Связаться с нами</a>
					</div>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<!--КОНЕЦ блока "services"-->

	<!--НАЧАЛО блока "advantages"-->
	<div id="advantages" class="services advantages">
		<div class="uk-container uk-container-center">
			<h2>Почему стоит заказывать услуги оценки у нас</h2>
			<?php $gallery=pp_gallery_get(4); ?>
			<div class="uk-grid uk-flex-middle">
				<div class="uk-width-medium-1-2">
					<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
						<li>
							<div class="big-number">#1</div>
							<h2>Быстрый и качественный результат</h2>
						</li>
						<li>
							<div class="big-number">10</div>
							<h2>Мы более 10 лет на рынке</h2>
						</li>
						<li>
							<div class="big-number">95%</div>
							<h2>95% довольных клиентов</h2>
						</li>
						<li>
							<div class="big-number">30 мин</div>
							<h2>Выезд специалиста в течение 30 минут</h2>
						</li>
					</ul>
				</div>
				<div class="uk-width-medium-1-4">
					<img src="<?php bloginfo('template_directory') ?>/public/img/example.jpg" alt="Картинка">
				</div>
				<div class="uk-width-medium-1-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad earum eligendi fugiat iusto laborum mollitia nam quo sapiente. Eius iusto magni necessitatibus praesentium reiciendis sapiente similique sint veritatis. Animi aspernatur autem blanditiis doloremque earum hic libero molestias nesciunt nihil possimus quibusdam quis, reiciendis rem tenetur vitae! Ad atque dolorem doloribus facilis fuga ipsum itaque necessitatibus, nihil odio quae quia, sed temporibus voluptatum.</p>
				</div>

			</div>


			<div class="blink-cb-open-popup">
				<a class="search-blink-cb-module-btn btn" href="#recall">Заказать оценку</a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ блока "advantages"-->

	<!--НАЧАЛО блока "схема работы"-->
	<div id="work-scheme" class="work-scheme uk-container uk-container-center">
		<h2><?=get_the_title(52)?></h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3" data-uk-grid-margin>
			<?php $gallery=pp_gallery_get(52); $count=count($gallery); foreach ($gallery as $key=>$image): ?>
			<li>
				<div>
					<img src="<?=$image->url?>">
					<h3><?=$image->description?></h3>
				</div>
				<?php if ($count!=$key+1): ?>
				<img class="uk-hidden-small" src="<?php bloginfo('template_directory') ?>/public/img/chevron-right.png" alt="Следующий шаг">
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<!--КОНЕЦ блока "схема работы"-->

	<!--НАЧАЛО certificates-->
	<div class="certificates" id="certificates">
		<div class="uk-container uk-container-center">
			<h2>Наши Сертификаты</h2>
			<div class="data-uk-slider uk-slidenav-position" data-uk-slider>
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-1-1">
						<?php $gallery=pp_gallery_get(47);
						foreach ($gallery as $image):
						?>
						<li>
							<a href="<?=$image->url?>" data-uk-lightbox="{group:'certificates'}">
								<img src="<?=$image->url?>" alt="Сертификат">
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ certificates-->

	<!--НАЧАЛО "О НАС" -->
	<div id="about" class="about">
		<?php $post=get_post(47); setup_postdata($post); ?>
		<div class="uk-container uk-container-center">
			<h2><?=get_the_title()?></h2>
			<div class="uk-grid uk-grid-divider">
				<div class="uk-width-medium-3-10">
					<img src="<?=get_the_post_thumbnail_url()?>" alt="Лого">
				</div>
				<div class="uk-width-medium-7-10">
					<article>
						<?php the_content()?>
					</article>
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_query(); ?>
	<!--КОНЕЦ "О НАС" -->

	<!--НАЧАЛО clients-->
	<div id="clients" class="clients">
		<div class="uk-container uk-container-center">
			<h2>Наши клиенты</h2>
			<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
						<?php $clients=get_posts(array('category_name'=>'clients','numbelposts'=>-1));
						foreach ($clients as $post): setup_postdata($post);
						?>
						<li>
							<div>
								<img src="<?=get_the_post_thumbnail_url()?>" alt="Клиент">
								<h3><?=get_the_title()?></h3>
								<p>
									<?php the_content()?>
								</p>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ clients-->