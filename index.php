<?php
/**
 * The template for displaying main page.
 */
 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="img/favicon.ico">

		<title>Arabic Speech Corpus</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/main.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-70300143-1', 'auto');
			ga('send', 'pageview');
		</script>
		
		<script src="js/analytics.js"></script>
	</head>

	<body>
		<!-- Begin page content -->
		<div class="container">
			<img id="site-logo" src="img/logo.png" alt="logo" />
			<div class="language-selector">
				<a href="http://ar.arabicspeechcorpus.com/" title="مجموع (قاعدة بيانات) النطق بالعربية">Arabic</a>
				|
				<a href="http://en.arabicspeechcorpus.com/" title="Arabic Speech Corpus">English</a>
			</div>
			<div class="page-header">
				<h1>Arabic Speech Corpus</h1>
			</div>
			<p>This Speech corpus has been developed as part of PhD work carried out by <a href="https://uk.linkedin.com/pub/nawar-halabi/65/532/67b" title="Nawar Halabi">Nawar Halabi</a> at the <a href="http://www.southampton.ac.uk/" title="University of Southampton">University of Southampton</a>. The corpus was recorded in south Levantine Arabic (Damascian accent) using a professional studio. Synthesized speech as an output using this corpus has produced a high quality, natural voice.</p>
			<p>It is released here under the non-commercial creative commons license specified below. In case further rights are required, or you require consultancy for building Arabic speech corpora, please contact <a href="mailto:nawar.halabi@gmail.com" target="_top">Nawar Halabi</a> by email. Thank you for your interest.</p>
			<p>
				<a class="btn btn-success btn-lg center-block download-btn" gacode="whole-version-1" href="arabic-speech-corpus.zip" title="Download Package">Download Package</a>
			</p>
			<div class="page-header">
				<h1>The package includes</h1>
			</div>
			<ul>
				<li>1813 .wav files containing spoken utterances.</li>
				<li>1813 .lab files containing text utterances.</li>
				<li>1813 .TextGrid files containing the phoneme labels with time stamps of the boundaries where these occur in the .wav files. These files can be opened using <a href="www.fon.hum.uva.nl/praat/" title="praat">Praat software</a>.</li>
				<li>phonetic-transcript.txt which has the form "[wav_filename]" "[Phoneme Sequence]" in every line.</li>
				<li>orthographic-transcript.txt which has the form "[wav_filename]" "[Orthographic Transcript]" in every line. Orthography is in <a href="http://www.qamus.org/transliteration.htm" title="buckwalter transliteration">Buckwalter Format</a> which is friendlier where there is software that does not read Arabic script. It can be easily converted back to Arabic.</li>
			</ul>
			<div class="page-header">
				<h1>Documentation</h1>
			</div>
			<p>More documentation will be added in the future. Please refer to Nawar Halabi's <a href="MPHIL.pdf" alt="Download Nawar's 18-month report">18-month report</a> for more details. Please note that the apostrophe which follows some vowel phonemes in the corpus indicates that the vowel is in a stressed syllable.</p>
			<div class="page-header">
				<h1>License</h1>
			</div>
			<p>
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
					<img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
				</a>
				<br />
				Arabic Speech Corpus by <a href="/" title="Nawar Halabi" rel="cc:attributionURL">Nawar Halabi</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.<br />Based on a work at <a title="Arabic Speech Corpus" href="/" rel="dct:source">www.arabicspeechcorpus.com</a>.
			</p>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="text-muted">© <?php echo date("Y"); ?> Nawar Halabi. All rights reserved.</p>
			</div>
		</footer>
	</body>
</html>
