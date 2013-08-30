<?php 
	$root = '/~renfred/EP_Public_Website/'; 
	if( $_SERVER['REQUEST_URI'] == $root.'index.shtml' || $_SERVER['REQUEST_URI'] == $root) {
		$home = true; 
	}
	else {
		$home = false;
	}
?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<!-- Styles -->
	<link href="<?php if(!$home){ print('../');} ?>styles/bootstrap.css" rel="stylesheet">
	<link href="<?php if(!$home){ print('../');} ?>styles/styles.css" rel="stylesheet">
	<link href="<?php if(!$home){ print('../');} ?>styles/color.css" rel="stylesheet">
	<link href="<?php if(!$home){ print('../');} ?>styles/bootstrap-responsive.css" rel="stylesheet">