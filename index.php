<? get_header(); ?>

	<!--main banner-->
	<div class="banner-main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/mainPage-banner-1.jpg');">
		<div class="banner-main__content">
			<div class="main-cont-sm">
				<div class="f f-col f-aic">
					<div class="banner-main__title">Ваш надежный партнер в оформлении недвижимости и инженерных изысканий</div>
					<div class="type--main type--center type--black wmax-500 mb-64 type--title md__hide">Качественные услуги от команды с многолетним опытом. Мы решим вашу проблему уже сегодня.</div>
					<div class="f gap-32 mb-48 md__hide">
						<div class="f f-aic gap-12">
							<div class="round bg--mark"></div>
							<span class="type--w600 type--black">Штат инженеров</span>
						</div>
						<div class="f f-aic gap-12">
							<div class="round bg--mark"></div>
							<span class="type--w600 type--black">Расчет по факту работ</span>
						</div>
						<div class="f f-aic gap-12">
							<div class="round bg--mark"></div>
							<span class="type--w600 type--black">Гарантия сроков</span>
						</div>
					</div>
					<div class="f gap-12 sm__fw">
						<a class="btn--md btn--mark btn--fix sm__w100" rel="m_PageScroll2id" href="#main">Подробнее</a>
						<a class="btn--md btn--light btn--fix sm__w100" rel="m_PageScroll2id" href="#order">Заказать</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--main banner-->

	<!--category-->
	<div class="main-cont" id="main">
			<div class="type--center type--lgx type--w700 type--title mt-100 mb-64">Каталог наших услуг</div>
			<div class="g g-2 gap-24 mb-100 sm__g-1">
				<a class="bor bor--border p-48 f f-col br-8" href="/geodezicheskie-raboty/">
					<div class="decorate bg--mark br-8 mb-48"></div>
					<div class="type--md type--w700 type--title mb-24">Геодезические услуги</div>
					<div class="type--main type--lh-1_6 mb-48">Геодезическое сопровождение строительства, исполнительная съемка, обмеры земельных участков и объектов капитального строительства, вынос в натуру, геодезические съемки.</div>
					<div class="type--sm type--mark type--w700 mt-a">Подробнее</div>
				</a>
				<a class="bor bor--border p-48 f f-col br-8" href="/kadastrovy-e-raboty/">
					<div class="decorate bg--mark br-8 mb-48"></div>
					<div class="type--md type--w700 type--title mb-24">Кадастровые услуги</div>
					<div class="type--main type--lh-1_6 mb-48">Постановка на кадастровый учет, учет изменений объектов недвижимости, графическое описание санитарно-защитной зоны.</div>
					<div class="type--sm type--mark type--w700 mt-a">Подробнее</div>
				</a>
				<a class="bor bor--border p-48 f f-col br-8" href="/juridicheskie-uslugi/">
					<div class="decorate bg--mark br-8 mb-48"></div>
					<div class="type--md type--w700 type--title mb-24">Юридические услуги</div>
					<div class="type--main type--lh-1_6 mb-48">Регистрация прав (представление интересов в Росреестре), оптимизация налогообложения, уведомления о строительстве/сносе, экспертизы.</div>
					<div class="type--sm type--mark type--w700 mt-a">Подробнее</div>
				</a>
				<a class="bor bor--border p-48 f f-col br-8" href="/inzhenernye-izyskanija/">
					<div class="decorate bg--mark br-8 mb-48"></div>
					<div class="type--md type--w700 type--title mb-24">Инженерные изыскания для строительства</div>
					<div class="type--main type--lh-1_6 mb-48">Геология, экология, топографическая съемка</div>
					<div class="type--sm type--mark type--w700 mt-a">Подробнее</div>
				</a>
			</div>
		</div>
	<!--category ===end -->

	<? include('module/advant.php'); ?>

	<!--about-->
	<div class="main-cont mb-100">
			<div class="type--lgx type--w700 type--title type--center mb-64">О нашей компании</div>
			<img class="mb-32 w100 br-8" src="<?php echo get_template_directory_uri(); ?>/img/companyGroup.jpg" alt="" />
			<div class="text">
				<p>Компания «Центр геодезических и кадастровых услуг» (ЦГиКУ) – это динамично развивающаяся организация, начавшая свою работу в 2012 году, основным профилем которой является выполнение кадастровых и геодезических работ. За время деятельности компании
					нами выполнены работы более чем на 5000 объектах по всей России.
					<p>Мы являемся постоянными подрядчиками ПАО Сбербанк, АО «Мосводоканал», АО «Дон-Строй Инвест», ГУП «Московское имущество», ЦУМ, ГБУ МО «МОСАВТОДОР», АШАН, LIEBHERR и др., что подтверждается благодарственными письмами.</p>
					<p>Наши сотрудники - выпускники ведущих профильных ВУЗов страны, таких как Московский государственный университет геодезии и картографии (МИИГАиК), Государственный университет по землеустройству (ГУЗ). Все наши кадастровые инженеры имеют Аттестаты кадастровых
						инженеров и состоят в СРО, таких как А СРО «Кадастровые инженеры», А СРО «ОПКД».</p>
				</p>
			</div>
		</div>
	<!--about ==end-->

	<? include('module/customers.php'); ?>
	<? include('module/popularService.php'); ?>
	<? include('module/news-list.php'); ?>
	<? include('module/questions.php'); ?>

<? get_footer(); ?>