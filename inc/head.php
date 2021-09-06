<?php
	$arrayBundleCSS = glob('dist/*.css');
	$urlBundleCSS = current($arrayBundleCSS);
	$arrayBundleJS = glob('dist/*.js');
	$urlBundleJS = current($arrayBundleJS);
?>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Barebones Framework</title>
	<script defer src="./<?php echo($urlBundleJS)?>"></script>
	<script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./<?php echo($urlBundleCSS)?>" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
