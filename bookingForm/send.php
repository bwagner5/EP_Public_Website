<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

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
	    	$lighting .= $lighting[$i];
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
    /*
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	//@mail($email_to, $email_subject, $email_message, $headers);
	//@mail($email, $email_subject, $email_message, $headers);

 	//header( 'Location: bookingFormSubmitted.shtml' );
 	*/
 	print("
 	<!DOCTYPE HTML>
 		<html>
 			<head>
 				<style>
 					td{
 						padding:5px 5px 5px 2px;
 						font-size:14pt;
 						font-family: sans-serif;
 						background-color: #E6FFEC;
 					}
 					td:first-child{
 						font-weight:bold;
 					}
 				</style>
 			</head>
 			<body>
 				<h1>".$orgName."</h1>
 				<table border=\"1\">
 					<tr>
 						<td>Event Type </td>
 						<td>".$eventTypes."</td>
 					</tr>
 					<tr>
 						<td>Performers </td>
 						<td>".$performers."</td>
 					</tr>
 				<tr>".$lighting."</tr>
 				</table>
 			</body>
 		</html>"
 		);
}
?>