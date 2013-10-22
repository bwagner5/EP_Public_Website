<?php
    include "find_file_href.php";
    
     date_default_timezone_set('America/New_York');
     
    function print_files($directory){
        $files = scandir($directory);
        for ($i = 0; $i < count($files); $i++){
            $filename = $files[$i];
            if ($filename != '.' && $filename != '..'){
                $href = find_file_href("$directory/$filename");
                $lastModified = date("F d, Y H:i", filemtime("$href"));
                print "<tr>
                          <td><a href=\"$href\">$filename</a></td>
                          <td>$lastModified</td>
                      </tr>";
            }
        }
    }
?>