function serviceClassify(id) {
	window.location.assign('service.html?id=' + id)
}
function serviceItem(id) {
	window.location.assign('service-details.html?id=' + id)
}
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
		}
	}
});
$.ajax({
	url: "http://huanbao.bjdingzhicheng.com/Admin/Servicex/ajaxServicex",
	success: function(result) {
		var data = JSON.parse(result)
		for (var i = 0; i < data.length; i++) {
			$('.footer-service-box').append(
				'<a class="footer-service-item" href="javascript:void(null)" onclick="serviceItem(' + data[i].id + ')">' + data[
					i].title + '</a>')
		}
	}
});
$.ajax({
	url: "http://huanbao.bjdingzhicheng.com/index/service",
	success: function(result) {
		var result = JSON.parse(result)
		if (result.code == '1001') {
			var data = result.list.data;
			for (var i = 0; i < data.length; i++) {
				$('.scope-box').append('<a class="footer-scope-item" href="javascript:void(null)" onclick="serviceClassify(' +
					data[i].id + ')">' + data[i].title + '</a>')
			}
		}
	}
});
