function doAjaxPost(url, data, callback) {
	try {
		$.ajax({
			url: url,
			type: "POST",
			data: data,
			dataType: "json",
			async: true,
			beforeSend: function(){
				
					$('.loader').fadeIn(50);
				
			},
			success: function(data) {
				return callback(data);
			},
			error: function(data) {
				if (data.responseJSON) {
					return callback(data.responseJSON.message);
				}
			},
			complete: function(data) {
				
					$('.loader').fadeOut(50);
				
			}
		})
	} catch (e){
		alert(e.message);
	}
}

function doAjaxGet(url, callback) {
	try {
		$.ajax({
			url: url,
			type: "GET",
			dataType: "json",
			async: true,
			beforeSend: function(){
				$('.loader').fadeIn(50);
			},
			success: function(data) {
				return callback(data);
			},
			error: function(data) {
				if (data.responseJSON) {
					return callback(data.responseJSON.message);
				}
			},
			complete: function(data) {
				$('.loader').fadeOut(50);
			}
		})
	} catch (e){
		alert(e.message);
	}
}
