<head>
	<!-- Title is handled below dynamically -->
	<!-- <title>A. Meric O'Grady - Speech and Language Pathology LLC</title> -->
	<meta charset="UTF-8">
	<link rel="icon" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="A. Meric O'Grady">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="SpeechFun.org is the website for A. Meric O'Grady, Speech Language Pathologist, MA CCC-SLP">

	<!-- Dynamic Title Attributes -->
	<?php
		$url = $_SERVER['REQUEST_URI'];
		if (strpos($url,'infant-motor-evaluation')) {
			?> <title>A. Meric O'Grady - Infant Oral Motor Evaluation in Orlando and Winter Park</title> <?php
		} if (strpos($url,'oral-motor-screening-and-evaluation')) {
			?> <title>A. Meric O'Grady - Oral Motor and Feeding Evaluation</title> <?php
		} if (strpos($url,'oral-motor-therapy')) {
			?> <title>A. Meric O'Grady - Oral Motor Evaluation</title> <?php
		} if (strpos($url,'speech-and-language-therapy')) {
			?> <title>A. Meric O'Grady - Speech and Language Therapy in Orlando and Winter Park</title> <?php
		} if (strpos($url,'speech-screening-and-evaluation')) {
			?> <title>A. Meric O'Grady - Speech and Language Evaluation in Orlando and Winter Park</title> <?php
		} else {
			?> <title>A. Meric O'Grady - Speech and Language Pathology</title> <?php
		}
	?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="/css/styles.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>