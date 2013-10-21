<?php   
    // This script is used so PHP can dynamically print links
    // to uploaded files regardless of what they are named.
    //
    // Must be logged in to access this script. 
    require("login.php");
	// Find the first non-hidden file in the schedule directory
	// and print its path
	$directory = "files/schedule";
	$handle = opendir($directory); 
	while (false !== ($fileName = readdir($handle))) {
		// Hidden files being with a "."; they are skipped
		if (substr($fileName, 0, 1) != "."){
			print "$directory/$fileName";
			break;
		} 
    } 
	closedir($handle);
?>