jQuery(document).ready(function($) {
	$('#contact-form').on('submit', function(e){
		e.preventDefault();
		var form_data = $(this).serialize();
		$.ajax({
			url: '../data/ajax.php',
			data: form_data,
			dataType: 'json',
			type: 'POST',
			success: function(data) {
				console.log(data);
			}
		});
	});
});