<?
/*
 * Template Name: list-town-texplan
 * Template Post Type: post, page, product
 */
?>
<? get_header(); ?>


<!--block header end-->
<div class="lp-baner">
	<div class="lp-baner__img"
	     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-2.jpg');"></div>
	<div class="main-cont">
		<div class="lp-baner__content">
			<div class="lp-baner__title">
				Оформить <?=get_the_title(); ?>
			</div>
			<div class="lp-baner__title-sub">Если границы Вашего земельного участка не установлены, либо установлены, но с
				точностью ниже нормативной – изготавливается межевой план по уточнению границ
			</div>
			<div class="header__get">
				<a class="header__btn header__btn-more" href="#why">Подробнее</a>
				<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
		</div>
	</div>
</div>

<!--why you need this-->
<div class="section section--why" id="why">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call">
				<div class="section-title section-title--left">Что это такое ?</div>
				<div class="box">
					<? 
						if(CFS()->get('add_text')){
							echo CFS()->get('add_text');
						} else {
					?>
					<p>Технический план дома – это подготовленный кадастровым инженером документ, на основании, которого сведения
						о Вашей постройке вносятся в Единый государственный реестр недвижимости (ЕГРН).</p>
					<p>До 2017 года все постройки на садовых и дачных участках (в СНТ и ДНТ) можно было зарегистрировать по
						декларации. С 2017 для их регистрации в Ростреестре необходим технический план.</p>
					<p>Технический план подается в Росреестр (можно через МФЦ). По итогам проверки Росреестром технического плана
						собственнику выдаётся выписка ЕГРН на здание, подтверждающая право собственности на постройку. С этого
						момента постройка считается официально
						зарегистрированной.</p>
						<? } ?>
				</div>
			</div>
			<div class="section-call section-call--img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lp-4.jpg" alt=""/>
			</div>
		</div>
	</div>
</div>

<!--from begin-->
<div class="section section--start"
     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-5.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Это нужно знать!</div>
				<div class="box">
          <?
          while (have_posts()) : the_post();
            the_content(); // выводим контент
          endwhile;
          porstAfter(30, true);
        ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--price-->
<div class="section section--price wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="main-cont">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Указанные здесь цены являются окончательными и зависят только от площади объекта.
			Единственный платёж, который Вам придётся уплатить, это гос. пошлина в размере 350 руб., взимаемая Росреестром при
			подаче технического плана.
		</div>
		<div class="cost">
			<div class="cost__el">
				<div class="cost__el-img"
				     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-1.png');"></div>
				<div class="cost__el-title">Площадь дома
					<span>до 50 кв.м</span>
				</div>
				<div class="cost__el-text">(садовый дом, баня, гараж)</div>
				<div class="cost__el-price">10 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
			<div class="cost__el">
				<div class="cost__el-img"
				     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-2.png');"></div>
				<div class="cost__el-title">Площадь дома
					<span>от 51 до 100 кв.м</span>
				</div>
				<div class="cost__el-text">(дачный дом , жилое строение)</div>
				<div class="cost__el-price">14 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
			<div class="cost__el">
				<div class="cost__el-img"
				     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-3.png');"></div>
				<div class="cost__el-title">Площадь дома
					<span>от 101 до 200 кв.м</span>
				</div>
				<div class="cost__el-text">(индивидуальный жилой дом)</div>
				<div class="cost__el-price">20 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
			<div class="cost__el">
				<div class="cost__el-img"
				     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-4.png');"></div>
				<div class="cost__el-title">Площадь дома
					<span>от 201 кв.м</span>
				</div>
				<div class="cost__el-text">(загородный дом, коттедж)</div>
				<div class="cost__el-price">25 000 руб.</div>
				<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
			</div>
		</div>
		<div class="cost-inform">Подача в Росреестр – плюс 3 000 руб. к стоимости работ</div>
	</div>
</div>

<!--need doc-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Что войдет в стоимость работ ?</div>
		<div class="section-title-sub">Все выполняемые нами работы.</div>
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
<div class="section section--doc">
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
				<div class="doc__title">Свидетельство о праве собственности на земельный участок</div>
				<div class="doc__text">Необходимо для подтверждения права собственности на земельный участок</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#doc"></use>
					</svg>
				</div>
				<div class="doc__title">Разрешение на строительство</div>
				<div class="doc__text">Необходимо для подтверждения соответствия проектной документации для домов на землях ИЖС,
					ЛПХ, а также для жилых домов на дачных участках
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#plan"></use>
					</svg>
				</div>
				<div class="doc__title">Проектная документация на дом</div>
				<div class="doc__text">Содержит текстовые и графические материалы и определяет архитектурные,
					функционально-технологические, конструктивные и инженерно-технические решения.
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#case"></use>
					</svg>
				</div>
				<div class="doc__title">Паспортные данные собственника земельного участка</div>
				<div class="doc__text">Пакет документов который необходим для подтверждения Вашей личности.</div>
			</div>
		</div>
	</div>
</div>


<? include('module/advant.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>

<? include('module/contact-form.php'); ?>
<? get_footer(); ?>
