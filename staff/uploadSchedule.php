<?php
	// On upload, remove the old directory with the schedule file in it and create a new one. 
	// Apache will retain permissions over the folder so it will not matter what permissions
	// are set on the file it contains.
	rmdir("files/schedule");
	mkdir("files/schedule", $mode = 0775);
	// Assigning file attributes 
	$name  = $_FILES['upload']['name'];
	$type  = $_FILES['upload']['type'];
	$size  = $_FILES['upload']['size'];
	$tmp   = $_FILES['upload']['tmp_name'];
	$error = $_FILES['upload']['error'];
	$savepath = 'files/schedule';
	$filelocation = $savepath."/".$name;
	
	if ($error == 0) {
		// If the upload is successfull, all previous files will be cleared from the directory
		// to prevent collision. (Note: appropraite file permissions are necessary)
		$handle = opendir($savepath); 
		while (false !== ($fileName = readdir($handle))) {
			// Hidden files being with a "."; they are skipped
			if (substr($fileName, 0, 1) != "."){
				unlink("$savepath/$fileName"); // Delete
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
?>

<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>Upload Confirmation</title>
	<!-- Styles -->
	<link href="../styles/bootstrap.css" rel="stylesheet">
	<link href="../styles/styles.css" rel="stylesheet">
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
	  <div class="row">
		<div class="span10 offset1 box">
	 		<a href="logout.php">
				<div class="greyButton" id="logout-btn">
					Logout
				</div>
	 		</a>
			<div class="row-fluid">
				<div class="span5 offset2">
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