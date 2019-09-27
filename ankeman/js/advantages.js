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
	function serviceClassify(id) {
		window.location.assign('service.html?id='+id)
	}
//	$.ajax({
//		url: "http://huanbao.bjdingzhicheng.com/index/advantage",
//		success: function(result) {
//			console.log(result)
//			var result = JSON.parse(result)
//			if(result.code == '1001'){
//				var data=result.list.data;
//				var dataone=data[0];
//				var dataoneA=dataone.title.substring(0, 2);
//				var dataoneB=dataone.title.substring(2);
//				$('.advantages-one .a').text(dataoneA);
//				$('.advantages-one .b').text(dataoneB);	
//				var datatwo=data[1];
//				var datatwoA=datatwo.title.substring(0, 2);
//				var datatwoB=datatwo.title.substring(2);
//				$('.advantages-two .a').text(datatwoA);
//				$('.advantages-two .b').text(datatwoB);	
//				var datathree=data[2];
//				var datathreeA=datathree.title.substring(0, 2);
//				var datathreeB=datathree.title.substring(2);
//				$('.advantages-three .a').text(datathreeA);
//				$('.advantages-three .b').text(datathreeB);	
//				var datafour=data[3];
//				var datafourA=datafour.title.substring(0, 2);
//				var datafourB=datatwo.title.substring(2);
//				$('.advantages-four .a').text(datafourA);
//				$('.advantages-four .b').text(datafourB);	
//				var datafive=data[4];
//				var datafiveA=datafive.title.substring(0, 2);
//				var datafiveB=datafive.title.substring(2);
//				$('.advantages-five .a').text(datafiveA);
//				$('.advantages-five .b').text(datafiveB);	
//			}
//		}
//	});
})
