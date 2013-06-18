<?php
if(isset($_POST['submit'])) {
     
    $email_message = "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <title>Booking Form Submitted</title>
    <meta name=\"viewport\" content=\"width=device-width,
      initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Styles -->
    <link href=\"http://www.epmain.evolutioneventsva.com/speed/Stylesheets/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"http://www.epmain.evolutioneventsva.com/speed/Stylesheets/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" rel=stylesheet>
    <link href=\"http://www.epmain.evolutioneventsva.com/speed/Stylesheets/styles.css\" rel=\"stylesheet\">
    <link href=\"http://www.epmain.evolutioneventsva.com/speed/Stylesheets/color.css\" rel=\"stylesheet\">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"Scripts/html5shiv.js\"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\"
      href=\"ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\"
      href=\"ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\"
      href=\"ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\"
      href=\"ico/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"ico/favicon.png\">
  </head>
  <body>
	<div>
	  <div class=\"masonFlag\"> <img src=\"http://www.epmain.evolutioneventsva.com/speed/Images/MasonLogo2.gif\"
		  class=\"masonLogo\"> </div>
	  <div class=\"navBar\">
		 <center><h1><img src=\"http://www.epmain.evolutioneventsva.com/speed/Images/EPLogo.png\" />  
		 Events Production</h1></center>
	  </div>
	</div>
    <!-- Cover Section -->
    <!-- End Cover Section -->
    <div class=\"container\">
      <div class=\"spacer\"></div>
      <div class=\"row\">
        <div class=\"span10 offset1 box\">
        	<h2 class=\"pageTitle\" style=\"margin-bottom:20px;\">Booking Form Summary</h2>";
     
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Booking Form Submission";
    $email_from = "Events Production GMU";
    
    $name = $_POST["name"];
    $type = $_POST["type"];
    $mailNum = $_POST["mailNum"];
    $orgCode = $_POST["orgCode"];
    $requestorFName = $_POST["requestorFirstName"];
    $requestorLName = $_POST["requestorLastName"];
    $clientFName = $_POST["requestorFirstName"];
    $email = $_POST["email"];
    $phoneNum = $_POST['phoneNum'];
	$phoneNum2 = $_POST['phoneNum2'];
	$location = $_POST['location'];
	$eventName = $_POST['eventName'];
	$date = $_POST['date'];
	$hostFirstName = $_POST['hostFirstName'];
	$hostLastName = $_POST['hostLastName'];
	$performers = $_POST['performers'].$_POST['performers-1'].$_POST['performers-2'].$_POST['performers-3'].$_POST['performers-4'].$_POST['performers-5'].$_POST['performers-6'].$_POST['performers-7'].$_POST['performers-8'];
	$eventDescription = $_POST['eventDescription'];
	$soundCheck = $_POST['soundCheck'];
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];

     
   function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "<form class=\"form-horizontal span10 offset1\" id=\"bookingForm\">
				<fieldset>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"name\">Orgnization/Department Name </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $name ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"type\">Affiliation Type </label>
					  <div class=\"controls\">
					  	 <b>";$email_message .=  $type ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"mailNum\">Mail Stop Number </label>
					   <div class=\"controls\">
					  		<b>";$email_message .=  $mailNum ; $email_message .= "</b>
					   </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"orgCode\">Organization Code </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $orgCode ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"requestorFirstName\">Requestor's Name </label>
					  <div class=\"controls\">
					    <b>";$email_message .=  $requestorFirstName." ".$requestorLastName ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"email\">E-mail </label>
					  <div class=\"controls\">
					    <b>";$email_message .=  $email ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"phoneNum\">Phone Number </label>
					  <div class=\"controls\">
					    <b>";$email_message .=  $phoneNum ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"phoneNum2\">Secondary Phone Number</label>
					  <div class=\"controls\">
					    <b>";$email_message .=  $phoneNum2 ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"location\">Event Location </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $location ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"eventName\">Event Name</label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $eventName ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"date\">Event Date </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $date ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"hostFirstName\">Contact on Event Day</label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $hostFirstName." ".$hostLastName ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"performers\">Who is Performing/Presenting (Check all that Apply)</label>
					  <div class=\"controls\">
					    <b>";$email_message .=  $performers ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"eventDescription\">Basic Event Description</label>
					  <div class=\"controls\"> 
					    <b>";$email_message .=  $eventDescription ; $email_message .= "</b>                  
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"soundCheck\">Equipment Setup By/Sound Check Time </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $soundCheck ; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"startTime\">Event Start Time </label>
					  <div class=\"controls\">
					  	<b>"; $email_message .= $startTime; $email_message .= "</b>
					  </div>
					</div>
					<div class=\"control-group\">
					  <label class=\"control-label\" for=\"endTime\">Event End Time </label>
					  <div class=\"controls\">
					  	<b>";$email_message .=  $endTime ; $email_message .= "</b>
					  </div>
					</div>

				</fieldset>
			</form>
        </div>
      </div>
    </div>
	<div class=\"footer\">
        <p style=\"text-align: center\">Copyright &copy; 2013 George Mason University</p>
        <div class=\"socialBar\">
	        <a href=\"https://twitter.com/epgmu\"><img src=\"http://www.epmain.evolutioneventsva.com/speed/Images/fc-webicon-twitter.png\"></a>
	        <a href=\"\"><img src=\"http://www.epmain.evolutioneventsva.com/speed/Images/fc-webicon-instagram.png\"></a>
	        <a href=\"https://www.facebook.com/EventsProductionGmu\"><img src=\"http://www.epmain.evolutioneventsva.com/speed/Images/fc-webicon-facebook.png\"></a>
        </div>
        <p><em>Official website of Events Production, an office of <a href=\"http://studentcenters.gmu.edu/\">Student Centers</a> at <a href=\"http://www.gmu.edu/\">George Mason University</em></a>
        </p>
	</div>
    <script src=\"Scripts/bootstrap.js\"></script>
  </body>
</html>"; 


     
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($email_to, $email_subject, $email_message, $headers);
@mail($email, $email_subject, $email_message, $headers);

  
  
?>
 <?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Booking Form Submitted</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="Stylesheets/bootstrap.css" rel="stylesheet">
    <link href="Stylesheets/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel=stylesheet>
    <link href="Stylesheets/styles.css" rel="stylesheet">
    <link href="Stylesheets/datepicker.css" rel="stylesheet">
    <link href="Stylesheets/jquery.timepicker.css" rel="stylesheet">
    <link href="Stylesheets/color.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="Scripts/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
      href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
      href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
      href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
      href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>
  <body>
	<div>
	  <div class="masonFlag"> <img src="Images/MasonLogo2.gif"
		  class="masonLogo"> </div>
	  <div class="navBar">
		<ul class="navList">
		  <a href="#">
			<li class="navSelected">Home</li>
		  </a> 
		  <a href="eventSelection.html">
			<li>Event Setups</li>
		  </a> 
		  <a href="gallery.html">
			<li>Photo Gallery</li>
		  </a> 
		  <a href="employment.html">
			<li>Employment</li>
		  </a> 
		  <a href="faq.html">
			<li>FAQ</li>
		  </a> 
		  <a href="contact.html">
			<li>Contact</li>
		  </a>
		</ul>
		</div>
	</div>
    <!-- Cover Section -->
    <!-- End Cover Section -->
    <div class="container">
      <div class="spacer"></div>
      <div class="row">
        <div class="span10 offset1 box">
        	<h2 class="pageTitle" style="margin-bottom:20px;">Booking Form Summary</h2>
        	<center>
        		<p style="margin-bottom:20px;"> **The booking form has been submitted, you will receive an email with the information listed below for your records**</p>
	        </center>
	        <form class="form-horizontal span10 offset1" id="bookingForm">
				<fieldset>
					<div class="control-group">
					  <label class="control-label" for="name">Orgnization/Department Name </label>
					  <div class="controls">
					  	<b><?php echo $name ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="type">Affiliation Type </label>
					  <div class="controls">
					  	 <b><?php echo $type ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="mailNum">Mail Stop Number </label>
					   <div class="controls">
					  		<b><?php echo $mailNum ?></b>
					   </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="orgCode">Organization Code </label>
					  <div class="controls">
					  	<b><?php echo $orgCode ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="requestorFirstName">Requestor's Name </label>
					  <div class="controls">
					    <b><?php echo $requestorFirstName." ".$requestorLastName ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="email">E-mail </label>
					  <div class="controls">
					    <b><?php echo $email ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="phoneNum">Phone Number </label>
					  <div class="controls">
					    <b><?php echo $phoneNum ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="phoneNum2">Secondary Phone Number</label>
					  <div class="controls">
					    <b><?php echo $phoneNum2 ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="location">Event Location </label>
					  <div class="controls">
					  	<b><?php echo $location ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="eventName">Event Name</label>
					  <div class="controls">
					  	<b><?php echo $eventName ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="date">Event Date </label>
					  <div class="controls">
					  	<b><?php echo $date ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="hostFirstName">Contact on Event Day</label>
					  <div class="controls">
					  	<b><?php echo $hostFirstName." ".$hostLastName ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="performers">Who is Performing/Presenting (Check all that Apply)</label>
					  <div class="controls">
					    <b><?php echo $performers ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="eventDescription">Basic Event Description</label>
					  <div class="controls"> 
					    <b><?php echo $eventDescription ?></b>                  
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="soundCheck">Equipment Setup By/Sound Check Time </label>
					  <div class="controls">
					  	<b><?php echo $soundCheck ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="startTime">Event Start Time </label>
					  <div class="controls">
					  	<b><?php echo $startTime ?></b>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="endTime">Event End Time </label>
					  <div class="controls">
					  	<b><?php echo $endTime ?></b>
					  </div>
					</div>

				</fieldset>
			</form>
        </div>
      </div>
    </div>
	<div class="footer">
        <p style="text-align: center">Copyright © 2013 George Mason University</p>
        <div class="socialBar">
	        <a href="https://twitter.com/epgmu"><img src="Images/fc-webicon-twitter.png"></a>
	        <a href=""><img src="Images/fc-webicon-instagram.png"></a>
	        <a href="https://www.facebook.com/EventsProductionGmu"><img src="Images/fc-webicon-facebook.png"></a>
        </div>
        <p><em>Official website of Events Production, an office of <a href="http://studentcenters.gmu.edu/">Student Centers</a> at <a href="http://www.gmu.edu/">George Mason University</em></a>
        </p>
	</div>
    <script src="Scripts/bootstrap.js"></script>
  </body>
</html>
 
<?php
}
?>