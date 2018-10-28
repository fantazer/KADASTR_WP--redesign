<?
/*
 * Template Name: topograf
 * Template Post Type: post, page, product
 */
?>

<? get_header('lp'); ?>

  <div class="lp-baner lp-baner--borderland">
    <div class="lp-baner__img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/main-baner-2.png');"></div>
    <div class="lp-baner-filter lp-baner-filter--light"></div>
    <div class="main-cont">
      <div class="lp-baner__wrap">
        <div class="lp-baner__content">
          <div class="lp-baner__title">Топографическая съёмка земельного участка</div>
          <div class="lp-baner__title-sub">Выполнение работ как на частных земельных участках (для физических лиц), так и на участках большой площади (для юридических лиц).</div>
          <div class="lp-baner__title-status">Нами выполнено более 1000 объектов общей площадью
            <br> более 50 000 000 кв.м. (5 000 га).</div>
          <div class="header__get">
            <a class="header__btn header__btn-more" href="#why">Подробнее</a>
            <div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--why you need this-->
  <div class="section section--why section--why-topograf" id="why" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carplace-baner-8.png');">
    <div class="main-cont">
      <div class="section-wrap">
        <div class="section-call section-call--mid">
          <div class="section-title section-title--left">Что это такое ?</div>
          <div class="box">
            <p>Топографическая съёмка (топосъемка) - это комплекс инженерно-геодезических работ по созданию топографических планов местности. Топосъемка выполняется специальными приборами: электронными тахеометрами и спутниковой-геодезической аппаратурой, которые
              позволяют измерять высоты, углы и расстояния.</p>
            <p>Топографический план земельного участка отражает текущее состояние местности и позволяет определить с точностью до сантиметров такие параметры, как: размеры объектов на участке, расстояния между объектами, перепад высот рельефа.</p>
          </div>
        </div>
        <!--<div class="section-call section-call--img">
          <img class="img-worker" src="<?php /*echo get_template_directory_uri(); */?>/img/instr.jpg" alt="" />
        </div>-->
      </div>
    </div>
  </div>
  <!--from begin-->
  <div class="section section--start section--start-lg section--left-bg" id="important" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-item-11.jpg');">
    <div class="main-cont">
      <div class="section-wrap">
        <div class="section-call section-call--img"></div>
        <div class="section-call">
          <div class="section-title section-title--left">Зачем это нужно ?</div>
          <div class="box">
            <p>Топографическая съёмка необходима как основа для проектирования зданий, строений, сооружений, коммуникаций, а также для ландшафтного дизайна. Часто проектировщики называют топографическую съемку
              <strong>геоподосновой</strong>.</p>
            <p>Без топографической съёмки нельзя получить градостроительный план земельного участка (ГПЗУ), а без ГПЗУ не возможно получить разрешение на строительство.</p>
            <p>Без топографической съёмки невозможно спроектировать подвод коммуникаций (например, газа или электричества) к участку, а также их прокладку по участку.</p>
            <p class="attanintion">
              <b>ВАЖНО:</b> Как правило, для строительства используется топосъемка масштаба 1:500, а для ландшафтного дизайна 1:200 или 1:100.</p>
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
      <div class="section-title--add">
        <span>Для физических лиц</span>
      </div>
      <div class="calc">
        <input class="calc-range--topograf" type="range" placeholder="" />
        <div class="calc-range__wrap">
          <div class="calc-range-val">
            <div class="calc-range-numb">10 000</div>
            <div class="calc-range-pay">руб</div>
          </div>
        </div>
        <div class="calc-text calc-text--attansion">
          <span>свыше 2000 кв.м. цена определяется индивидуально</span>
        </div>
        <div class="calc-text">Цена услуги за один участок</div>
      </div>
      <div class="calc-ur-cont">
        <div class="calc-ur-pay">
          <div class="calc-ur-pay-title">Для юридических лиц</div>
          <div class="calc-ur-pay-cont">
            <div class="calc-ur-pay-text">Рассчитывается индивидуально исходя из следующих параметров:</div>
            <div class="calc-ur-pay-list">
              <ul>
                <li>Площадь</li>
                <li>Местоположение</li>
                <li>Наличие на территории строений, коммуникаций и зелёных насаждений</li>
              </ul>
            </div>
            <div class="calc-ur-pay-text">Нанесение кадастровых границ на топоплан, сдача отчёта в ИСОГД Московской области и сдача отчёта в геофонд города Москвы БЕСПЛАТНО.</div>
          </div>
          <div class="cost-inform--calc">Пришлите нам на почту кадастровый номер земельного участка или ситуационный план и мы незамедлительно вышлем Вам коммерческое предложение.</div>
        </div>
      </div>
    </div>
  </div>
  <!--need doc-->
  <div class="section section--doc">
    <div class="main-cont">
      <div class="section-title">Что войдет в стоимость работ ?</div>
      <div class="section-title-sub"></div>
      <!--.section-title-sub Геодезические обмеры земельного участка.-->
      <div class="doc">
        <div class="doc__el">
          <div class="doc__icon">
            <svg class="icon">
              <use xlink:href="#field-place"></use>
            </svg>
          </div>
          <div class="doc__title">Полевые работы</div>
          <div class="doc__text">Проводятся геодезические измерения на участке</div>
        </div>
        <div class="doc__el">
          <div class="doc__icon">
            <svg class="icon">
              <use xlink:href="#design"></use>
            </svg>
          </div>
          <div class="doc__title">Камеральные работы</div>
          <div class="doc__text">Отрисовка на компьютере выполненных геодезических измерений, создание топографических планов</div>
        </div>
        <div class="doc__el">
          <div class="doc__icon">
            <svg class="icon">
              <use xlink:href="#house-network"></use>
            </svg>
          </div>
          <div class="doc__title">Согласование коммуникаций</div>
          <div class="doc__text">Согласование правильности нанесения на топографические планы коммуникаций с их владельцами (при необходимости)</div>
        </div>
        <div class="doc__el">
          <div class="doc__icon">
            <svg class="icon">
              <use xlink:href="#plan"></use>
            </svg>
          </div>
          <div class="doc__title">Подготовка технического отчета</div>
          <div class="doc__text">Окончательный документ, содержащий графическую и текстовую информацию по выполненным работам</div>
        </div>
      </div>
    </div>
  </div>
  <!--need doc-->

  <!--step work-->
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
                <div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и время приезда геодезистов для проведения измерений.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="step-row">
          <div class="step-el">
            <div class="step-content">
              <div class="step-numb">03</div>
              <div class="step-text">
                <div class="step-text__descr">В назначенное время геодезисты приезжают к Вам, передают Договор и производят измерения</div>
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
                <div class="step-text__descr">Отрисовываем топографическую съёмку, производим согласование правильности нанесения подземных коммуникации (при необходимости) и формируем технический отчёт.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="step-row">
          <div class="step-el">
            <div class="step-content">
              <div class="step-numb">05</div>
              <div class="step-text">
                <div class="step-text__descr">Передаём Вам результаты работ на бумажном и электронном носителе</div>
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
  <!--contact-form-->

<!--slider certificate-->
<?include('module/advant.php');?>
<? include('module/customers.php');?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>
<? include('module/questions-lp.php'); ?>

<? get_footer(); ?>
