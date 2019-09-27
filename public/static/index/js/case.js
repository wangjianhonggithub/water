var nowNum = 1;
var pageAll=0;
var classifyId='';
$(document).ready(function() {
	$('.nav-item').eq(5).find('a').addClass('ac-item')
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
			$('.nav-item').eq(5).find('a').addClass('ac-item');
		}
	});
	function serviceClassify(id) {
		window.location.assign('service.html?id='+id)
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
	var id=getQueryVariable('id');
	if(id){
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/project",
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list;
					for(var i = 0; i < data.length; i++) {
						$('.case-tab-list').append('<a class="case-tab-item" onclick="caseClassify(' + data[i].id + ',' + i + ')" href="javascript:void(null)">' + data[i].title + '</a>')
					}
					for(var n=0;n<data.length;n++){
						if(data[n].id==id){
							$('.case-tab-item').eq(n).addClass('btn-active');
							break;
						}
					}
					classifyId=id;
					$.ajax({
						url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + id + '&page=1&number=8',
						success: function(result) {
							var result = JSON.parse(result)
							if(result.code == '1001') {
								var data = result.list;
								var pageSum = Math.ceil(result.num / 8);
								pageAll=Math.ceil(result.num / 8);
								for(var i = 0; i < pageSum - 1; i++) {
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
								}
								if(pageSum > 3) {
									$('.btn-item').eq(1).nextAll().hide();
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
									$('.btn-item').last().css('float', 'right');
									$('.btn-item').eq(1).after('...');
								}
								if(pageSum < 4) {
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
								}
								$('.btn-item').eq(0).addClass('btn-active');
								for(var n = 0; n < data.length; n++) {
									
									$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
										'<div class="case-item">' +
										'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
										'<div class="case-item-name">' + data[n].title + '</div>' +
										'</div>	' +
										'</div>')
								}
								$('.case-list-box').append('<div class="clear"></div>')
							}
						}
					});
				}
			}
		});
	}
	if(id==false){
		//获取分类，和默认分类下的案例
		$.ajax({
			url: "http://huanbao.bjdingzhicheng.com/index/project",
			success: function(result) {
				var result = JSON.parse(result)
				if(result.code == '1001') {
					var data = result.list;
					for(var i = 0; i < data.length; i++) {
						$('.case-tab-list').append('<a class="case-tab-item" onclick="caseClassify(' + data[i].id + ',' + i + ')" href="javascript:void(null)">' + data[i].title + '</a>')
					}
					$('.case-tab-item').eq(0).addClass('btn-active');
					classifyId=data[0].id;
					$.ajax({
						url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + data[0].id + '&page=1&number=8',
						success: function(result) {
							var result = JSON.parse(result)
							if(result.code == '1001') {
								var data = result.list;
								var pageSum = Math.ceil(result.num / 8);
								pageAll=Math.ceil(result.num / 8);
								for(var i = 0; i < pageSum - 1; i++) {
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
								}
								if(pageSum > 3) {
									$('.btn-item').eq(1).nextAll().hide();
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
									$('.btn-item').last().css('float', 'right');
									$('.btn-item').eq(1).after('...');
								}
								if(pageSum < 4) {
									$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
								}
								$('.btn-item').eq(0).addClass('btn-active');
								for(var n = 0; n < data.length; n++) {
									
									$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
										'<div class="case-item">' +
										'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
										'<div class="case-item-name">' + data[n].title + '</div>' +
										'</div>	' +
										'</div>')
								}
								$('.case-list-box').append('<div class="clear"></div>')
							}
						}
					});
				}
			}
		});
	}
	
})
//案例详情
function caseDetails(id) {
	window.location.assign('case-details.html?id='+id+'&classifyId='+classifyId)
}
//跳转第几页
function pageto(pagenum) {
	nowNum = pagenum;
	console.log(pagenum)
	$('#pagebox').html('');
	var pageSum = pageAll;
	for(var i = 0; i < pageSum - 1; i++) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
	}
	if(pageSum > 3) {
		$('.btn-item').eq(pagenum - 1).prevAll().hide();
		$('.btn-item').eq(pagenum).nextAll().hide();
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').last().css('float', 'right');
		if(pageSum - pagenum > 2) {
			$('.btn-item').eq(pagenum + 1).after('...');
		}
		$('.btn-item').eq(pagenum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pageSum < 4) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').eq(pagenum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pagenum == pageSum) {
		$('.btn-item').eq(pagenum - 1).prevAll().hide();
	}
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + classifyId + '&page='+pagenum+'&number=8',
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;	
				$('.case-list-box').html('');
				for(var n = 0; n < data.length; n++) {
					$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="case-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
						'<div class="case-item-name">' + data[n].title + '</div>' +
						'</div>	' +
						'</div>')
				}
				$('.case-list-box').append('<div class="clear"></div>')
			}
		}
	});
}
//跳转
function pagego(){	
	var pagenum=$('.btn-number').val();
	if(pagenum==''){
		alert('未输入页数！')
		return false;
	}
	nowNum = pagenum;
	$('#pagebox').html('');
	var pageSum = pageAll;
	for(var i = 0; i < pageSum - 1; i++) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
	}
	if(pageSum > 3) {
		$('.btn-item').eq(pagenum - 1).prevAll().hide();
		$('.btn-item').eq(pagenum).nextAll().hide();
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').last().css('float', 'right');
		if(pageSum - pagenum > 2) {
			$('.btn-item').eq(pagenum + 1).after('...');
		}
		$('.btn-item').eq(pagenum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pageSum < 4) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').eq(pagenum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pagenum == pageSum) {
		$('.btn-item').eq(pagenum - 1).prevAll().hide();
	}
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + classifyId + '&page='+pagenum+'&number=8',
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;	
				$('.case-list-box').html('');
				for(var n = 0; n < data.length; n++) {
					$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="case-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
						'<div class="case-item-name">' + data[n].title + '</div>' +
						'</div>	' +
						'</div>')
				}
				$('.case-list-box').append('<div class="clear"></div>')
			}
		}
	});
}
//下一页
function addPageNum() {
	nowNum = nowNum + 1;
	if(nowNum > pageSum) {
		nowNum = pageSum
	}
	$('#pagebox').html('');
	var pageSum = pageAll;
	for(var i = 0; i < pageSum - 1; i++) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
	}
	if(pageSum > 3) {
		$('.btn-item').eq(nowNum - 1).prevAll().hide();
		$('.btn-item').eq(nowNum).nextAll().hide();
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').last().css('float', 'right');
		if(pageSum - nowNum > 2) {
			$('.btn-item').eq(nowNum + 1).after('...');
		}
		$('.btn-item').eq(nowNum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pageSum < 4) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').eq(nowNum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(nowNum == pageSum) {
		$('.btn-item').eq(nowNum - 1).prevAll().hide();
	}
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + classifyId + '&page='+nowNum+'&number=8',
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;	
				$('.case-list-box').html('');
				for(var n = 0; n < data.length; n++) {
					$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="case-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
						'<div class="case-item-name">' + data[n].title + '</div>' +
						'</div>	' +
						'</div>')
				}
				$('.case-list-box').append('<div class="clear"></div>')
			}
		}
	});
}
//上一页
function minPageNum() {
	nowNum = nowNum - 1;
	if(nowNum < 1) {
		nowNum = 1
	}
	$('#pagebox').html('');
	var pageSum = pageAll;
	for(var i = 0; i < pageSum - 1; i++) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
	}
	if(pageSum > 3) {
		$('.btn-item').eq(nowNum - 1).prevAll().hide();
		$('.btn-item').eq(nowNum).nextAll().hide();
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').last().css('float', 'right');
		if(pageSum - nowNum > 2) {
			$('.btn-item').eq(nowNum + 1).after('...');
		}
		$('.btn-item').eq(nowNum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(pageSum < 4) {
		$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
		$('.btn-item').eq(nowNum - 1).addClass('btn-active').siblings().removeClass('btn-active');
	}
	if(nowNum == pageSum) {
		$('.btn-item').eq(nowNum - 1).prevAll().hide();
	}
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + classifyId + '&page='+nowNum+'&number=8',
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;		
				$('.case-list-box').html('');
				for(var n = 0; n < data.length; n++) {
					$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="case-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
						'<div class="case-item-name">' + data[n].title + '</div>' +
						'</div>	' +
						'</div>')
				}
				$('.case-list-box').append('<div class="clear"></div>')
			}
		}
	});
}
//案例分类切换
function caseClassify(id, i) {
	classifyId=id;
	$('.case-tab-item').eq(i).addClass('btn-active').siblings().removeClass('btn-active');
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project_con?id=" + id + '&page=1&number=8',
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				$('.case-btn-list').show();
				var data = result.list;
				var pageSum = Math.ceil(result.num / 8);
				$('#pagebox').html('');
				for(var i = 0; i < pageSum - 1; i++) {
					$('#pagebox').append('<a class="btn-item" onclick="pageto(' + (i + 1) + ')">' + (i + 1) + '</a>');
				}
				if(pageSum > 3) {
					$('.btn-item').eq(1).nextAll().hide();
					$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
					$('.btn-item').last().css('float', 'right');
					$('.btn-item').eq(1).after('...');
				}
				if(pageSum < 4) {
					$('#pagebox').append('<a class="btn-item" onclick="pageto(' + pageSum + ')">' + pageSum + '</a>');
				}
				$('.btn-item').eq(0).addClass('btn-active');
				$('.case-list-box').html('');
				for(var n = 0; n < data.length; n++) {
					$('.case-list-box').append('<div class="case-item-box" onclick="caseDetails('+data[n].id+')">' +
						'<div class="case-item">' +
						'<img src="http://huanbao.bjdingzhicheng.com' + data[n].img + '"/>' +
						'<div class="case-item-name">' + data[n].title + '</div>' +
						'</div>	' +
						'</div>')
				}
				$('.case-list-box').append('<div class="clear"></div>')
			}
			if(result.code=='100'){
				$('.case-list-box').html('');
				$('.case-btn-list').hide();				
			}
		}
	});
}