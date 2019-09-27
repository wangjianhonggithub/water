$(document).ready(function() {
	$('.nav-item').eq(6).find('a').addClass('ac-item');
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
			$('.nav-item').eq(6).find('a').addClass('ac-item');
		}
	});
	function getQueryVariable(variable) {
		var query = window.location.search.substring(1);
		var vars = query.split("&");
		for(var i = 0; i < vars.length; i++) {
			var pair = vars[i].split("=");
			if(pair[0] == variable) {
				return pair[1];
			}
		}
		return(false);
	}

	function timestampToTime(timestamp) {
		var date = new Date(timestamp * 1000); //时间戳为10位需*1000，时间戳为13位的话不需乘1000
		var Y = date.getFullYear() + '-';
		var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
		var D = (date.getDate() < 10 ? '0' + date.getDate() : date.getDate()) + ' ';
		return Y + M + D;
	}
	var type = getQueryVariable('type');
	if(type == 1) {
		$('.typea').show();
		$('.typeb').hide();
		$('.tab-item-a').addClass('ac');
		$('.tab-item-b').removeClass('ac');
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/consultation",
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list.data;
					for(var i = 0; i < data.length; i++) {
						data[i].addtime = timestampToTime(data[i].addtime);
						$('.news-list').prepend('<div class="news-item" onclick="consultationDetails('+data[i].id+')">' +
							'<div class="news-date">' + data[i].addtime + '</div>' +
							'<div class="news-item-title">' + data[i].title + '</div>' +
							'</div>')
					}
				}
			}
		});
	} 
	if(type == 2){
		$('.typea').hide();
		$('.typeb').show();
		$('.tab-item-b').addClass('ac');
		$('.tab-item-a').removeClass('ac');
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/industry",
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list.data;
					for(var i = 0; i < data.length; i++) {
						data[i].addtime = timestampToTime(data[i].addtime);
						$('.news-list').prepend('<div class="news-item" onclick="industryDetails('+data[i].id+')">' +
							'<div class="news-date">' + data[i].addtime + '</div>' +
							'<div class="news-item-title">' + data[i].title + '</div>' +
							'</div>')
					}
				}
			}
		});
	} 
	if(type == false){
		$('.typea').show();
		$('.typeb').hide();
		$('.tab-item-a').addClass('ac');
		$('.tab-item-b').removeClass('ac');
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/consultation",
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list.data;
					for(var i = 0; i < data.length; i++) {
						data[i].addtime = timestampToTime(data[i].addtime);
						$('.news-list').prepend('<div class="news-item" onclick="consultationDetails('+data[i].id+')">' +
							'<div class="news-date">' + data[i].addtime + '</div>' +
							'<div class="news-item-title">' + data[i].title + '</div>' +
							'</div>')
					}
				}
			}
		});
	}
})
function consultationDetails(id){
	window.location.assign('news-details.html?id='+id+'&type=1')
}
function industryDetails(id) {
	window.location.assign('news-details.html?id='+id+'&type=2')
}
function timestampToTime(timestamp) {
	var date = new Date(timestamp * 1000); //时间戳为10位需*1000，时间戳为13位的话不需乘1000
	var Y = date.getFullYear() + '-';
	var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
	var D = (date.getDate() < 10 ? '0' + date.getDate() : date.getDate()) + ' ';
	return Y + M + D;
}

function information() {
	$('.typea').show();
	$('.typeb').hide();
	$('.tab-item-a').addClass('ac');
	$('.tab-item-b').removeClass('ac');
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/consultation",
		success: function(result) {
			console.log(result)
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data;
				$('.news-list').html('');
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.news-list').prepend('<div class="news-item" onclick="consultationDetails('+data[i].id+')">' +
						'<div class="news-date">' + data[i].addtime + '</div>' +
						'<div class="news-item-title">' + data[i].title + '</div>' +
						'</div>')
				}
			}
		}
	});
}

function industry() {
	$('.typea').hide();
	$('.typeb').show();
	$('.tab-item-b').addClass('ac');
	$('.tab-item-a').removeClass('ac');
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/industry",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data;
				$('.news-list').html('');
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.news-list').prepend('<div class="news-item" onclick="industryDetails('+data[i].id+')">' +
						'<div class="news-date">' + data[i].addtime + '</div>' +
						'<div class="news-item-title">' + data[i].title + '</div>' +
						'</div>')
				}
			}
		}
	});
}