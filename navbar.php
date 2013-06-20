<div>
    <div class="masonFlag"> <img src="Images/MasonLogo2.gif"
          class="masonLogo"> </div>
      <div class="navBar">
        <ul class="navList">
          <a href="index.html">
          	<?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/index.shtml'){ print('class=\"navSelected\"');}
          	print('>Home</li>'); ?>
          </a> 
          <a href="eventSelection.html">
            <?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/eventSelection.shtml'){ print('class=\"navSelected\"');}
          	print('>Event Setups</li>'); ?>
          </a> 
          <a href="gallery.html">
            <?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/photoGallery.shtml'){ print('class=\"navSelected\"');}
          	print('>Photo Gallery</li>'); ?>
          </a> 
          <a href="employment.html">
            <?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/employment.shtml'){ print('class=\"navSelected\"');}
          	print('>Employment</li>'); ?>
          </a> 
          <a href="faq.html">
            <?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/faq.shtml'){ print('class=\"navSelected\"');}
          	print('>FAQ</li>'); ?>
          </a> 
          <a href="contact.html">
            <?php print('<li '); if( $_SERVER['REQUEST_URI'] == '/newSite/contact.shtml'){ print('class=\"navSelected\"');}
          	print('>Contact</li>'); ?>
          </a>
        </ul>
        <a href="bookingForm.html">
          <div class="bookButton">
            <h3 class="bookText">Booking Form</h3>
          </div>
        </a> </div>
    </div>
  </body>