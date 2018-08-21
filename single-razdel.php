<?
/*
 * Template Name: razdel
 * Template Post Type: post, page, product
 */
?>

<? get_header('lp'); ?>

<div class="lp-baner lp-baner--borderland">
  <div class="lp-baner__img lp-baner--contain" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel.png');"></div>
  <div class="main-cont">
    <div class="lp-baner__wrap">
      <div class="lp-baner__content">
        <div class="lp-baner__title lp-baner__title--fat">Раздел земельного участка</div>
        <div class="lp-baner__title-sub">Выполнение работ как на частных земельных участках (для физических лиц), так и на участках большой площади (для юридических лиц).</div>
        <div class="header__get">
          <a class="header__btn header__btn-more" href="#why">Подробнее</a>
          <div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Что это такое-->
<div class="section section--why section--contain section--mobile" id="why" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel-3.jpg');">
  <div class="main-cont">
    <div class="section-wrap">
      <div class="section-call section-call--mid">
        <div class="section-title section-title--left">Что это такое ?</div>
        <div class="box">
          <p>Раздел земельного участка – это кадастровые работы по образованию нескольких новых земельных участков путем раздела исходного земельного участка, который в итоге прекращает свое существование.</p>
          <p>В ходе выполнения работ кадастровым инженером подготавливается межевой план, который подается в Росреестр. Результатом работ является занесение сведений о вновь образованных земельных участках в Единый государственный реестр недвижимости (ЕГРН).</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Зачем это нужно-->
<div class="section section--start section--start-lg section--left-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel-2.png');">
  <div class="main-cont">
    <div class="section-wrap">
      <div class="section-call section-call--img"></div>
      <div class="section-call">
        <div class="section-title section-title--left">Зачем это нужно ?</div>
        <div class="box">
          <p>Раздел земельного участка нужен, когда собственнику такого участка необходимо произвести раздел имущества, продать / подарить часть участка или произвести раздел дома, расположенного на таком земельном участке.</p>
          <p class="attanintion">! ВАЖНО: земельный участок может быть поделен только при условии того, что его границы уже уточнены (то есть имеются на публичной кадастровой карте). Кроме того, на делимый земельный участок должно быть зарегистрировано право собственности.</p>
          <p>Необходимо учитывать, что образуемые земельные участки не должны быть меньше или превышать предельно допустимые минимальные или максимальные размеры, установленные в Вашем районе Органом местного самоуправления.</p>
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
    <div class="cost cost--three">
      <div class="cost__el">
        <div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel-price-1.jpg');"></div>
        <div class="cost__el-title">Площадь участка
          <span>1000 кв.м.</span>
        </div>
        <div class="cost__el-text cost__el-text--mark">Без геодезических обмеров</div>
        <div class="cost__el-text">10 рабочих дней</div>
        <div class="cost__el-price">10 000 руб.</div>
        <div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
      </div>
      <div class="cost__el">
        <div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel-price-2.jpg');"></div>
        <div class="cost__el-title">Площадь участка
          <span>1000 кв.м.</span>
        </div>
        <div class="cost__el-text cost__el-text--mark">С геодезическими обмерами</div>
        <div class="cost__el-text">10 рабочих дней</div>
        <div class="cost__el-price">15 000 руб.</div>
        <div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
      </div>
      <div class="cost__el">
        <div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/razdel-price-3.jpg');"></div>
        <div class="cost__el-title">Площадь участка
          <span>более 1000 кв.м.</span>
        </div>
        <div class="cost__el-text cost__el-text--mark">Зависит от площади участка</div>
        <div class="cost__el-text">Индивидуально</div>
        <div class="cost__el-price">от 15 000 руб.</div>
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
            <use xlink:href="#land"></use>
          </svg>
        </div>
        <div class="doc__title">Геодезические обмеры границы раздела земельного участка</div>
        <div class="doc__text">Позволяют установить фактическое местоположение границ образуемых земельных участков, координаты их поворотных точек и площадь.</div>
      </div>
      <div class="doc__el">
        <div class="doc__icon">
          <svg class="icon">
            <use xlink:href="#case"></use>
          </svg>
        </div>
        <div class="doc__title">Заказ сведений ЕГРН</div>
        <div class="doc__text">Для анализа местоположения границ соседних земельных участков относительно Вашего участка.</div>
      </div>
      <div class="doc__el">
        <div class="doc__icon">
          <svg class="icon">
            <use xlink:href="#information"></use>
          </svg>
        </div>
        <div class="doc__title">Формирование межевого плана на электронном цифровом носителе (диск), заверенного усиленной электронной подписью кадастрового инженера.</div>
        <div class="doc__text">Необходим для внесения в ЕГРН сведений о местоположении границ земельного участка, то есть для государственного кадастрового учета земельного участка.</div>
      </div>
    </div>
  </div>
</div>
<!--Документы-->
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
        <div class="doc__title">Свидетельство о праве собственности на земельный участок (выписка ЕГРН)</div>
        <div class="doc__text">Необходимо для подтверждения права собственности на земельный участок</div>
      </div>
      <div class="doc__el">
        <div class="doc__icon">
          <svg class="icon">
            <use xlink:href="#doc"></use>
          </svg>
        </div>
        <div class="doc__title">Паспортные данные собственника земельного участка, СНИЛС</div>
        <div class="doc__text">Документы, необходимые для подтверждения Вашей личности.</div>
      </div>
      <div class="doc__el">
        <div class="doc__icon">
          <svg class="icon">
            <use xlink:href="#plan"></use>
          </svg>
        </div>
        <div class="doc__title">Письменное согласие собственника земельного участка</div>
        <div class="doc__text">В согласии указывается количество образуемых участков и их площадь.</div>
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
              <div class="step-text__descr">Отправляете нам заявку или звоните. Получаете бесплатную консультацию от кадастрового инженера.</div>
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
              <div class="step-text__descr">Направляете нам электронные копии Ваших документов или приезжаете с ними к нам в офис.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="step-row">
        <div class="step-el">
          <div class="step-content">
            <div class="step-numb">03</div>
            <div class="step-text">
              <div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и время приезда геодезистов для проведения измерений.</div>
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
              <div class="step-text__descr">В назначенное время геодезисты приезжают к Вам, передают Договор и производят измерения.</div>
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
<? include('module/advant.php'); ?>
<!--customers-->
<? include('module/customers.php'); ?>

<? include('module/sertificate.php'); ?>

<? include('module/contact-form.php'); ?>

<!--questions-->
<div class="section section--news ">
	<div class="section-title">Часто задаваемые вопросы</div>
	<div class="section-title-sub">Просто о сложном</div>
	<div class="main-cont">
		<div class="questions">
			<div class="questions-slider owl-carousel">
        <? while (have_rows('questions')): the_row(); ?>
					<div class="questions__el">
						<div class="questions__el-wrap">
							<div class="questions__name"><?  the_sub_field('name_questions'); ?></div>
							<div class="questions__text">
                <?  the_sub_field('text_questions'); ?>
							</div>
						</div>
					</div>
        <?  endwhile; ?>
			</div>
		</div>
	</div>
</div>
<? get_footer(); ?>
