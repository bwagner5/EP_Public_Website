<?php
if(isset($_POST['submit'])) 
{
     
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Booking Form Submission";
    $email_from = "Events Production GMU";
    
    // Client Info
    $orgName = $_POST["name"];
    $affType = $_POST["affiliationType"];
    $orgCode = $_POST["orgCode"];
    $reqFirstName = $_POST["requestorFirstName"];
    $reqLastName = $_POST["requestorLastName"];
    $phoneNum = $_POST["requestorPhoneNum"];
    $email = $_POST["email"];
    // Event Info
    $eventName = $_POST["eventName"];
    $date = $_POST["date"];
    $soundCheck = $_POST["soundCheck"];
    $startTime = $_POST["startTime"];
	$endTime = $_POST["endTime"];
	$hostFirstName = $_POST["hostFirstName"];
    $type = $_POST["hostLastName"];
    $hostPhoneNum = $_POST["hostPhoneNum"];
    $location = $_POST["location"];
    $eventTypes = "";
    if (isset($_POST["eventType"])){
    	$aEventType = $_POST["eventType"];
		for ($i=0; $i < count($aEventType); $i++){
	    	$eventTypes .= $aEventType[$i] . ", ";
		}
	}
	$performers = "";
	if (isset($_POST["performers"])){
		$aPerformers = $_POST["performers"];
		for ($i=0; $i < count($aPerformers); $i++){
	    	$performers .= $aPerformers[$i] . ", ";
		}
	}
    $attendance = $_POST["attendance"];
    $eventDescription = $_POST["eventDescription"];
    // Enchancements
    $wiredMics = $_POST["wiredMics"];
    $wirelessMics = $_POST["wirelessMics"];
    $lavaliers = $_POST["lavaliers"];
    $smallProjector = $_POST["smallProjector"];
    $mediumProjector = $_POST["mediumProjector"];
    $largeProjector = $_POST["largeProjector"];
    $smallScreen = $_POST["smallScreen"];
    $largeScreen = $_POST["largeScreen"];
    $lighting = "";
    if (isset($_POST["lighting"])){
	    $aLighting = $_POST["lighting"];
		for ($i=0; $i < count($aLighting); $i++){
	    	$lighting .= $lighting[$i] . ", ";
		}
	}
    $laptop = $_POST["laptop"];
    $recording = "";
    if (isset($_POST["recording"])){
	    $aReocrding = $_POST["lighting"];
		for ($i=0; $i < count($aRecording); $i++){
	    	$recording .= $recording[$i] . ", ";
		}
	}
    // Additional Items
    $staging = $_POST["staging"];
    $podium = $_POST["podium"];
    $stanchions = $_POST["stanchions"];
    $rectTables = $_POST["rectTables"];
    $roundTables = $_POST["roundTables"];
    $stackingChairs = $_POST["stackingChairs"];
    $paddedChairs = $_POST["paddedChairs"];
    $highCocktails = $_POST["highCocktails"];
    $lowCocktails = $_POST["lowCocktails"];
    /*
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($email_to, $email_subject, $email_message, $headers);
	@mail($email, $email_subject, $email_message, $headers);

  
 	header( 'Location: bookingFormSubmitted.shtml' ) ;
 
}
?>