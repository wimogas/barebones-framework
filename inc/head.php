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
	<link rel="stylesheet" href="./<?php echo($urlBundleCSS)?>" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
