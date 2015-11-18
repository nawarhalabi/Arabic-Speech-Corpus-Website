$(document).ready(function() {
	$('.download-btn').on('click', function(e) {
		var gacode = $(this).attr('gacode');
		ga('send', 'event', 'Corpus', 'Download', gacode);
	});
});