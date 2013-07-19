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
					<table class="staffContacts">
						<tr>
							<td>Ken Locke</td>
							<td>klocke</td>
							<td>Office - 703 993 2863<br>Cell - 540 850 2230</td>
						</tr>
						<tr>
							<td>Sean Cox</td>
							<td>scox8</td>
							<td>Office - 703 993 1018<br>Cell - 334 728 2169</td>
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
						<tr>
							<td>VT's</td>
							<td></td>
							<td>703 993 8919</td>
						</tr>
					</table>
					<div class="sectionTitle">EP Technician Contacts</div>
					<table class="staffContacts" id="techContacts">
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
	<script>
		$.ajaxSetup({
			async: false
		});
		var contactData;
		
		$.getJSON('contactData.json', function(data){
			contactData = data;
		});
		$(document).ready(function() {
			$.each(contactData, function(name, info){
				$('#techContacts').append("<tr><td>"+name+"</td><td>"+info['email']+"</td><td>"+info['phone']+"</td></tr>");
			});
		});
	</script>
  </body>
</html>