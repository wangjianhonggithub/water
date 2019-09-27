$(document).ready(function(){
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
	function timestampToTime(timestamp) {
		var date = new Date(timestamp * 1000); //时间戳为10位需*1000，时间戳为13位的话不需乘1000
		var Y = date.getFullYear() + '-';
		var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
		var D = (date.getDate() < 10 ? '0' + date.getDate() : date.getDate()) + ' ';
		return Y + M + D;
	}
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
	var type = getQueryVariable('type');
	var id=getQueryVariable('id');
	if(type==1){
		$('.typea').show();
		$('.typeb').hide();
		$('.tab-item-a').addClass('ac');
		$('.tab-item-b').removeClass('ac');
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/consultation_con?id="+id,
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list;
					$('.title').text(data.title);
					var date=timestampToTime(data.addtime);
					$('.update-date').text(date);
					$('.news-content').html(data.content)
				}
			}
		});
	}
	if(type==2){
		$('.typeb').show();
		$('.typea').hide();
		$('.tab-item-b').addClass('ac');
		$('.tab-item-a').removeClass('ac');
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/industry_con?id="+id,
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list;
					$('.title').text(data.title);
					var date=timestampToTime(data.addtime);
					$('.update-date').text(date);
					$('.news-content').html(data.content)
				}
			}
		});
	}
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
	//联系方式
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
function information() {
	window.location.assign('news.html?type=1')
}
function industry() {
	window.location.assign('news.html?type=2')
}
