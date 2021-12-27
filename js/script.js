$(document).ready(function () {
	window.condition = {};
	var body = $('body')

	//calc
	$('.calc-get').click(function () {
		var price = $('.calc-price').val() * 1;  // Цена биткоина

		var numbBit = (($('.calc-count').val() * 1) / ($('.calc-price').val() * 1)) / 100 * 99; // Сколько купил
		$('.calculator__total--numbBit span').html(numbBit);


		var numbSale = ((numbBit / 100 * 99)); // сколько буду продавать
		$('.calculator__total--item span').html(numbSale);

		//var countSale = $('.calc-count').val()*1 + (($('.calc-count').val()*1) - (numbSale*price));
		var countSale = ($('.calc-count').val() * 1) / numbSale;
		$('.calculator__total--sale span').html(countSale); // Минимальная цена перепродажи


		var delta = (numbSale * ($('.calc-sale').val() * 1)) - $('.calc-count').val() * 1; // Прибыль

		$('.calculator__total--get span').html(delta);
		//$('.calculator__total--get span').html(getVal);

	});
	//calc-end

	//smooth scroll
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 0
		}, 1500);
	});
	//smooth scroll===end

	//range slider
	$(".calc-range").ionRangeSlider({
		values: [
			"400 кв.м.",
			"600 кв.м.",
			"800 кв.м.",
			"1000 кв.м.",
			"1400 кв.м.",
			"1600 кв.м.",
			"2000 кв.м."
		],
		grid: true,
		onChange: function (data) {
			if (data.from_value == "0 кв.м.") {
				$('.calc-range-numb').text('0');
			}
			if (data.from_value == "400 кв.м.") {
				$('.calc-range-numb').text('14 000 ');
			}
			if (data.from_value == "800 кв.м.") {
				$('.calc-range-numb').text('14 000 ');
			}
			if (data.from_value == "1000 кв.м.") {
				$('.calc-range-numb').text('15 000 ');
			}
			if (data.from_value == "1400 кв.м.") {
				$('.calc-range-numb').text('20 000 ');
			}
			if (data.from_value == "2000 кв.м.") {
				$('.calc-text--attansion').show();
			} else {
				$('.calc-text--attansion').hide();
			}
		}
	});
	//range slider===end

	//range slider
	$(".calc-range--topograf").ionRangeSlider({
		values: [
			"600 кв.м.",
			"800 кв.м.",
			"1000 кв.м.",
			"1400 кв.м.",
			"1600 кв.м.",
			"2000 кв.м."
		],
		grid: true,
		onChange: function (data) {
			if (data.from_value == "0 кв.м.") {
				$('.calc-range-numb').text('0');
			}
			if (data.from_value == "600 кв.м.") {
				$('.calc-range-numb').text('10 000 ');
			}
			if (data.from_value == "800 кв.м.") {
				$('.calc-range-numb').text('10 000 ');
			}
			if (data.from_value == "1000 кв.м.") {
				$('.calc-range-numb').text('15 000 ');
			}
			if (data.from_value == "1400 кв.м.") {
				$('.calc-range-numb').text('15 000 ');
			}
			if (data.from_value == "2000 кв.м.") {
				$('.calc-text--attansion').show();
			} else {
				$('.calc-text--attansion').hide();
			}
		}
	});

	//range slider
	$(".calc-range--mistake").ionRangeSlider({
		values: [
			"800 кв.м",
			"1000 кв.м.",
			"1400 кв.м.",
			"1600 кв.м.",
			"2000 кв.м."
		],
		grid: true,
		onChange: function (data) {
			if (data.from_value == "800 кв.м.") {
				$('.calc-range-numb').text('15 000 ');
			}
			if (data.from_value == "1000 кв.м.") {
				$('.calc-range-numb').text('18 000 ');
			}
			if (data.from_value == "1400 кв.м.") {
				$('.calc-range-numb').text('20 000 ');
			}
			if (data.from_value == "2000 кв.м.") {
				$('.calc-text--attansion').show();
			} else {
				$('.calc-text--attansion').hide();
			}
		}
	});
	//range slider===end

	//drop menu
	var hideToggle = function (targetClick, toggleEl) {
		$(targetClick).click(function (event) {
			event.stopPropagation();
			$(toggleEl).slideToggle("fast");
		});
		$(document).on("click", function () {
			$(toggleEl).hide();
		});
	}
	hideToggle('.nav-toggle', '.menu-wrap');
	//drop menu===end

	//modals
	window.condition.modalState = {
		"isModalShow": false, //state show modal
		"scrollPos": 0,
		"name": '',
		update() {
		},
		get changeCondition() {
			return this.isModalShow;
		},
		set changeCondition(isModalShow) {
			this.isModalShow = isModalShow;
			this.update(this.isModalShow);
		}
	};

	var scrollWidth = window.innerWidth - $(document).width();
	var fixScrollWindow = function () {
		window.condition.modalState.scrollPos = $(window).scrollTop();
		body.css({
			overflowY: 'hidden',
			top: -window.condition.modalState.scrollPos,
			width: '100%',
			paddingRight: scrollWidth
		});
	}

	var unFixScrollWindow = function () {
		body.css({
			overflow: '',
			position: '',
			top: window.condition.modalState.scrollPos,
			paddingRight: 0
		});
		$(window).scrollTop(window.condition.modalState.scrollPos);
	}

	var scrollWidth = window.innerWidth - $(document).width();
	var openModal = function () {
		if (!$('.modal-layer').hasClass('modal-layer-show')) {
			$('.modal-layer').addClass('modal-layer-show');
			window.condition.modalState.scrollPos = $(window).scrollTop();
			$('body').css({
				overflowY: 'hidden',
				top: -window.condition.modalState.scrollPos,
				width: '100%',
				paddingRight: scrollWidth
			});

		}
		window.condition.modalState.isModalShow = true;
		window.condition.modalState.changeCondition = 1;
	};

	var closeModal = function () {
		$('.modal-layer').removeClass('modal-layer-show');
		$('body').css({
			overflow: '',
			position: '',
			top: window.condition.modalState.scrollPos,
			paddingRight: 0
		});
		$(window).scrollTop(window.condition.modalState.scrollPos);
		$('.modal').addClass('modal-hide-animation');
		setTimeout(function () {
			$('.modal').removeClass('modal-hide-animation');
			$('.modal').removeClass('modal__show');
		}, 600);
		window.condition.modalState.isModalShow = false;
		window.condition.modalState.changeCondition = 0;
		window.condition.modalState.name = ''
	};

	var initModal = function (el) {
		openModal();

		$('.modal').each(function () {
			if ($(this).data('modal') === el) {
				$(this).addClass('modal__show')
				window.condition.modalState.name = el
			} else {
				$(this).removeClass('modal__show')
			}
		});
		var modalHeightCont = $(window).height();
		$('.modal-filter').height(modalHeightCont);
	};

	body.on('click', '.modal-get', function () {
		var currentModal = $(this).data("modal");
		initModal(currentModal);
	});

	$('.js-modal-close, .modal-hide').click(function () {
		closeModal();
	});

	$(document).on('keyup', function (e) {
		e.key === 'Escape' ? closeModal() : ''
	})

	$('.modal-wrap').click(function (e) {
		e.target.className === 'modal-wrap' ? closeModal() : false
	});

	//modal msg
	var showModalMsg = function (current, time) {
		$('.modal-msg').removeClass('active')
		setTimeout(function () {
			$('.modal-msg[data-modalMsg=' + current + ']').addClass('active')
			//console.log(11);
		}, time)
	}
	//modals ===end

	//validate
	$('.validate-form').each(function () {
		var curentForm = $(this);
		$(this).validate({
			highlight: function (element) { //даем родителю класс если есть ошибка
				$(element).parent().addClass("field-error");
			},
			unhighlight: function (element) {
				$(element).parent().removeClass("field-error");
			},
			rules: { //правила для полей
				name: {
					required: true,
				},
				phone: {
					required: true,
					minlength: 5,
					number: true
				},
				comment: {
					required: true,
					minlength: 5,
				},
				agree: {
					required: true
				}
			},
			messages: {
				name: {
					required: 'Обязательное поле',
				},
				phone: {
					required: 'Обязательное поле',
					number: 'Введите правильный номер',
					minlength: 'Номер должен быть длиннее',
				},
				comment: {
					required: 'Обязательное поле',
					minlength: 'Сообщение должно быть длиннее',
				},
				agree: {
					required: false,
				}
			},
			submitHandler: function (form) {
				$.ajax({ //отправка ajax
					type: "POST",
					url: "/wp-content/themes/AAK/sender.php",
					data: $(form).serialize(),
					timeout: 3000,
				});
				closeModal();
				initModal("next");
				setTimeout(function () {
					closeModal();
					$(':input', '.validate-form') //очитска формы от данных
						.not(':button, :submit, :reset, :hidden')
						.val('')
						.removeAttr('checked')
						.removeAttr('selected')
				}, 2500)

			}
		});
	});
	//validate===end


	//fancy-box
	$(".fancybox").fancybox();
	//fancy-box === end

	//scroll top
	var scrollTop = 750;
	$(window).scroll(function () {
		var scroll = $(this).scrollTop();
		if (scroll >= scrollTop) {
			//var heightHeader=$('.header-main-wrap').height();
			$('.scroll-up').addClass('scroll-up--show');
		} else {
			$('.scroll-up').removeClass('scroll-up--show');
		}
	});

	$('.scroll-up').click(function () {
		$('html, body').animate({scrollTop: 0}, 800);
		return false;
	});
	//scroll top ===end


	//animate top menu
	var shrinkHeader = 250;
	var heightHeader = $('.header').height();
	$(window).scroll(function () {
		var scroll = $(this).scrollTop();
		if (scroll >= shrinkHeader) {
			$('.header').addClass('shrink');
			$('body').css('paddingTop', heightHeader);
		} else {
			$('.header').removeClass('shrink');
			$('body').css('paddingTop', 0);
		}
	});

	$(window).resize(function () {
		heightHeader = $('.header').height();
	});

	//animate top menu === end


	//slider el
	$(".slider-certificate").owlCarousel({
			items: 3,
			responsive: {
				0: {
					items: 4
				},
				768: {
					items: 3
				},
				960: {
					items: 3
				},

			},
			margin: 20,
			autoHeight: true,
			dots: false,
			autoplay: false,
			singleItem: true,
			nav: true,
			navText: [
				'<svg class="slider-control"><use xlink:href="#arrow-left"></use></svg>',
				'<svg class="slider-control"><use xlink:href="#arrow-right"></use></svg>'
			]
		}
	);

	$(".slider-customer").owlCarousel({
			items: 5,
			responsive: {
				0: {
					items: 4
				},
				768: {
					items: 3
				},
				960: {
					items: 5
				},

			},
			margin: 20,
			autoHeight: true,
			dots: false,
			autoplay: false,
			singleItem: true,
			loop: true,
			nav: true,
			navText: [
				'<svg class="slider-control"><use xlink:href="#arrow-left"></use></svg>',
				'<svg class="slider-control"><use xlink:href="#arrow-right"></use></svg>'
			]
		}
	);

	$(".slider-header-baner").owlCarousel({
			items: 1,
			margin: 20,
			autoHeight: true,
			dots: false,
			autoplay: false,
			singleItem: true,
			loop: true,
			//animateOut: 'fadeOut',
			nav: true,
			navText: [
				'<svg class="slider-control"><use xlink:href="#arrow-left"></use></svg>',
				'<svg class="slider-control"><use xlink:href="#arrow-right"></use></svg>'
			]
		}
	);
	$(".questions-slider").owlCarousel({
			items: 1,
			margin: 20,
			autoHeight: true,
			dots: true,
			autoplay: false,
			singleItem: true,
			loop: true,
			//animateOut: 'fadeOut',
		}
	);
	//slider el === end

	//increment field
	$('.incr__minus').click(function () {
		var $input = $(this).parent().find('.incr__val span');
		var count = parseInt($input.html()) - 1;
		count = count < 2 ? 1 : count;
		$input.html(count);
	});

	$('.incr__plus').click(function () {
		var $input = $(this).parent().find('.incr__val span');
		var count = parseInt($input.html()) + 1;
		count = count > 100 ? 100 : count;
		$input.html(count);
	});
	//increment field end

	//calculator
	$('.select-beauty').niceSelect();

	$(".calculator__item select").change(function () {
		$('.calculator-msg').removeClass('calculator-msg--active');
		var curentCat = $(".calculator__item select option:selected").val();

		$('.calculator__sub').each(function () {
			if ($(this).data('subcalc') === curentCat) {
				$(this).addClass('calculator__sub--active');
			} else {
				$(this).removeClass('calculator__sub--active');
			}
		});

		var cost = $(".calculator__item select option:selected").data('cost');
		var msg = $(".calculator__item select option:selected").data('msg');

		if (cost) {
			$('.calculator-total__val').text(cost);
		}
		if (msg) {
			$('.calculator-msg').each(function () {
				if ($(this).data('msg') === msg) {
					$(this).addClass('calculator-msg--active');
				} else {
					$(this).removeClass('calculator-msg--active');
				}
			});
		}

		$('.elements-icr-block--vinos .incr__nav').click(function () {
			var currentIncr = $(this).closest('.incr').find('.incr__val span').text()
			if (currentIncr > 20) {
				$('.calculator-total__val').text(8000 + (currentIncr - 20) * 400 + ' р');
			} else {
				$('.calculator-total__val').text(8000 + ' р');
			}
		});

		$('.elements-icr-block--megevanieSNT .incr__nav').click(function () {
			var currentIncr = $(this).closest('.incr').find('.incr__val span').text()
			$('.calculator-total__val').text(69000 + currentIncr * 1000 + ' р');
		});

		//Переключение между физ и юрлиц
		$('.calulator__type-ur').click(function () {
			$('.calculator__item--topograf').hide();
			$('.calculator-total__val').text("Индивидуально");
		});

		$('.calulator__type-fiz').click(function () {
			$('.calculator__item--topograf').show();
			$('.calculator-total__val').text(curentVal);
		});

		//Вывод с обмером и без
		$('.calculator__item--megplan select').change(function () {
			var obmer = $(".calculator__item--megplan select option:selected").text();
			if (obmer == 'до 1000 кв.м на 2 новых участка') {
				$('.calulator__type').show()
			} else {
				$('.calulator__type').hide()
			}
			console.log(obmer);
		});

		//Переключение между с обмером и без
		$('.calulator__type-work').click(function () {
			$('.calculator-total__val').text(curentVal);
		});

		$('.calulator__type-unwork').click(function () {
			$('.calculator-total__val').text("15 000 р");
		});

		var curentVal = $(".calculator__sub--active select option:selected").val();
		$('.calculator-total__val').text(curentVal);

	});
	//calculator===end

	// accordion row toggle
	var body = $('body')
	body.on('click', '.js-accordion-head', function (e) {
		console.log(223);
		var current = $(this).closest('.js-accordion-el').index()
		$(this).closest('.js-accordion').find('.js-accordion-el').each(function () {
			if ($(this).index() != current) {
				$(this).find('.js-accordion-head').removeClass('active')
				$(this).find('.js-accordion-content').slideUp('active')
			} else {
				$(this).find('.js-accordion-content').slideToggle('active')
				$(this).find('.js-accordion-head').toggleClass('active')
			}
		})
	});
	// accordion row toggle === end

	// slide menu



	var hideSlideMenu = function (el) {
		$(".head-toggle").removeClass('active');
		$(".slide-block").removeClass("active");
		$(".filter").removeClass("active");
		unFixScrollWindow();
	}
	$('.js-slide-block-toggle').click(function (event) {
		$(".js-slide-block-toggle").not(this).removeClass('active');
		$(".filter").toggleClass("active");
		fixScrollWindow();
		var current = $(this).data("menu");
		$(".slide-block").each(function () {
			if ($(this).data("menu") === current) {
				$(this).toggleClass("active")
			} else {
				$(this).removeClass("active")
			}
		})
		$(this).toggleClass('active');
	});

	$('.js-slide-block-close').click(function (event) {
		hideSlideMenu();
	});
	// slide menu === end


	var validateConfig = {
		"name": {
			required: true,
			minlength: 5,
			"messages": {
				required: 'Обязательно для заполнения',
				minlength: 'Имя должно быть не меньше 5 символов',
				wordCount: "Необходимо: Фамилия Имя и Отчество"
			},
		},
		"simpleText": {
			required: true,
			minlength: 5,
			"messages": {
				required: 'Обязательно для заполнения',
				minlength: 'Текст должен быть длиннее',
			},
		},
		"email": {
			required: true,
			email: true,
			"messages": {
				required: 'Это поле обязательно для заполнения',
				email: 'Введите правильный адресс'
			},
		},
		"phone": {
			required: true,
			minlength: 5,
			"messages": {
				required: 'Обязательное поле',
				number: 'Введите правильный номер',
				minlength: 'Номер должен быть длиннее',
			},
		},

	}
	$('.js-validate').each(function () {
		var currentForm = $(this);
		$(this).validate({
			highlight: function (element) { //даем родителю класс если есть ошибка
				$(element).parent().addClass("field-error");
			},
			unhighlight: function (element) {
				$(element).parent().removeClass("field-error");
			},
			rules: {
				agree: {
					required: true
				}
			},
			messages: {
				agree: {
					required: false
				}
			},
			submitHandler: function () {
				var currentSendData = '';
				currentForm.each(function () {
					$(this).find(".js-input-data").each(function () {
						currentSendData = currentSendData + "&" + $(this).data('condition') + "=" + $(this).val()
					})
				})
				$.ajax({
					type: "POST",
					url: "/wp-content/themes/CGIKU/sender.php", //файл формировании оплаты
					data: currentSendData,
					success: function (data) {

						/*setTimeout(function () {
							$('.modal-close').click();
							location.reload();
						}, 5000);*/
						console.log(currentSendData);
						initModal("msgTrue")
					}
				});
			}
		})
		$(this).find(".input").each(function () {
			$(this).rules("add", validateConfig[$(this).data("type")]);
			console.log($(this).data("type"));
		});
	});
})

$(document).ready(function () {

	function detectIE() {
		var ua = window.navigator.userAgent;

		var msie = ua.indexOf('MSIE ');
		if (msie > 0) {
			// IE 10 or older => return version number
			return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
		}

		var trident = ua.indexOf('Trident/');
		if (trident > 0) {
			// IE 11 => return version number
			var rv = ua.indexOf('rv:');
			return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
		}

		var edge = ua.indexOf('Edge/');
		if (edge > 0) {
			// Edge (IE 12+) => return version number
			return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
		}

		// other browser
		return false;
	}

	console.log(detectIE());
	if (detectIE() <= 10 && detectIE()) {
		$('body').empty();
		$('body').prepend('' +
			'<div class="old-browser">' +
			'<div class="old-browser-text"> Сайт не поддерживае Браузер Internet Explorer</div><br>' +
			'<div class="old-browser-text"> Установите <br><br> Chrome Firefox Opera </div><br>' +
			'</div>');
	}
})


;(function (window, document) {
	'use strict';

	//var file  = '/wp-content/themes/CGIKU/img/pack.html',
	var file = '/wp-content/themes/CGIKU/img/pack.html',
		revision = 1;

	if (!document.createElementNS || !document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect)
		return true;

	var isLocalStorage = 'localStorage' in window && window['localStorage'] !== null,
		request,
		data,
		insertIT = function () {
			document.body.insertAdjacentHTML('afterbegin', data);
		},
		insert = function () {
			if (document.body) insertIT();
			else document.addEventListener('DOMContentLoaded', insertIT);
		};

	if (isLocalStorage && localStorage.getItem('inlineSVGrev') == revision) {
		data = localStorage.getItem('inlineSVGdata');
		if (data) {
			insert();
			return true;
		}
	}

	try {
		request = new XMLHttpRequest();
		request.open('GET', file, true);
		request.onload = function () {
			if (request.status >= 200 && request.status < 400) {
				data = request.responseText;
				insert();
				if (isLocalStorage) {
					localStorage.setItem('inlineSVGdata', data);
					localStorage.setItem('inlineSVGrev', revision);
				}
			}
		}
		request.send();
	} catch (e) {
	}

}(window, document));