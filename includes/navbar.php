<div>
    <div class="masonFlag"> <img src="../images/MasonLogo2.gif" class="masonLogo"> </div>
      <div class="navBar">
        <ul class="navList">
          <a href="../">
          	<?php print('<li'); if( $_SERVER['REQUEST_URI'] === '/newSite/index.shtml' || $_SERVER['REQUEST_URI'] === '/newSite/'){ print(' class="navSelected"');}
          	print('>Home</li>'); ?>
          </a> 
          <a href="../eventSelection">
            <?php print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/eventSelection/') !== false){ print(' class="navSelected"');}
          	print('>Event Setups</li>'); ?>
          </a> 
          <a href="../gallery">
            <?php print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/gallery/') !== false){ print(' class="navSelected"');}
          	print('>Photo Gallery</li>'); ?>
          </a> 
          <a href="../employment">
            <?php print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/employment/') !== false){ print(' class="navSelected"');}
          	print('>Employment</li>'); ?>
          </a> 
          <a href="../faq">
            <?php print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/faq/') !== false){ print(' class="navSelected"');}
          	print('>FAQ</li>'); ?>
          </a> 
          <a href="../contact">
            <?php print('<li'); if(strpos($_SERVER['REQUEST_URI'], '/contact/') !== false){ print(' class="navSelected"');}
          	print('>Contact</li>'); ?>
          </a>
        </ul>
        <a href="../bookingForm/">
          <div class="bookButton">
            <h3 class="bookText">Booking Form</h3>
          </div>
        </a> 
	</div>
</div>