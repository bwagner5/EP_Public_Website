<?php
    // This script accepts a single or multiple files and uploads them to the proper
	// staff directory.
	//
    // Require login and admin privledges 
	require("login.php");
	if (!$_SESSION['admin']){
	    header("Location: index.php");
		die(); 
	}
	include_once("file_utilities.php");
	
	$fileDirs = array("Schedule" => "files/schedule", 
	                  "Technical Info" => "files/techInfo",
	                  "Manual" => "files/manual",
	                  "Pull Sheets" => "files/pullSheets",
	                  "Misc" => "files/misc");
    
    $fileType = $_POST['fileType'];
    // Schedule, Tech Info, and Manual are single-file uploads
	if ($fileType == "Schedule" || $fileType == "Technical Info" || $fileType == "Manual"){
	   // Determine the target upload directory depending on the user specified file type
	    $uploadDir = $fileDirs[$fileType];
    	// On upload, remove the old directory with the schedule file in it and create a new one. 
    	// Apache will retain permissions over the folder so it will not matter what permissions
    	// are set on the file it contains. Otherwise, PHP may have trouble modifiying uploaded files.
    	rrmdir($uploadDir);
    	mkdir($uploadDir, $mode = 0775);
    	// Assigning file attributes 
    	$name  = $_FILES['upload']['name'][0];
    	$type  = $_FILES['upload']['type'][0];
    	$size  = $_FILES['upload']['size'][0];
    	$tmp   = $_FILES['upload']['tmp_name'][0];
    	$error = $_FILES['upload']['error'][0];
    	
    	$filelocation = $uploadDir."/".$name;
    	
    	if ($error == 0) {
    		// If the upload is successfull, all previous files will be cleared from the directory
    		// to prevent collision. (Note: appropraite file permissions are necessary)
    		$handle = opendir($uploadDir); 
    		while (false !== ($fileName = readdir($handle))) {
    			// Hidden files being with a "."; they are skipped
    			if (substr($fileName, 0, 1) != "."){
    				unlink("$uploadDir/$fileName"); // Delete
    			} 
    	    } 
    		closedir($handle);
    		// Moving the new file into the cleared directory
    		move_uploaded_file($tmp, $filelocation);
    		$message = "File upload successful.";  
    	}
    	else {
    		$message = "File upload failed. Error code: $error";
    	}
	} else if ($fileType == "Pull Sheets" || $fileType == "Misc") {
	    // Pull Sheets and Miscellaneous support multiple file uploads.
	    // Each file will be stored in its own directory 
	    $mainDir = $fileDirs[$fileType];
	    mkdir($mainDir, $mode = 0775);
	    $message = "";
	    
    	for ($i = 0; $i < count($_FILES['upload']['name']); $i++) {
        	// Assigning file attributes 
        	$name  = $_FILES['upload']['name'][$i];
        	$type  = $_FILES['upload']['type'][$i];
        	$size  = $_FILES['upload']['size'][$i];
        	$tmp   = $_FILES['upload']['tmp_name'][$i];
        	$error = $_FILES['upload']['error'][$i];
        	
            $uploadDir = $mainDir."/".removeExtension($name);
        	rrmdir($uploadDir);
        	mkdir($uploadDir, $mode = 0775);
        	$filelocation = $uploadDir."/".$name;
        	
        	if ($error == 0) {
        		// If the upload is successfull, all previous files will be cleared from the directory
        		// to prevent collision. (Note: appropraite file permissions are necessary)
        		$handle = opendir($uploadDir);
        		closedir($handle);
        		// Moving the new file into the cleared directory
        		move_uploaded_file($tmp, $filelocation);
        		$message = "File upload successful.";  
        	}
            else {
    		  $message .= "File upload failed. Error code: $error \n";
    		}
    	}
	}
?>

<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>Upload Confirmation</title>
	<link href="../styles/color.css" rel="stylesheet">
	<!-- IE <= 8 Support -->
    <!--[if lt IE 9]>
	  <script src="../scripts/html5shiv.js"></script>
	  <link rel="stylesheet" type="text/css" href="../styles/ie.css" />
	<![endif]-->
  </head>
  <body class="staffStyles">
	<?php include "../includes/navbar.php"; ?>
	<!-- Cover Section -->
	<!-- End Cover Section -->
	<div class="container">
	  <div class="spacer"></div>
	  <div class="row-fluid">
		<div class="span8 offset2 box">
	 		<a href="logout.php">
				<div class="greyButton" id="logout-btn">
					Logout
				</div>
	 		</a>
			<div class="row-fluid">
				<div class="span4 offset2">
					<p><?php print $message ?></p>
					<a href="../staff">Back to staff homepage >></a>
				</div>
			</div>
	 	</div>
	  </div>
	  <?php include "../includes/footer.php"; ?>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script src="../scripts/bootstrap.js"></script>
  </body>
</html>