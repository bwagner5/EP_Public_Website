<?php
// Login Authenticator   
//sha1 encrypted user password
$password = '33ef0db188d1f0cbf8201ae6f1dade1b6466d33e';
//sha1 encrypted admin password
$adminPassword = 'd033e22ae348aeb5660fc2140aec35850c4da997';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

$message = "Login required to access this page";

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['admin'] = false;
	    header("Location: ../staff");
	    die();
    } 
    elseif (sha1($_POST['password']) == $adminPassword) {
	    $_SESSION['loggedIn'] = true;
	    $_SESSION['admin'] = true;
	    header("Location: ../staff");
	    die();
    }
    else {
    	$message = 'Incorrect password';
    }
} 

if (!$_SESSION['loggedIn']): ?>

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
	<style>
		body {
			background-color: #141414;
		}
		.footer p {
			color: white;
		}
		#login{

		}
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
  <body>
	<?php include "../includes/navbar.php"; ?>
	<!-- Cover Section -->
	<!-- End Cover Section -->
	<div class="container">
	  <div class="spacer"></div>
	  <div class="row">
		<div class="span10 offset1 box">
			<div class="row-fluid">
				<div class="span3 offset4">
			    	<p><?php print $message ?></p>
				    <form method="post">
				      Password: <input type="password" name="password" autofocus="true"> <br/>
				      <span style="text-align:right;">
				      	<input type="submit" name="submit" value="Login" id="login">
				      </span>
				    </form>
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

<?php
exit();
endif;
?>