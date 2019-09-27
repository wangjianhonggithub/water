var classifyId='';
$(document).ready(function() {
	$('.nav-item').eq(0).find('a').addClass('ac-item');
	$('.banner-item').eq(0).show().siblings().hide();
	var s=0;
	setInterval(function(){
		s++;
		if(s>$('.banner-item').length-1){
			s=0
		}
		$('.banner-item').eq(s).show().siblings().hide();
	},3000)
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
	//banner
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/banner",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var fristBanner=result.list.data.slice(0,3);
				var lastBanner=result.list.data.slice(3,6);
				for(var n=0;n<fristBanner.length;n++){
					 if(fristBanner[n].display==1){
						$('.banner-box').append('<img class="banner-item" src="http://huanbao.bjdingzhicheng.com'+fristBanner[n].banner_img+'">') 
					 }					
				}				
				$('.banner-item').eq(0).show().siblings().hide();
				$('.team-banner img').attr('src', 'http://huanbao.bjdingzhicheng.com' + lastBanner[0].banner_img);
				$('.btn-num').each(function(index) {
					$('.btn-num').eq(index).click(function() {
						$('.team-banner img').attr('src', 'http://huanbao.bjdingzhicheng.com' + lastBanner[index].banner_img);
					})
				})
			}
		}
	});
	//关于我们
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/Admin/Aboutas/ajaxAboutas",
		success: function(result) {
			var data = JSON.parse(result);
			$('.about-text').text(data.content)
		}
	});
	//我们的优势
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/advantage",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data;
				var dataA = data.slice(0,4);
				var dataB = data.slice(4,7);
				for(var n = 0; n < dataA.length; n++) {
					if(n==0){
						$('.advantages-top').append('<div class="advantages-top-item">'+
							'<div class="item-top">'+
								'<div class="index">'+
									'<div class="num-bg">'+
										'<div class="num">'+(n+1)+'</div>'+
									'</div>'+
								'</div>'+
								'<div class="advantages-text">'+dataA[n].content+'</div>'+
							'</div>'+
							'<div class="xian">'+
								'<div class="dian "></div>'+
							'</div>'+
							'<div class="heng"></div>'+
						'</div>')
					}
					if(n==1||n==2){
						$('.advantages-top').append('<div class="advantages-top-item">'+
							'<div class="item-top">'+
								'<div class="index">'+
									'<div class="num-bg">'+
										'<div class="num">'+(n+1)+'</div>'+
									'</div>'+
								'</div>'+
								'<div class="advantages-text">'+dataA[n].content+'</div>'+
							'</div>'+
							'<div class="xian">'+
								'<div class="dian "></div>'+
							'</div>'+
						'</div>')
					}
					if(n==3){
						$('.advantages-top').append('<div class="advantages-top-item">'+
							'<div class="item-top">'+
								'<div class="index">'+
									'<div class="num-bg">'+
										'<div class="num">'+(n+1)+'</div>'+
									'</div>'+
								'</div>'+
								'<div class="advantages-text">'+dataA[n].content+'</div>'+
							'</div>'+
							'<div class="xian">'+
								'<div class="dian "></div>'+
							'</div>'+
							'<div class="heng-a"></div>'+
						'</div>')
					}
				}
				$('.advantages-bot').append('<div class="advantages-bot-l"></div>')
				for(var i=0;i<dataB.length;i++){					
					$('.advantages-bot').append('<div class="advantages-bot-item">'+
						'<div class="bot-xian">'+
							'<div class="bot-dian"></div>'+
						'</div>'+
						'<div class="item-top">'+
							'<div class="index">'+
								'<div class="num-bg">'+
									'<div class="num">'+(i+5)+'</div>'+
								'</div>'+
							'</div>'+
							'<div class="advantages-text">'+dataB[i].content+'</div>'+
						'</div>'+
					'</div>')
				}
				// $('.advantages-bot').append('<div class="advantages-bot-item">'+
				// 		'<div class="bot-xian">'+
				// 			'<div class="bot-dian"></div>'+
				// 		'</div>'+
				// 		'<div class="item-top">'+
				// 			'<div class="index">'+
				// 				'<div class="num-bg">'+
				// 					'<div class="num">7</div>'+
				// 				'</div>'+
				// 			'</div>'+
				// 			'<div class="advantages-text">24小时响应服务</div>'+
				// 		'</div>'+
				// 	'</div>')
				$('.advantages-bot').append('<div class="advantages-bot-r"></div>')
			}
		}
	});
	//获取默认分类展示案例
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
	//联系方式
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
			$('.nav-item').eq(0).find('a').addClass('ac-item');
		}
	});
	//最新资讯
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/consultation",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data.slice(0,5);
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.information-list').prepend('<div class="information-item" onclick="informationDetails(' + data[i].id +')">' +
						'<div class="information-date">' + data[i].addtime + '</div>' +
						'<div class="information-item-title">' + data[i].title + '</div>' +
						'</div>')
				}
			}
		}
	});
	//行业新闻
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/industry",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list.data.slice(0,5);
				for(var i = 0; i < data.length; i++) {
					data[i].addtime = timestampToTime(data[i].addtime);
					$('.industry-list').prepend('<li class="industry-item" onclick="industryDetails(' + data[i].id + ')"><span class="industry-item-dian"></span>' + data[i].title + '</li>')
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
//获取报价
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
//最新资讯更多
function information() {
	window.location.assign('news.html?type=1')
}
//行业资讯更多
function industry() {
	window.location.assign('news.html?type=2')
}
//案例分类切换
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
//案例详情
function caseDetails(id) {
	window.location.assign('case-details.html?id='+id+'&classifyId='+classifyId)
}
//新闻详情
function informationDetails(id) {
	window.location.assign('news-details.html?id='+id+'&type=1')
}
//新闻详情
function industryDetails(id) {
	window.location.assign('news-details.html?id='+id+'&type=2')
}