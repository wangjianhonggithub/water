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
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/service",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data;
				for(var i = 0; i < data.length; i++) {
					$('.scope-box').append('<a class="footer-scope-item" href="javascript:void(null)" onclick="serviceClassify('+data[i].id+')">'+data[i].title+'</a>')
				}				
			}
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
				$('.contact-us-email span').text(data.reporting_email);
				$('.contact-us-tel span').text(data.reporting_tel);
				$('.contact-us-address span').text(data.address);
				$('.contact-us-mobile span').text(data.tel);
			}
		}
	});
})