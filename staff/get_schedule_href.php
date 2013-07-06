<?php 
	// Find the first non-hidden file in the schedule directory
	// and returns its path
	$directory = "schedule";
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