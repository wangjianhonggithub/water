$(document).ready(function() {
	$('.nav-item').eq(2).find('a').addClass('ac-item')
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
			$('.nav-item').eq(2).find('a').addClass('ac-item');
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
	var id=getQueryVariable('id');
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/service_con_con?id="+id,
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;
				$('.pic-box').append('<img class="service-item-pic" src="http://huanbao.bjdingzhicheng.com' + data.img + '"/>')
				$('.details-title').text(data.title);
				$('.update-title .c').html(data.content);
				var date=timestampToTime(data.addtime);
				$('.update-title .b').text(date);
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
					$('.banner-list').append('<div class="banner-item-box">' +
						'<div class="item-big-box">' +
						'<div class="banner-item" onclick="goserviceClassify(' + data[i].id + ')">' + data[i].title + '</div>' +
						'</div>' +
						'</div>')
				}				
			}
		}
	});
})
function goserviceClassify(id) {
	window.location.assign('service.html?id='+id)
}
function appointment() {
	var userName = $('#appointment-name').val();
	var tel = $('#appointment-mobile').val();
	var area = $('#appointment-area').val();
	var province = $('#s1').val();
	var city = $('#s2').val();
	console.log(province)
	console.log(city)
	if(userName == '') {
		alert('请输入称呼！');
		return false;
	}
	if(tel == '') {
		alert('请输入联系方式！');
		return false;
	}
	if(area == '') {
		alert('请输入房屋面积！');
		return false;
	}
	if(province == '' || province == '省份') {
		alert('请选择省份！');
		return false;
	}
	if(city == '' || province == '城市') {
		alert('请选择城市！');
		return false;
	}
	$.post("http://huanbao.bjdingzhicheng.com/index/offer", {
		username: userName,
		tel: tel,
		area: area,
		province: province,
		city: city
	}, function(data) {
		alert('提交成功！')
	});
}