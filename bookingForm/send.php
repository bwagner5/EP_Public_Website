<?php
if(isset($_POST['submit'])) 
{
     
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Booking Form Submission";
    $email_from = "Events Production GMU";
    
    $eventName = $_POST["eventName"];
    $date = $_POST['date'];
    $soundCheck = $_POST['soundCheck'];
    $startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];
	$location = $_POST['location'];
    $type = $_POST["eventType"];
    $attendance = $_POST["attendance"];
    $hostName = $_POST["hostFirstName"].$_POST["hostLastName"];
    $phoneNum = $_POST['phoneNum'];
    $eventDescription = $_POST['eventDescription'];
    $orgName = $_POST["name"];
    $affType = $_POST["affiliationType"];
    $orgCode = $_POST["orgCode"];
    if($_POST["sameInfo"] === "true")
    {
    	$requestorName = $hostName;
    	$requestorPhoneNum = $phoneNum;
    }
    else
    {
    	$requestorName = $_POST["requestorFirstName"].$_POST["requestorLastName"];
    	$requestorPhoneNum = $_POST["requestorPhoneNum"];
    }
    $requestorEmail = $_POST["email"];

     
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($email_to, $email_subject, $email_message, $headers);
	@mail($email, $email_subject, $email_message, $headers);

  
 	header( 'Location: bookingFormSubmitted.shtml' ) ;
 
}
?>