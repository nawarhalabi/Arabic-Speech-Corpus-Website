tts_server = 'http:///ar.arabicspeechcorpus.com/tts/';

$('#tts-btn-mishkal').on('click', function(e) {
        $('#waiting-gif').html('<img src="img/loading.gif" alt="loading" />');

        $.getJSON({
                url: 'http://ar.arabicspeechcorpus.com:8080/mishkal/synth/url/' + $('#input-text').val(),
                data: '',
                success: function( data ) {
                        $('#waiting-gif').html('');
                        $('audio #source').attr('src', tts_server + data['url']);
                        $('audio').get(0).load();
                        $('audio').get(0).play();
                }
        });
});

$('#tts-btn-shakkala').on('click', function(e) {
        $('#waiting-gif').html('<img src="img/loading.gif" alt="loading" />');

        $.getJSON({
                url: 'http://ar.arabicspeechcorpus.com:8080/shakkala/synth/url/' + $('#input-text').val(),
                data: '',
                success: function( data ) {
                        $('#waiting-gif').html('');
                        $('audio #source').attr('src', tts_server + data['url']);
                        $('audio').get(0).load();
                        $('audio').get(0).play();
                }
        });
});


$('#tts-btn-shakkelha').on('click', function(e) {
        $('#waiting-gif').html('<img src="img/loading.gif" alt="loading" />');

        $.getJSON({
                url: 'http://ar.arabicspeechcorpus.com:8080/shakkelha/synth/url/' + $('#input-text').val(),
                data: '',
                success: function( data ) {
                        $('#waiting-gif').html('');
                        $('audio #source').attr('src', tts_server + data['url']);
                        $('audio').get(0).load();
                        $('audio').get(0).play();
                }
        });
});

