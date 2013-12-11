<?php
	require("login.php");
	include_once("file_utilities.php");
?>	
<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>EP Staff</title>
	<!-- IE <= 8 Support -->
    <!--[if lt IE 9]>
	  <script src="../scripts/html5shiv.js"></script>
	  <link rel="stylesheet" type="text/css" href="../styles/ie.css" />
	<![endif]-->
  </head>
  <style>
    .navBar {
	    border-color: rgba(227,189,0,8);
    } 
  </style>
  <body class="staffStyles">
	<?php include "../includes/navbar.php"; ?>
	<!-- Cover Section -->
	<!-- End Cover Section -->
	<div class="container">
	  <div class="spacer"></div>
	  <div class="row-fluid">
		<div class="span10 offset1 box">
	 		<a href="logout.php">
				<div class="greyButton" id="logout-btn">
					Logout
				</div>
	 		</a>
			<div class="row-fluid">
				<div class="span12">
					<h2 class="pageTitle">EP Staff</h2>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row-fluid">
			 	<div class="span6">
			 		<a class="staffButton" id="techContact-btn" href="staffContacts.php">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Employee Contacts</h3>
			 		</a>
			 	</div>
			 	<div class="span6">
			 		<a class="staffButton" id="eventSchedule-btn" href="<?php print find_file_href("files/schedule") ?>">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Event Schedule</h3>
			 		</a>
			 	</div>
			</div>
			<div class="row-fluid">
			 	<div class="span6">
			 		<a class="staffButton" id="eventSchedule-btn" href="<?php print find_file_href("files/manual") ?>">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Training Manual</h3>
			 		</a>
			 	</div>
			 	<div class="span6">
			 		<a class="staffButton" id="techContact-btn" href="pullSheets.php">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Pull Sheets</h3>
			 		</a>
			 	</div>
			</div>
			<div class="row-fluid">
			 	<div class="span6">
			 		<a class="staffButton" id="techContact-btn" href="<?php print find_file_href("files/techInfo") ?>">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Technical References</h3>
			 		</a>
			 	</div>
			 	<div class="span6">
			 		<a class="staffButton" id="eventSchedule-btn" href="miscFiles.php">
    			 		<h3 class="greyButton greyButtonText staffButtonText">Miscellaneous Files</h3>
			 		</a>
			 	</div>
			</div>
			<div class="spacer"></div>
			<?php 
				if ($_SESSION['admin']){
					include "admin.php"; 
				}
			?>
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