<?
/*
 * Template Name: kadastral-enginer
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>
<div class="lp-baner lp-baner--borderland lp-baner--dark">
	<div class="lp-baner__img"
	     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-37.jpg');"></div>
	<div class="lp-baner-filter--green"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<div class="lp-baner__title lp-baner__title--sm"><?= the_title(); ?></div>
				<div class="lp-baner__title-sub">Понадобились услуги кадастрового инженера в <?= CFS()->get('addnamecity');?> ? Мы с удовольствием ответим на все
					Ваши вопросы.
				</div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#important">Подробнее</a>
					<div class="header__btn header__btn-get header__btn-get--yellow modal-get" data-modal="order">Заказать</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Что это такое-->
<div class="section section--kadast-eng" id="important">
	<div class="section-wrap__img"
	     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-38.jpg');"></div>
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="section-title section-title--left">Кто такие кадастровые инженеры?</div>
				<div class="box">
          <? if (CFS()->get('add_text')) {
            echo CFS()->get('add_text');
          } else { ?>
						<p>Это специалисты, обладающие техническими и юридическими знаниями, получившие квалификационные аттестаты на право заниматься кадастровой деятельностью.</p>
						<p>Деятельность можно сравнить с деятельностью нотариуса. Кадастровый инженер подготавливает документы для внесения изменений в Единый государственный реестр недвижимости (ЕГРН), и свидетельствует о достоверности данных и сведений в этих документах.</p>
          <? } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Когда нужны услуги-->
<div class="section section-step">
	<div class="main-cont">
		<div class="section-title">В каких случаях нужны услуги инженеров?</div>
		<div class="solution">
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#measuring-tools"></use>
					</svg>
				</div>
				<div class="solution__el-title">При межевании земельных участков, формировании и разделе земельного участка, и объединении нескольких смежных земельных участков
				</div>
				<div class="solution__el-text">Любые действия, связанные с внесением и/или изменением в ЕГРН каких-либо сведений о земельном участке (земельных участках), требующие подготовку межевого плана.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#house-country"></use>
					</svg>
				</div>
				<div class="solution__el-title">При постановке на кадастровый учет дачного дома / помещения / машино-места,
					перепланировке помещения, реконструкции здания, при снятии объекта капитального строительства с кадастрового
					учета и т.д.
				</div>
				<div class="solution__el-text">Любые действия, связанные с внесением и/или изменением в ЕГРН каких-либо сведений
					об объекте капитального строительства, требующие подготовку технического плана или акта обследования
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#design"></use>
					</svg>
				</div>
				<div class="solution__el-title">При исправлении реестровой (кадастровой) ошибки об объектах недвижимости в сведениях ЕГРН
				</div>
				<div class="solution__el-text">Для исправления реестровой ошибки формируется новый межевой или технический план, на основании которого Росреестр вносит в ЕГРН корректные сведения в отношении объекта недвижимого имущества.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#house-plan"></use>
					</svg>
				</div>
				<div class="solution__el-title">При подготовке карты (плана) объекта землеустройства</div>
				<div class="solution__el-text">Для внесения или изменения в ЕГРН сведений о границах санитарно-защитных зон, а
					также о границах населенных пунктов и муниципальных образований.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#agreement"></use>
					</svg>
				</div>
				<div class="solution__el-title">При оформлении договора долгосрочной аренды на нежилое помещение (на срок от 1 года)
				</div>
				<div class="solution__el-text">Для внесения в ЕГРН сведений о передаваемом в аренду помещении формируется технический план по учету изменений помещения в связи с образованием его части (частей).
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#gavel"></use>
					</svg>
				</div>
				<div class="solution__el-title">При проведении судебной землеустроительной экспертизы</div>
				<div class="solution__el-text">Для внесения в ЕГРН сведений о передаваемом в аренду помещении кадастровым
					инженером формируется технический план по учету изменений помещения в связи с образованием его части (частей).
				</div>
			</div>
		</div>
	</div>
</div>
<!--from begin-->
<div class="section section--start section--lg" id="price" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-11.png');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Cтоимость и сроки</div>
				<div class="box">
					<p>Стоимость и сроки зависят от вида услуги, объема работ, площади участка (здания или помещения) и т.д., и
						определяются индивидуально. Чтобы узнать точную стоимость и сроки свяжитесь с нами удобным для Вас способом
						(заявка на сайте, телефон, онлайн-чат,
						электронная почта).</p>
					<p class="attanintion">Консультации по телефону бесплатны, выездная консультация на объекте Заказчика стоит 5
						000 руб. Стоимость и сроки на наиболее популярные стандартные услуги Вы можете посмотреть в нашем
						<a href="/prajs-list/" class="link--mark">Прайс-листе</a> (около 30 позиций).</p>
					<p>За дополнительную плату возможно срочное выполнение кадастровых работ.</p>


					<table class="table">
						<tbody>
						<tr>
							<td>Услуга</td>
							<td style="width:30%!important">Цена</td>
						</tr>
						<tr>
							<td>Геодезическая съемка</td>
							<td>10000 руб.</td>
						</tr>
						<tr>
							<td>
								Технический план на дачный, садовый или индивидуальный жилой дом
							</td>
							<td>от 8000 руб.</td>
						</tr>
						<tr>
							<td>Межевание земельного участка</td>
							<td>от 14000 руб.</td>
						</tr>
						<tr>
							<td>Раздел земельного участка</td>
							<td>от 10000 руб.</td>
						</tr>
						<tr>
							<td>Объединение земельных участков</td>
							<td>от 10000 руб.</td>
						</tr>
						<tr>
							<td>Исправление реестровой (кадастровой) ошибки</td>
							<td>от 15000 руб.</td>
						</tr>
						<!--<tr>
							<td>Технический план нежилого помещения</td>
							<td>от 10000 руб.</td>
						</tr>-->
						<!--<tr>
							<td>Технический план машино-места</td>
							<td>от 10000 руб.</td>
						</tr>-->
						<tr>
							<td>
								Акт обследования (снятие с кадастрового учета объекта кап. строительства)
							</td>
							<td>от 8000 руб.</td>
						</tr>
						<tr>
							<td>Технический план скважины</td>
							<td>20000 руб.</td>
						</tr>
						<tr>
							<td>Выезд кадастрового инженера для консультации</td>
							<td>5000 руб.</td>
						</tr>

						</tbody>
					</table>
					<a href="/prajs-list/" class="btn--md btn--mark">Смотреть все цены</a>
					<br>
					<br>
					<h3>Также работаем в других нас. пунктах Московской области :</h3>
					<ul>
          <?
          $categories = get_the_category();
          $category_id = $categories[0]->cat_ID;
          if ($category_id == 33) {
            porstAfterTitleFull(33, true);
          }
          if ($category_id == 34) {
            porstAfterTitleFull(34, true);
          }
          ?>
          </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Как мы работаем-->
<div class="section section-step" id="advance">
	<div class="section-filter"></div>
	<div class="main-cont">
		<div class="section-title">как мы работаем</div>
		<div class="step">
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">01</div>
						<div class="step-text">
							<div class="step-text__descr">Отправляете нам заявку или звоните. Получаете бесплатную консультацию.
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
							<div class="step-text__descr">Направляете нам электронные копии Ваших документов или приезжаете с ними к
								нам в офис.
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
							<div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и
								время приезда геодезистов для проведения измерений.
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
							<div class="step-text__descr">В назначенное время геодезисты приезжают к Вам, передают Договор и
								производят измерения.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">05</div>
						<div class="step-text">
							<div class="step-text__descr">Кадастровый инженер формирует необходимую техническую документацию (межевой
								план, технический план, акт обследования или землеустроительную экспертизу).
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
						<div class="step-numb">06</div>
						<div class="step-text">
							<div class="step-text__descr">Передаем Вам готовый документ.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--slider certificate-->

<!--questions-->
<!--<div class="section section--news ">
	<div class="section-title">Часто задаваемые вопросы</div>
	<div class="section-title-sub">Просто о сложном</div>
	<div class="main-cont">
		<div class="questions">
			<div class="questions-slider owl-carousel">
        <? /* while (have_rows('questions')): the_row(); */ ?>
					<div class="questions__el">
						<div class="questions__el-wrap">
							<div class="questions__name"><? /* the_sub_field('name_questions'); */ ?></div>
							<div class="questions__text">
                <? /* the_sub_field('text_questions'); */ ?>
							</div>
						</div>
					</div>
        <? /* endwhile; */ ?>
			</div>
		</div>
	</div>
</div>-->

