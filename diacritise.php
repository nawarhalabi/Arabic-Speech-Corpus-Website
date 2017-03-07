<?php
if ( isset( $_POST['text'] ) && strlen( $_POST['text'] ) < 1000 ) {
	file_put_contents( getcwd() . '/diacritiser/input', $_POST['text'] );
	
	$input = '"' . getcwd() . '/diacritiser/input"';
	$output = '"' . getcwd() . '/diacritiser/output"';
	$model = '"' . getcwd() . '/diacritiser/models/l9w5b1lt7wt3punc_clean"';
	$preprocess = 'python3 "' . getcwd() . '/diacritiser/preprocess.py" 5 < ' . $input;
	$diacritise = '"' . getcwd() . '/diacritiser/bin/crf_test" -m ' . $model;
	$postprocess = 'python3 "' . getcwd() . '/diacritiser/postprocess.py"';
	$lib = '"' . getcwd() . '/diacritiser/lib/"';
	$cmd = 'export LD_LIBRARY_PATH=' . $lib .
		   ' ; ' . $preprocess .
		   ' | ' . $diacritise .
		   ' | ' . $postprocess .
		   ' > ' . $output;
	
	$shell_text = shell_exec( $cmd );
	
	$text = file_get_contents( getcwd() . '/diacritiser/output' );

	echo '{
		"text": ' . json_encode( $text ) . '
	}';
} else {
	echo '{
		"text": "النص طويل جداً...Text too long for demo..."
	}';
}
?>