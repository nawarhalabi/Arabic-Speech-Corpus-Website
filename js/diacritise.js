$(document).ready(function() {
	$('input[name=diacritise]').on('click', function(e) {
		var text = $('textarea[name=text]').val();
		$('#diacritisation-result').removeClass('alert-success');
		$('#diacritisation-result').removeClass('alert-danger');
		$('#diacritisation-result').html('<img src="img/loading.gif" alt="loading" />');
		
		$.ajax({type: 'POST', url: 'diacritise.php', data: {text: text}, dataType: "json"})
			.done(function(data) {
				$('h2#result-header').removeClass('hidden');
				$('#diacritisation-result').removeClass('alert-danger');
				$('#diacritisation-result').addClass('alert-success');
				$('#diacritisation-result').html(data.text);
				$('textarea[name=correction]').val(data.text + ' ');
			})
			.fail(function() {
				$('#diacritisation-result').html('Web API failed. Please contact administrator.');
				$('#diacritisation-result').removeClass('alert-success');
				$('#diacritisation-result').addClass('alert-danger');
				$('h2#result-header').addClass('hidden');
			});
	});
});