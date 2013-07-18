<?php
	require("login.php");
?>	
<!DOCTYPE html>
<!--#include virtual ="../includes/header.php" --> 
<html lang="en">
  <head>
	<?php include "../includes/meta.php"; ?>
	<title>Staff Contacts</title>
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
				<div class="span12">
					<h2 class="pageTitle">Staff Contacts</h2>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row-fluid">
				<div class="span10 offset1">
					<div class="sectionTitle">EP Staff Contacts</div>
					<table id="staffContacts">
						<tr>
							<td>Ken Locke</td>
							<td>klocke</td>
							<td>Office - 703 993 3554<br>Cell - 703 993 3554</td>
						</tr>
						<tr>
							<td>Sean Cox</td>
							<td>scox8</td>
							<td>Office - 703 993 3554<br>Cell - 703 993 3554</td>
						</tr>
						<tr>
							<td>Office Phone</td>
							<td>ep</td>
							<td>703 993 3773</td>
						</tr>
						<tr>
							<td>Bat Phone</td>
							<td></td>
							<td>703 993 2881</td>
						</tr>
					</table>
					<div class="sectionTitle">EP Technician Contacts</div>
					<table id="staffContacts">
						<tr>
							<td>Renfred Harper</td>
							<td>rharper2</td>
							<td>703 362 3554</td>
						</tr>
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