<?
/*
 * Template Name: techplan
 * Template Post Type: post, page, product
 */
?>

<? get_header('lp'); ?>

<!--block header end-->
<div class="lp-baner lp-baner--borderland">
	<div class="lp-baner__img lp-baner__img--borderland"
	     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carplace-baner-6.png');"></div>
	<div class="lp-baner-filter lp-baner-filter--light"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<div class="lp-baner__title lp-baner__title--think">
					Технический план <br> машино-места
				</div>
				<div class="lp-baner__title-sub">Зарегистрируйте свое машино-место по всем правилам!
					<br> Работаем по всей Москве и Московской области.
				</div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#why">Подробнее</a>
					<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--why you need this-->
<div class="section section--why " id="why">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="section-title section-title--left">Что это такое ?</div>
				<div class="box">
					<p>Машино-место – это часть здания или сооружения, которая не ограничена либо частично ограничена ограждающей
						конструкцией, и предназначена исключительно для размещения транспортного средства.</p>
					<p>Местоположение машино-места отображается на плане этажа здания (при отсутствии этажности у здания — на
						плане здания) в виде геометрической фигуры, соответствующей границам машино-места. Границы машино-места
						определяются проектной документацией
						и обозначаются или закрепляются лицом, осуществляющим строительство или эксплуатацию здания, сооружения,
						либо обладателем права на машино-место, путем нанесения на поверхность пола или кровли разметки (краской, с
						использованием наклеек или иными
						способами).</p>
					<p>Технический план машино-места - это подготовленный кадастровым инженером документ, описывающий границы
						машино-места, который позволяет поставить машино-место на кадастровый учет и зарегистрировать свое право
						собственности на него. Технический план
						подается в Росреестр (можно через МФЦ). По итогам проверки Росреестром технического плана собственнику
						выдаётся выписка ЕГРН, подтверждающая право собственности на машино-место.</p>
				</div>
			</div>
			<div class="section-call section-call--img">
				<img src="<?= get_template_directory_uri(); ?>/img/carplace-baner-3.png" alt=""/>
			</div>
		</div>
	</div>
</div>

<!--from begin-->
<div id="important" class="section section--start section--start-sm section--left-bg"
     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carplace-baner-7.png');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Это важно знать!</div>
				<div class="box">
					<p>До 1 января 2017 года понятие «машино-место» не существовало в законодательстве, регулирующем кадастровый
						учет и государственную регистрацию прав, в связи с чем отсутствовала возможность регистрации таких объектов.
						В качестве машино-места такие
						объекты можно было зарегистрировать только по решению суда, либо регистрировать их как нежилые помещения,
						что по-сути не верно, так как к нежилым помещениям применяются другие ставки налогообложения и вычисления
						кадастровой стоимости объекта.</p>
					<p>С 1 января 2017 года согласно Федеральному закону № 315-ФЗ от 03.07.2016 г. «О внесении изменений в часть
						первую Гражданского кодекса Российской Федерации и отдельные законодательные акты Российской Федерации»
						машино-место признается объектом недвижимости
						и требует проведения кадастрового учета.</p>
					<p>Согласно Приказу Минэкономразвития РФ от 07.12.2016 г. № 792 размер машино-места должен иметь следующие
						параметры: ширина 2,5 - 3,6 метров, длинна 5,3 - 6,2 метров. В случае нарушения указанных размеров, это
						будет основанием для не постановки на
						кадастровый учет и отказа от регистрации права собственности. Действие приказа распространяется только на
						вновь образуемые машино-места начиная с 01.01.2017 года.</p>
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
			<!--input(type="range" placeholder=""  class="calc-range--topograf")-->
			<div class="calc-range__wrap">
				<div class="calc-range-val calc-range-val--lg">
					<div class="calc-range-numb">10 000</div>
					<div class="calc-range-pay">руб<sup>*</sup></div>
				</div>
			</div>
			<div class="calc-text calc-text--attansion">
				<span>свыше 2000 кв.м. цена определяется индивидуально</span>
			</div>
			<div class="calc-text">*Цена услуги за одно машино-место без обмеров. <br> Стоимость обмеров Машино-места - <b>2000 руб</b></div>
		</div>
		<div class="calc-ur-cont">
			<div class="calc-ur-pay">
				<div class="calc-ur-pay-cont">
					<div class="calc-ur-pay-text">Обращаем Ваше внимание, что при дальнейшей подаче Вами технического плана в
						Росреестр будет взиматься официальная гос. пошлина в размере 2 000 руб. за проведение регистрации права
						собственности на машино-место.
					</div>
				</div>
				<div class="cost-inform--calc cost-inform--calc-gray">Если Вы не хотите тратить свое время на подачу и получение
					документов из Росреестра, мы выполним это за Вас. Такая услуга «под ключ» будет стоить 5000 руб. В этом случае
					от Вас дополнительно потребуется нотариальная доверенность (форму доверенности
					Вам предоставит наш кадастровый инженер).
				</div>
			</div>
		</div>
	</div>
</div>

<!--need payment-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Что войдет в стоимость работ ?</div>
		<div class="section-title-sub"></div>
		<!--.section-title-sub Геодезические обмеры земельного участка.-->
		<div class="doc">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#case"></use>
					</svg>
				</div>
				<div class="doc__title">Заказ
					<br> сведений ЕГРН
				</div>
				<div class="doc__text">Получение исходной информации о здании, в котором расположено машино-место.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#design"></use>
					</svg>
				</div>
				<div class="doc__title">Обмеры
					<br> машино-места
				</div>
				<div class="doc__text">Позволяют определить фактические размеры машино-места</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#protractor"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование плана расположения</div>
				<div class="doc__text">Необходим в случае отсутствия конкретной площади машино-места в акте приема-передачи
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#planning"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование технического плана</div>
				<div class="doc__text">Необходим для государственного кадастрового учета</div>
			</div>
		</div>
	</div>
</div>

<!--need doc-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Какие нужны документы?</div>
		<div class="section-title-sub">Максимальный перечень необходимых документов</div>
		<div class="doc doc--three">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#attest"></use>
					</svg>
				</div>
				<div class="doc__title">Договор
					<br> долевого участия
				</div>
				<div class="doc__text">Или договор купли-продажи</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#plan"></use>
					</svg>
				</div>
				<div class="doc__title">Акт
					<br> приема-передачи
				</div>
				<div class="doc__text">Необходимо для подтверждения права собственности</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#doc"></use>
					</svg>
				</div>
				<div class="doc__title">Паспортные данные собственника машино-места</div>
				<div class="doc__text">или СНИЛС. Документы, необходимые для подтверждения Вашей личности.</div>
			</div>
		</div>
	</div>
</div>

<!--step work-->
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
							<div class="step-text__descr">Отправляете нам заявку или звоните.Получаете бесплатную консультацию.</div>
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
							<div class="step-text__descr">Формируем технический план и согласовываем его с Вами.</div>
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
							<div class="step-text__descr">Передаем Вам готовый технический план.</div>
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

<? get_footer(); ?>
