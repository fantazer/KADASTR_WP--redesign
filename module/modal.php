<div class="modal-layer">
	<div class="modal-cont">
		<div class="modal-filter"></div>
		<div class="modal-wrap">
			<div class="modal" data-modal="order">
				<div class="modal-content modal-content--fogot">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="modal-title">Заявка</div>
					<div class="modal-text">
						Оформите обращение с помощью этой формы, мы перезвоним Вам и проконсультируем по любому Вашему вопросу
						совершенно бесплатно!

					</div>
					<form class="validate-form" action="javascript:void(null);">
						<div class="input-row">
							<input class="input" type="text" name="name" placeholder="Ваше имя"/>
						</div>
						<div class="input-row">
							<input class="input" type="text" name="phone" placeholder="Ваш телефон"/>
						</div>
						<div class="input-row">
							<textarea class="input" name="info" cols="30" rows="5" placeholder="Сообщение"></textarea>
						</div>
						<div class="agree-row">
							<div class="check-el">
								<label class="style-label style-label--checkbox">
									<input class="sytle-input" type="checkbox" name="agree"/>
									<div class="sytle-input-element">
										<svg class="icon-check">
											<use xlink:href="#checked"></use>
										</svg>
									</div>
									<div class="sytle-input-text"></div>
								</label>
							</div>
							<div class="agree-row__text">Согласен с
								<a href="<?php echo get_template_directory_uri(); ?>/docs/agreement.pdf">условиями обработки
									персональных данных</a>
							</div>
						</div>
						<input class="modal-send" type="submit" value="Отправить заявку"/>
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
								<div class="modal-sale__el-text">Технический план строения до 100 кв.м. (14 000 руб.) и межевой план
									земельного участка до 8 соток (14 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">24 000</span>
										<span class="main-service__price--true">20 000 руб.</span>- Скидка 4000 руб.
									</div>
								</div>
							</div>
							<div class="modal-sale__el">
								<div class="modal-sale__el-icon">
									<svg class="icon">
										<use xlink:href="#gift--color"></use>
									</svg>
								</div>
								<div class="modal-sale__el-text">Технический план строения до 100 кв.м. (14 000 руб.) и технический план
									строения до 50 кв.м. (10 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">24 000</span>
										<span class="main-service__price--true">20 000 руб.</span>- Скидка 4000 руб.
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
								<div class="modal-sale__el-text">Межевой план земельного участка до 8 соток (14 000 руб.) и технический
									план строения до 100 кв.м.(14 000 руб.)
									<div class="modal-sale__el-text-sub">Общая стоимость
										<span class="main-service__price--false">28 000</span>
										<span class="main-service__price--true">24 000 руб.</span>- Скидка 4000 руб.
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
		</div>
	</div>
</div>