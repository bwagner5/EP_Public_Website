<?php
if(isset($_POST['submit'])) 
{
     
    $email_to = "bmwagner10@gmail.com";
    $email_subject = "EP Survey Form Submission";
    $email_from = "Events Production GMU";
    
    $name = $_POST["name"];
    $type = $_POST["type"];
    $email = $_POST["email"];
    $yourName = $_POST["yourName"];
    $date = $_POST["date"];
    $performers = $_POST['performers'].$_POST['performers-1'].$_POST['performers-2'].$_POST['performers-3'].$_POST['performers-4'].$_POST['performers-5'].$_POST['performers-6'].$_POST['performers-7'].$_POST['performers-8'];
	$location = $_POST['location'];
	$equipmentComments = $_POST['equipmentComments'];
	$staffComments = $_POST['staffComments'];
	$betterServe = $_POST['betterServe'];
	
	$professionalism = $_POST['Professionalism'];
	$knowledge = $_POST['Knowledge'];
	$courteousness = $_POST['Courteousness'];
	$proactiveness = $_POST['Pro-activeness'];
	$helpfulness = $_POST['Helpfulness'];
	$valueOfService = $_POST['Value of Services'];
	$overall = $_POST['Overall'];



     
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($email_to, $email_subject, $email_message, $headers);
	@mail($email, $email_subject, $email_message, $headers);

    header( 'Location: surveySubmitted.shtml' ) ;
  
}
?>