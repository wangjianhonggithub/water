$(document).ready(function() {
	$('.nav-item').eq(7).find('a').addClass('ac-item');
	var show = false;
	$('.nav-details').click(function() {
		show = !show;
		if(show) {
			$('.nav-a').show()
		} else {
			$('.nav-a').hide()
		}
	})
	$('.nav-a').find('.nav-a-item').each(function(index) {
		$('.nav-a-item').eq(index).click(function() {
			$('.nav-a').hide()
		})
	})
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/question",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001'){
				var data=result.list.data;
				for(var i=0;i<data.length;i++){
					$('.problem-list').prepend('<div class="problem-item">'+
						'<div class="problem-title">Q：'+data[i].title+'</div>'+
						'<div class="answer">A：'+data[i].content+'</div>'+
					'</div>')
				}				
			}
		}
	});
	//导航
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/ajaxMenuList",
		success: function(result) {
			var data = JSON.parse(result);
			for(var i=0;i<data.length;i++){
				$('.nav').append('<div class="nav-item">'+
						'<a href="'+data[i].url+'">'+data[i].menu+'</a>'+
					'</div>')
				$('.nav-a').append('<a href="'+data[i].url+'" class="nav-a-item">'+data[i].menu+'</a>')
			}
			$('.nav-item').eq(7).find('a').addClass('ac-item');
		}
	});
	function serviceClassify(id) {
		window.location.assign('service.html?id='+id)
	}
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/about",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data=result.list[0];
				$('.contact-us-email span').text(data.email);
				$('.contact-us-tel span').text(data.phone);
				$('.contact-us-address span').text(data.address);
				$('.contact-us-mobile span').text(data.tel);
				$('.top-mobile span').text(data.reporting_tel);
				$('.top-email span').text(data.reporting_email);
			}
		}
	});
})