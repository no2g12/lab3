<?php
	function head($title){
		$output='<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<script src="//code.jquery.com/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<title>'.$title.'</title>
		</head>';
		
		return $output;
	}