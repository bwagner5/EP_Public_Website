<?php
if(isset($_POST['submit'])) {
  
     
    $email_to = "ep@gmu.edu";
    $email_subject = "EP Employment Application";
    $email_from = "Events Production GMU";
    
    $firstName = $_POST["firstName"];
    $middleInitial = $_POST["middleInitial"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $citizen = $_POST["citizen"];
    $felony = $_POST["felony"];
    $payRate = $_POST['payRate'];
	$currentAddress = $_POST['currentAddress'];
	$permanentAddress = $_POST['permanentAddress'];
	$summerAddress = $_POST['summerAddress'];
	$gNum = $_POST['gNum'];
	$major = $_POST['major'];
	$classification = $_POST['classification'];
	$creditHours = $_POST['creditHours'];
	$gpaBool = $_POST['gpaBool'];
	$gradDate = $_POST['gradDate'];
	$computerSkills = $_POST['computerSkills'];
	$experience = $_POST['experience'];
	$languages = $_POST['languages'];
	$orgs = $_POST['orgs'];
	$currentlyWorkBool = $_POST['currentlyWork'];
	$dept = $_POST['dept'];
	$haveWorked = $_POST['haveWorked'];
	$haveDept = $_POST['haveDept'];
	$emergencyName = $_POST['emergencyName'];
	$emergencyPhone = $_POST['emergencyPhone'];
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
	$workExp1 = $_POST['workExp1'];
	$position1 = $_POST['position1'];
	$duties1 = $_POST['duties1'];
	$workExp2 = $_POST['workExp2'];
	$position2 = $_POST['position2'];
	$duties2 = $_POST['duties2'];
	$workExp3 = $_POST['workExp3'];
	$position3 = $_POST['position3'];
	$duties3 = $_POST['duties3'];
	$wdm = $_POST['wdm'];
	$wda = $_POST['wda'];
	$wdn = $_POST['wdn'];
	$wem = $_POST['wem'];
	$wea = $_POST['wea'];
	$wen = $_POST['wen'];
	$prefHours = $_POST['prefHours'];
	$maxHours = $_POST['maxHours'];
	$minHours = $_POST['minHours'];
	
	$email_message .= $firstName."\n";
    $email_message .= $middleInitial."\n";  
    $email_message .=$lastName ."\n"; 
    $email_message .=$phone  ."\n";
    $email_message .=$dob  ."\n";
    $email_message .=$email  ."\n";
    $email_message .=$citizen  ."\n";
    $email_message .=$felony  ."\n";
    $email_message .=$payRate ."\n";
	$email_message .=$currentAddress."\n";  
	$email_message .=$permanentAddress ."\n";
	$email_message .=$summerAddress ."\n";
	$email_message .=$gNum  ."\n";
	$email_message .=$major  ."\n";
	$email_message .=$classification."\n";  
	$email_message .=$creditHours  ."\n";
	$email_message .=$gpaBool ."\n";
	$email_message .=$gradDate  ."\n";
	$email_message .=$computerSkills  ."\n";
	$email_message .=$experience ."\n";
	$email_message .=$languages  ."\n";
	$email_message .=$orgs  ."\n";
	$email_message .=$currentlyWorkBool."\n";  
	$email_message .=$dept  ."\n";
	$email_message .=$haveWorked  ."\n";
	$email_message .=$haveDept  ."\n";
	$email_message .=$emergencyName  ."\n";
	$email_message .=$emergencyPhone  ."\n";
	$email_message .=$refName1  ."\n";
	$email_message .=$company1  ."\n";
	$email_message .=$refRelation1  ."\n";
	$email_message .=$refPhone1  ."\n";
	$email_message .=$refName2  ."\n";
	$email_message .=$company2  ."\n";
	$email_message .=$refRelation2  ."\n";
	$email_message .=$refPhone2  ."\n";
	$email_message .=$refName3  ."\n";
	$email_message .=$company3 ."\n";
	$email_message .=$refRelation3."\n";
	$email_message .=$refPhone3 ."\n";
	$email_message .=$workExp1 ."\n";
	$email_message .=$position1."\n";
	$email_message .=$duties1 ."\n";
	$email_message .=$workExp2 ."\n";
	$email_message .=$position2 ."\n";
	$email_message .=$duties2 ."\n";
	$email_message .=$workExp3 ."\n";
	$email_message .=$position3 ."\n";
	$email_message .=$duties3 ."\n";
	$email_message .=$wdm ."\n";
	$email_message .=$wda ."\n";
	$email_message .=$wdn."\n";
	$email_message .=$wem."\n";
	$email_message .=$wea ."\n";
	$email_message .=$wen ."\n";
	$email_message .=$prefHours ."\n";
	$email_message .=$maxHours ."\n";
	$email_message .=$minHours ."\n";
     
     

	$email_message2 .= "<center>Thanks for submitting your application to Event Production!</center>";
     
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion() . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($email_to, $email_subject, $email_message, $headers);
@mail($email, $email_subject, $email_message2, $headers);

  
  header( 'Location: applicationSubmitted.shtml' ) ;
}
?>