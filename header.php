<!DOCTYPE html>
<html>
<!--create by ANATOLY KUZNETSOV-->
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="format-detection" content="telephone=no"/>
	<!--colors-tabs-->
	<meta name="theme-color" content="#000"/>
	<meta name="msapplication-navbutton-color" content="#000"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="#000"/>
	<meta name="yandex-verification" content="1f3fe6bc59106b96"/>
	<!--icons-->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<!--SEO-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css?ver=5">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=5">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-edit.css?ver=5">
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TJWDBCS');</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJWDBCS"
		        height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

</head>
<body>

<?
$getCategories = get_the_category();
$getCategoriesID = $getCategories[0]->cat_ID;
?>

<!--block header-->
<div class="head-container <?if(is_front_page() && is_home() || $getCategoriesID==37) {?> pos-a<?}?>">
	<!--header-->
	<!-- mobile menu-->
	<div class="slide-block slide-block--right slide-block--menu shadow-lg" data-menu="menu">
		<div class="js-accordion psv-16 psh-32">
			<div class="f f-between mb-24">
				<img class="w40" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.svg" alt=""/>
				<svg class="icon icon--24 icon-h--mark cp tr js-slide-block-close">
					<use xlink:href="#close"></use>
				</svg>
			</div>
			<div class="type--title type--w700 mb-16">Услуги</div>
			<div class="pl-16 mb-16">
				<a class="type--16 type--w500 type--title db mb-4" href="/geodezicheskie-raboty/">Геодезические</a>
				<a class="type--16 type--w500 type--title db mb-4" href="/kadastrovy-e-raboty/">Кадастровые</a>
				<a class="type--16 type--w500 type--title db mb-4" href="/juridicheskie-uslugi/">Юридические</a>
				<a class="type--16 type--w500 type--title db" href="/inzhenernye-izyskanija/">Инженерные изыскания</a>
			</div>
			<a class="type--title type--w700 db mb-12" href="/prajs-list/">Цены</a>
			<a class="type--title type--w700 db mb-12" href="/o-kompanii/">О нас</a>
			<a class="type--title type--w700 db mb-12" href="/nashi-litsenzii/">Лицензии</a>
			<a class="type--title type--w700 db" href="/kontakty/">Контакты</a>
			<a class="type--title type--w700 db" href="/vakansii/">Вакансии</a>
			<a class="type--w700 type--24 mt-48 mb-16 db type--title type--black" href="tel:+7 (495) 514-84-13">+7 (495) 514-84-13</a>
			<div class="type--typeSecondary type--sm mb-12 w80">г. Москва, 1-ый Нагатинский проезд, д. 4, офис 210</div>
			<div class="type--typeSecondary type--sm mb-12">info@cgiku.ru</div>
		</div>
		<!-- mobile menu === end-->
	</div>
	<div class="header psv-10 bor bor--border sm__psv-0">
		<div class="main-cont">
			<div class="header-wrap">
				<a class="logo" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.svg" alt=""/>
				</a>
				<div class="header-nav w50 md__hide lg__w50">
					<div class="header-nav__el type--title type--w500 cp lg__type--14 header-nav__el-drop">
						<div class="f f-mid">
							<span class="type--nowrap">Услуги</span>
							<svg class="icon icon--sm ml-8 tr">
								<use xlink:href="#arrow-down"></use>
							</svg>
						</div>
						<div class="header-nav__el-drop-list">
							<a class="type--sm type-h--mark tr dib mb-4" href="/geodezicheskie-raboty/">Геодезические</a>
							<a class="type--sm type-h--mark tr dib mb-4" href="/kadastrovy-e-raboty/">Кадастровые</a>
							<a class="type--sm type-h--mark tr dib mb-4" href="/juridicheskie-uslugi/">Юридические</a>
							<a class="type--sm type-h--mark tr dib" href="/inzhenernye-izyskanija/">Инженерные изыскания</a>
						</div>
					</div>
					<a class="header-nav__el type--title type--w500 type--nowrap type-h--mark lg__type--14" href="/prajs-list/">Цены</a>
					<a class="header-nav__el type--title type--w500 type--nowrap type-h--mark lg__type--14" href="/o-kompanii/">О нас</a>
					<a class="header-nav__el type--title type--w500 type--nowrap type-h--mark lg__type--14" href="/nashi-litsenzii/">Лицензии</a>
					<a class="header-nav__el type--title type--w500 type--nowrap type-h--mark lg__type--14" href="/kontakty/">Контакты</a>
					<a class="header-nav__el type--title type--w500 type--nowrap type-h--mark lg__type--14" href="/vakansii/">Вакансии</a>
				</div>
				<div class="header-phone md__ml-a">
					<a class="type--title type--w700 type--black type--20 sm__type--12" href="tel:+7 (495) 514-84-13">+7 (495) 514-84-13</a>
				</div>
				<div class="head-toggle md__show js-slide-block-toggle md__ml-12 f f-mid" data-menu="menu">
					<svg class="icon icon--md">
						<use xlink:href="#menu"></use>
					</svg>
				</div>
			</div>
		</div>
	</div>
</div>
<!--block header end-->

