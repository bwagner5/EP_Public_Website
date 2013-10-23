<?php
	require("login.php");
	include "file_utilities.php";
?>
<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>Pull Sheets</title>
	<style>
		.navBar {
		    border-color: rgba(227,189,0,8);
		} 
	</style>
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
				<div class="span12">
					<h2 class="pageTitle">Pull Sheets</h2>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row-fluid">
				<div class="span10 offset1">
					<table class="staffTable fileTable">
    					<tr>
                          <td><b>Name</b></td>
                          <td><b>Upload Date</b></td>
                        </tr>
						<?php print_files("files/pullSheets", "table")?>
					</table>
				</div>
		  </div>
		  <div class="row-fluid">
				<div class="span5 offset1">
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