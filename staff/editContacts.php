<?php
    // This script loads contacts from the contactData.json into an array for editing
	// and then saves them back into the json file so they can be viewed from the 
	// staffContacts.php page
	
    // Require login and admin privliedges
	require("login.php");
	if (!$_SESSION['admin']){
	    header("Location: index.php");
		die(); 
	}
	// JSON.php includes functions necessary for encoding and decoding json files.
	// Normally one would use the built-in php json_encode and json_decode functions
	// but they aren't available in the production server's make of PHP. Thus, JSON.php
	// is the Pear library's equivilent functions for handling json. 
	include_once("JSON.php");
	include_once("file_utilities.php");
	
	// Create a new object which contains the static json methods. 
	// Note SERVICES_JSON_LOOSE_TYPE option is required to retrun decoded
	// json as arrays instead of objects.
	$jsonLib = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
    
    if(isset($_POST['submit'])){
        $file = file_get_contents('files/contacts/contactData.json');
        $data = $jsonLib->decode(stripslashes($file), true);

        print_r($data);
        if ($_POST['submit'] == "Add"){
            $name = trim($_POST['contactName']);
            $email = trim($_POST['contactEmail']);
            $phone = trim($_POST['contactPhone']);
            
            // Insert new contact
            $info = array("phone" => $phone, "email" => $email);
            $data[$name] = $info;    
        }
        else if ($_POST['submit'] == "Delete") {
            $name = trim($_POST['contactName']);
            unset($data[$name]); 
        }
        // Delete the contact directory and re-add it to prevent permissions conflicts
        rrmdir("files/contacts");
        mkdir("files/contacts", $mode = 0775);
        // Save the file
        file_put_contents('files/contacts/contactData.json', $jsonLib->encode($data));
        unset($data); // Release memory
        header('Location: index.php');
    }
?>
