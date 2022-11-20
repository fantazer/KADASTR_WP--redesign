<?
/*
 * Template Name: cadastral_survey
 * Template Post Type: post, page, product
 */
?>

<?
/*	NOTE!
	Шаблон страницы: Кадастровая съемка
	URL страницы: /kadastrovaya-s-emka/
*/
?>
<? get_header('lp'); ?>

<div class="lp-baner lp-baner--borderland lp-baner__mobile">
	<div class="lp-baner__img lp-baner--cover" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-23.jpg');"></div>
	<div class="lp-baner-filter--dark"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<h1 class="lp-baner__title lp-baner__title--fat">Кадастровая съемка</h1>
				<div class="lp-baner__title-sub">Выполнение работ как на частных земельных участках (для физических лиц), так и
					на участках большой площади (для юридических лиц).
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
<div class="section section--why section--contain section--mobile" id="why"
     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-24.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="section-title section-title--left">Что это такое ?</div>
				<div class="box">
					<p>Кадастровая съемка - это отдельный вид геодезических работ, при проведении которого определяются границы
						земельного участка с целью постановки такого земельного участка на государственный кадастровый учет.
						Кадастровая съемка осуществляется для
						последующего межевания участка или для проверки ранее установленных (уточненных) границ.</p>
					<p>Кадастровая съемка выполняется специальными приборами: электронными тахеометрами и
						спутниковой-геодезической аппаратурой, которые позволяют измерять высоты, углы и расстояния.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Зачем это нужно-->
<div class="section section--start section--survey" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-25.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Зачем это нужно ?</div>
				<div class="box">
					<p>Необходимость проведения кадастровой съемки возникает:</p>
					<ol>
						<li>при межевании границ земельного участка,</li>
						<li>при решении спорных вопросов с соседями по поводу местоположения смежных границ земельных участков.</li>
					</ol>
					<p>Кадастровая съемка позволяет определить с точностью до сантиметров координаты поворотных точек земельного
						участка, размеры земельного участка (длины сторон и площадь), а также позволяет определить углы поворота
						границ земельного участка.</p>
					<p>Дополнительно производится съемка прилегающей территории. Это могут быть:</p>
					<ul>
						<li>заборы соседей;</li>
						<li>строения;</li>
						<li>коммуникации</li>
						<li>природные объекты;</li>
						<li>дороги.</li>
					</ul>
					<p>На основании обработанных данных кадастровой съемки, кадастровый инженер проводит анализ фактического
						местоположения земельного участка относительно сведений о границах такого земельного участка и соседних
						земельных участков, имеющихся в базе ЕГРН
						(Единого государственного реестра недвижимости). Только после анализа можно понимать реальную ситуацию,
						сложившуюся с участком.</p>
					<p>Если в процессе анализа кадастровым инженером выявляются пересечения земельного участка со смежными
						участками, то возникает необходимость в проведении кадастровых работ по устранению такого рода пересечений.
						В данном случае следует произвести процедуру
						уточнения границ либо исходного земельного участка, либо смежного (соседнего) земельного участка. Если же
						никто из собственников пересекающихся земельных участков не будет согласен «отодвигать» свои границы, то
						заинтересованному лицу следует обращаться
						в суд. Только на основании вступившего в силу законного решения суда можно будет производить кадастровые
						работы по уточнению границ земельных участков.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Цены-->
<div class="section section--price">
	<div class="main-cont">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Работаем в Москве и во всех районах Московской области.</div>
		<div class="cost cost--two">
			<div class="cost__el">
				<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/survey-pay-3.jpg');"></div>
				<div class="cost__el-title">Площадь участка
					<span>до 1 гектара</span>
				</div>
				<div class="cost__el-text cost__el-text--mark">1 раб. день</div>
				<div class="cost__el-text">Зависит от площади и местоположения</div>
				<div class="cost__el-price">от 10 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
			<div class="cost__el">
				<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/survey-pay-2.jpg');"></div>
				<div class="cost__el-title">Площадь участка
					<span>более 1 гектара</span>
				</div>
				<div class="cost__el-text cost__el-text--mark">Индивидуально</div>
				<div class="cost__el-text">Стоимость за выезд не менее</div>
				<div class="cost__el-price">10 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
		</div>
	</div>
</div>
<!--Что войдет в стоимость-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Что войдет в стоимость работ ?</div>
		<div class="section-title-sub"></div>
		<!--.section-title-sub Геодезические обмеры земельного участка.-->
		<div class="doc doc--three">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#field-place"></use>
					</svg>
				</div>
				<div class="doc__title">Полевые работы</div>
				<div class="doc__text">Производится кадастровая съемка на земельном участке</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#case"></use>
					</svg>
				</div>
				<div class="doc__title">Заказ сведений ЕГРН</div>
				<div class="doc__text">Для анализа местоположения границ соседних земельных участков относительно Вашего
					участка.
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#design"></use>
					</svg>
				</div>
				<div class="doc__title">Камеральные работы</div>
				<div class="doc__text">Отрисовка на компьютере выполненных измерений. Анализ составленных графических данных.
				</div>
			</div>
		</div>
	</div>
</div>
<!--Документы-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Какие нужны документы?</div>
		<div class="section-title-sub">Максимальный перечень необходимых документов</div>
		<div class="doc doc--two">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#attest"></use>
					</svg>
				</div>
				<div class="doc__title">Выписка ЕГРН о земельном участке
					<br> (при наличии)
				</div>
				<div class="doc__text">Необходима для ознакомления с основными характеристиками земельного участка, а также с
					его координатами
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#doc"></use>
					</svg>
				</div>
				<div class="doc__title">паспортные данные заказчика или реквизиты компании</div>
				<div class="doc__text">Необходимо для заключения договора</div>
			</div>
			<!--.doc__el
  .doc__icon
    +icon("plan","icon")
  .doc__title Письменное согласие собственника земельного участка
  .doc__text В согласии указывается количество образуемых участков и их площадь.

  -->
		</div>
	</div>
</div>
<!--Как мы работаем-->
<div class="section section-step" id="step">
	<div class="section-filter"></div>
	<div class="main-cont">
		<div class="section-title">Как мы работаем</div>
		<div class="step">
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">01</div>
						<div class="step-text">
							<div class="step-text__descr">1. Отправляете нам заявку или звоните. Получаете бесплатную консультацию.
							</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
			<div class="step-row step-row--right">
				<div class="step-el">
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
					<div class="step-content">
						<div class="step-numb">02</div>
						<div class="step-text">
							<div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и
								время приезда геодезистов для проведения измерений.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">03</div>
						<div class="step-text">
							<div class="step-text__descr">В назначенное время геодезисты приезжают к Вам, передают Договор и
								производят измерения.
							</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
			<div class="step-row step-row--right">
				<div class="step-el">
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
					<div class="step-content">
						<div class="step-numb">04</div>
						<div class="step-text">
							<div class="step-text__descr">Отрисовываем на компьютере выполненные измерения, производим анализ
								составленных графических данных.
							</div>
						</div>
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
<? include('module/questions-lp.php'); ?>

<? get_footer(); ?>
