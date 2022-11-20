<?
/*
Template Name: licenses
*/
?>

<? get_header(); ?>
<? wp_reset_query(); ?>
<div class="page">
	<div class="main-cont mb-100">
    <? include('module/bread.php'); ?>
		<div class="g g-1 gap-20 sm__g-1">
			<div class="text mb-48">
        <? the_title('<h1>', '</h1>'); ?>
        <?= get_the_content(); ?>
			</div>

			<form class="js-validate" action="javascript:void(null);">
				<div class="type--mdx type--w700 type--title mb-32">Оставьте заявку на вакансию</div>
				<div class="g g-2 gap-24 mb-24">
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
			</form>
		</div>
	</div>

  <? include('module/customers.php'); ?>
  <? include('module/popularService.php'); ?>
  <? include('module/news-list.php'); ?>
  <? include('module/questions.php'); ?>
  <? get_footer() ?>
