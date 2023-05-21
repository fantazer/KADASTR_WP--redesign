<?
CFS()->get('idparent') ? $listTownTemplateVal = CFS()->get('idparent') : $listTownTemplateVal=false
?>

<div class="modal-layer">
		<div class="modal-filter"></div>
		<div class="modal-wrap">

      <?php if (get_field('howworkaddtext',$listTownTemplateVal)) { ?>
				<div class="modal" data-modal="howWorkAddText">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="type--bold type--black type--lg type--center mb-24">Подробнее по теме</div>
						<div class="text">
              <?= get_field('howworkaddtext',$listTownTemplateVal) ?>
						</div>
						<div class="row-btn--center">
							<div class="modal-sale-get modal-get" data-modal="order">Заказать</div>
						</div>
					</div>
				</div>
      <? } ?>

			<?php if (get_field('costaddtext',$listTownTemplateVal)) { ?>
				<div class="modal  modal--md" data-modal="costAddText">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="type--bold type--black type--lg type--center mb-24">Цены на наши услуги</div>
						<div class="text">
              <?= get_field('costaddtext',$listTownTemplateVal) ?>
						</div>
						<div class="row-btn--center">
							<div class="modal-sale-get modal-get" data-modal="order">Заказать</div>
						</div>
					</div>
				</div>
      <? } ?>

			<div class="modal " data-modal="order">
				<div class="modal-content">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="type--w700 type--black type--lg type--center mb-24">Заявка</div>
					<div class="type--center mb-24">
						Оформите обращение с помощью этой формы, мы перезвоним Вам и проконсультируем по любому Вашему вопросу
						совершенно бесплатно!

					</div>
					<form class="js-validate" action="javascript:void(null);">
								<div class="g g-1 gap-24 mb-24 sm__g-1">
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
								<button class="btn--md btn--light w100" type="submit">Отправить заявку</button>
						</form>
				</div>
			</div>




			<div class="modal" data-modal="true">
				<div class="modal-content modal-content--true">
					<svg class="icon">
						<use xlink:href="#interface"></use>
					</svg>
					<div class="modal-text-true">Ваша заявка принята</div>
				</div>
			</div>

			<div class="modal" data-modal="next">
				<div class="modal-content modal-content--truesend">
					<svg class="icon">
						<use xlink:href="#interface"></use>
					</svg>
					<div class="modal-text-truesend">Ваша заявка принята!</div>
				</div>
			</div>

			<div class="modal modal--sale" data-modal="sale">
				<div class="modal-content">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="modal-sale__title">Закажите больше одной услуги и получите скидку:</div>
					<div class="modal-sale__wrap">
						<div class="modal-sale__list">
							<div class="modal-sale__el">
								<div class="modal-sale__el-icon">
									<svg class="icon">
										<use xlink:href="#gift--color"></use>
									</svg>
								</div>
								<div class="modal-sale__el-text">Технический план строения до 100 кв.м. (16 000 руб.) и межевой план
									земельного участка до 8 соток (16 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">30 000</span>
										<span class="main-service__price--true">26 000 руб.</span>- Скидка 4000 руб.
									</div>
								</div>
							</div>
							<div class="modal-sale__el">
								<div class="modal-sale__el-icon">
									<svg class="icon">
										<use xlink:href="#gift--color"></use>
									</svg>
								</div>
								<div class="modal-sale__el-text">Технический план строения до 100 кв.м. (16 000 руб.) и технический план
									строения до 50 кв.м. (12 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">26 000</span>
										<span class="main-service__price--true">22 000 руб.</span>- Скидка 4000 руб.
									</div>
								</div>
							</div>
						</div>
						<div class="modal-sale__text">
							<p>Объединитесь с соседями! При единовременном заказе на межевание или технические планы соседних участков
								у нас гарантированно предоставляются скидки. Размер скидки зависит от объёма необходимых работ.
								<br> При повторном обращении — скидки от 10%.
								<br>
								<span>За подробностями обращайтесь по телефону!</span>
							</p>
						</div>
						<div class="modal-sale__text-add">Внимание! На услуги стоимостью 10 000 руб. и меньше скидки не
							распространяются!
						</div>
						<div class="row-btn--center">
							<div class="modal-sale-get modal-get" data-modal="order">Заказать</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal modal--sale" data-modal="sale--border">
				<div class="modal-content">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="modal-sale__title">Закажите больше одной услуги и получите скидку:</div>
					<div class="modal-sale__wrap">
						<div class="modal-sale__list">
							<div class="modal-sale__el">
								<div class="modal-sale__el-icon">
									<svg class="icon">
										<use xlink:href="#gift--color"></use>
									</svg>
								</div>
								<div class="modal-sale__el-text">Межевой план земельного участка до 8 соток (16 000 руб.) и технический
									план строения до 100 кв.м.(16 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">30 000</span>
										<span class="main-service__price--true">26 000 руб.</span>- Скидка 4000 руб.
									</div>
								</div>
							</div>
						</div>
						<div class="modal-sale__text">
							<p>Объединитесь с соседями! При единовременном заказе на межевание или технические планы соседних участков
								у нас гарантированно предоставляются скидки. Размер скидки зависит от объёма необходимых работ.
								<br> При повторном обращении — скидки от 10%.
								<br>
								<span>За подробностями обращайтесь по телефону!</span>
							</p>
						</div>
						<div class="modal-sale__text-add">Внимание! На услуги стоимостью 10 000 руб. и меньше скидки не
							распространяются!
						</div>
						<div class="row-btn--center">
							<div class="modal-sale-get modal-get" data-modal="order">Заказать</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal modal--sale" data-modal="igs-1">
				<div class="modal-content">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="modal-sale__title">Информация</div>
					<div class="modal-info">
						<p>В уведомлении указываются такие сведения, как:</p>
						<ol>
							<li>ФИО, паспортные данные, адрес застройщика, контактные данные для связи с застройщиком</li>
							<li>адрес объекта, кадастровый номер земельного участка</li>
							<li>сведения о правах застройщика на земельный участок</li>
							<li>сведения о виде разрешенного использования земельного участка</li>
							<li>сведения о планируемых параметрах объекта ИЖС или садового дома (в т.ч. об отступах от границ земельного участка),</li>
							<li>сведения о том, что объект ИЖС или садовый дом не предназначен для раздела на самостоятельные объекты недвижимости.</li>
						</ol>
						<p>К уведомлению необходимо приложить следующие документы:</p>
						<ol>
							<li>правоустанавливающие документы на земельный участок</li>
							<li>описание внешнего облика объекта ИЖС или садового дома (в случае, если строительство или реконструкция объекта ИЖС или садового дома планируется в границах территории исторического поселения федерального или регионального значения)</li>
							<li>нотариальная доверенность (если документы подаются представителем застройщика).</li>
						</ol>
					</div>
				</div>
			</div>

      <? if (get_the_ID() === 14989) { ?>
				<div class="modal modal--sale" data-modal="igs-2">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="modal-sale__title">Информация</div>
						<div class="modal-info">
							<p>К извещению об окончании строительства прилагаются следующие документы:</p>
							<ol>
								<li>правоустанавливающие документы на земельный участок,</li>
								<li>технический план объекта ИЖС или садового дома (в электронном виде на диске)</li>
								<li>соглашение о распределении долей в праве общей собственности на объект ИЖС или садовый дом (в случае, если земельный участок принадлежит нескольким лицам на праве общей долевой собственности)</li>
								<li>нотариальная доверенность (если документы подаются представителем застройщика).</li>
							</ol>
							<p class="attanintion">
								<strong>ВАЖНО!:</strong> Технический план объекта подготавливается только аттестованным кадастровым инженером, входящим в СРО кадастровых инженеров и имеющим усиленную квалифицированную электронную подпись.</p>
						</div>
					</div>
				</div>
				<div class="modal modal--sale" data-modal="igs-3">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="modal-sale__title">Информация</div>
						<div class="modal-info">
							<p>В Росреестр предоставляются следующие документы:</p>
							<ol>
								<li>технический план объекта ИЖС или садового дома (в электронном виде на диске) с включенным в его состав полученным уведомлением о соответствии построенного/реконструированного объекта ИЖС или садового дом (для этого застройщику необходимо повторно
									обратиться к кадастровому инженеру)
								</li>
								<li>нотариальная доверенность на подачу и получение документов из Росреестра (если документы подаются представителем собственника земельного участка, на котором построен объект)</li>
								<li>квитанция об оплаченной гос.пошлине за регистрацию права (350 руб. для физ.лиц).</li>
							</ol>
						</div>
					</div>
				</div>
      <? } ?>
      <? if (get_the_ID() === 17429) { ?>
				<div class="modal modal--sale" data-modal="remove-1">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="modal-sale__title">Информация</div>
						<div class="modal-info">
							<p>В уведомлении указываются такие сведения, как:</p>
							<ul>
								<li>ФИО, паспортные данные, адрес застройщика, контактные данные для связи с застройщиком (для физ.лица),</li>
								<li>наименование и место нахождения застройщика, регистрационные данные, контактные данные для связи (для юр.лица),</li>
								<li>адрес объекта, кадастровый номер земельного участка,</li>
								<li>сведения о правах застройщика на земельный участок,</li>
								<li>сведения о правах застройщика на объект капитального строительства,</li>
								<li>сведения о решении суда о необходимости сноса объекта капитального строительства либо о наличии обязательства по сносу самовольной постройки (при наличии таких решения либо обязательства).</li>
							</ul>
							<p>К уведомлению необходимо приложить следующие документы:</p>
							<ul>
								<li>результаты и материалы обследования объекта капитального строительства,</li>
								<li>проект организации работ по сносу объекта капитального строительства,</li>
								<li>нотариальная доверенность (если документы подаются представителем застройщика).</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="modal modal--sale" data-modal="remove-2">
					<div class="modal-content">
						<div class="modal-close">
							<svg class="icon">
								<use xlink:href="#close"></use>
							</svg>
						</div>
						<div class="modal-sale__title">Информация</div>
						<div class="modal-info">
							<p>К уведомлению о завершении сноса объекта капитального строительства прилагаются следующие документы:</p>
							<ul>
								<li>ФИО, паспортные данные, адрес застройщика, контактные данные для связи с застройщиком (для физ.лица),</li>
								<li>наименование и место нахождения застройщика, регистрационные данные, контактные данные для связи (для юр.лица),</li>
								<li>адрес объекта, кадастровый номер земельного участка,</li>
								<li>сведения о правах застройщика на земельный участок,</li>
								<li>сведения о правах застройщика на объект капитального строительства,</li>
								<li>сведения о решении суда о необходимости сноса объекта капитального строительства либо о наличии обязательства по сносу самовольной постройки (при наличии таких решения либо обязательства).</li>
							</ul>
							<p>К уведомлению необходимо приложить следующие документы:</p>
							<ul>
								<li>документ, удостоверяющий личность заявителя,</li>
								<li>правоустанавливающие документы на земельный участок,</li>
								<li>правоустанавливающие документы на снесенный объект капитального строительства,</li>
								<li>нотариальная доверенность (если документы подаются представителем застройщика).</li>
							</ul>
						</div>
					</div>
				</div>
      <? } ?>

      <div class="modal" data-modal="msgTrue">
				<div class="js-modal-close modal-close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg>
				</div>
				<div class="modal-content">
					<div class="type--mdx type--w700 mb-20">Спасибо за вашу заявку</div>
					<div class="modal-text text">
						<p>Мы скоро свяжемся с Вами и уточним все вопросы.</p>
					</div>
					<div class="btn--md btn--light btn--full modal-hide">Понятно</div>
				</div>
			</div>
		</div>
</div>
