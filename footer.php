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
				<script type="text/javascript">
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

<div class="cookie">
	<div class="cookie-wrap">
		<div class="cookie__msg">
			Этот сайт использует файлы cookie и другие технологии, чтобы помочь вам в навигации, а также предоставить лучший пользовательский опыт, анализировать использование наших продуктов и услуг, повысить качество рекламных и маркетинговых активностей.
		</div>
		<div class="cookie__msg-close"> Принять</div>
	</div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(32012941, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32012941" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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
<!--SQL - <?php /*echo get_num_queries (); */?> | <?php /*timer_stop (1); */?> сек. | <?php /*echo round (memory_get_usage ()/1024/1024, 2) */?> МБ-->

</body>
</html>