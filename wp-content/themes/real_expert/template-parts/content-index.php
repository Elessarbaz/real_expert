
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
		<div class="uk-grid" style="padding-left: 12px">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
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
							<a href="tel:<?= get_field('phone-3', 4) ?>"><?= get_field('phone-3', 4) ?></a><br>
							<a href="tel:<?= get_field('phone-4', 4) ?>"><?= get_field('phone-4', 4) ?></a>
						</p>
					</div>
				</div>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 uk-position-relative">
                <form class="blink-mailer form-main animated" style="width: 250px;">
                    <input type="hidden" name="title" value="Обратня связь">
                    <img src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="Телефон">
                    <p><?=get_field('racall-title',4)?></p>
                    <input id="name" type="text" required placeholder="Имя" name="Имя">
                    <input id="tel" type="tel" required placeholder="Телефон" name="Телефон">
                    <input id="call" type="submit" value="<?=get_field('racall-button',4)?>">
                </form>
				<style>
					@media (min-width: 1220px){
						.form-main{
							left: 35px !important;
						}
					}
				</style>
				<div class=" form-main success-mail-text uk-hidden animated" style="position: absolute; top: 0; left: 25px; right: 0; width: 250px">
					<img src="<?php bloginfo('template_directory') ?>/public/img/default.svg" alt="">
					<p class="uk-hidden"></p>
					<input type="submit" value="Назад">
				</div>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
                <h1 class="slogan"><?= get_field('slogan-1', 4) ?></h1>
            </div>
        </div>
    </div>
</div>
		<!--КОНЕЦ блока "Начало"-->

		<!--НАЧАЛО блока "services"-->
		<div id="services" class="services uk-container uk-container-center">
			<?php $Services=get_category(3); ?>
			<?php $services=get_posts(array('category_name'=>'services','numberposts'=>4 ,'order'=>'ASC','orderby'=>'id')) ?>
			<h2><?=$Services->category_description?></h2>
			<div class="uk-grid uk-grid-match" >
				<?php foreach ($services as $post): setup_postdata($post); ?>
					<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
						<div class='li-match'>
							<div style="    height: 100%;
    border: 1px solid #ef7f1a;
    border-radius: 5px" class="border border-match">
								<img style="width:200px" src="<?= get_the_post_thumbnail_url() ?>">
								<h2 style="min-height: 56px"><?= get_the_title() ?></h2>
								<div class="article-match-class" style="min-height: 245px">
									<?php the_content() ?>
								</div>
								<div class="blink-cb-open-popup">
									<a class="search-blink-cb-module-btn btn" href="#recall">Связаться с нами</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

            <div class="five-services">
				<div class="border">
					<?php $post  = get_post(130)?>
					<article>
						<?= $post->post_content ?>
					</article>
					<div class="blink-cb-open-popup">
						<a class="search-blink-cb-module-btn btn" href="#recall">Связаться с нами</a>
					</div>
				</div>
            </div>

			<!--КОНЕЦ блока "services"-->
			<!--НАЧАЛО блока "advantages"-->
			<div id="advantages" class="advantages">
				<div class="uk-container uk-container-center">
					<h2>Почему стоит заказывать услуги оценки у нас</h2>
					<?php $gallery=pp_gallery_get(4); ?>
					<div class="uk-grid">
						<div class="uk-width-medium-1-2">
							<ul class="uk-grid uk-grid-medium uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
								<li>
									<div class="border">
										<div class="big-number">#<span id="count1Element">1</span></div>
										<h2>Быстрый и качественный результат</h2>
									</div>
								</li>
								<li>
									<div class="border">
										<div class="big-number"><span id="count10Element">10</span></div>
										<h2>Мы более 10 лет на рынке</h2>
									</div>
								</li>
								<li>
									<div class="border">
										<div class="big-number"><span id="count95Element">95</span>%</div>
										<h2>95% довольных клиентов</h2>
									</div>
								</li>
								<li>
									<div class="border">
										<div class="big-number"><span id="count30Element">30</span> мин</div>
										<h2>Выезд специалиста в течение 30 минут</h2>
									</div>
								</li>
							</ul>
						</div>
						<div class="uk-width-medium-1-2 second-col">
							<div class="uk-grid img-and-text">
								<div class="uk-width-1-1">
									<div class="border">
										<img src="<?php bloginfo('template_directory') ?>/public/img/time-is-money.jpg"
											 alt="Картинка" class="uk-hidden-small">
										<p class="text-section">Мы экономим Ваше время и деньги. Наши специалисты <span>САМОСТОЯТЕЛЬНО</span>
											выезжают на объект оценки в удобное для Вас время!</p>
									</div>
								</div>
							</div>
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
						<li >
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
					<?php $gallery=pp_gallery_get(141);?>
					<h2><?=get_the_title(141)?></h2>
					<div id="gallery-pp-oo" class="">
						<?php  foreach($gallery as $galleryItem) : ?>
							<a href="<?=$galleryItem->url?>">
								<img alt="<?=$galleryItem->alt?>"
									 src="<?=$galleryItem->url?>"
									 data-image="<?=$galleryItem->url?>">
							</a>
						<?php endforeach; ?>
					</div>
					<div style="margin-top: 40px;"></div>
					<div class="data-uk-slider uk-slidenav-position" data-uk-slider>
						<div class="uk-slider-container">
							<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-1-1">

								<?php
//								foreach ($gallery as $image):
//									?>
<!--									<li>-->
<!--										<a href="--><?//=$image->url?><!--" data-uk-lightbox="{group:'certificates'}">-->
<!--											<img src="--><?//=$image->url?><!--" alt="Сертификат">-->
<!--										</a>-->
<!--									</li>-->
<!--								--><?php //endforeach; ?>
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
					<?php $gallery=pp_gallery_get(137); ?>
					<h2><?=get_the_title(137)?></h2>
					<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
						<div class="uk-slider-container">
							<ul class="uk-slider uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
								<?php foreach ( $gallery as $image):
									?>
									<li>
										<div  class="li-match-target">
											<a style="    height: 100%;
    width: 100%;
    display: block;" href="<?=$image->url?>" data-uk-lightbox="{group:'clients'}" draggable="false">
												<img src="<?=$image->url?>" alt="<?=$image->alt?>">
											</a>
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