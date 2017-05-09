jQuery(document).ready(function($) {
	$('#contact-form').on('submit', function(e){
		e.preventDefault();
		var num_empty = 0;
		$.each($('.form-control.required'), function(){
			if( $(this).val().length == 0 ) {
				$(this).addClass('input-empty');
				num_empty++;
			}
		});
		if( num_empty == 0 ) {
			var form_data = $('#contact-form').serialize();
			$.ajax({
				url: '../data/ajax.php',
				data: form_data,
				dataType: 'json',
				type: 'POST',
				beforeSend: function() {
					$('.fa.fa-spinner.fa-spin.hide').removeClass('hide');
				},
				success: function(data) {
					if(data == 1) { // message sent show thank you message
						$('#contact-form-wrap').hide();
						focusOnAlert($('#contact-msg-sent'));
					} else {
						focusOnAlert($('.alert.alert-danger'), data);
					}
				}
			});
		} else {
			focusOnAlert($('.alert.alert-danger'));
		}
	});
	$('body').on('focusout', '.input-empty', function(){
		if($(this).val().length > 0)
			$(this).removeClass('input-empty');
	});
});

function focusOnAlert(alertObj, msg = 0) {
	if( msg != 0 ) alertObj.html(msg);
	alertObj.removeClass('hide');
	var alert_offset = alertObj.offset();
	alert_offset.left -= 20;
	alert_offset.top -= 20;
	$('html, body').animate({
	    scrollTop: alert_offset.top,
	    scrollLeft: alert_offset.left
	});
}