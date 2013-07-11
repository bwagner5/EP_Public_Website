<?php
if(isset($_POST['submit'])) {
   
	// Email settings
	$to =	 'ep@gmu.edu';
	$from = 'ep@gmu.edu';
	$subject =	 'Events Production Employment Application Submission: ';
	// MIME Settings 
	$bound_text =	"boundary";
	$bound =	"--".$bound_text."\r\n";
	$bound_last =	"--".$bound_text."--\r\n"; 
	$headers =	"From: $from\r\n";
	$headers .=	"MIME-Version: 1.0\r\n"
	 	."Content-Type: multipart/mixed; boundary=\"$bound_text\"";
    
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
	// References
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
	// Availabillity
	$monday = $_POST['monday'];
	$tuesday = $_POST['tuesday'];
	$wednesday = $_POST['wednesday'];
	$thursday = $_POST['thursday'];
	$friday = $_POST['friday'];
	$saturday = $_POST['saturday'];
	$sunday = $_POST['sunday'];
	
    $subject .= $applicantName;
    
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
 						background-color: #fafafa;
					}
 					.tdTitle {
 						 background-color: #ececec;
 						 border-bottom: solid #fafafa 1px;
 					}
 				</style>
 			</head>
 			<body>
 				<h2>Events Production Employment Application Submission</h2>
 				<table>
 					<tr>
 						<td class='tdTitle' colspan='2'>Personal Info </td>
 					</tr>
 					<tr>
 						<td>Applicant Name </td>
 						<td>$applicantName</td>
 					</tr>
 					<tr>
 						<td>Preferred Name </td>
 						<td>$preferredName</td>
 					</tr>
 					<tr>
 						<td>Phone Number </td>
 						<td>$phone</td>
 					</tr>
 					<tr>
 						<td>Date of Birth </td>
 						<td>$dob </td>
 					</tr>
 					<tr>
 						<td>Emergency Contact Name </td>
 						<td>$emergencyName</td>
 					</tr>
 					<tr>
 						<td>Emergency Contact Phone Number </td>
 						<td>$emergencyPhone</td>
 					</tr>
 					<tr>
 						<td>U.S. Citizen </td>
 						<td>$citizenBool</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Addresses </td>
 					</tr>
 					<tr>
 						<td>Current Address </td>
 						<td>$currentAddress</td>
 					</tr>
 					<tr>
 						<td>Permanent Address </td>
 						<td>$permanentAddress</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>School Info </td>
 					</tr>
 					<tr>
 						<td>G Number </td>
 						<td>$gNum</td>
 					</tr>
 					<tr>
 						<td>Major </td>
 						<td>$major</td>
 					</tr>
 					<tr>
 						<td>End Time </td>
 						<td>$endTime</td>
 					</tr>
 					<tr>
 						<td>Classification </td>
 						<td>$classification</td>
 					</tr>
 					<tr>
 						<td>Credit Hours </td>
 						<td>$creditHours</td>
 					</tr>
 					<tr>
 						<td>GPA Above 2.0 </td>
 						<td>$gpaBool</td>
 					</tr>
 					<tr>
 						<td>Expected Graduation Date </td>
 						<td>$gradDate</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Skills </td>
 					</tr>
 					<tr>
 						<td>Technical Experience </td>
 						<td>$experience</td>
 					</tr>
 					<tr>
 						<td>Computer Skills </td>
 						<td>$computerSkills</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Experience </td>
 					</tr>
 					<tr>
 						<td>Worked for Mason Department </td>
 						<td>$masonWorkBool</td>
 					</tr>
 					<tr>
 						<td>Mason Department Worked For </td>
 						<td>$masonDept</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Previous Employer #1 </td>
 					</tr>
 					<tr>
 						<td>Employer  </td>
 						<td>$workExp1</td>
 					</tr>
 					<tr>
 						<td>Position </td>
 						<td>$position1</td>
 					</tr>
 					<tr>
 						<td>Duties </td>
 						<td>$duties1</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Previous Employer #2 </td>
 					</tr>
 					<tr>
 						<td>Employer  </td>
 						<td>$workExp2</td>
 					</tr>
 					<tr>
 						<td>Position </td>
 						<td>$position2</td>
 					</tr>
 					<tr>
 						<td>Duties </td>
 						<td>$duties2</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Previous Employer #3 </td>
 					</tr>
 					<tr>
 						<td>Employer </td>
 						<td>$workExp3</td>
 					</tr>
 					<tr>
 						<td>Position  </td>
 						<td>$position3</td>
 					</tr>
 					<tr>
 						<td>Duties </td>
 						<td>$duties3</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Reference #1 </td>
 					</tr>
 					<tr>
 						<td>Name </td>
 						<td>$refName1</td>
 					</tr>
 					<tr>
 						<td>Company </td>
 						<td>$company1</td>
 					</tr>
 					<tr>
 						<td>Relationship </td>
 						<td>$refRelation1</td>
 					</tr>
 					<tr>
 						<td>Phone Number </td>
 						<td>$refPhone1</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Reference #2  </td>
 					</tr>
 					<tr>
 						<td>Name </td>
 						<td>$refName2</td>
 					</tr>
 					<tr>
 						<td>Company </td>
 						<td>$company2</td>
 					</tr>
 					<tr>
 						<td>Relationship </td>
 						<td>$refRelation2</td>
 					</tr>
 					<tr>
 						<td>Phone Number </td>
 						<td>$refPhone2</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Reference #3 </td>
 					</tr>
 					<tr>
 						<td>Name </td>
 						<td>$refName3</td>
 					</tr>
 					<tr>
 						<td>Company </td>
 						<td>$company3</td>
 					</tr>
 					<tr>
 						<td>Relationship </td>
 						<td>$refRelation3</td>
 					</tr>
 					<tr>
 						<td>Phone Number </td>
 						<td>$refPhone3</td>
 					</tr>
 					<tr>
 						<td class='tdTitle' colspan='2'>Availabillity </td>
 					</tr>
 					<tr>
 						<td>Monday </td>
 						<td>$monday</td>
 					</tr>
 					<tr>
 						<td>Tuesday </td>
 						<td>$tuesday</td>
 					</tr>
 					<tr>
 						<td>Wednesday </td>
 						<td>$wednesday</td>
 					</tr>
 					<tr>
 						<td>Thursday </td>
 						<td>$thursday</td>
 					</tr>
 					<tr>
 						<td>Friday </td>
 						<td>$friday</td>
 					</tr>
 					<tr>
 						<td>Saturday </td>
 						<td>$saturday</td>
 					</tr>
 					<tr>
 						<td>Sunday </td>
 						<td>$sunday</td>
 					</tr>
 				</table>
 				<p>If you would like to make changes to your application, please contact Events Production at <a href=\"mailto:ep@gmu.edu\">ep@gmu.edu</a>.</p>
 			</body>
 		</html>";
 			 	
	$message =	"If you can see this then your client doesn't accept MIME types. Please use another email client to view this message.\r\n"
	 	.$bound;
	 	 
	$message .=	"Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
	 	."Content-Transfer-Encoding: 7bit\r\n\r\n"
	 	.$messageBody."\r\n";
	 	
	if (!empty($_FILES['resume']['name'])){
		$fileName  = $_FILES['resume']['name'];
		$fileType  = $_FILES['resume']['type'];
		$fileSize  = $_FILES['resume']['size'];
		$fileTmp   = $_FILES['resume']['tmp_name'];
		$fileError = $_FILES['resume']['error'];	 
		$file =	file_get_contents("$fileTmp");
		 	 
		$message .=	$bound."Content-Type: $fileType; name=\"$fileName\"\r\n"
		 	."Content-Transfer-Encoding: base64\r\n"
		 	."Content-disposition: attachment; file=\"$fileName\"\r\n"
		 	."\r\n"
		 	.chunk_split(base64_encode($file));
	}
	if (!empty($_FILES['cover']['name'])){
		$fileName  = $_FILES['cover']['name'];
		$fileType  = $_FILES['cover']['type'];
		$fileSize  = $_FILES['cover']['size'];
		$fileTmp   = $_FILES['cover']['tmp_name'];
		$fileError = $_FILES['cover']['error'];	 
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
		header( 'Location: applicationSubmitted.shtml' );
		die(); 
	} else { 
		print 'Email message failed. Please try resubmitting the form or contacting us directly.';
	}
}
?>