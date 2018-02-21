<!DOCTYPE html>
<html lang='en'>
	<!--create by ANATOLY KUZNETSOV-->

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<!--colors-tabs-->
		<meta name="theme-color" content="#000" />
		<meta name="msapplication-navbutton-color" content="#000" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
		<!--icons-->
		<link rel="shortcut icon" href="favicon.ico" />
		<!--SEO-->
		<title>Document</title>
		<meta name="description" itemprop="description" content="" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style-edit.css">
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TJWDBCS');</script>
		<!-- End Google Tag Manager -->
	</head>
	<?php wp_head(); ?>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJWDBCS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--block header-->
		<div class="head-container">
			<!--header-->
			<div class="header">
				<div class="top-line">
					<div class="main-cont">
						<div class="top-line-wrap">
							<a class="main-logo" href="/">
								<img class="logo--full" src="<?php echo get_template_directory_uri();?>/img/logo-dark.png" alt="" />
								<img class="logo--short" src="<?php echo get_template_directory_uri();?>/img/logo-short.png" alt="" />
							</a>
							<div class="top-line-info">
								<div class="top-line-el__wrap">
									<div class="top-line-el">
										<div class="top-line-el-title">Работа горячей линии:</div>
										<div class="top-line-el-info">Ежедневно c 9-00 ч. до 20-00 ч.</div>
									</div>
									<div class="top-line-el">
										<div class="top-line-el-title">Прием онлайн-заявок:</div>
										<div class="top-line-el-info top-line-el-info--call modal-get" data-modal="order">
											<svg class="icon">
												<use xlink:href="#phone"></use>
											</svg>
											<span>Круглосуточно</span>
										</div>
									</div>
								</div>
								<div class="top-line__contact">
									<div class="top-line-loc">
										<div class="top-line-loc-el">
											<div class="top-line-loc-icon">
												<svg class="icon">
													<use xlink:href="#metro"></use>
												</svg>
											</div>
											<div class="top-line-loc-text">Варшавская</div>
										</div>
										<div class="top-line-loc-el">
											<div class="top-line-loc-icon">
												<svg class="icon">
													<use xlink:href="#metro"></use>
												</svg>
											</div>
											<div class="top-line-loc-text">Каширская</div>
										</div>
										<div class="top-line-loc-el top-line-loc-el--mail">
											<div class="top-line-loc-icon">
												<svg class="icon">
													<use xlink:href="#mail"></use>
												</svg>
											</div>
											<div class="top-line-loc-text"><?=get_field('email', 'option');?></div>
										</div>
									</div>
									<div class="nav-phone">
										<!--<a class="nav-phone-el" href="tel:<?/*=get_field('phone-1', 'option');*/?>"><?/*=get_field('phone-1', 'option');*/?></a>-->
										<div class="nav-phone-el ct_phone""><? //get_field('phone-1', 'option');?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--header-end-->
			<!--nav-->
			<div class="nav nav--scroll">
				<div class="main-cont">
					<div class="nav-wrap">
						<div class="nav-toggle">
							<svg class="icon">
								<use xlink:href="#menu"></use>
							</svg>
						</div>
						<?
								$args = array(
									'menu' => 'Технический план',
									'menu_class'=> '',
									'container'=> 'div',
									'container_class' => 'menu-wrap', // css-класс блока
									'items_wrap'       => '<ul class="menu" rel="m_PageScroll2id">%3$s</ul>',
									'depth' => 0,
									//'walker' => new Description_Walker
								);
								wp_nav_menu($args);

						?>
					</div>
				</div>
			</div>
			<!--nav-end-->
		</div>
		<!--block header end-->

		<?/*
			$args = array(
				'menu' => 'Главное меню',
				'menu_class'=> '',
				'container'=> 'div',
				'container_class' => 'menu-wrap', // css-класс блока
				'items_wrap'       => '<div class="menu">%3$s</div>',
				'depth' => 0,
				'walker' => new Description_Walker
			);
			wp_nav_menu($args);

		*/?>