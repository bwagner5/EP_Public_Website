<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if(isset($_POST['submit'])) {
   
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Employment Application";
    $email_from = "Events Production GMU";
    
    // Personal Info
    $applicantName = $_POST["applicantName"];
    $preferredName = $_POST["preferredName"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $emergencyName = $_POST['emergencyName'];
	$emergencyPhone = $_POST['emergencyPhone'];
	$citizenBool = $_POST['citizen'];
    
    // Addresses
	$currentAddress = $_POST['currentAddress'];
	$permanentAddress = $_POST['permanentAddress'];
	
	// School Info
	$gNum = $_POST['gNum'];
	$major = $_POST['major'];
	$classification = $_POST['classification'];
	$creditHours = $_POST['creditHours'];
	$gpaBool = $_POST['gpa'];
	$gradDate = $_POST['gradDate'];
	
	// Skills
	$experience = $_POST['experience'];
	$computerSkills = $_POST['computerSkills'];
	
	// Experince
	$masonWorkBool = $_POST['masonWork'];
	$masonDept = $_POST['masonDept'];
	$workExp1 = $_POST['workExp1'];
	$position1 = $_POST['position1'];
	$duties1 = $_POST['duties1'];
	$workExp2 = $_POST['workExp2'];
	$position2 = $_POST['position2'];
	$duties2 = $_POST['duties2'];
	$workExp3 = $_POST['workExp3'];
	$position3 = $_POST['position3'];
	$duties3 = $_POST['duties3'];
	
	$refName1 = $_POST['refName1'];
	$company1 = $_POST['company1'];
	$refRelation1 = $_POST['refRelation1'];
	$refPhone1 = $_POST['refPhone1'];
	$refName2 = $_POST['refName2'];
	$company2 = $_POST['company2'];
	$refRelation2 = $_POST['refRelation2'];
	$refPhone2 = $_POST['refPhone2'];
	$refName3 = $_POST['refName3'];
	$company3 = $_POST['company3'];
	$refRelation3 = $_POST['refRelation3'];
	$refPhone3 = $_POST['refPhone3'];
	
	$monday = $_POST['monday'];
	$tuesday = $_POST['tuesday'];
	$wednesday = $_POST['wednesday'];
	$thursday = $_POST['thursday'];
	$friday = $_POST['friday'];
	$saturday = $_POST['saturday'];
	$sunday = $_POST['sunday'];
	
     /*
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
	@mail($email_to, $email_subject, $email_message, $headers);
	@mail($email, $email_subject, $email_message2, $headers);
	header( 'Location: applicationSubmitted.shtml' ) ;
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
 				<h1>".$applicantName."</h1>
 				<table border=\"1\">
 					<tr>
 						<td>G Number </td>
 						<td>".$gNum."</td>
 					</tr>
 				</table>
 			</body>
 		</html>"
 		);
}
?>