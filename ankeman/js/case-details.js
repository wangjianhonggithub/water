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
				$('.contact-us-email span').text(data.reporting_email);
				$('.contact-us-tel span').text(data.reporting_tel);
				$('.contact-us-address span').text(data.address);
				$('.contact-us-mobile span').text(data.tel);
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
	//获取分类
	var classifyId=getQueryVariable('classifyId');
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/project",
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;
				for(var i = 0; i < data.length; i++) {
					$('.case-tab-list').append('<a class="case-tab-item" onclick="caseClassify(' + data[i].id +')" href="javascript:void(null)">' + data[i].title + '</a>')
				}
				$('.case-tab-list').append('<div class="clear"></div>')
				for(var n=0;n<data.length;n++){
					if(data[n].id==classifyId){
						$('.case-tab-item').eq(n).addClass('btn-active');
						break;
					}
				}
			}
		}
	});	
	var id=getQueryVariable('id');	
	$.ajax({
		url: "http://huanbao.bjdingzhicheng.com/index/consultation_con?id="+id,
		success: function(result) {
			var result = JSON.parse(result)
			if(result.code == '1001') {
				var data = result.list;
				$('.case-box').append('<img class="case-pic" src="http://huanbao.bjdingzhicheng.com' + data.img + '"/>');
				$('.case-item-title').text(data.title)
			}
		}
	});
})
function caseClassify(id){
	window.location.assign('case.html?id='+id)
}
function serviceClassify(id) {
	window.location.assign('service.html?id='+id)
}