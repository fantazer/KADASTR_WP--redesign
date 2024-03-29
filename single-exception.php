<?
/*
 * Template Name: exception
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>

<div class="lp-baner lp-baner--borderland lp-baner--dark">
	<div class="lp-baner__img lp-baner__img--right-left" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/exception/exception-5.jpg');"></div>
	<div class="lp-baner-filter--green"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<h1 class="lp-baner__title lp-baner__title--fat">Исключение объекта из перечня налогообложения</h1>
				<div class="lp-baner__title-sub lp-baner__title-sub--mark">
					<strong>Важно:</strong> Мы вернем вам деньги за наши услуги, в случае неудовлетворения исковых требований. Вы ничем не рискуете!
				</div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#why">Подробнее</a>
					<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Что это такое-->
<div class="section section--why section--union section--mobile" id="why" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/exception/exception-7.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="text-block">
					<div class="section-title section-title--left">Что это такое?</div>
					<div class="box">
						<p>Ежегодно Правительство Москвы формирует Перечень объектов налогообложения, собственники которых платят налог на имущество исходя из кадастровой стоимости. Собственники таких объектов вправе как снижать установленную кадастровую стоимость, так
							и оспаривать законность и обоснованность включения их здания (помещения) в Перечень. Данный Перечень определен Постановлением Правительства Москвы от 28.11.2014 №700-ПП, в который каждый год вносятся изменения.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Зачем это нужно?-->
<div class="section section--text" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/exception/exception-6.jpg');">
	<div class="main-cont-sm">
		<div class="text-block box">
			<div class="section-title">Зачем это нужно?</div>
			<p>В случае исключения объекта из Перечня собственник получает возможность оплачивать налог на имущество исходя из его балансовой стоимости. В большинстве случаев экономия собственника составляет более 80% от первоначальной суммы налога.</p>
			<p>Кроме того, собственник вправе оспорить включение объекта за предыдущие налоговые периоды и вернуть ранее оплаченные денежные средства.</p>
			<div class="section-title">Основания для включения в перечень?</div>
			<p>На территории г. Москвы налоговая база как кадастровая стоимость объектов недвижимого имущества определяется в отношении нежилых зданий (строений, сооружений) и помещений в них, которые отвечают хотя бы одному из следующих условий:</p>
			<ul>
				<li>здание расположено на земельном участке, один из видов разрешенного использования которого предусматривает размещение офисных зданий делового, административного и коммерческого назначения, торговых объектов, объектов общественного питания и(или)
					бытового обслуживания;
				</li>
				<li>здание предназначено или фактически используется в целях делового, административного или коммерческого назначения.</li>
			</ul>
			<p>Узнать включен ли Ваш объект в Перечень объектов по Москве можно на официальном сайте Мэра Москвы, перейдя по этой <a href="https://www.mos.ru/depr/function/nalogovaya-politika/vklyuchen-li-vash-obekt-v-utverzhdennyy-perechen-obektov-nedvizhimosti/">ссылке</a></p>
				<p>Информация о том, проводилось ли обследования Вашего объекта Госинспекцией по недвижимости города Москвы, также размещена на официальном сайте Мэра Москвы по <a href="https://www.mos.ru/ggi/function/opredelenie-fakticheskogo-ispolzovanie-obektov-nedvizhimosti/rezultaty-inspekcionnykh-meropriyatij/">ссылке</a></p>

		</div>
	</div>
</div>

<div class="psv-100 bg--fieldBackground sm__psv-48">
	<div class="main-cont">
		<h3 class="type--44 type--center mb-48">Реализованные нами объекты</h3>
		<div class="g g-3 lg__g-2 md__g-1 gap-20">

      <?
      $exampleProjects = array(
        array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, ул. Днепропетровская",
          "date" => "2015-2021",
          "price" => "33 млн. руб.",
        ),
        array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, Дмитровское шоссе",
          "date" => "2015-2021",
          "price" => "35 млн. руб.",
        ),
        array(
          "type" => "Медицинская клиника",
          "location" => "г. Москва, ул. Воронцовская",
          "date" => "2015-2021",
          "price" => "18 млн. руб.",
        ),
        array(
          "type" => "Гаражный комплекс ",
          "location" => "г. Москва, ул. Верхние Поля",
          "date" => "2018-2021",
          "price" => "7 млн. руб.",
        ),
         array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, Красносельский район, ул. Сретенка",
          "date" => "2017-2022",
          "price" => "13 млн. руб.",
        ),
         array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, ул. Новослободская",
          "date" => "2017-2021",
          "price" => "11 млн. руб.",
        ),
         array(
          "type" => "Производственное здание",
          "location" => "г. Москва, г. Зеленоград, площадь Шокина",
          "date" => "2019-2022",
          "price" => "9 млн. руб.",
        ),
        array(
          "type" => "Административно-офисное здание",
          "location" => "Московская обл., Богородский го, рп Обухово, ул. Молодежная",
          "date" => "2018-2021",
          "price" => "4 млн. руб.",
        ),
         array(
          "type" => "Производственное здание",
          "location" => "г. Москва, ул. Летчика Бабушкина",
          "date" => "2018-2021",
          "price" => "21 млн. руб.",
        ),
         array(
          "type" => "Гостиница",
          "location" => "г. Москва, ул. Большая Переяславская",
          "date" => "2017-2021",
          "price" => "7 млн. руб.",
        ),
         array(
          "type" => "Спортивный комплекс",
          "location" => "г. Москва, ул. Маршала Савицкого",
          "date" => "2017-2021",
          "price" => "3 млн. руб.",
        ),
         array(
          "type" => "Спортивный комплекс",
          "location" => "г. Москва, г. Московский, ул. Солнечная улица",
          "date" => "2019-2022",
          "price" => "28 млн. руб.",
        ),
         array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, пер. Щипковский 1-й",
          "date" => "2014-2022",
          "price" => "57 млн. руб.",
        ),
         array(
          "type" => "Административно-офисное здание",
          "location" => "г. Москва, ул Профсоюзная",
          "date" => "2019-2021",
          "price" => "16 млн. руб.",
        ),
        array(
          "type" => "Медицинская лаборатория",
          "location" => "г. Москва, проезд Стрелецкий",
          "date" => "2017-2021",
          "price" => "3 млн. руб.",
        ),
        array(
          "type" => "Гостиница",
          "location" => "г. Москва, ул. Ижорская",
          "date" => "2017-2021",
          "price" => "5 млн. руб.",
        ),
      );
      ?>
      <? foreach ($exampleProjects as $exampleProjectsItem) { ?>
			<div class="br-8 bg--white overflow bor bor--border f f-col ">
				<div class="p-16 bg--mark f-grow-2 f f-col f-jcc">
					<div class="type--center type--w700 type--white "><?= $exampleProjectsItem["type"] ?></div>
					<div class="type--center type--white"><?= $exampleProjectsItem["location"] ?></div>
				</div>
				<div class="psh-16 psv-24">
					<div class="f f-between">
						<div class="w45 f">
							<svg class="icon icon--lg icon--mark mr-16">
								<use xlink:href="#law"></use>
							</svg>
							<div class="el">
								<div class="type--14 type--w700 mb-4">Период исключения</div>
								<div class="type--14"><?= $exampleProjectsItem["date"] ?></div>
							</div>
						</div>
						<div class="w45 f">
							<svg class="icon icon--lg icon--mark mr-16">
								<use xlink:href="#interface"></use>
							</svg>
							<div class="el">
								<div class="type--14 type--w700 mb-4">Величина экономии</div>
								<div class="type--14"><?= $exampleProjectsItem["price"] ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
    <? } ?>
		</div>
	</div>
</div>


<!--Зачем это нужно-->
<div class="section section--start section--survey" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/exception/exception-10.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="text-block">
					<div class="section-title section-title--left">Нормативно-правовые документы</div>
					<div class="box">
						<ul>
							<li>
								<a href="https://www.mos.ru/upload/photobank/common/upload/28.11.2014_64-02-1613_14_Sobyanin_S.S._Apparat_Mera_i_Pravitelstva_Moskvy_be27349ab0338e2baf2b67b468f1c55b.pdf " target="_blank">Постановление Правительства Москвы от 28.11.2014 №700-ПП</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2023/01/doc.pdf" target="_blank">Постановление Правительства Москвы №2564-ПП от 22.11.2022 (на 2023 год)</a>
							</li>
							<br/>
						</ul>
					</div>
					<div class="section-title section-title--left">Как возможно оспорить?</div>
					<div class="box">
						<p>Мы занимаемся данным направлением с 2016 года и имеем колоссальную положительную практику оспаривания нормативных актов Правительства Москвы. Ранее процедура оспаривания включала подачу искового заявления в Московский городской суд и апелляцию
							в Верховном суде РФ, с октября 2019 года апелляционные жалобы рассматриваются в Первом апелляционном суде общей юрисдикции. Примеры полученных нами решений:</p>
						<ul>
							<li>
								<a href="http://vsrf.ru/stor_pdf.php?id=1548614 " target="_blank">Определение Верховного суда РФ (2017)</a>
							</li>
							<li>
								<a href="http://vsrf.ru/stor_pdf.php?id=1719808" target="_blank">Определение Верховного суда РФ (2018)</a>
							</li>
							<li>
								<a href="http://vsrf.ru/stor_pdf.php?id=1738070" target="_blank">Определение Верховного суда РФ (2019)</a>
							</li>
							<li>
								<a href="https://1ap.sudrf.ru/modules.php?name=sud_delo&amp;srv_num=1&amp;name_op=doc&amp;number=193764&amp;delo_id=5&amp;new=5&amp;text_number=1 " target="_blank">Определение Первого апелляционного суда общей юрисдикции</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--service-->
<div class="section section--calc section--calc--topograf">
	<div class="main-cont">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Работаем в Москве и во всех районах Московской области.</div>
		<div class="calc">
			<div class="calc-range__wrap">
				<div class="calc-range-val calc-range-val--lg">
					<span>от</span>
					<div class="calc-range-numb">50 000</div>
					<span>руб</span>
				</div>
			</div>
			<div class="calc-text">Стандартный срок рассмотрения дела - 3 месяца.</div>
		</div>
		<div class="calc-ur-cont">
			<div class="calc-ur-pay">
				<div class="calc-ur-pay-cont">
					<div class="calc-ur-pay-text">
						<p class="lp-baner__title-sub--mark">Стоимость услуг представителя в суде первой инстанции включена. В случае неудовлетворения исковых требований мы вернем вам деньги!</p>
						<p>Подача искового заявления в текущем налоговом периоде позволяет избежать уплаты налога на имущество в повышенном размере (мы готовы безвозмездно предоставить вам соответствующее юридическое сопровождение в ИФНС г. Москвы в рамках действующего
							договора).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<? include('module/advant.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>
<? get_footer(); ?>
