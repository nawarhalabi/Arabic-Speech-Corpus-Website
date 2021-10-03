<?php
if ( isset( $_POST['text'] ) && strlen( $_POST['text'] ) < 3000 ) {
	file_put_contents( getcwd() . '/diacritiser/input', '.' . $_POST['text'] . '.' );
	
	$input = '"' . getcwd() . '/diacritiser/input"';
	$output = '"' . getcwd() . '/diacritiser/output"';
	$model = '"' . getcwd() . '/diacritiser/models/l9w5b1lt11wt1_waf5clean_full_set_5w_wa"';
	$preprocess = 'python3 "' . getcwd() . '/diacritiser/preprocess.py" 2 < ' . $input;
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

	$text = trim( $text );
	
	$text = substr( $text, 1, -1 );
	
	echo '{
		"text": ' . json_encode( $text ) . '
	}';
} else {
	echo '{
		"text": "النص طويل جداً...Text too long for demo..."
	}';
}
?>