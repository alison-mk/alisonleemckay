<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='//fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link href="styles/style.css?ver=1.2" rel="stylesheet">
		<title>Time Since Donut</title>
		<?php require_once('twitter-call.php'); ?>
	</head>
	<body>
		<div class="container">
			<div class="donut">
				<div class='sprite sprite-8'></div>
				<div class='sprite sprite-7'></div>
				<div class='sprite sprite-6'></div>
				<div class='sprite sprite-5'></div>
				<div class='sprite sprite-4'></div>
				<div class='sprite sprite-3'></div>
				<div class='sprite sprite-2'></div>
				<div class='sprite sprite-1'></div>
			</div>
			<h1>Time since Alison's last donut:</h1>
			<div id="counter"></div>
		</div>
		<small class="credit">A site by <a href="http://alisonleemckay.com" target="_blank" title="Learn about Alison's non-donut work">Alison McKay</a> and <a href="http://juliecochran.com" target="_blank" title="See Julie's portfolio">Julie Cochran</a>.</small>
		<script src="script.js?ver=1.2"></script>
		<script>
			/*
			* CountUp script by Praveen Lobo
			* (http://PraveenLobo.com/techblog/javascript-countup-timer/)
			*/

			//Donut counter
			function start() {
				// new CountUp('<?php echo date_format($newTimeZone, 'F d, Y H:i:s') ?>', 'counter');
				new CountUp('August 10, 2017 10:32:04', 'counter');
			}
			window.onload = start;

			//Google Analytics
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-59777245-2', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>
