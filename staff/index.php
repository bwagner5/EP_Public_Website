<?php
	require("login.php");
?>	
<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>EP Staff</title>
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
	  <div class="row">
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
			 	<div class="span5 offset1">
			 		<a href="staffContacts.php">
						<div class="greyButton" id="techContact-btn">
							<h3 class="greyButtonText">Employee Contacts</h3>
						</div>
			 		</a>
			 	</div>
			 	<div class="span5">
			 		<a href="<?php include "get_schedule_href.php"; ?>">
						<div class="greyButton" id="eventSchedule-btn">
							<h3 class="greyButtonText">Event Schedule</h3>
						</div>
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