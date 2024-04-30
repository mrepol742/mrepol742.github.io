<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$disableMainCss;
	include("./includes/head.php");

	$meta = new meta();
	$meta->setTitle(
		"I Love You Letter Page written in 90+ Languages",
		"Show love to your love ones by sending them I Love You",
		"https://mrepol742.github.io/ily/"
	);
	$meta->setImage("https://mrepol742.github.io/images/asd.jpg", "Cover Photo");
	$meta->setKeywords("i love you, 143, i love you in multiple languages");
	?>
	<link rel="stylesheet" href="/assets/css/ily.css">
</head>

<body class="d-flex flex-column min-vh-100">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFD9TXR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<noscript>
		<div class="nojs">
			An error occurred. Try reloading this page, or enable JavaScript if it is disabled in your browser.
		</div>
	</noscript>
	<div class="a">
		<h1 id="txt"></h1>
	</div>
	<script src="/lib/typed.js"></script>
	<script src="/assets/js/ily.js"></script>
</body>

</html>