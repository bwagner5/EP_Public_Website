<?php
	require("login.php");
    if (!$_SESSION['admin']){
        header("Location: index.php");
    	die(); 
    }
    include_once("file_utilities.php");
    
    // For each selected directory, recursively remove it's contents.
    // Used to delete individual pull sheets and misc files.
    // Note: $_POST values are casted to arrays because otherwise if one
    // is empty, array merge will not work as expected. 
    foreach (array_merge((array)$_POST['pullSheets'], (array)$_POST['miscFiles']) as $file)
    {
        if (is_dir("files/pullSheets/$file")){
            rrmdir("files/pullSheets/$file");
        } else if (is_dir("files/misc/$file")) {
           rrmdir("files/misc/$file"); 
        }
    }
    header("Location: index.php");
	die(); 
?>