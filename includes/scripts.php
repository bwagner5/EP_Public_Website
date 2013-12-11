<?php 
	$root = '/'; 
	if( $_SERVER['REQUEST_URI'] == $root.'index.shtml' || $_SERVER['REQUEST_URI'] == $root) {
		$home = true; 
	}
	else {
		$home = false;
	}
?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../scripts/bootstrap.min.js"></script>
	<script src="<?php if(!$home){ print('../');} ?>scripts/document.js"></script>
	