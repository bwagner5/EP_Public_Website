<?php
if(isset($_POST['submit'])) 
{
    $email_to = "ep@gmu.edu";
    $email_subject = "Events Production Survey";
    $email_from = "ep_surveys@gmu.edu";
    
    $eventName = $_POST["eventName"];
    $date = $_POST["date"];

	$professionalism = $_POST['professionalism'];
	$courteousness = $_POST['courteousness'];
	$helpfulness = $_POST['helpfulness'];
	$value = $_POST['value'];
	$overall = $_POST['overall'];
	
	$staffComments = $_POST['staffComments'];
	$equipmentComments = $_POST['equipmentComments'];
    
    $message = "
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
 						background-color: #fafafa;
					}
 					.tdTitle {
 						 background-color: #dadada;
 						 border-bottom: solid #fafafa 1px;
 					}
 				</style>
 			</head>
 			<body>
 				<h2>Events Production Survey</h2>
 				<table>
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
 						<td class='tdTitle' colspan='2'>Event Experience Rating </td>
 					</tr>
 					 <tr>
 						<td>Professionalism </td>
 						<td>$professionalism</td>
 					</tr>
 					 <tr>
 						<td>Courteousness </td>
 						<td>$courteousness</td>
 					</tr>
 					  <tr>
 						<td>Helpfulness </td>
 						<td>$helpfulness</td>
 					</tr>
 					<tr>
 						<td>Value of Services </td>
 						<td>$value</td>
 					</tr>
 					<tr>
 						<td>Overall </td>
 						<td>$overall</td>
 					</tr>
 					 <tr>
 						<td>Comments on Staff </td>
 						<td>$staffComments</td>
 					</tr>
 					<tr>
 						<td>Comments on Equipment </td>
 						<td>$equipmentComments</td>
 					</tr>
 				</table>
 			</body>
 		</html>";

	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";

	@mail($email_to, $email_subject, $message, $headers);

    header('Location: surveySubmitted.shtml');
}
?>