
	<!--НАЧАЛО блока "Начало"-->
	<div id="home" class="home">
		<div class="uk-container uk-container-center">
			<div class="logo_phone_slogan_col">
				<img src="<?=get_field('logo',4)?>" alt="Лого">
				<p class="phone-numbers">
					<img src="<?php bloginfo('template_directory') ?>/public/img/telephone-little.png" alt="Телефон"><br>
					<a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a><br>
					<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a><br>
					<img src="<?php bloginfo('template_directory') ?>/public/img/smartphone-little.png" alt="Телефон"><br>
					<a href="tel:<?=get_field('phone-3',4)?>"><?=get_field('phone-3',4)?></a><br>
				</p>
				<h1 class="slogan"><?=get_field('slogan-1',4)?></h1>
			</div>
			<form action="">
				<input type="hidden" name="title" value="Обратня связь">
				<img src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="Телефон">
				<p><?=get_field('racall-title',4)?></p>
				<input type="text" placeholder="Имя" name="Имя">
				<input type="tel" placeholder="Телефон" name="Телефон">
				<input type="submit" value="Получить консультацию">
			</form>
		</div>
	</div>
	<!--КОНЕЦ блока "Начало"-->

	<!--НАЧАЛО блока "services"-->
	<div id="services" class="services uk-container uk-container-center">
		<h2>Наши услуги по оценке имущества</h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
			<li>
				<img src="img/services-inmobliario.png">
				<div>
					<h2><a href="#">Оценка <br>недвижимого имущества</a></h2>
					<h3>Оценка жилья</h3>
					<h3>Оценка земельного участка</h3>
					<h3>Оценка коммерческих зданий</h3>
					<h3>Оценка частных домов</h3>
					<a href="" class="btn">Связаться с нами</a>
				</div>
			</li>
			<li>
				<img src="img/services-mobilario.png">
				<div>
					<h2><a href="#">Оценка <br>движимого имущества</a></h2>
					<h3>Оценка авто</h3>
					<h3>Оценка грузового авто</h3>
					<h3>Оценка коммерческого авто</h3>
					<h3>Оценка спецтехники</h3>
					<a href="" class="btn">Связаться с нами</a>
				</div>
			</li>
			<li>
				<img src="img/services-harm.png">
				<div>
					<h2><a href="#">Оценка ущерба</a></h2>
					<h3>Оценка ущерба авто при ДТП</h3>
					<h3>Оценка ущерба предприятия</h3>
					<h3>Оценка частных домов после ЧС</h3>
					<a href="" class="btn">Связаться с нами</a>
				</div>
			</li>
			<li>
				<img src="img/services-business.png">
				<div>
					<h2><a href="#">Оценка бизнеса</a></h2>
					<h3>Оценка нематериальных активов</h3>
					<h3>Оценка интеллектуальной собственности</h3>
					<h3>Оценка предприятий</h3>
					<a href="" class="btn">Связаться с нами</a>
				</div>
			</li>
		</ul>
	</div>
	<!--КОНЕЦ блока "services"-->

	<!--НАЧАЛО блока "advantages" делит стили с "services", поэтому есть класс .services-->
	<div id="advantages" class="services advantages uk-container uk-container-center">
		<h2>Почему стоит заказывать услуги оценки у нас</h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
			<li>
				<img src="img/advantages-medal.png">
				<h2>Мы более 10 лет на рынке</h2>
			</li>
			<li>
				<img src="img/advantages-key.png">
				<h2>Быстрый и качественный результат</h2>
			</li>
			<li>
				<img src="img/advantages-man.png">
				<h2>95% довольных клиентов</h2>
			</li>
			<li>
				<img src="img/advantages-specialist.png">
				<h2>Выезд специалиста оценки к Вам</h2>
			</li>
		</ul>
		<a href="" class="btn">Заказать оценку</a>
	</div>
	<!--КОНЕЦ блока "advantages"-->

	<!--НАЧАЛО блока "схема работы"-->
	<div id="work-scheme" class="work-scheme uk-container uk-container-center">
		<h2>Наши услуги по оценке имущества</h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3" data-uk-grid-margin>
			<li>
				<div>
					<img src="img/scheme-clipboard.png">
					<h3>1. Для оценки имущества свяжитесь с нами или оставьте заявку на сайте</h3>
				</div>
				<img class="uk-hidden-small" src="img/chevron-right.png" alt="Следующий шаг">
			</li>
			<li>
				<div>
					<img src="img/scheme-transport.png">
					<h3>2. К Вам выезжает наш специалист по оценке</h3>
				</div>
				<img class="uk-hidden-small" src="img/chevron-right.png" alt="Следующий шаг">
			</li>
			<li>
				<div>
					<img src="img/scheme-medical-result.png">
					<h3>3. Вы получаете качественный и быстрый результат</h3>
				</div>
			</li>
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
						<li>
							<a href="img/certificates-1.jpg" data-uk-lightbox="{group:'certificates'}">
								<img src="img/certificates-1.jpg" alt="Сертификат">
							</a>
						</li>
						<li>
							<a href="img/certificates-2.jpg" data-uk-lightbox="{group:'certificates'}">
								<img src="img/certificates-2.jpg" alt="Сертификат">
							</a>
						</li>
						<li>
							<a href="img/certificates-3.jpg" data-uk-lightbox="{group:'certificates'}">
								<img src="img/certificates-3.jpg" alt="Сертификат">
							</a>
						</li>
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
		<div class="uk-container uk-container-center">
			<h2>О Компании</h2>
			<div class="uk-grid uk-grid-divider">
				<div class="uk-width-medium-3-10">
					<img src="img/logo.png" alt="Лого">
				</div>
				<div class="uk-width-medium-7-10">
					<p>
						ТОО «Real Эксперт» свою профессиональную деятельность осуществляет на основании Генеральной государственной
						лицензии ЮЛ-00546(18089-1930-ТОО) № 0011099 от 25 января 2006 г., выданной Комитетом регистрационной службы
						Министерства Юстиции Республики Казахстан без ограничения срока действия по всей Республики Казахстан. Мы
						состоим в Саморегулируемой палате Казахстанской Ассоциации Оценщиков, свидетельство №4/10 от 01 января 2016
						года. <br> <br>

						Наша оценочная компания располагает обширной базой знаний и опыта в области оценочных услуг. Отчёты об оценке
						составляются с учётом всех требований Закона об оценочной деятельности Республики Казахстан, Национальных
						стандартов оценки Республики Казахстан, Международных Стандартов оценки. Штат подготовленных и опытных
						специалистов обеспечит выполнение работ на высоком уровне качества и в кратчайшие сроки. Успешный 10-и летний
						опыт работ в данном направлении основан на качественном исполнении своих обязательств с учетом потребностей
						Заказчика.</p>
				</div>
			</div>
		</div>
	</div>
	<!--КОНЕЦ "О НАС" -->

	<!--НАЧАЛО clients-->
	<div id="clients" class="clients">
		<div class="uk-container uk-container-center">
			<h2>Наши клиенты</h2>
			<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
						<li>
							<div>
								<img src="img/advantages-man.png" alt="Клиент">
								<h3>Клиент 1</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
							</div>
						</li>
						<li>
							<div>
								<img src="img/advantages-man.png" alt="Клиент">
								<h3>Клиент 2</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
							</div>
						</li>
						<li>
							<div>
								<img src="img/advantages-man.png" alt="Клиент">
								<h3>Клиент 3</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
							</div>
						</li>
						<li>
							<div>
								<img src="img/advantages-man.png" alt="Клиент">
								<h3>Клиент 4</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
							</div>
						</li>
						<li>
							<div>
								<img src="img/advantages-man.png" alt="Клиент">
								<h3>Клиент 5</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
							</div>
						</li>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ clients-->