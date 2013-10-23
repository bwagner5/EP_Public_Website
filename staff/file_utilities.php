<?php   
    // Must be logged in to access this script. 
    require("login.php");
    
    // This script is used so PHP can dynamically print links
    // to uploaded files regardless of what they are named.
    function find_file_href($directory){
    	// Find the first non-hidden file in the schedule directory
    	// and print its path
    	$handle = opendir($directory); 
    	while (false !== ($fileName = readdir($handle))) {
    		// Hidden files being with a "."; they are skipped
    		if (substr($fileName, 0, 1) != "."){
    			$path = "$directory/$fileName";
    			break;
    		} 
        } 
    	closedir($handle);
    	return $path;
	}
	
	// Remove the file extension from a filename
	function removeExtension($filename) {
        $file = substr($filename, 0,strrpos($filename,'.'));   
        return $file;
    }
	
	// This function recursively removes files from a directory
	function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
            }
        }
        reset($objects);
        rmdir($dir);
        }
    }
	
	// This script is used to print all files in a directory in a 
	// predetermined HTML format
	function print_files($directory, $format){
        date_default_timezone_set('America/New_York');
        $files = scandir($directory);
        for ($i = 0; $i < count($files); $i++){
            $filename = $files[$i];
            if ($filename != '.' && $filename != '..'){
                $href = find_file_href("$directory/$filename");
                $lastModified = date("F d, Y H:i", filemtime("$href"));
                if ($format == "table"){
                    print "<tr>
                              <td><a href=\"$href\">$filename</a></td>
                              <td>$lastModified</td>
                          </tr>";
                }
                else if ($format == "options") {
                    print "<option>$filename</option>";
                }
            }
        }
    }

?>