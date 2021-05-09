<? get_header(); ?>
<? $addCityName = CFS()->get("cityEdit"); ?>
<!--block header end-->
<div class="lp-baner lp-baner--borderland">
	<div class="lp-baner__img lp-baner__img--borderland" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/sosed.png');"></div>
	<div class="lp-baner-filter lp-baner-filter--light"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<div class="lp-baner__title">
					<?=the_title();?>
				</div>
				<div class="lp-baner__title-sub">Установите точные границы участка на местности как можно скорее, и Вы
					избавитесь от возможных проблем в будущем!
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
<div class="section section--why section--why-borderland" id="why" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-megevanie.png');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="section-title section-title--left">Что это такое ?</div>
				<div class="box">
					 <? while (have_posts()) : the_post(); ?>
					 		<?=get_the_content();?>
					 <? endwhile; ?>
					 <? wp_reset_query();?>
				</div>
			</div>

		</div>
	</div>
</div>



<!--from begin-->
<div id="important" class="section section--start section--start-sm section--left-bg"
     style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-item-9.jpg');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--img"></div>
			<div class="section-call">
				<div class="section-title section-title--left">Зачем это нужно ?</div>
				<div class="box">
					<?php echo CFS()->get('add_text'); ?>
          <?
            $categories = get_the_category();
						$category_id = $categories[0]->cat_ID;
            porstAfterTitle($category_id,true,"Межевание в ");
          ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--service-->
<div class="section section--calc" id="price">
	<div class="main-cont">
		<div class="section-title">Стоимость межевание земельного участка в <?= $addCityName; ?></div>
		<div class="section-title-sub">При необходимости согласования границ с ДГИ г. Москвы стоимость увеличивается на 5000
			руб
		</div>
		<div class="calc">
			<input class="calc-range" type="range" placeholder=""/>
			<div class="calc-range__wrap">
				<div class="calc-range-val">
					<div class="calc-range-numb">16 000</div>
					<div class="calc-range-pay">руб</div>
				</div>
			</div>
			<div class="calc-text calc-text--attansion">
				<span>свыше 2000 кв.м. цена определяется индивидуально</span>
			</div>
			<div class="calc-text">Цена услуги за один участок</div>
		</div>
		<div class="cost-inform cost-inform--calc">Указанные здесь цены являются окончательными и зависят только от площади земельного участка. Если Вы не хотите тратить свое время на подачу и получение документов из Росреестра, мы выполним это за Вас. Такая услуга «под ключ» будет стоить 5000 руб. В этом случае от Вас дополнительно потребуется нотариальная доверенность (форму доверенности Вам предоставит наш кадастровый инженер).
		</div>
		<div class="get-sale-row">
			<div class="get-sale__btn modal-get" data-modal="sale--border">Нажми и узнай, как сэкономить!</div>
		</div>
	</div>
</div>
<!--need doc-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Что войдет в стоимость работ ?</div>
		<div class="section-title-sub">Геодезические обмеры земельного участка.</div>
		<div class="doc">
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#house-plan-scale"></use>
					</svg>
				</div>
				<div class="doc__title">Геодезические обмеры земельного участка.</div>
				<div class="doc__text">Позволяют установить фактическое местоположение границ земельного участка, координаты его поворотных точек и площадь.
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#protractor"></use>
					</svg>
				</div>
				<div class="doc__title">Заказ сведений ЕГРН.</div>
				<div class="doc__text">Необходим для проведения процедуры согласования границ участка с соседними
					землепользователями и землевладельцами.
				</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#file"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование акта согласования границ.</div>
				<div class="doc__text">Документ, который отображает основные элементы конструкций одного уровня здания.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#save-disk"></use>
					</svg>
				</div>
				<div class="doc__title">Формирование межевого плана на электронном цифровом носителе (диск)</div>
				<div class="doc__text">Межевой план, заверенный усиленной электронной подписью кадастрового инженера, необходим для внесения в ЕГРН сведений о местоположении границ земельного участка.
				</div>
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
				<div class="doc__title">Свидетельство о праве собственности на земельный участок (выписка ЕГРН).</div>
				<div class="doc__text">Необходимо для подтверждения права собственности на земельный участок.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#plan"></use>
					</svg>
				</div>
				<div class="doc__title">План земельного участка
					<br> (при наличии).
				</div>
				<div class="doc__text">Необходим для подтверждения конфигурации земельного участка.</div>
			</div>
			<div class="doc__el">
				<div class="doc__icon">
					<svg class="icon">
						<use xlink:href="#doc"></use>
					</svg>
				</div>
				<div class="doc__title">Паспортные данные собственника земельного участка (СНИЛС).</div>
				<div class="doc__text">Документы, необходимые для подтверждения Вашей личности.</div>
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
							<div class="step-text__descr">Отправляете нам заявку или звоните.Получаете бесплатную консультацию от
								кадастрового инженера.
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
							<div class="step-text__descr">Направляете нам электронные копии Ваших документов или приезжаете с ними к нам в офис.
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
							<div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и время приезда геодезистов для проведения измерений.
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
							<div class="step-text__descr">Составляем акт согласования границ. Согласование границ с соседями.</div>
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
							<div class="step-text__descr">Формируем межевой план.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">07</div>
						<div class="step-text">
							<div class="step-text__descr">Передаем Вам готовый межевой план.</div>
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

<!--slider certificate-->
<?include('module/advant.php');?>









