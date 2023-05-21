<?php wp_footer(); ?>

<!--order form-->
<div class="f bor bor-t bor--border md__fw" id="order">
	<form class="w50 psv-64 psh-24 lg__w100 js-validate" action="javascript:void(null);">
		<div class="ml-a mr-a wmax-640">
			<div class="type--w700 type--lg mb-24">Оставьте вашу заявку</div>
			<div class="type--w700 type--xl type--mark mb-12 sm__type--32">+7 (495) 514-84-13</div>
			<div class="type--w600 mb-32 sm__type--12">г. Москва, 1-ый Нагатинский проезд, д. 4, офис 210</div>
			<div class="g g-2 gap-24 mb-24 sm__g-1">
				<div class="input-row">
					<input class="input js-input-data" type="text" name="name[1]" placeholder="Ваше Ф.И.O" data-type="name" data-condition="name"/>
				</div>
				<div class="input-row">
					<input class="input js-input-data" type="text" name="phone[1]" placeholder="Ваш телефон" data-type="phone" data-condition="phone"/>
				</div>
			</div>
			<div class="g g-1 mb-24">
				<div class="input-row">
					<textarea class="input js-input-data input" type="text" name="simpleText[1]" cols="30" rows="5" data-condition="msg" data-type="simpleText" placeholder="Ваше сообщение"></textarea>
				</div>
			</div>
			<div class="login-remember mb-48">
				<div class="check-el">
					<label class="style-label style-label--checkbox">
						<input class="style-input" type="checkbox" name="agree"/>
						<div class="style-input-element">
							<svg class="icon">
								<use xlink:href="#checked"></use>
							</svg>
						</div>
						<div class="style-input-text">Я ознакомился с
							<a href="/policy/">политикой конфиденциальности</a> и даю согласие на обработку моих персональных данных
						</div>
					</label>
				</div>
			</div>
			<button class="btn--md btn--light sm__w100" type="submit">Отправить заявку</button>
		</div>
	</form>
	<div class="w50 md__w100">
		<div class="h100 w100 map--mobile">

			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5ab2f377d79652df5a96b1ffc2bd7e32e57b5818f2f61229ea0f3157d990329e&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
		</div>
	</div>
</div>
<!--order form === end-->

<!--footer-->
<div class="footer bg--dark psv-48 sm__psv-24">
	<div class="main-cont">
		<div class="row gap-24">
			<div class="g-1-9 md__g-1-8 sm__order-2 sm__g-1-12">
				<div class="g g-3 gap-24 sm__g-2">
          <? $footerMenuList = wp_get_nav_menu_items("footer"); ?>
          <? foreach ($footerMenuList as $key=>$value ) { ?>
						<a href="<?= $value->url ?>" class="type--white type--sm type--typeSecondary type-h--mark"><?= $value->title ?></a>
          <? } ?>
				</div>
			</div>
			<div class="g-10-12 md__g-9-12 sm__order-1 sm__g-1-12">
				<img class="mb-24 sm__w60" src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""/>
				<a href="tel:+7 (495) 514-84-13" class="type--mdx type--white type--w700 type--title mb-12 type-h--mark db">+7 (495) 514-84-13</a>
				<a href="mailto:info@cgiku.ru" class="type--typeSecondary type--white type--w700 type--title mb-24 type-h--mark db">info@cgiku.ru</a>

				<iframe src="https://yandex.ru/sprav/widget/rating-badge/110346017527?type=rating" height="50" frameborder="0" style="height:50px!important;width:150px;"></iframe>

			</div>
		</div>
	</div>
</div>

<!--footer === end-->

<div class="scroll-up">
	<svg class="icon">
		<use xlink:href="#arrow-up"></use>
	</svg>
</div>

<!--<div class="footer-info">
	<div class="main-cont">
		<div class="footer-container">
      <? /*
      $args = array(
        'menu' => 'footer',
        'menu_class' => '',
        'container' => 'div',
        'container_class' => 'footer-list', // css-класс блока
        'items_wrap' => '<ul class="footer-list__menu">%3$s</ul>',
        'depth' => 0,
        //'walker' => new Description_Walker
      );
      wp_nav_menu($args);
      */ ?>
			<div class="footer-info-wrap">
				<a class="footer-info__logo" href="/">
					<img class="logo--full" src="<?php /*echo get_template_directory_uri(); */ ?>/img/logo-dark.png" alt=""/>
				</a>
				<div class="footer-info__phone">
					<div class="footer-info__phone ct_phone"><? /*= get_field('phone-1', 'option'); */ ?></div>
				</div>
				<div class="footer-mail">
					<svg class="icon">
						<use xlink:href="#mail"></use>
					</svg>
					<a href="mailto:<? /*= get_field('email', 'option'); */ ?>"
					   class="footer-info__mail"><? /*= get_field('email', 'option'); */ ?></a>
				</div>
			</div>
		</div>
	</div>
</div>-->

<!--section-contact-end-->
<div class="scroll-up">
	<svg class="icon">
		<use xlink:href="#arrow-up"></use>
	</svg>
</div>


<? include('module/modal.php'); ?>

<!--<div class="cookie">
	<div class="cookie-wrap">
		<div class="cookie__msg">
			Этот сайт использует файлы cookie и другие технологии, чтобы помочь вам в навигации, а также предоставить лучший пользовательский опыт, анализировать использование наших продуктов и услуг, повысить качество рекламных и маркетинговых активностей.
		</div>
		<div class="cookie__msg-close"> Принять</div>
	</div>
</div>
-->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (m, e, t, r, i, k, a) {
		m[i] = m[i] || function () {
			(m[i].a = m[i].a || []).push(arguments)
		};
		m[i].l = 1 * new Date();
		k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
	})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(32012941, "init", {
		clickmap: true,
		trackLinks: true,
		accurateTrackBounce: true,
		webvisor: true
	});
</script>
<noscript>
	<div><img src="https://mc.yandex.ru/watch/32012941" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Bitrix24 -->
<script data-skip-moving="true">
	(function (w, d, u, b) {
		s = d.createElement('script');
		r = (Date.now() / 1000 | 0);
		s.async = 1;
		s.src = u + '?' + r;
		h = d.getElementsByTagName('script')[0];
		h.parentNode.insertBefore(s, h);
	})(window, document, 'https://cdn.bitrix24.ru/b4671061/crm/site_button/loader_2_335640.js');
</script>
<!--/ Bitrix24 -->

<!--block footer end-->
<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script-edit.js"></script>
<!--SQL - <?php /*echo get_num_queries (); */ ?> | <?php /*timer_stop (1); */ ?> сек. | <?php /*echo round (memory_get_usage ()/1024/1024, 2) */ ?> МБ-->

</body>
</html>