<?php 
	$path = '';
	$root = '/~renfred/EP_Public_Website/';
	if( $_SERVER['REQUEST_URI'] !== $root.'index.shtml' && $_SERVER['REQUEST_URI'] !== $root)
	{
		$path = '../';
	} 
	print('	
<div class="container navContainer">
	<a href="http://gmu.edu">
    	<div class="masonFlag"> <img src="'); print($path); print('images/MasonLogo2.gif" class="masonLogo"> </div>
    </a>
      <div class="navBar">
        <a href="http://es.gmu.edu/bookingForm/">
          <div class="bookButton">
            <h3 class="bookText">Booking Form</h3>
          </div>
        </a> 
        <ul class="navList">
          <a  class="nav-mobile-toggle hidden-desktop" data-toggle="collapse" data-target="#nav-fold">
          	<li>&nbsp Menu <i class="icon-chevron-down icon-white"></i></li>
          </a>
          <div id="nav-fold" class="nav-collapse collapse">
          <a href="');print($path);print('">
          	'); print('<li'); if( $_SERVER['REQUEST_URI'] === $root.'index.shtml' || $_SERVER['REQUEST_URI'] === $root){ print(' class="navSelected"');}
          	print('>Home</li>'); print('
          </a> 
          <a href="');print($path);print('eventSelection">
            '); print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/eventSelection/') !== false){ print(' class="navSelected"');}
          	print('>Event Setups</li>'); print('
          </a> 
          <a href="');print($path);print('gallery">
            '); print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/gallery/') !== false){ print(' class="navSelected"');}
          	print('>Photo Gallery</li>'); print('
          </a> 
          <a href="');print($path);print('employment">
            '); print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/employment/') !== false){ print(' class="navSelected"');}
          	print('>Employment</li>'); print('
          </a> 
          <a href="');print($path);print('faq">
            '); print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/faq/') !== false){ print(' class="navSelected"');}
          	print('>FAQ</li>'); print('
          </a> 
          <a href="');print($path);print('contact">
            '); print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/contact/') !== false){ print(' class="navSelected"');}
          	print('>Contact</li>'); print('
          </a>
          </div>
        </ul>
	</div>
</div>');
?>