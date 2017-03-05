<?php
if ( isset( $_POST['text'] ) and strlen( $_POST['text'] ) > 5 and strlen( $_POST['text'] ) < 5000 ) {
	if ( isset( $_POST['g-recaptcha-response'] ) && !empty($_POST['g-recaptcha-response'] ) ) {
		//your site secret key
		$secret = '6LdothcUAAAAAA8YEJKKNov2S7EoOtcOxGu8tnuG';
		//get verify response data
		$verifyResponse = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response'] );
		$responseData = json_decode( $verifyResponse );
		if ( $responseData->success ) {
			file_put_contents( 'corrections/corrections.txt', $_POST['text'] . PHP_EOL , FILE_APPEND | LOCK_EX );
			
			echo '{
				"response": "Text saved! Thank you very much.",
				"status": "success"
			}';
		} else {
			echo '{
				"response": "Incorrect captcha response.",
				"status": "error"
			}';
		}
	} else {
		echo '{
			"response": "Incorrect captcha response.",
			"status": "error"
		}';
	}
} else {
	echo '{
		"response": "Input too long or too short.",
		"status": "error"
	}';
}

?>