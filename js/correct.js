$(document).ready(function() {
	$('input[name=correct]').on('click', function(e) {
		var text = $('textarea[name=correction]').val();
		
		$('#correction-result').removeClass('alert-danger');
		$('#correction-result').removeClass('alert-success');
		$('#correction-result').html('<img src="img/loading.gif" alt="loading" />');
		setTimeout(function() {
			$.ajax({type: 'POST',
				url: 'correction.php',
				data: {text: text,
					   "g-recaptcha-response": grecaptcha.getResponse()},
				dataType: "json"
				})
			.done(function(data) {
				if(data.status == 'success') {
					$('#correction-result').removeClass('alert-danger');
					$('#correction-result').addClass('alert-success');
				}
				if(data.status == 'error') {
					$('#correction-result').removeClass('alert-success');
					$('#correction-result').addClass('alert-danger');
				}
				
				$('#correction-result').html(data.response);
				
				$("html, body").animate({ scrollTop: $(document).height() }, "slow");
				grecaptcha.reset();
			})
			.fail(function() {
				$('#correction-result').html('Web API failed. Please contact administrator.');
				$('#correction-result').addClass('alert-danger');
				$('#correction-result').html(data.response);
				
				$("html, body").animate({ scrollTop: $(document).height() }, "slow");
				grecaptcha.reset();
			});
		}, 500);
	});
});