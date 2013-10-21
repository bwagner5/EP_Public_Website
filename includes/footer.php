<?php 
	$root = '/~renfred/EP_Public_Website/'; 
	if( $_SERVER['REQUEST_URI'] == $root.'index.shtml' || $_SERVER['REQUEST_URI'] == $root) {
		$home = true; 
	}
	else {
		$home = false;
	}
?>
<div class="footer">
    <p>Copyright © <?php  date_default_timezone_set('America/New_York'); echo date('Y'); ?> George Mason University</p>
    <div class="socialBar">
        <a href="http://twitter.com/epgmu"><img src="<?php if(!$home){ print('../');} ?>images/fc-webicon-twitter.png"></a>
        <a href="http://instagram.com/gmueventsproduction"><img src="<?php if(!$home){ print('../');} ?>images/fc-webicon-instagram.png"></a>
        <a href="http://www.facebook.com/EventsProductionGmu"><img src="<?php if(!$home){ print('../');} ?>images/fc-webicon-facebook.png"></a>
    </div>
    <p><em>Official website of Events Production, an office of <a href="http://studentcenters.gmu.edu/">Student Centers</a> at <a href="http://www.gmu.edu/">George Mason University</em></a>
    </p>
    <?php if($home) { 
    print ('
	    <a href="staff" id="staffLink">
	    	Enter Staff Site
	    </a>
    '); 
    }
?>