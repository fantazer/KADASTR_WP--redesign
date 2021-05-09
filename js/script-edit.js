/* ======= PLS add your scripts her =======*/
$(document).ready(function(){
	//bubble
	var limit = 24 * 3600 * 1000; // 24 часа
	//var limit = 100 * 1000; // 24 часа
	var localStorageInitTime = localStorage.getItem('localStorageInitTime');
	//console.log(localStorageInitTime);
	//console.log(+new Date() - localStorageInitTime);
	if (localStorageInitTime === null) {
			localStorage.setItem('localStorageInitTime', +new Date());
	} else if(+new Date() - localStorageInitTime > limit){
			localStorage.setItem('localStorageInitTime', +new Date());
			localStorage.setItem('bubble', '1');
	};

	if(localStorage.getItem('bubble')!='0'){
		setTimeout(function(){
			$('.cookie').addClass('cookie--active');
			//console.log('111');
		},3000);
	}

	$('.cookie__msg-close').click(function(){
		$(this).closest('.cookie').removeClass('cookie--active');
		localStorage.setItem('bubble', '0');
	});
	//bubble===end
})