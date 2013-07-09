<?php
if(isset($_POST['submit'])) 
{   
    $email_to = "renfred93@gmail.com";
    $email_subject = "Booking Form Submission";
    $email_from = "ep";
    
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
    $smallProjector = $_POST["smallProjector"];
    $mediumProjector = $_POST["mediumProjector"];
    $largeProjector = $_POST["largeProjector"];
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
    
 	$message =
 	"
 	<!DOCTYPE HTML>
 		<html>
 			<head>
 				<style>
 					h2, p {
 						font-family: 'Helvetica Neue', 'Helvetica', sans-serif;
 					}
 					td{
 						padding:5px 5px 5px 2px;
 						font-size:14pt;
 						font-family: sans-serif;
 						border: solid green 1px;
 						background-color: #E6FFEC;
 					}
 					td:first-child{
 						font-weight:bold;
 					}
 					.tdTitle {
 						 background-color: #ffffe6;
 						 border: solid #dcca00 1px;
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
 						<td>$affiliationType</td>
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
 						<td>Small Projectors </td>
 						<td>$smallProjector</td>
 					</tr>
 					<tr>
 						<td>Medium Projectors </td>
 						<td>$mediumProjector</td>
 					</tr>
 					<tr>
 						<td>Large Projectors </td>
 						<td>$largeProjector</td>
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
 						<td>Laptop </td>
 						<td>$laptop</td>
 					</tr>
 					<tr>
 						<td>Recording </td>
 						<td>$recording</td>
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
 						<td>Round Tables </td>
 						<td>$roundTables</td>
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
 				<p>If you would like to make changes to your request, please contact Events Production at ep@gmu.edu. Note that all requests for changes must be made at least ten days prior to the event.</p>
 			</body>
 		</html>";
 			 	
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
		@mail($email_to, $email_subject, $email_message, $headers);
		@mail($email, $email_subject, $email_message, $headers);
	
	 	header( 'Location: bookingFormSubmitted.shtml' );
}
?>