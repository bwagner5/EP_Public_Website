<?php
if(isset($_POST['submit'])) 
{
     
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Survey Form Submission";
    $email_from = "Events Production GMU";
    
    $eventName = $_POST["eventName"];
    $date = $_POST["date"];

	$professionalism = $_POST['professionalism'];
	$courteousness = $_POST['courteousness'];
	$helpfulness = $_POST['helpfulness'];
	$value = $_POST['value'];
	$overall = $_POST['overall'];
	
	$staffComments = $_POST['staffComments'];
	$equipmentComments = $_POST['equipmentComments'];
    
    /*
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($email_to, $email_subject, $email_message, $headers);
	@mail($email, $email_subject, $email_message, $headers);

    header( 'Location: surveySubmitted.shtml' ) ;
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
 					}
 					td:first-child{
 						font-weight:bold;
 					}
 				</style>
 			</head>
 			<body>
 				<h1>".$eventName."</h1>
 				<table border=\"1\">
 					<tr>
 						<td>Professionalism </td>
 						<td>".$professionalism."</td>
 					</tr>
 					<tr>
 						<td>Staff Comments </td>
 						<td>".$staffComments."</td>
 					</tr>
 				<tr>".$lighting."</tr>
 				</table>
 			</body>
 		</html>"
 		);
}
?>