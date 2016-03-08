define(['appCommon'], function(){
	// $('body, html').scrollTop(101);
	var lastSt = 0,
		direDown = true;
	$(window).on('scroll',function(){
		var st = $(this).scrollTop();

		if(st > lastSt){
			direDown = true;
		}else{
			direDown = false;
		}
		lastSt = st;
		// 顶部banner的缓冲动作
		if (st > 101) {
			$('#banner')[0].style.transform = 'translateY('+(st-101)*0.3+'px)';
		}else{
			$('#banner')[0].style.transform = 'translateY(0px)';
		}

		if (st > 650 && direDown) {
			$('#xypt').children().addClass('up1');
		}

		if (st < 1100 && !direDown) {
			$('#xypt').children().removeClass('up1');
		}

		if (st > 1030 && direDown) {
			$('#dsjfw').children().addClass('up2');
			$('#reg_btn').removeClass('margint0');
		}

		if (st < 1430 && !direDown) {
			$('#dsjfw').children().removeClass('up2');
			$('#reg_btn').addClass('margint0');
		}
	});
});
