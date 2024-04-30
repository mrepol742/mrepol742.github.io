<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$disableMainCss;
	include("./includes/head.php");

	$meta = new meta();
	$meta->setTitle(
		"Render Flowers using HTML5 Canvas API",
		"Random moving flowers created using HTML5 Canvas.",
		"https://mrepol742.github.io/flowers/"
	);
	$meta->setImage("https://mrepol742.github.io/images/asd.jpg", "Cover Photo");
	$meta->setKeywords("flowers, canvas, canvas api, html canvas");
	?>
	<link rel="stylesheet" href="/assets/css/flowers.css">
</head>

<body class="d-flex flex-column min-vh-100">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFD9TXR" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<noscript>
		<div class="nojs">
			An error occurred. Try reloading this page, or enable JavaScript if it is disabled in your browser.
		</div>
	</noscript>
	<svg id=svg>
		<defs>
			<g id="flower">
				<path class="fc1" fill="none" stroke="#333333" stroke-width="1"
					d="M0,0 q50,-25 100,0 q-50,25 -100,0 q-50,25 -100,0 q50,-25 100,0" />
				<path class="fc2" fill="none" stroke="#333333" stroke-width="1"
					d="M0,0 q53.03,-17.68 70.71,-70.71 q-53.03,17.68 -70.71,70.71 q-53.03,17.68 -70.71,70.71 q53.03,-17.68 70.71,-70.71" />
				<path class="fc3" fill="none" stroke="#333333" stroke-width="1"
					d="M0,0 q25,-50 0,-100 q-25,50 0,100 q-25,50 0,100 q25,-50 0,-100" />
				<path class="fc4" fill="none" stroke="#333333" stroke-width="1"
					d="M0,0 q-17.68,-53.03 -70.71,-70.71 q17.68,53.03 70.71,70.71 q17.68,53.03 70.71,70.71 q-17.68,-53.03 -70.71,-70.71" />
			</g>
		</defs>
	</svg>
	<script src="/assets/js/flowers.js"></script>
</body>

</html>