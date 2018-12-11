<?
/*
 * Template Name: landing
 * Template Post Type: post, page, product
 */
?>

<? get_header('lp'); ?>

<!--block header end-->
<div class="lp-baner">
	<div class="lp-baner__img lp-baner--contain" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-9.png');"></div>

	<div class="main-cont">
		<div class="lp-baner__content">
			<div class="lp-baner__title">Оформление
				<br> технического плана дома
			</div>
			<div class="lp-baner__title-sub">Закажите технический план и забудьте о проблемах связанных с незарегистрированной постройкой!</div>
			<div class="header__get">
				<a class="header__btn header__btn-more" href="#why">Подробнее</a>
				<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
		</div>
	</div>
</div>

<!--why you need this-->
<div class="section section--why section--why-borderland" id="why" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-10.png');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call">
				<div class="section-title section-title--left">Что это такое ?</div>
				<div class="box">
					<p>Технический план дома – это подготовленный кадастровым инженером документ, на основании которого сведения о Вашей постройке вносятся в Единый государственный реестр недвижимости (ЕГРН).</p>
					<p>До 2017 года все постройки на садовых и дачных участках (в СНТ и ДНТ) можно было зарегистрировать по декларации. С 2017 для их регистрации в Ростреестре необходим технический план.</p>
					<p>Технический план подается в Росреестр (можно через МФЦ). По итогам проверки Росреестром технического плана собственнику выдаётся выписка ЕГРН на здание, подтверждающая право собственности на постройку. С этого момента постройка считается официально
						зарегистрированной.</p>
				</div>
			</div>
			<!--<div class="section-call section-call--img">
						<img src="<?php /*echo get_template_directory_uri(); */ ?>/img/lp-4.jpg" alt="" />
					</div>-->
		</div>
	</div>
</div>

<!--from begin-->
<div class="section section--start" id="important" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-11.png');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Это нужно знать!</div>
				<div class="box">
					<p>С 01.01.2017 г. владельцу земельного участка с незарегистрированной постройкой грозят штрафы в размере 20% от неуплаченной налоговой суммы. То есть, если инспекторы Федеральной налоговой службы обнаружат у Вас на участке незарегистрированные
						постройки (в т.ч. бани, гаражи, хозяйственные строения площадью свыше 50 кв.м), за которые не платятся налоги, то они вправе взыскать с Вас долги сразу за три последних года, дополнительно выписав штраф в размере 20% от неоплаченной суммы.</p>
					<p>Также с 01.07.2017 года любая незарегистрированная постройка властями признается самовольной постройкой – «самострой» - и требует сноса.</p>
					<p class="attanintion">
						<b>ВАЖНО:</b> с 01.01.2018 г. невозможно будет провести регистрационные действия по купле-продаже, наследованию, дарению и т.д. в отношении неоформленных и незарегистрированных домов.</p>
					<p>Если Вы решили построить жилой дом на земельном участке с видом разрешенного использования ИЖС (индивидуальное жилищное строительство) или ЛПХ (личное подсобное хозяйство), то предварительно Вам необходимо получить разрешение на строительство.</p>
					<p class="attanintion">
						<b>ВАЖНО:</b> В связи введением в действие Федерального закона №340-ФЗ от 03.08.2018 необходимо подавать уведомление о начале строительства и о его окончании на землях ИЖС и ЛПХ при возведении жилых домов. С 01.01.2019 возведение жилых и садовых домов осуществляется только на основании уведомления о начале строительства (Федеральный закон №217-ФЗ от 29.07.2017).</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--price-->
<div class="section section--price wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s" id="price">
	<div class="main-cont">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Работаем в Москве и во всех районах Московской области.</div>
		<div class="cost">
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri();?>/img/house-size-1.png');"></div>
						<div class="cost__el-title">Cадовый дом, баня, гараж</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri();?>/img/house-size-2.png');"></div>
						<div class="cost__el-title">Дачный дом , жилое строение</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/house-size-3.png');"></div>
						<div class="cost__el-title">Индивидуальный жилой дом</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/house-size-4.png');"></div>
							<div class="cost__el-title">Загородный дом, коттедж</div>
					</div>
				</div>
		<div class="calc">
			<input class="calc-range--plan" type="range" placeholder=""/>
			<div class="calc-range__wrap">
				<div class="calc-range-val">
					<div class="calc-range-numb">8 000</div>
					<div class="calc-range-pay">руб</div>
				</div>
			</div>
			<div class="calc-text calc-text--attansion">
				<span>Более 300 кв.м. цена определяется индивидуально</span>
			</div>

		</div>
		<div class="get-sale-row">
			<div class="get-sale__btn modal-get" data-modal="sale">Нажми и узнай, как сэкономить!</div>
		</div>
		<div class="get-sale__add-text">Минимальный заказ 14000 рублей</div>
		<div class="cost-inform"> Указанные здесь цены являются окончательными и зависят только от площади объекта. Единственный платёж, который Вам придётся уплатить, это гос. пошлина в размере 350 руб., взимаемая Росреестром при подаче технического плана.<br>
			Если Вы не хотите тратить свое время на подачу и получение документов из Росреестра, мы выполним это за Вас. Такая услуга «под ключ» будет стоить 5000 руб. В этом случае от Вас дополнительно потребуется нотариальная доверенность (форму доверенности Вам предоставит наш кадастровый инженер).
		</div>
	</div>
</div>

<!--need doc-->
<div class="section section--doc" id="inpay">
	<div class="main-cont">
		<div class="section-title">Что войдет в стоимость работ ?</div>
		<div class="section-title-sub">Все работы будут выполнены не более чем за десять дней.</div>
		<div class="doc">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#house-plan-scale"></use>
					</svg>
				</div>
				<div class="doc__title">Обмеры внешнего контура здания</div>
				<div class="doc__text">Позволяют определить фактические габариты зданий и сооружений</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#protractor"></use>
					</svg>
				</div>
				<div class="doc__title">Внутренние обмеры
					<br> здания
				</div>
				<div class="doc__text">Необходимы для создания планов помещений.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#house-plans"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование поэтажных планов</div>
				<div class="doc__text">Документ который отображает основные элементы конструкций одного уровня здания.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#planning"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование технического плана</div>
				<div class="doc__text">Необходим для государственного кадастрового учета здания.</div>
			</div>
		</div>
	</div>
</div>

<!--need doc-->
<div class="section section--doc" id="need-doc">
	<div class="main-cont">
		<div class="section-title">Какие нужны документы?</div>
		<div class="section-title-sub">Максимальный перечень необходимых документов</div>
		<div class="doc">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#attest"></use>
					</svg>
				</div>
				<div class="doc__title">Свидетельство о праве собственности на земельный участок (выписка ЕГРН)</div>
				<div class="doc__text">Необходимо для подтверждения права собственности на земельный участок.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#doc"></use>
					</svg>
				</div>
				<div class="doc__title">Разрешение на строительство <br>(для жилых домов)</div>
				<div class="doc__text">Необходимо для регистрации домов на землях населенных пунктов для ИЖС, ЛПХ, а также для регистрации жилых домов на дачных участках.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#plan"></use>
					</svg>
				</div>
				<div class="doc__title">Проектная документация на дом (при наличии)</div>
				<div class="doc__text">Содержит текстовые и графические материалы и определяет архитектурные, функционально-технологические, конструктивные и инженерно-технические решения.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#case"></use>
					</svg>
				</div>
				<div class="doc__title">Паспортные данные собственника земельного участка (СНИЛС)</div>
				<div class="doc__text">Документы, необходимые для подтверждения Вашей личности.</div>
			</div>
		</div>
	</div>
</div>

<? include('module/step.php'); ?>
<? include('module/advant.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>
<? include('module/questions-lp.php'); ?>

<? get_footer(); ?>




