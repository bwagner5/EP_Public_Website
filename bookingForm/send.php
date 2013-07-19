<?php
if(isset($_POST['submit'])) 
{
	// Email settings
	$to =	 'ep@gmu.edu';
	$from = 'ep@gmu.edu';
	$subject =	 'Events Production Booking Form Submission: ';
	// MIME Settings 
	$bound_text =	"boundary";
	$bound =	"--".$bound_text."\r\n";
	$bound_last =	"--".$bound_text."--\r\n"; 
	$headers =	"From: $from\r\n";
	$headers .=	"MIME-Version: 1.0\r\n"
	 	."Content-Type: multipart/mixed; boundary=\"$bound_text\"";
	 	
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
    $live25 = $_POST["live25"];
    $soundCheck = $_POST["soundCheck"];
    $startTime = $_POST["startTime"];
	$endTime = $_POST["endTime"];
	$hostFirstName = $_POST["hostFirstName"];
    $hostLastName = $_POST["hostLastName"];
    $hostPhoneNum = $_POST["hostPhoneNum"];
    $location = $_POST["location"];
    $eventTypes = "";
    if (isset($_POST["eventType"])){
    	$aEventType = $_POST["eventType"];
		for ($i=0; $i < count($aEventType); $i++){
	    	$eventTypes .= $aEventType[$i];
	    	if ($i < count($aEventType) - 1) $eventTypes .= ", ";
		}
	}
	$performers = "";
	if (isset($_POST["performers"])){
		$aPerformers = $_POST["performers"];
		for ($i=0; $i < count($aPerformers); $i++){
	    	$performers .= $aPerformers[$i];
	    	if ($i < count($aPerformers) - 1) $performers .= ", ";
		}
	}
    $attendance = $_POST["attendance"];
    $eventDescription = $_POST["eventDescription"];
    // Enchancements
    $wiredMics = $_POST["wiredMics"];
    $wirelessMics = $_POST["wirelessMics"];
    $lavaliers = $_POST["lavaliers"];
    $projector = $_POST["projector"];
    $smallScreen = $_POST["smallScreen"];
    $largeScreen = $_POST["largeScreen"];
    $lighting = "";
    if (isset($_POST["lighting"])){
	    $aLighting = $_POST["lighting"];
		for ($i=0; $i < count($aLighting); $i++){
	    	$lighting .= $aLighting[$i];
	    	if ($i < count($aLighting) - 1) $lighting .= ", ";
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
	$lightColor = $_POST['lightColor'];
	$lightColor2 = $_POST['lightColor2'];
    // Additional Items
    $staging = $_POST["staging"];
    $podium = $_POST["podium"];
    $stanchions = $_POST["stanchions"];
    $rectTables = $_POST["rectTables"];
    $roundTables5 = $_POST["roundTables5"];
    $roundTables6 = $_POST["roundTables6"];
    $stackingChairs = $_POST["stackingChairs"];
    $paddedChairs = $_POST["paddedChairs"];
    $highCocktails = $_POST["highCocktails"];
    $lowCocktails = $_POST["lowCocktails"];
    
    $subject .= $eventName;
    
 	$messageBody =
 	"
 	<!DOCTYPE HTML>
 		<html>
 			<head>
 				<style>
 					h2 {
 						font-family: 'Helvetica Neue', 'Helvetica', sans-serif;
 					}
 					td{
 						padding:5px 5px 5px 2px;
 						font-size:12pt;
 					}
 					td:first-child{
 						font-weight:bold;
 						font-size:13pt;
 					}
 					tr:nth-child(odd) {
 						background-color: #efefef;
					}
 					.tdTitle {
 						 margin-top: 25px;
 						 background-color: #dadada;
 						 border-bottom: solid #fafafa 1px;
 					}
 					.blank {
 						background-color: white;
 					}
 				</style>
 			</head>
 			<body>
 				<h2>Events Production Booking Request</h2>
 				<table>
 					<tr>
 						<td class='tdTitle' colspan='2'>Client Info </td>
 					</tr>
 					<tr>
 						<td>Organization  Name </td>
 						<td>$orgName</td>
 					</tr>
 					<tr>
 						<td>Affiliation Type </td>
 						<td>$affType</td>
 					</tr>
 					<tr>
 						<td>Org Code </td>
 						<td>$orgCode</td>
 					</tr>
 					<tr>
 						<td>Requestor Name </td>
 						<td>$reqFirstName $reqLastName</td>
 					</tr>
 					<tr>
 						<td>Phone Number </td>
 						<td>$phoneNum</td>
 					</tr>
 					<tr>
 						<td>Email </td>
 						<td>$email</td>
 					</tr>
 					<tr>
 						<td class='blank'>&nbsp;</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Event Info </td>
 					</tr>
 					<tr>
 						<td>Event Name </td>
 						<td>$eventName</td>
 					</tr>
 					<tr>
 						<td>Event Date </td>
 						<td>$date</td>
 					</tr>
 					<tr>
 						<td>25 Live Reference Number: </td>
 						<td>$live25</td>
 					</tr>
 					<tr>
 						<td>Equipment Setup By </td>
 						<td>$soundCheck</td>
 					</tr>
 					<tr>
 						<td>Start Time </td>
 						<td>$startTime</td>
 					</tr>
 					<tr>
 						<td>End Time </td>
 						<td>$endTime</td>
 					</tr>
 					<tr>
 						<td>Host Name </td>
 						<td>$hostFirstName $hostLastName</td>
 					</tr>
 					<tr>
 						<td>Host Phone Number </td>
 						<td>$hostPhoneNum</td>
 					</tr>
 					<tr>
 						<td>Event Location </td>
 						<td>$location</td>
 					</tr>
 					<tr>
 						<td>Event Type </td>
 						<td>$eventTypes</td>
 					</tr>
 					<tr>
 						<td>Performers </td>
 						<td>$performers</td>
 					</tr>
 					<tr>
 						<td>Expected Attendance </td>
 						<td>$attendance</td>
 					</tr>
 					<tr>
 						<td>Event Description </td>
 						<td>$eventDescription</td>
 					</tr>
 					<tr>
 						<td class='blank'>&nbsp;</td>
 					</tr>
 					<tr>
 						<td class='tdTitle'>Event Enchancements </td>
 						<td class='tdTitle'>(Quantity) </td>
 					</tr>
 					<tr>
 						<td>Wired Mics </td>
 						<td>$wiredMics</td>
 					</tr>
 					<tr>
 						<td>Wireless Mics </td>
 						<td>$wirelessMics</td>
 					</tr>
 					<tr>
 						<td>Lavaliers </td>
 						<td>$lavaliers</td>
 					</tr>
 					<tr>
 						<td>Projectors </td>
 						<td>$projector</td>
 					</tr>
 					<tr>
 						<td>Small Screen </td>
 						<td>$smallScreen</td>
 					</tr>
 					<tr>
 						<td>Large Screen </td>
 						<td>$largeScreen</td>
 					</tr>
 					<tr>
 						<td>Lighting Options </td>
 						<td>$lighting</td>
 					</tr>
 					<tr>
 						<td>Lighting Color Preferences </td>
 						<td>$lightColor, $lightColor2</td>
 					</tr>
 					<tr>
 						<td>Laptop </td>
 						<td>$laptop</td>
 					</tr>
 					<tr>
 						<td>Recording </td>
 						<td>$recording</td>
 					</tr>
 					<tr>
 						<td class='blank'>&nbsp;</td>
 					</tr>
 					<tr>
 						<td class='tdTitle'>Additional Items </td>
 						<td class='tdTitle'>(Quantity) </td>
 					</tr>
 					<tr>
 						<td>Staging </td>
 						<td>$staging</td>
 					</tr>
 					<tr>
 						<td>Podium </td>
 						<td>$podium</td>
 					</tr>
 					<tr>
 						<td>Stanchions </td>
 						<td>$stanchions</td>
 					</tr>
 					<tr>
 						<td>Rectangular Tables </td>
 						<td>$rectTables</td>
 					</tr>
 					<tr>
 						<td>5' Round Tables </td>
 						<td>$roundTables5</td>
 					</tr>
 					<tr>
 						<td>6' Round Tables </td>
 						<td>$roundTables6</td>
 					</tr>
 					<tr>
 						<td>Stanchions </td>
 						<td>$stanchions</td>
 					</tr>
 					<tr>
 						<td>Stacking Chairs </td>
 						<td>$stackingChairs</td>
 					</tr>
 					<tr>
 						<td>Padded Chairs </td>
 						<td>$paddedChairs</td>
 					</tr>
 					<tr>
 						<td>High Cocktails </td>
 						<td>$highCocktails</td>
 					</tr>
 					<tr>
 						<td>Low Cocktails </td>
 						<td>$lowCocktails</td>
 					</tr>
 				</table>
 				<p>Your request to book Events Production has been submitted. A response regarding your request will be made within 3 business days. If you have updates or changes to your request, please email <a href=\"mailto:ep@gmu.edu\">ep@gmu.edu</a>. Thank you.</p>
 			</body>
 		</html>";
 			 	
	$message =	"If you can see this then your client doesn't accept MIME types. Please use another email client to view this message.\r\n"
	 	.$bound;
	 	 
	$message .=	"Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
	 	."Content-Transfer-Encoding: 7bit\r\n\r\n"
	 	.$messageBody."\r\n";
	 	
	if (!empty($_FILES['attachment1']['name'])){
		
		$fileName  = $_FILES['attachment1']['name'];
		$fileType  = $_FILES['attachment1']['type'];
		$fileSize  = $_FILES['attachment1']['size'];
		$fileTmp   = $_FILES['attachment1']['tmp_name'];
		$fileError = $_FILES['attachment1']['error'];	 
		$file =	file_get_contents("$fileTmp");
		 	 
		$message .=	$bound."Content-Type: $fileType; name=\"$fileName\"\r\n"
		 	."Content-Transfer-Encoding: base64\r\n"
		 	."Content-disposition: attachment; file=\"$fileName\"\r\n"
		 	."\r\n"
		 	.chunk_split(base64_encode($file));
	}
	if (!empty($_FILES['attachment2']['name'])){
		$fileName  = $_FILES['attachment2']['name'];
		$fileType  = $_FILES['attachment2']['type'];
		$fileSize  = $_FILES['attachment2']['size'];
		$fileTmp   = $_FILES['attachment2']['tmp_name'];
		$fileError = $_FILES['attachment2']['error'];	 
		$file =	file_get_contents("$fileTmp");
		 	 
		$message .=	$bound."Content-Type: $fileType; name=\"$fileName\"\r\n"
		 	."Content-Transfer-Encoding: base64\r\n"
		 	."Content-disposition: attachment; file=\"$fileName\"\r\n"
		 	."\r\n"
		 	.chunk_split(base64_encode($file));
	}
	
	$message .= $bound_last;
	
	if(mail($to, $subject, $message, $headers)) 
	{
		mail($email, $subject, $message, $headers);
		header( 'Location: bookingFormSubmitted.shtml' );
		die(); 
	} else { 
		print 'Email message failed. Please try resubmitting the form or contacting us directly.';
	}
}
?>