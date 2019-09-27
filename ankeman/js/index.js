var classifyId='';
$(document).ready(function() {
	$('.nav-item').eq(0).find('a').addClass('ac-item')
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
		url: "http://huanbao.bjdingzhicheng.com/index/banner",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				$('.team-banner img').attr('src', 'http://huanbao.bjdingzhicheng.com' + result.list.data[0].banner_img);
				$('.btn-num').each(function(index) {
					$('.btn-num').eq(index).click(function() {
						$('.team-banner img').attr('src', 'http://huanbao.bjdingzhicheng.com' + result.list.data[index].banner_img);
					})
				})
			}
		}
	});

	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;
				classifyId=data[0].id;
				$.ajax({
					url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + data[0].id + "&page=1&number=1",
					success: function(result) {
						var result = JSON.parse(result)
						if(result.code == '1001') {
							var data = result.list;
							for(var n = 0; n < data.length; n++) {
								$('.tab-view').append('<div class="tab-view-box" onclick="caseDetails('+data[n].id+')">' +
									'<div class="tab-view-item">' +
									'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '" />' +
									'<div class="view-item-name">' + data[n].title + '</div>' +
									'</div>' +
									'</div>')
							}
							$('.tab-view').append('<div class="clear"></div>')
						}
					}
				});
				for(var i = 0; i < data.length; i++) {
					$('.case-tab').append('<div class="case-tab-item" onclick="caseClassify(' + data[i].id + ',' + i+')">' + data[i].title + '</div>')
				}
				$('.case-tab-item').eq(0).addClass('case-tab-item-active')
			}
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/about",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list[0];
				$('.contact-us-email span').text(data.reporting_email);
				$('.contact-us-tel span').text(data.reporting_tel);
				$('.contact-us-address span').text(data.address);
				$('.contact-us-mobile span').text(data.tel);
			}
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/consultation",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data.slice(0,5);
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.information-list').prepend('<div class="information-item">' +
						'<div class="information-date">' + data[i].addtime + '</div>' +
						'<div class="information-item-title">' + data[i].title + '</div>' +
						'</div>')
				}
			}
		}
	});
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/industry",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data.slice(0,5);
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.industry-list').prepend('<li class="industry-item"><span class="industry-item-dian"></span>' + data[i].title + '</li>')
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
	function timestampToTime(timestamp) {
		var date = new Date(timestamp * 1000); //时间戳为10位需*1000，时间戳为13位的话不需乘1000
		var Y = date.getFullYear() + '-';
		var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
		var D = (date.getDate() < 10 ? '0' + date.getDate() : date.getDate()) + ' ';
		return Y + M + D;
	}
})

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

function information() {
	window.location.assign('news.html?type=1')
}

function industry() {
	window.location.assign('news.html?type=2')
}

function caseClassify(id,i) {
	classifyId=id;
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + id + "&page=1&number=1",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;
				$('.tab-view').html('')
				for(var n = 0; n < data.length; n++) {
					$('.tab-view').append('<div class="tab-view-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="tab-view-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '" />' +
						'<div class="view-item-name">' + data[n].title + '</div>' +
						'</div>' +
						'</div>')
				}
				$('.tab-view').append('<div class="clear"></div>')
			}
		}
	});
	$('.case-tab-item').eq(i).addClass('case-tab-item-active').siblings().removeClass('case-tab-item-active')
}
function serviceClassify(id) {
	window.location.assign('service.html?id='+id)
}
//案例详情
function caseDetails(id) {
	window.location.assign('case-details.html?id='+id+'&classifyId='+classifyId)
}