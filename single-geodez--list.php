<?
/*
 * Template Name: geodez
 * Template Post Type: post, page, product
 */
?>
<?
/*	NOTE!
	Шаблон страницы: Услуги геодезиста
	URL страницы :  http://cgiku.ru/uslugi-geodezista/
*/
?>
<? get_header(); ?>

<!--block header end-->
<div class="lp-baner lp-baner--borderland lp-baner--dark">
	<div class="lp-baner__img lp-baner__img--right-left" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-43.jpg');"></div>
	<div class="lp-baner-filter--green"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<div class="lp-baner__title lp-baner__title--think"><?= the_title(); ?></div>
				<div class="lp-baner__title-sub lp-baner__title-sub--lg">Понадобились услуги геодезиста?
					<br> Мы с удовольствием ответим на все Ваши вопросы.
				</div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#why">Подробнее</a>
					<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
				</div>
			</div>
			<!--.lp-baner__image
  .lp-baner__image-el(style="background-image:url('img/lp-item-5.jpg')")
  //img(src="img/lp-item-5.jpg", alt="")

  -->
		</div>
	</div>
</div>
<!--Что это такое-->
<div class="section " id="why">
	<div class="section-wrap__img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-44.jpg');"></div>
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="section-title section-title--left">Зачем нужен геодезист?</div>
				<div class="box">
					<?
          while (have_posts()) : the_post();
            the_content(); // выводим контент
          endwhile;
          porstAfter(36, true);
        ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Когда нужны услуги-->
<div class="section section-step">
	<div class="main-cont">
		<div class="section-title">Наиболее популярные геодезические услуги в <? echo CFS()->get("cityEdit"); ?></div>
		<div class="solution">
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#house-rule"></use>
					</svg>
				</div>
				<div class="solution__el-title">Геодезия в строительстве</div>
				<div class="solution__el-text">Для соблюдения геометрических параметров проектных решений в ходе
					строительства.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#total-station"></use>
					</svg>
				</div>
				<div class="solution__el-title">Топографическая и геодезическая съемка</div>
				<div class="solution__el-text">Для отражения текущего состояния местности и определения с точностью до
					сантиметров таких параметров, как: размеры объектов на участке, расстояния между объектами, перепад высот
					рельефа.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#land"></use>
					</svg>
				</div>
				<div class="solution__el-title">Кадастровая съемка</div>
				<div class="solution__el-text">Для определения границ земельного участка с целью постановки такого земельного
					участка на государственный кадастровый учет.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#image"></use>
					</svg>
				</div>
				<div class="solution__el-title">Вынос границ земельного участка</div>
				<div class="solution__el-text">Для определения на местности точного местоположения границ земельного участка,
					сведения о котором содержатся в ЕГРН (Едином государственном реестре недвижимости).
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#camera"></use>
					</svg>
				</div>
				<div class="solution__el-title">Исполнительная съемка</div>
				<div class="solution__el-text">Для определения фактических геометрических параметров объекта строительства и
					сравнения полученной информации с проектом.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#field-place"></use>
					</svg>
				</div>
				<div class="solution__el-title">В ландшафтном дизайне</div>
				<div class="solution__el-text">
					<em>- топографическая съемка</em>
					<p>Для составления исходного материала, на основании которого можно производить проектные работы по
						благоустройству участка.</p>
					<em>- вынос дорог и элементов благоустройства</em>
					<p>Разметка на местности проектных решений.</p>
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#trees"></use>
					</svg>
				</div>
				<div class="solution__el-title">Подеревная съемка</div>
				<div class="solution__el-text">Для определения местоположения, толщины, высоты и породы каждого дерева в лесном
					массиве и для каждого отдельно стоящего дерева.
				</div>
			</div>
			<div class="solution__el">
				<div class="solution__el-icon">
					<svg class="icon">
						<use xlink:href="#house-country"></use>
					</svg>
				</div>
				<div class="solution__el-title">Фасадная съемка</div>
				<div class="solution__el-text">Для получения информации о габаритах, высотном и плановом положении конструкций
					фасада.
				</div>
			</div>
		</div>
	</div>
</div>
<!--service-->
<div class="section section--calc section--calc--topograf" id="price">
	<div class="main-cont">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Работаем в Москве и во всех районах Московской области.</div>
		<div class="calc">
			<!--input(type="range" placeholder=""  class="calc-range--topograf")-->
			<div class="calc-range__wrap">
				<div class="calc-range-val calc-range-val--lg">
					<span>от</span>
					<div class="calc-range-numb">10 000</div>
					<span>руб./день</span>
				</div>
			</div>
			<div class="calc-text">Цена за одну бригаду</div>
		</div>
		<div class="calc-ur-cont">
			<div class="calc-ur-pay calc-ur-pay--light">
				<div class="calc-ur-pay-cont">
					<div class="calc-ur-pay-text">Стоимость и сроки зависят от состава работ. Чтобы узнать точную стоимость на
						интересующие Вас работы свяжитесь с нами удобным для Вас способом (заявка на сайте, телефон, онлайн-чат,
						электронная почта).
					</div>
				</div>
				<div class="cost-inform--calc cost-inform--calc-gray">Консультации по телефону бесплатны</div>
			</div>
		</div>
	</div>
</div>
<!--Как мы работаем-->
<div class="section section-step" id="step">
	<div class="section-filter"></div>
	<div class="main-cont">
		<div class="section-title">как мы работаем</div>
		<div class="step">
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">01</div>
						<div class="step-text">
							<div class="step-text__descr">Отправляете нам заявку или звоните. Получаете бесплатную консультацию</div>
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
								время приезда геодезиста для проведения измерений.
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
							<div class="step-text__descr">В назначенное время геодезист приезжает к Вам, передаёт Договор и производит
								необходимые работы.
							</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="section section--news ">
	<div class="section-title">Часто задаваемые вопросы</div>
	<div class="section-title-sub">Просто о сложном</div>
	<div class="main-cont">
		<div class="questions">
			<div class="questions-slider owl-carousel">
				<div class="questions__el">
					<div class="questions__el-wrap">
						<div class="questions__name">Каковы сроки выполнения различных видов геодезических работ?</div>
						<div class="questions__text">
							<p>Услуги геодезиста незаменимы и обязательны в процессе проектирования и строительства, землеустройства и
								межевания. Тарифы, сроки и состав геодезических мероприятий, из-за их огромного разнообразия, могут
								значительно разниться в каждом конкретном случае. Так, для крупного строительства профессиональное
								сопровождение геодезиста может затянуться на годы, при том, что топографическую съемку для частного
								заказчика можно совершить за несколько дней, а выполнить обмер для кадастрового плана или вынос точек и
								осей в натуру — всего за считанные часы.</p>
						</div>
					</div>
				</div>
				<div class="questions__el">
					<div class="questions__el-wrap">
						<div class="questions__name">Из чего складывается стоимость услуги «геодезист на день»?</div>
						<div class="questions__text"><p>Что касается расценок на указанные услуги, то они складываются из
								стоимости:</p>
							<ul>
								<li>выезда геодезиста или бригады специалистов на конкретный участок и/или объект изысканий;</li>
								<li>полевых работ и амортизации оборудования;</li>
								<li>камеральных работ по обработке данных;</li>
								<li>оформления итоговых отчетов и документов;</li>
								<li>изготовления чертежей, схем, планов и исполнительных актов.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

