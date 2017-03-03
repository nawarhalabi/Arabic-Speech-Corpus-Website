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
		<meta name="description" content="The Arabic Speech Corpus Diacritiser is a state-of-the-art diacritiser, useful for use in Arabic Speech Synthesis and Machine Translation.">
		<meta name="author" content="Nawar Halabi">
		<link rel="icon" href="img/favicon.ico">

		<title>Arabic Speech Corpus Diacritiser</title>

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
		<script src="js/diacritise.js"></script>
	</head>

	<body>
		<!-- Begin page content -->
		<div class="container">
			<a href="http://en.arabicspeechcorpus.com">
				<img id="site-logo" src="img/logo.png" alt="logo" />
			</a>
			<div class="language-selector">
				<a href="http://ar.arabicspeechcorpus.com/diacritiser.php" title="مشكل اللغة العربية">Arabic</a>
				|
				<a href="http://en.arabicspeechcorpus.com/diacritiser.php" title="Arabic Speech Corpus Diacritiser">English</a>
			</div>
			<div class="page-header">
				<h1>Arabic Speech Corpus Diacritiser</h1>
			</div>
			<p>This diacritiser was trained on a dataset of millions of datapoints scraped from websites and from old books (Alshamila library). It uses Conditional Random Fields and achieves higher accuracy than all, bigger size, slower diacritisers out there.</p>
			<p>It also can run on small devices (mobile phones).</p>
			<p>Please contact Nawar Halabi to obtain a license for this diacritiser.</p>
			<textarea dir="rtl" class="col-xs-12" name="text" rows="5" placeholder="Please enter text to diacritise..."></textarea>
			<input class="btn btn-success" type="button" name="diacritise" value="Diacritise" />
			<h2 id="result-header" class="hidden">Result</h2>
			<p dir="rtl" id="diacritisation-result"></p>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="text-muted">&copy; <?php echo date("Y"); ?> Nawar Halabi. All rights reserved.</p>
			</div>
		</footer>
	</body>
</html>
