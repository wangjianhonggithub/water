$(document).ready(function() {
	$('.nav-item').eq(4).find('a').addClass('ac-item');
	var show = false;
	$('.nav-details').click(function() {
		show = !show;
		if (show) {
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
	//导航
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/ajaxMenuList",
		success: function(result) {
			var data = JSON.parse(result);
			for (var i = 0; i < data.length; i++) {
				$('.nav').append('<div class="nav-item">' +
					'<a href="' + data[i].url + '">' + data[i].menu + '</a>' +
					'</div>')
				$('.nav-a').append('<a href="' + data[i].url + '" class="nav-a-item">' + data[i].menu + '</a>')
			}
			$('.nav-item').eq(4).find('a').addClass('ac-item');
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/product",
		success: function(result) {
			var result = JSON.parse(result)
			if (result.code == '1001') {
				var data = result.list.data;
				for (var i = 0; i < data.length; i++) {
					$('.technology-text').html(data[i].content)
				}
			}
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/about",
		success: function(result) {
			var result = JSON.parse(result)
			if (result.code == '1001') {
				var data = result.list[0];
				$('.contact-us-email span').text(data.email);
				$('.contact-us-tel span').text(data.phone);
				$('.contact-us-address span').text(data.address);
				$('.contact-us-mobile span').text(data.tel);
				$('.top-mobile span').text(data.reporting_tel);
				$('.top-email span').text(data.reporting_email);
			}
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/admin/product/ajaxProductList?type=ys",
		success: function(result) {
			var data = JSON.parse(result)
			for (var n = 0; n < data.length; n++) {
				$('.advantage-list').append('<div class="advantage-box">' +
					'<div class="advantage-item">' +
					'<div class="advantage-text">' + data[n].content + '</div>' +
					'<div class="advantage-bot">' +
					'<div class="advantage-bot-item"></div>' +
					'</div>' +
					'</div>' +
					'</div>')
			}
			$('.advantage-list').append('<div class="clear"></div>')
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/admin/product/ajaxProductList?type=bz",
		success: function(result) {
			var data = JSON.parse(result)
			for (var n = 0; n < data.length; n++) {
				$('.standard-list').append('<div class="standard-item standard-item-mar">' +
					'<div class="standard-index">' + data[n].id + '</div>' +
					'<div class="standard-text">' + data[n].content + '</div>' +
					'</div>')
			}
			$('.standard-list').append('<div class="clear"></div>')
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/admin/product/ajaxProductList?type=lc",
		success: function(result) {
			var data = JSON.parse(result)
			for (var n = 0; n < data.length; n++) {
				if (n % 2 == 0 && n != data.length - 1) {
					$('.process-list').append('<div class="process-item-a">' +
						'<div class="process-index-a">' + data[n].id + '</div>' +
						'<div class="process-text">' + data[n].content + '</div>' +
						'</div>')
				}
				if (n % 2 == 1) {
					$('.process-list').append('<div class="process-item-b">' +
						'<div class="process-index-b">' + data[n].id + '</div>' +
						'<div class="process-text">' + data[n].content + '</div>' +
						'</div>')
					
				}
				if(n == data.length - 1){
					$('.process-list').append('<div class="process-item-c">' +
						'<div class="process-index-a">' + data[n].id + '</div>' +
						'<div class="process-text">' + data[n].content + '</div>' +
						'</div>')
				}
			}
		}
	});
})
