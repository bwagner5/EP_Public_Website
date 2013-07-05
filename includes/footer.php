<?php $root = '/newSite/';
print('
<div class="footer">
    <p>Copyright © '); echo date('Y'); print(' George Mason University</p>
    <div class="socialBar">
        <a href="http://twitter.com/epgmu"><img src="'); if( $_SERVER['REQUEST_URI'] !== $root.'index.shtml' && $_SERVER['REQUEST_URI'] !== $root){ print('../');}print('images/fc-webicon-twitter.png"></a>
        <a href="http://instagram.com/gmueventsproduction"><img src="'); if( $_SERVER['REQUEST_URI'] !== $root.'index.shtml' && $_SERVER['REQUEST_URI'] !== $root){ print('../');} print('images/fc-webicon-instagram.png"></a>
        <a href="http://www.facebook.com/EventsProductionGmu"><img src="'); if( $_SERVER['REQUEST_URI'] !== $root.'index.shtml' && $_SERVER['REQUEST_URI'] !== $root){ print('../');} print('images/fc-webicon-facebook.png"></a>
    </div>
    <p><em>Official website of Events Production, an office of <a href="http://studentcenters.gmu.edu/">Student Centers</a> at <a href="http://www.gmu.edu/">George Mason University></em></a>
    </p>
</div>');
?>