<?php
/**
 * The template for displaying main page.
 */
 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="مجموع (قاعدة بيانات) النطق بالعربية هو قاعدة بيانات مرمرزة تستخدم من أجل توليد النطق أوتوماتيكياً بجودة عالية.">
		<meta name="author" content="نوار حلبي">
		<link rel="icon" href="img/favicon.ico">

		<title>مجموع (قاعدة بيانات) النطق بالعربية</title>

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
			<a href="http://ar.arabicspeechcorpus.com">
				<img id="site-logo" src="img/logo.png" alt="رمز الموقع" />
			</a>
			<div class="language-selector">
				<a href="http://ar.arabicspeechcorpus.com/" title="مجموع (قاعدة بيانات) النطق بالعربية">Arabic</a>
				|
				<a href="http://en.arabicspeechcorpus.com/" title="Arabic Speech Corpus">English</a>
			</div>
			<div class="page-header">
				<h1>مجموع (قاعدة بيانات) النطق بالعربية</h1>
			</div>
			<p>
				تم بناء قاعدة البيانات هذه كجزء من اطروحة دكتوراة <a href="https://uk.linkedin.com/pub/nawar-halabi/65/532/67b" title="نوار حلبي">نوار حلبي</a> في <a href="http://www.southampton.ac.uk/" title="جامعة ساوثهامتون">جامعة ساوثهامتون</a>. تم تسجيل قاعدة البيانات هذه في استوديو احترافي بلهجة دمشقية. تم استخدام قاعدة البيانات هذه لتركيب كلام منطوق أوتوماتيكيا ذي جودة عالية.
			</p>
			<p>
				تصدر قاعدة البيانات هذه تحت رخصة المشاع الإبداعي غير الربحية المحددة أدناه باللغة الإنكليزية. في حال أردتم استخدام القاعدة لأغراض ربحية، أو إن اردتم الحصول على خدمات استشارية لبناء قاعدة بيانات خاصة بكم، يرجى الإتصال <a href="mailto:nawar.halabi@gmail.com" target="_top">بنوار حلبي</a> بالبريد الاكتروني. شكراً جزيلاً لاهتمامكم.
			</p>
			<p>
				<a class="btn btn-success btn-lg center-block download-btn" gacode="whole-version-1" href="arabic-speech-corpus.zip" title="تحميل القاعدة">تحميل قاعدة البيانات</a>
			</p>
			<p>بإمكانكم تجريب مشكل اللغة العربية خاصتي ذي الدقة العالية على الويب. المشكل يعمل على الأجهزة المحمولة أيضاً.</p>
			<p>
				<a class="btn btn-info btn-lg center-block download-btn" gacode="whole-version-1" href="diacritiser.php" target="_blank" title="مشكل الغة العربية">مشكل الغة العربية</a>
			</p>
			<div class="page-header">
				<h1>محتويات قاعدة البيانات</h1>
			</div>
			<ul>
				<li>1813 ملف wav. تحتوي على التسجيلات الصوتية.</li>
				<li>1813 ملف lab. تحتوي على النصوص المنطوقة في كل تسجيل.</li>
				<li>1813 ملف TextGrid. تحتوي على على اللحظات الزمنية و الرموز التي تحدد الفونيمات التي يتم نطقها في كامل القاعدة. يمكن فتح هذه الملفات ببرنامج <a href="http://www.fon.hum.uva.nl/praat/" title"برات">برات</a>.</li>
				<li>phonetic-transcirpt.txt يحوي في كل سطر "[اسم الملف الصوتي wav]" "[الفونيمات المنطوقة بالترتيب]".</li>
				<li>orthographic-transcript.txt يحوي في كل سطر "[اسم الملف الصوتي wav]" "[النص المنطوق]". النص تم حفظه بترميز <a href="http://www.qamus.org/transliteration.html" title="Buckwalter">Buckwlater</a> و ليس بأحرف عربية لسهولة استخدامها ببرامج الكمبيوتر. يمكن التحويل بسهولة إلى الأحرف العربية.</li>
				<li>يوجد 18 دقيقة اضافية لما سبق ذكره تتضمن جميع التفاصيل المذكورة أعلاه. استخدمت هذه الدقائق الأضافية لتقييم القاعدة ولكن يمكنكم إضافتها للقاعدة الأساسية لتطبيقاتكم.</li>
			</ul>
			<div class="page-header">
				<h1>التوثيق</h1>
			</div>
			<p>سوف يتم إضافة المزيد من الوثائق و الشرح في المستقبل. الرجاء الإطلاع على <a href="Nawar Halabi PhD Thesis Revised.pdf" alt="شهادة الدكتوراه الخاصة بنوار حلبي">شهادة الدكتوراة</a> الخاصة بنوار حلبي. ويجب التنويه هنا أن رمز الفاصلة العليا الذي يتبع بعض رموز الفونيمات الصوتية يدل على أن الفونيم الصوتي هذا جزء من مقطع لفظي مشدد أو ذو نبرة (stressed). بإمكانكم زيارة <a href="https://en.wikipedia.org/wiki/Arabic_Speech_Corpus">صفحة ويكيبيديا</a> الخاصة بقاعدة البيانات الصوتية العربية للمزيد من المعلومات.</p>
			<div class="page-header">
				<h1>الرخصة (شروط الاستخدام)</h1>
			</div>
			<p>يرجى الانتباه ان المشروع قد مول من قبل MicroLinkPC, Southampton، وبالتالي هم مخولون بإعطاء رخص تجارية. الرجاء الاتصال بنوار حلبي أو MicroLinkPC للحصول على رخصة تجارية.</p>
			<p dir="ltr">
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
					<img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
				</a>
				<br />
				Arabic Speech Corpus by <a href="/" title="Nawar Halabi" rel="cc:attributionURL">Nawar Halabi</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.<br />Based on a work at <a title="Arabic Speech Corpus" href="/" rel="dct:source">www.arabicspeechcorpus.com</a>.
			</p>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="text-muted">&copy; <?php echo date("Y"); ?> نوار حلبي. كل الحقوق بما فيها حقوق النشر محفوظة.</p>
			</div>
		</footer>
	</body>
</html>
