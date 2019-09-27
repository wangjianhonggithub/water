$(document).ready(function() {
	$('.nav-item').eq(3).find('a').addClass('ac-item');
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
			$('.nav-item').eq(3).find('a').addClass('ac-item');
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/advantage",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data;
				for(var n = 0; n < data.length; n++) {
					var dataA = data[n].title.substring(0, 2);
					var dataB = data[n].title.substring(2);
					if(n % 2 == 0) {
						$('.advantages-big-box').append('<div class="advantages">' +
							'<div class="advantages-box">' +
							'<div class="advantages-index">' +
							'<div class="advantages-index-a">' +
							'<div class="advantages-index-b">' +
							'<div class="advantages-index-c">'+(n+1)+'</div>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'<div class="advantages-content">' +
							'<div class="advantages-tilte">' +
							'<div class="advantages-title-text advantages-one"><span class="a">' + dataA + '</span><span class="b">' + dataB + '</span></div>' +
							'</div>' +
							'<div class="advantages-text">' + data[n].content + '</div>' +
							'</div>' +
							'</div>' +
							'</div>')
					}
					if(n % 2 == 1) {
						$('.advantages-big-box').append('<div class="advantages-b">' +
							'<div class="advantages-b-box">' +
							'<div class="advantages-b-index">' +
							'<div class="advantages-b-index-a">' +
							'<div class="advantages-b-index-b">' +
							'<div class="advantages-b-index-c">'+(n+1)+'</div>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'<div class="advantages-b-content">' +
							'<div class="advantages-b-tilte">' +
							'<div class="advantages-b-title-text advantages-two"><span class="a">'+dataA+'</span><span class="b">'+dataB+'</span></div>' +
							'</div>' +
							'<div class="advantages-b-text">'+data[n].content+'</div>' +
							'</div>' +
							'</div>' +
							'</div>')
					}
				}
			}
		}
	});
})
