<?php wp_footer(); ?>

<div class="footer-info">
	<div class="main-cont">
		<div class="footer-container">
      <?
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
      ?>
			<div class="footer-info-wrap">
				<a class="footer-info__logo" href="/">
					<img class="logo--full" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""/>
				</a>
				<div class="footer-info__phone">
					<div class="footer-info__phone ct_phone"><?= get_field('phone-1', 'option'); ?></div>
				</div>
				<div class="footer-mail">
					<svg class="icon">
						<use xlink:href="#mail"></use>
					</svg>
					<a href="mailto:<?= get_field('email', 'option'); ?>"
					   class="footer-info__mail"><?= get_field('email', 'option'); ?></a>
				</div>
				<div id="vk_groups"></div>
					<script type="text/javascript" src="//vk.com/js/api/openapi.js?154"></script>
					<script type="text/javascript" >
					VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, width: "auto", color2: '443783'}, 154622563);
					</script>
			</div>
		</div>
	</div>
</div>

<!--section-contact-end-->
<div class="scroll-up">
	<svg class="icon">
		<use xlink:href="#arrow-up"></use>
	</svg>
</div>
<? include('module/modal.php'); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function () {
			try {
				w.yaCounter32012941 = new Ya.Metrika({
					id: 32012941,
					clickmap: true,
					trackLinks: true,
					accurateTrackBounce: true
				});
			} catch (e) {
			}
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () {
				n.parentNode.insertBefore(s, n);
			};
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "yandex_metrika_callbacks");
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

</body>
</html>